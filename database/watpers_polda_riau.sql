/*
SQLyog Ultimate v10.3 
MySQL - 5.7.33 : Database - watpers_polda_metro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `adl` */

CREATE TABLE `adl` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `pertanyaan1` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan2` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan3` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan4` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan5` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan6` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan7` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan8` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `adl` */

insert  into `adl`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (1,'tes',123456,'iya','iya','tidak','iya','tidak','iya','tidak','iya');

/*Table structure for table `amt` */

CREATE TABLE `amt` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `pertanyaan1` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan2` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan3` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan4` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan5` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan6` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan7` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan8` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `amt` */

insert  into `amt`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (1,'tes',123456,'iya','iya','tidak','iya','tidak','iya','tidak','iya');
insert  into `amt`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (2,'tes',123456,'iya','iya','tidak','iya','tidak','iya','tidak','iya');

/*Table structure for table `artikel` */

CREATE TABLE `artikel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_artikel` smallint(6) NOT NULL,
  `deskripsi_artikel` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `artikel` */

/*Table structure for table `beladiri` */

CREATE TABLE `beladiri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `teknik_dasar1` int(11) NOT NULL,
  `teknik_dasar2` int(11) NOT NULL,
  `teknik_dasar3` int(11) NOT NULL,
  `teknik_dasar4` int(11) NOT NULL,
  `teknik_dasar5` int(11) NOT NULL,
  `teknik_dasar6` int(11) NOT NULL,
  `teknik_tanpaalat1` int(11) NOT NULL,
  `teknik_tanpaalat2` int(11) NOT NULL,
  `teknik_tanpaalat3` int(11) NOT NULL,
  `teknik_tanpaalat4` int(11) NOT NULL,
  `teknik_tanpaalat5` int(11) NOT NULL,
  `teknik_tanpaalat6` int(11) NOT NULL,
  `teknik_tanpaalat7` int(11) NOT NULL,
  `teknik_tanpaalat8` int(11) NOT NULL,
  `teknik_tanpaalat9` int(11) NOT NULL,
  `teknik_tanpaalat10` int(11) NOT NULL,
  `teknik_alat1_alat1` int(11) NOT NULL,
  `teknik_alat_alat2` int(11) NOT NULL,
  `teknik_alat_alat3` int(11) NOT NULL,
  `teknik_alat_alat4` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `beladiri` */

/*Table structure for table `cuti_istimewa` */

CREATE TABLE `cuti_istimewa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `permohonan_tertulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smk_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_perintahatugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesyaratan_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cuti_istimewa` */

/*Table structure for table `cuti_sakit` */

CREATE TABLE `cuti_sakit` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `pemberitahuan_bersangkutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi_atasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_keterangansakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cuti_sakit` */

/*Table structure for table `cuti_tahunan` */

CREATE TABLE `cuti_tahunan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `permohonan_tertulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smk_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi_atasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cuti_tahunan` */

/*Table structure for table `cuti_tahunanluarnegri` */

CREATE TABLE `cuti_tahunanluarnegri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `permohonan_tertulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_riwayathidup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_pengangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonan2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cuti_tahunanluarnegri` */

insert  into `cuti_tahunanluarnegri`(`id`,`nama`,`nrp`,`permohonan_tertulis`,`daftar_riwayathidup`,`sk_pengangkatan`,`surat_permohonan1`,`surat_permohonan2`) values (1,'tes',6361393,'permohonan_tertulis_1694020078_6361393_51Oda6.pdf','daftar_riwayathidup_1694020078_6361393_LBNQbo.pdf','sk_pengangkatan_1694020078_6361393_VMiT4N.pdf','surat_permohonan1_1694020078_6361393_QZsWjx.pdf','surat_permohonan2_1694020078_6361393_55BQuc.pdf');

/*Table structure for table `failed_jobs` */

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `gds` */

CREATE TABLE `gds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `pertanyaan1` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan2` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan3` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan4` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan5` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan6` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan7` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan8` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `gds` */

insert  into `gds`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (1,'tes',123456,'iya','iya','tidak','iya','tidak','iya','tidak','iya');

/*Table structure for table `izin_cerai` */

CREATE TABLE `izin_cerai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `akta_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_permohonancerai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `izin_cerai` */

/*Table structure for table `izin_nikah` */

