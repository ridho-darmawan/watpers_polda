<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected function credentials(Request $request)
    {
        $loginField = filter_var($request->input($this->username()), FILTER_VALIDATE_EMAIL) ? 'email' : 'nrp';

        $request->merge([
            $loginField => $request->input($this->username())
        ]);

        return $request->only($loginField, 'password');
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'nrp' => 'required',
                'password'=>'required'
            ]);

            $credentials = request(['nrp','password']);

            if(!Auth::attempt($credentials)){
                return ResponseFormatter::error([
                    'message' => 'Unauthorized'
                ], 'Authentication Failed',500);

            }

            $user = User::where('nrp',$request->nrp)->first();

            if(!Hash::check($request->password, $user->password,[])){
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Authtenticated');

        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something Went Wrong',
                'error' => $error->getMessage(),
            ], 'Authentication Failed',500);

        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();
        return ResponseFormatter::success($token, 'Logout Succesfully');
    }

    public function profil($id)
    {
        $user = User::where('id',$id)->first();

        if($user){
            return ResponseFormatter::success($user, 'Data User Ditemukan');
        }else{
            return ResponseFormatter::error(null, 'Data User Tidak Ditemukan',404);
        }
    }

    public function updateProfil(Request $request)
    {
        try {
            $request->validate([
                'foto' => 'mimes:jpg,png,jpeg|max:2048',
            ]);

            $user = User::findOrFail($request->id);          

            $data = $request->all();             

            $foto = $request->file('foto');

            if ($foto) {
                
                if ($user->foto && Storage::disk('public')->exists('foto_profil/' . $user->foto)) {
                    Storage::disk('public')->delete('foto_profil/' . $user->foto);
                }

                $fileName = 'foto_profil_' . time() . '_' . $user->id . '_' . Str::random(6) . '.' . $foto->getClientOriginalExtension();
                $fullUrl = url('storage/foto_profil/' . $fileName);

                $resizedImage = Image::make($foto)->resize(500, 500)->encode();
                Storage::disk('public')->put('foto_profil/' . $fileName, $resizedImage);
             

                $data['foto'] = $fullUrl;

            }

            $data['password'] = Hash::make($request->password);
            
            $save = $user->update($data);

            if($save){
                return ResponseFormatter::success($save, 'Updated Successfully');
            }else{
                return ResponseFormatter::error(null, 'Something Went Wrong',500);
            }
        } catch (\Throwable $e) {
            return ResponseFormatter::error($e->getMessage(), 'Update Failed',500);
        }

        

    }

    // public function getFotoProfil($id)
    // {
    //     $user = User::find($id);

    //     if ($user && $user->foto) {
    //         $path = 'foto_profil/' . $user->foto; // Path ke file gambar
    //         $fileContents = Storage::disk('public')->get($path);

    //         return response($fileContents, 200)
    //             ->header('Content-Type', 'image/jpeg'); // Ganti sesuai tipe file gambar yang sesuai
    //     }

    //     // Jika foto profil tidak ditemukan, kembalikan gambar default atau respons lain yang sesuai.
    //     $defaultAvatarPath = 'foto_profil/default-avatar.png';
    //     $defaultAvatarContents = Storage::disk('public')->get($defaultAvatarPath);

    //     return response($defaultAvatarContents, 200)
    //         ->header('Content-Type', 'image/png'); // Sesuaikan dengan tipe file gambar default Anda.

    // }
}