CREATE TABLE `izin_nikah` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kta_ktp_calon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktp_kk_orangtua` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skep_pangkatterakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_kelahiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_keluargacalon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_n1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_n2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_n3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_n4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_cerai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_pengantar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `izin_nikah` */

/*Table structure for table `izin_rujuk` */

CREATE TABLE `izin_rujuk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `surat_permohonanrujuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_iddah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akta_cerai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_persetujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `izin_rujuk` */

/*Table structure for table `jasmaniberkala` */

CREATE TABLE `jasmaniberkala` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `putaran_lari` int(11) NOT NULL,
  `jarak_lari` int(11) NOT NULL,
  `gerakan_pull_up` int(11) NOT NULL,
  `gerakan_push_up` int(11) NOT NULL,
  `gerakan_sit_up` int(11) NOT NULL,
  `putaran_shuttle_run` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jasmaniberkala` */

/*Table structure for table `kebugaran` */

CREATE TABLE `kebugaran` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `tinggi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tekanan_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gula_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kolestrol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kebugaran` */

insert  into `kebugaran`(`id`,`nama`,`nrp`,`tinggi`,`berat`,`tekanan_darah`,`gula_darah`,`kolestrol`,`created_at`) values (1,'ridho darmawan',6361393,'180','70','90/60 mmHg','100 mg','70','2023-08-31 21:32:27');

/*Table structure for table `kenaikan_gajiberkala` */

CREATE TABLE `kenaikan_gajiberkala` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `nilai_smk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penilaiaan_prestasikerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kep_pangkatpertama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kep_pangkatterakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kep_kenaikangaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_kenaikangaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kenaikan_gajiberkala` */

/*Table structure for table `komunitaskesehatan` */

CREATE TABLE `komunitaskesehatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_komunitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `komunitaskesehatan` */

insert  into `komunitaskesehatan`(`id`,`nama_komunitas`,`alamat`,`deskripsi`,`no_hp`,`email`,`instagram`,`created_at`,`updated_at`) values (1,'jantung sehat','jl. Diponegoro 5','tesfdffsjfhsakfhskhfsfd',89898989,'jantung@gmail.com','jantung21',NULL,NULL);

/*Table structure for table `konsultasikehatan` */

CREATE TABLE `konsultasikehatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `konsultasikehatan` */

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (2,'2014_10_12_100000_create_password_reset_tokens_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (3,'2019_08_19_000000_create_failed_jobs_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (4,'2019_12_14_000001_create_personal_access_tokens_table',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (5,'2023_08_05_155507_statusgugur',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (6,'2023_08_05_160107_izinnikah',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (7,'2023_08_05_160532_izincerai',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (8,'2023_08_05_194520_izinrujuk',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (9,'2023_08_05_194724_kenaikangajiberkala',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (10,'2023_08_05_194912_perjalanandinas',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (11,'2023_08_05_195028_tandakehormatan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (12,'2023_08_05_202454_penghargaanpolri',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (13,'2023_08_05_202940_cutitahunan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (14,'2023_08_05_203047_cutiistimewa',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (15,'2023_08_05_203215_cutisakit',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (16,'2023_08_05_204040_beladiri',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (17,'2023_08_06_103239_jasmaniberkala',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (18,'2023_08_06_113534_artikel',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (19,'2023_08_06_131603_programkesehatan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (20,'2023_08_06_131709_pengecekankesehatan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (21,'2023_08_06_131754_kebugaran',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (22,'2023_08_06_132007_teskebugaran',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (23,'2023_08_06_132230_pertanyaanpar-q',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (24,'2023_08_06_132642_skrininggds',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (25,'2023_08_06_132646_skriningadl',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (26,'2023_08_06_132653_skriningamt',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (27,'2023_08_13_163246_surat',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (28,'2023_08_17_214307_komunitaskesehatan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (29,'2023_08_17_214625_konsultasikesehatan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (30,'2023_08_17_214804_tandatangan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (31,'2023_08_23_125710_surat_spesimen',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (32,'2023_08_30_141205_program_kesejahteraan',1);
insert  into `migrations`(`id`,`migration`,`batch`) values (33,'2023_08_30_145354_cutitahunan_luarnegri]',1);

/*Table structure for table `par_q` */

CREATE TABLE `par_q` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `pertanyaan1` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan2` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan3` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan4` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan5` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan6` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan7` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan8` enum('iya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `par_q` */

insert  into `par_q`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (1,'tes',123456,'iya','iya','tidak','iya','tidak','iya','tidak','iya');
insert  into `par_q`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (2,'tes',123456,'iya','iya','tidak','iya','tidak','iya','tidak','iya');
insert  into `par_q`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (3,'tes',123456,'iya','iya','tidak','iya','tidak','iya','tidak','iya');
insert  into `par_q`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (4,'tes',123456,'tidak','tidak','tidak','tidak','tidak','tidak','tidak','tidak');
insert  into `par_q`(`id`,`nama`,`nrp`,`pertanyaan1`,`pertanyaan2`,`pertanyaan3`,`pertanyaan4`,`pertanyaan5`,`pertanyaan6`,`pertanyaan7`,`pertanyaan8`) values (5,'tes',1234561,'iya','iya','tidak','iya','tidak','iya','tidak','iya');

/*Table structure for table `password_reset_tokens` */

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `pengecekankesehatan` */

CREATE TABLE `pengecekankesehatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pengecekankesehatan` */

/*Table structure for table `penghargaan_polri` */

CREATE TABLE `penghargaan_polri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `surat_keputusanpengangkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_keputusanpenepatan_pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_riwayathidup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_perintah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_keterangan_kplb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan_kronologis1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_keterangankematian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan_kronologis2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `penghargaan_polri` */

/*Table structure for table `perjalanan_dinas` */

CREATE TABLE `perjalanan_dinas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `surat_perintahjalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_mutasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `perjalanan_dinas` */

/*Table structure for table `personal_access_tokens` */

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

insert  into `personal_access_tokens`(`id`,`tokenable_type`,`tokenable_id`,`name`,`token`,`abilities`,`last_used_at`,`expires_at`,`created_at`,`updated_at`) values (1,'App\\Models\\User',1,'authToken','0a5a71e3ff8694a5df2944633701572bb417d614dc8590d957e7f583abbd6334','[\"*\"]','2023-08-31 21:32:26',NULL,'2023-08-31 21:24:02','2023-08-31 21:32:26');
insert  into `personal_access_tokens`(`id`,`tokenable_type`,`tokenable_id`,`name`,`token`,`abilities`,`last_used_at`,`expires_at`,`created_at`,`updated_at`) values (2,'App\\Models\\User',1,'authToken','79e7980d3d9dfdcceb0dffa4507af317d6c90e87c106e90de475b62b7e978653','[\"*\"]','2023-09-07 08:37:29',NULL,'2023-09-06 22:56:16','2023-09-07 08:37:29');

/*Table structure for table `program_kesejahteraan` */

CREATE TABLE `program_kesejahteraan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `program_kesejahteraan` */

/*Table structure for table `programkesehatan` */

CREATE TABLE `programkesehatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `programkesehatan` */

/*Table structure for table `status_gugur` */

CREATE TABLE `status_gugur` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `laporan_kronologikejadian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suratkeputusan_pengangkatanpertama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suratkeputusan_penempatanpangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_tandaanggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_tandapeserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_keterangankematian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_nikah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_tandapenduduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_keterangan_ahliwaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `status_gugur` */

/*Table structure for table `surat` */

CREATE TABLE `surat` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tembusan` enum('paur','kasubbag_rohjashor','kasubbag_khirdin','kabag','karo_sdm') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `deskripsi_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanda_tangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `surat` */

/*Table structure for table `surat_spesimen` */

CREATE TABLE `surat_spesimen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `surat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gambar_spesimen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `surat_spesimen` */

/*Table structure for table `tanda_kehormatan` */

CREATE TABLE `tanda_kehormatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `tanda_kehormatan` enum('satyalancana_pengabdian8','satyalancana_pengabdian16','satyalancana_pengabdian24','satyalancana_pengabdian32','satyalancana_bhakti','satyalancana_ksatria','satyalancana_karyabhakti','satyalancana_operasipolisi','satyalancana_bhaktibuana','satyalancana_nusa') COLLATE utf8mb4_unicode_ci NOT NULL,
  `surat_perintahjalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_riwayathidup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kep_pangkatterakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kep_jabatanterakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kep_pengangkatanpertama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skhp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tanda_kehormatan` */

/*Table structure for table `tandatangan` */

CREATE TABLE `tandatangan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanda_tangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tandatangan` */

/*Table structure for table `teskebugaran` */

CREATE TABLE `teskebugaran` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `jarak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `teskebugaran` */

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` int(11) NOT NULL,
  `level` enum('admin','paur','kasubbag_rohjashor','kasubbag_khirdinlur','kabag','karo_sdm') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`nrp`,`level`,`email_verified_at`,`password`,`status_agama`,`status_keluarga`,`foto`,`remember_token`,`created_at`,`updated_at`) values (1,'ridho darmawan','ridho.rd849@gmail.com',6361393,'paur',NULL,'$2y$10$/p/My/tUzwqCVjO6zMKGC.neTA/MzxFH2yoroqJZPAOCP8OKFOozS','islam','anak kandung','tes',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
