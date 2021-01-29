/*
 Navicat Premium Data Transfer

 Source Server         : Localhost Wamp
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : localhost:3306
 Source Schema         : gis

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 29/01/2021 23:46:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ref_desa
-- ----------------------------
DROP TABLE IF EXISTS `ref_desa`;
CREATE TABLE `ref_desa`  (
  `id_kecamatan` int(11) NOT NULL,
  `kd_desa` int(11) NOT NULL COMMENT 'kode desa / kelurahan',
  `id_desa` int(11) NOT NULL AUTO_INCREMENT,
  `status_desa` int(11) NOT NULL COMMENT '2 = Desa 1 = Kelurahan',
  `nama_desa` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_zona` int(11) NOT NULL,
  PRIMARY KEY (`id_desa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 141 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ref_desa
-- ----------------------------
INSERT INTO `ref_desa` VALUES (1, 1001, 1, 1, 'Praya', 1);
INSERT INTO `ref_desa` VALUES (1, 1002, 2, 1, 'Leneng', 1);
INSERT INTO `ref_desa` VALUES (1, 1003, 3, 1, 'Gerunung', 1);
INSERT INTO `ref_desa` VALUES (1, 1004, 4, 1, 'Semayan', 1);
INSERT INTO `ref_desa` VALUES (1, 1005, 5, 1, 'Perapen', 1);
INSERT INTO `ref_desa` VALUES (1, 1006, 6, 1, 'Tiwugalih', 1);
INSERT INTO `ref_desa` VALUES (1, 1007, 7, 1, 'Gonjak', 1);
INSERT INTO `ref_desa` VALUES (1, 1008, 8, 1, 'Panji Sari', 1);
INSERT INTO `ref_desa` VALUES (1, 1009, 9, 1, 'Renteng', 1);
INSERT INTO `ref_desa` VALUES (1, 2010, 10, 2, 'Mertak Tombok', 1);
INSERT INTO `ref_desa` VALUES (1, 2011, 11, 2, 'Aik Mual', 1);
INSERT INTO `ref_desa` VALUES (1, 2012, 12, 2, 'Montong Terep', 1);
INSERT INTO `ref_desa` VALUES (1, 2013, 13, 2, 'Jago', 1);
INSERT INTO `ref_desa` VALUES (1, 2014, 14, 2, 'Bunut Baok', 1);
INSERT INTO `ref_desa` VALUES (1, 2015, 15, 2, 'Mekar Damai', 1);
INSERT INTO `ref_desa` VALUES (2, 2001, 16, 2, 'Barejulat', 1);
INSERT INTO `ref_desa` VALUES (2, 2002, 17, 2, 'Ubung', 1);
INSERT INTO `ref_desa` VALUES (2, 2003, 18, 2, 'Jelantik', 1);
INSERT INTO `ref_desa` VALUES (2, 2004, 19, 2, 'Labulia', 1);
INSERT INTO `ref_desa` VALUES (2, 2005, 20, 2, 'Batu Tulis', 1);
INSERT INTO `ref_desa` VALUES (2, 2006, 21, 2, 'Perina', 1);
INSERT INTO `ref_desa` VALUES (2, 2007, 22, 2, 'Pengenjek', 1);
INSERT INTO `ref_desa` VALUES (2, 2008, 23, 2, 'Puyung', 1);
INSERT INTO `ref_desa` VALUES (2, 2009, 24, 2, 'Nyerot', 1);
INSERT INTO `ref_desa` VALUES (2, 2010, 25, 2, 'Sukarara', 1);
INSERT INTO `ref_desa` VALUES (2, 2011, 26, 2, 'Gemel', 1);
INSERT INTO `ref_desa` VALUES (2, 2012, 27, 2, 'Bonjeruk', 1);
INSERT INTO `ref_desa` VALUES (2, 2013, 28, 2, 'Bunkate', 1);
INSERT INTO `ref_desa` VALUES (3, 2001, 29, 2, 'Bujak', 1);
INSERT INTO `ref_desa` VALUES (3, 2002, 30, 2, 'Selebung', 1);
INSERT INTO `ref_desa` VALUES (3, 2003, 31, 2, 'Peresak', 1);
INSERT INTO `ref_desa` VALUES (3, 2004, 32, 2, 'Mantang', 1);
INSERT INTO `ref_desa` VALUES (3, 2005, 33, 2, 'Aik Darek', 1);
INSERT INTO `ref_desa` VALUES (3, 2006, 34, 2, 'Tampak Siring', 1);
INSERT INTO `ref_desa` VALUES (3, 2007, 35, 2, 'Barabali', 1);
INSERT INTO `ref_desa` VALUES (3, 2008, 36, 2, 'Beber', 1);
INSERT INTO `ref_desa` VALUES (3, 2009, 37, 2, 'Pagutan', 1);
INSERT INTO `ref_desa` VALUES (3, 2010, 38, 2, 'Mekar Bersatu', 1);
INSERT INTO `ref_desa` VALUES (4, 2001, 39, 2, 'Sengkol', 1);
INSERT INTO `ref_desa` VALUES (4, 2002, 40, 2, 'Segala Anyar', 1);
INSERT INTO `ref_desa` VALUES (4, 2003, 41, 2, 'Sukadana', 1);
INSERT INTO `ref_desa` VALUES (4, 2004, 42, 2, 'Teruwai', 1);
INSERT INTO `ref_desa` VALUES (4, 2005, 43, 2, 'Pengengat', 1);
INSERT INTO `ref_desa` VALUES (4, 2006, 44, 2, 'Kawo', 1);
INSERT INTO `ref_desa` VALUES (4, 2007, 45, 2, 'Gapura', 1);
INSERT INTO `ref_desa` VALUES (4, 2008, 46, 2, 'Rembitan', 1);
INSERT INTO `ref_desa` VALUES (4, 2009, 47, 2, 'Kuta', 1);
INSERT INTO `ref_desa` VALUES (4, 2010, 48, 2, 'Pengembur', 1);
INSERT INTO `ref_desa` VALUES (4, 2011, 49, 2, 'Tumpak', 1);
INSERT INTO `ref_desa` VALUES (4, 2012, 50, 2, 'Mertak', 1);
INSERT INTO `ref_desa` VALUES (4, 2013, 51, 2, 'Prabu', 1);
INSERT INTO `ref_desa` VALUES (4, 2014, 52, 2, 'Tanak Awu', 1);
INSERT INTO `ref_desa` VALUES (4, 2015, 53, 2, 'Ketara', 1);
INSERT INTO `ref_desa` VALUES (4, 2016, 54, 2, 'Bangket Parak', 1);
INSERT INTO `ref_desa` VALUES (5, 2001, 55, 2, 'Bonder', 1);
INSERT INTO `ref_desa` VALUES (5, 2002, 56, 2, 'Banyu Urip', 1);
INSERT INTO `ref_desa` VALUES (5, 2003, 57, 2, 'Mangkung', 1);
INSERT INTO `ref_desa` VALUES (5, 2004, 58, 2, 'Kateng', 1);
INSERT INTO `ref_desa` VALUES (5, 2005, 59, 2, 'Setanggor', 1);
INSERT INTO `ref_desa` VALUES (5, 2006, 60, 2, 'Penujak', 1);
INSERT INTO `ref_desa` VALUES (5, 2007, 61, 2, 'Selong Blanak', 1);
INSERT INTO `ref_desa` VALUES (5, 2008, 62, 2, 'Mekar Sari', 1);
INSERT INTO `ref_desa` VALUES (5, 2009, 63, 2, 'Batujai', 1);
INSERT INTO `ref_desa` VALUES (5, 2010, 64, 2, 'Tanak Rarang', 1);
INSERT INTO `ref_desa` VALUES (6, 2001, 65, 2, 'Sukaraja', 1);
INSERT INTO `ref_desa` VALUES (6, 2002, 66, 2, 'Beleka', 1);
INSERT INTO `ref_desa` VALUES (6, 2003, 67, 2, 'Semoyang', 1);
INSERT INTO `ref_desa` VALUES (6, 2004, 68, 2, 'Mujur', 1);
INSERT INTO `ref_desa` VALUES (6, 2005, 69, 2, 'Landah', 1);
INSERT INTO `ref_desa` VALUES (6, 2006, 70, 2, 'Sengkerang', 1);
INSERT INTO `ref_desa` VALUES (6, 2007, 71, 2, 'Bilelando', 1);
INSERT INTO `ref_desa` VALUES (6, 2008, 72, 2, 'Ganti', 1);
INSERT INTO `ref_desa` VALUES (6, 2009, 73, 2, 'Marong', 1);
INSERT INTO `ref_desa` VALUES (6, 2010, 74, 2, 'Kidang', 1);
INSERT INTO `ref_desa` VALUES (7, 2001, 75, 2, 'Lekor', 1);
INSERT INTO `ref_desa` VALUES (7, 2002, 76, 2, 'Langko', 1);
INSERT INTO `ref_desa` VALUES (7, 2003, 77, 2, 'Janapria', 1);
INSERT INTO `ref_desa` VALUES (7, 2004, 78, 2, 'Loang Maka', 1);
INSERT INTO `ref_desa` VALUES (7, 2005, 79, 2, 'Saba', 1);
INSERT INTO `ref_desa` VALUES (7, 2006, 80, 2, 'Bakan', 1);
INSERT INTO `ref_desa` VALUES (7, 2007, 81, 2, 'Durian', 1);
INSERT INTO `ref_desa` VALUES (7, 2008, 82, 2, 'Pendem', 1);
INSERT INTO `ref_desa` VALUES (7, 2009, 83, 2, 'Selebung Rembiga', 1);
INSERT INTO `ref_desa` VALUES (7, 2010, 84, 2, 'Kerembong', 1);
INSERT INTO `ref_desa` VALUES (7, 2011, 85, 2, 'Jango', 1);
INSERT INTO `ref_desa` VALUES (7, 2012, 86, 2, 'Setuta', 1);
INSERT INTO `ref_desa` VALUES (8, 2001, 87, 2, 'Pringarata', 1);
INSERT INTO `ref_desa` VALUES (8, 2002, 88, 2, 'Sepakek', 1);
INSERT INTO `ref_desa` VALUES (8, 2003, 89, 2, 'Murbaya', 1);
INSERT INTO `ref_desa` VALUES (8, 2004, 90, 2, 'Bagu', 1);
INSERT INTO `ref_desa` VALUES (8, 2005, 91, 2, 'Sintung', 1);
INSERT INTO `ref_desa` VALUES (8, 2006, 92, 2, 'Bilebante', 1);
INSERT INTO `ref_desa` VALUES (8, 2007, 93, 2, 'Pemepek', 1);
INSERT INTO `ref_desa` VALUES (8, 2008, 94, 2, 'Menemeng', 1);
INSERT INTO `ref_desa` VALUES (8, 2009, 95, 2, 'Arjangka', 1);
INSERT INTO `ref_desa` VALUES (8, 2010, 96, 2, 'Taman Indah', 1);
INSERT INTO `ref_desa` VALUES (8, 2011, 97, 2, 'Sisik', 1);
INSERT INTO `ref_desa` VALUES (9, 2001, 98, 2, 'Lendang Are', 1);
INSERT INTO `ref_desa` VALUES (9, 2002, 99, 2, 'Monggas', 1);
INSERT INTO `ref_desa` VALUES (9, 2003, 100, 2, 'Muncan', 1);
INSERT INTO `ref_desa` VALUES (9, 2004, 101, 2, 'Bebuak', 1);
INSERT INTO `ref_desa` VALUES (9, 2005, 102, 2, 'Kopang Rembiga', 1);
INSERT INTO `ref_desa` VALUES (9, 2006, 103, 2, 'Dasan Baru', 1);
INSERT INTO `ref_desa` VALUES (9, 2007, 104, 2, 'Montong Gamang', 1);
INSERT INTO `ref_desa` VALUES (9, 2008, 105, 2, 'Darmaji', 1);
INSERT INTO `ref_desa` VALUES (9, 2009, 106, 2, 'Wajageseng', 1);
INSERT INTO `ref_desa` VALUES (9, 2010, 107, 2, 'Aik Bual', 1);
INSERT INTO `ref_desa` VALUES (9, 2011, 108, 2, 'Semparu', 1);
INSERT INTO `ref_desa` VALUES (10, 1001, 109, 1, 'Gerantung', 1);
INSERT INTO `ref_desa` VALUES (10, 1002, 110, 1, 'Jontlak', 1);
INSERT INTO `ref_desa` VALUES (10, 1003, 111, 1, 'Sasake', 1);
INSERT INTO `ref_desa` VALUES (10, 2004, 112, 2, 'Jurang Jaler', 1);
INSERT INTO `ref_desa` VALUES (10, 2005, 113, 2, 'Beraim', 1);
INSERT INTO `ref_desa` VALUES (10, 2006, 114, 2, 'Batunyala', 1);
INSERT INTO `ref_desa` VALUES (10, 2007, 115, 2, 'Lajut', 1);
INSERT INTO `ref_desa` VALUES (10, 2008, 116, 2, 'Pengadang', 1);
INSERT INTO `ref_desa` VALUES (10, 2009, 117, 2, 'Kelebuh', 1);
INSERT INTO `ref_desa` VALUES (10, 2010, 118, 2, 'Pejanggik', 1);
INSERT INTO `ref_desa` VALUES (10, 2011, 119, 2, 'Dakung', 1);
INSERT INTO `ref_desa` VALUES (10, 2012, 120, 2, 'Prai Meke', 1);
INSERT INTO `ref_desa` VALUES (11, 2001, 121, 2, 'Montong Sapah', 1);
INSERT INTO `ref_desa` VALUES (11, 2002, 122, 2, 'Ungga', 1);
INSERT INTO `ref_desa` VALUES (11, 2003, 123, 2, 'Kabul', 1);
INSERT INTO `ref_desa` VALUES (11, 2004, 124, 2, 'Pelambik', 1);
INSERT INTO `ref_desa` VALUES (11, 2005, 125, 2, 'Darek', 1);
INSERT INTO `ref_desa` VALUES (11, 2006, 126, 2, 'Ranggagata', 1);
INSERT INTO `ref_desa` VALUES (11, 2007, 127, 2, 'Pandan Indah', 1);
INSERT INTO `ref_desa` VALUES (11, 2008, 128, 2, 'Serage', 1);
INSERT INTO `ref_desa` VALUES (11, 2009, 129, 2, 'Montong Ajan', 1);
INSERT INTO `ref_desa` VALUES (11, 2010, 130, 2, 'Batu Jangkih', 1);
INSERT INTO `ref_desa` VALUES (11, 2011, 131, 2, 'Teduh', 1);
INSERT INTO `ref_desa` VALUES (12, 2001, 132, 2, 'Lantan', 1);
INSERT INTO `ref_desa` VALUES (12, 2002, 133, 2, 'Setiling', 1);
INSERT INTO `ref_desa` VALUES (12, 2003, 134, 2, 'Tanak Beak', 1);
INSERT INTO `ref_desa` VALUES (12, 2004, 135, 2, 'Aik Bukaq', 1);
INSERT INTO `ref_desa` VALUES (12, 2005, 136, 2, 'Teratak', 1);
INSERT INTO `ref_desa` VALUES (12, 2006, 137, 2, 'Aik Berik', 1);
INSERT INTO `ref_desa` VALUES (12, 2007, 138, 2, 'Mas-mas', 1);
INSERT INTO `ref_desa` VALUES (12, 2008, 139, 2, 'Karang Sidemen', 1);
INSERT INTO `ref_desa` VALUES (4, 2009, 140, 2, 'Awang', 1);

-- ----------------------------
-- Table structure for ref_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `ref_kecamatan`;
CREATE TABLE `ref_kecamatan`  (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_kecamatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ref_kecamatan
-- ----------------------------
INSERT INTO `ref_kecamatan` VALUES (1, 'Praya');
INSERT INTO `ref_kecamatan` VALUES (2, 'Jonggat');
INSERT INTO `ref_kecamatan` VALUES (3, 'Batukliang');
INSERT INTO `ref_kecamatan` VALUES (4, 'Pujut');
INSERT INTO `ref_kecamatan` VALUES (5, 'Praya Barat');
INSERT INTO `ref_kecamatan` VALUES (6, 'Praya Timur');
INSERT INTO `ref_kecamatan` VALUES (7, 'Janapria');
INSERT INTO `ref_kecamatan` VALUES (8, 'Pringgarata');
INSERT INTO `ref_kecamatan` VALUES (9, 'Kopang');
INSERT INTO `ref_kecamatan` VALUES (10, 'Praya Tengah');
INSERT INTO `ref_kecamatan` VALUES (11, 'Praya Barat Daya');
INSERT INTO `ref_kecamatan` VALUES (12, 'Batukliang Utara');

-- ----------------------------
-- Table structure for ref_perusahaan
-- ----------------------------
DROP TABLE IF EXISTS `ref_perusahaan`;
CREATE TABLE `ref_perusahaan`  (
  `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_perusahaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hp_perusahaan` char(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `is_active` int(5) NULL DEFAULT 0,
  PRIMARY KEY (`id_perusahaan`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 41 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_perusahaan
-- ----------------------------
INSERT INTO `ref_perusahaan` VALUES (1, 'PT. Solusi Tunas Pratama (STP)', '', '', 'administrator', NULL, '2021-01-24 20:48:08', 1);
INSERT INTO `ref_perusahaan` VALUES (2, 'PT Komet Infra Nusantara (KIN)', NULL, NULL, 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (3, 'PT. Indosat, Tbk', 'Jalan Medan Merdeka Barat Nomor 21 Jakarta PusatJalan Medan Merdeka Barat Nomor 21 Jakarta Pusat', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (4, 'PT. Solusindo Kreasi Pratama\r\n', NULL, NULL, 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (5, 'PT. Tower Bersama Group', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (6, 'XL-AXIATA', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (7, 'PT. Persada Soka Tama', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (8, 'PT. Ida Lombok', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (9, 'PT. Deltacomsel Indonesia', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (10, 'PT. Mitra Langgeng Perkasa', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (11, 'PT. Indo Karya ADV.', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (12, 'PT. HCPT', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (13, 'PT. Protelindo', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (14, 'PT. Centratama Menara Indonesia', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (15, 'PT. Dayamitra Telekomunikasi', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (16, 'PT. Inti Bangun Sejahtera, Tbk', '', '', 'administrator', NULL, '2021-01-24 20:48:17', 1);
INSERT INTO `ref_perusahaan` VALUES (40, 'Pt maju mundur', 'Pt maju mundur', 'Pt maju mund', 'lukman821@gmail.com', '2021-01-28 10:01:04', '2021-01-28 22:01:04', 0);

-- ----------------------------
-- Table structure for tbl_area_blankspot
-- ----------------------------
DROP TABLE IF EXISTS `tbl_area_blankspot`;
CREATE TABLE `tbl_area_blankspot`  (
  `id_area_blankspot` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_kecamatan` int(2) NULL DEFAULT NULL,
  `id_desa` int(2) NULL DEFAULT NULL,
  `latitude` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `longitude` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun` int(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_area_blankspot`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_area_blankspot
-- ----------------------------
INSERT INTO `tbl_area_blankspot` VALUES (1, 'Aik bual', 9, 98, '-8.606300814976018', '116.31148149335937', 2011);

-- ----------------------------
-- Table structure for tbl_izin_menara
-- ----------------------------
DROP TABLE IF EXISTS `tbl_izin_menara`;
CREATE TABLE `tbl_izin_menara`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NULL DEFAULT NULL,
  `nama_pemohon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_lokasi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `latitude` double NULL DEFAULT NULL,
  `longitude` double NULL DEFAULT NULL,
  `no_izin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `izin_mulai_tgl` timestamp(0) NULL DEFAULT NULL,
  `izin_akhir_tgl` timestamp(0) NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `thn_permohonan` year NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `update_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 131 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_izin_menara
-- ----------------------------
INSERT INTO `tbl_izin_menara` VALUES (1, 7, 'PT. PERSADA SOKA TAMA', 'Jelantik Desa Jelantik Kec. Jonggat', NULL, NULL, '503/65/III/KP2T', '2010-03-01 00:00:00', '2013-03-01 00:00:00', NULL, 2010, '2010-03-01 00:00:00', '2010-03-01 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (2, 7, 'PT. PERSADA SOKA TAMA', 'Tanggak Kelurahan Gerunung Kec. Praya', NULL, NULL, '503/66/III/KP2T', '2010-03-01 00:00:00', '2013-03-01 00:00:00', NULL, 2010, '2010-03-01 00:00:00', '2010-03-01 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (3, 8, 'PT. IDA LOMBOK', 'Dsn Jowet Desa Selong Belanak Kec. Praya Barat', NULL, NULL, '503/381/III/KP2T', '2010-03-18 00:00:00', '2013-03-18 00:00:00', NULL, 2010, '2010-03-18 00:00:00', '2010-03-18 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (4, 6, 'PT. XL AXIATA Tbk.', 'Desa Kidang Kecamatan Praya Timur', NULL, NULL, '503/398/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (5, 6, 'PT. XL AXIATA Tbk.', 'Dsn Taman Bumi Gora Desa Kawo Kec. Pujut', NULL, NULL, '503/399/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (6, 6, 'PT. XL AXIATA Tbk.', 'Dusun Karang Daye Desa Penujak Kec. Pujut', NULL, NULL, '503/400/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (7, 6, 'PT. XL AXIATA Tbk.', 'Dsn Lengkok Dese Desa Sabe Kec. Janapria ', NULL, NULL, '503/401/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (8, 6, 'PT. XL AXIATA Tbk.', 'Dsn Tatak Desa tanak Awu Kec.Pujut', NULL, NULL, '503/402/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (9, 6, 'PT. XL AXIATA Tbk.', 'Pengadang Desa Pengadang Kec. Praya Tengah', NULL, NULL, '503/403/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (10, 6, 'PT. XL AXIATA Tbk.', 'Dsn Jurit Desa Bebuak Kec. Kopang', NULL, NULL, '503/404/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (11, 6, 'PT. XL AXIATA Tbk.', 'Dsn Selojan Desa karangsidemen Kec. BKU', NULL, NULL, '503/405/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (12, 6, 'PT. XL AXIATA Tbk.', 'Dsn Bagu Timur Desa bagu Kec. Pringgarata', NULL, NULL, '503/406/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (13, 6, 'PT. XL AXIATA Tbk.', 'Dsn Pediti Desa Teratak Kec. Batukliang Utara', NULL, NULL, '503/407/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (14, 6, 'PT. XL AXIATA Tbk.', 'Dsn Sintung Timur Desa sintung Kec. Pringgarata', NULL, NULL, '503/408/III/KP2T', '2010-03-25 00:00:00', '2013-03-25 00:00:00', NULL, 2010, '2010-03-25 00:00:00', '2010-03-25 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (15, 7, 'PT. PERSADA SOKKA TAMA', 'Jln. Gadjah Mada RT. 05 RW. 02 Kel. Leneng Kec. Praya', NULL, NULL, '503/450/IV/KP2T', '2010-04-15 00:00:00', '2013-04-15 00:00:00', NULL, 2010, '2010-04-15 00:00:00', '2010-04-15 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (16, 8, 'PT. IDA LOMBOK', 'Tanak Awu Bat Desa Tanak Awu Kecamatan Pujut', NULL, NULL, '503/462/IV/KP2T', '2010-04-22 00:00:00', '2013-04-22 00:00:00', NULL, 2010, '2010-04-22 00:00:00', '2010-04-22 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (17, 8, 'PT. IDA LOMBOK', ' Dusun Sebenge Harapan Baru Kel. Panjisari Kec. Praya', NULL, NULL, '503/463/IV/KP2T', '2010-04-22 00:00:00', '2013-04-22 00:00:00', NULL, 2010, '2010-04-22 00:00:00', '2010-04-22 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (18, 7, 'PT.PERSADA SOKKA TAMA', 'Tebelo Dusun Kute II Desa Kute Kecamatan Pujut ', NULL, NULL, '503/499/VI/KP2T', '2010-06-15 00:00:00', '2013-06-15 00:00:00', NULL, 2010, '2010-06-15 00:00:00', '2010-06-15 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (19, 7, 'PT. PERSADA SOKKA TAMA ', 'Dusun Mangkung Daye Desa Mangkung Kecamatan Praya Barat', NULL, NULL, '503/558/IXI/KP2T', '2010-09-16 00:00:00', '2013-09-16 00:00:00', NULL, 2010, '2010-09-16 00:00:00', '2010-09-16 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (20, 8, 'PT. IDA LOMBOK', 'Lingk. Renteng Kel. Renteng Kec. Praya', NULL, NULL, '503/570/X/KP2T', '2010-10-16 00:00:00', '2013-10-16 00:00:00', NULL, 2010, '2010-10-16 00:00:00', '2010-10-16 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (21, 6, 'ANDY FAKTA', 'Dusun Bunsambang desa Sukarara Kec. Jonggat', NULL, NULL, '503/15/II/KP2T', '2011-02-28 00:00:00', '2014-04-11 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (22, 6, 'ANDY FAKTA', 'Dusun Lintek Desa Beleka Kec. Praya Timur', NULL, NULL, '503/16/II/KP2T', '2011-02-28 00:00:00', '2014-04-11 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (23, 6, 'ANDY FAKTA', 'Dusn Monyel Desa Truwai Kec. Pujut', NULL, NULL, '503/17/II/KP2T', '2011-02-28 00:00:00', '2014-04-14 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (24, 6, 'ANDY FAKTA', 'Jl. Raya Kopang Desa Jurang Jaler Kec. Pray Tengah ', NULL, NULL, '503/18/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (25, 6, 'ANDY FAKTA', 'Desa Montong Gamang Kecamatan Kopang', NULL, NULL, '503/19/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (26, 6, 'ANDY FAKTA', 'Dusun Tandek desa Labulia Kec. Jonggat', NULL, NULL, '503/20/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (27, 6, 'ANDY FAKTA', 'Dusun Belong Daye Desa Sukarara Kec. Jonggat\\', NULL, NULL, '503/21/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (28, 6, 'ANDY FAKTA', 'Dusun Karang Baru Barat Kelurahan Sasake kec. Pray tengah', NULL, NULL, '503/22/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (29, 6, 'ANDY FAKTA', 'Dusun Jonggor Desa Dasan Baru Kec. Kopang', NULL, NULL, '503/23/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (30, 6, 'ANDY FAKTA', 'Desa Barabali Kec. Batukliang', NULL, NULL, '503/24/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (31, 6, 'ANDY FAKTA', 'Desa Sepakek Kec. Pringgarata', NULL, NULL, '503/25/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (32, 6, 'ANDY FAKTA', 'Dusun Kerembong Kec. Janapria ', NULL, NULL, '503/26/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (33, 6, 'ANDY FAKTA', 'Dusun Sengkol I RT/RW. 03/02/Desa Aik Darek Kec. Batukliang', NULL, NULL, '503/27/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (34, 6, 'ANDY FAKTA', 'Dusun Batu Beduk Desa Batujai Kec. Praya Barat ', NULL, NULL, '503/28/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (35, 6, 'ANDY FAKTA', 'Jl. Praya Mantang Kampung Tenganan Kelurahan Gonjak Kec. Praya ', NULL, NULL, '503/29/II/KP2T', '2011-02-28 00:00:00', '2014-04-17 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (36, 7, 'BUDIONO', 'Dusun Jontlak RT/RW. 05/01 Kel Jontlak Kec. Praya Tengah', NULL, NULL, '503/30/II/KP2T', '2011-02-28 00:00:00', '2014-02-28 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (37, 7, 'BUDIONO', 'Dusun Petak Dasan Ketujur Ds. Puyung Kec. Jonggat', NULL, NULL, '503/31/II/KP2T', '2011-02-28 00:00:00', '2014-02-28 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (38, 7, 'BUDIONO', 'Dusun Waker Desa Puyung Kec. Jonggat', NULL, NULL, '503/32/II/KP2T', '2011-02-28 00:00:00', '2014-02-28 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (39, 7, 'BUDIONO', 'Dusun semayan RT/RW. 03/01 Kel. Semayan Kec. Praya', NULL, NULL, '503/33/II/KP2T', '2011-02-28 00:00:00', '2014-02-28 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (40, 7, 'BUDIONO', 'Desa Rjangke Kec. Pringgarata', NULL, NULL, '503/34/II/KP2T', '2011-02-28 00:00:00', '2014-02-28 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (41, 7, 'BUDIONO', 'Dusun Lendak kondak Desa Bunut Baok Kec. Praya', NULL, NULL, '503/35/II/KP2T', '2011-02-28 00:00:00', '2014-02-28 00:00:00', NULL, 2011, '2011-02-28 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (42, 7, 'BUDIONO', 'Menara Telekomunikasi', NULL, NULL, '503.3.2/63/2011', '2011-06-06 00:00:00', '2014-06-06 00:00:00', NULL, 2011, '2011-06-06 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (43, 7, 'BUDIONO', 'Menara Telekomunikasi', NULL, NULL, '503.3.2/64/2011', '2011-06-06 00:00:00', '2014-06-07 00:00:00', NULL, 2011, '2011-06-06 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (44, 7, 'BUDIONO', 'Menara Telekomunikasi', NULL, NULL, '503.3.3/65/2011', '2011-06-06 00:00:00', '2014-06-08 00:00:00', NULL, 2011, '2011-06-06 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (45, 7, 'BUDIONO', 'Menara Telekomunikasi', NULL, NULL, '503.3.4/66/2011', '2011-06-06 00:00:00', '2014-06-09 00:00:00', NULL, 2011, '2011-06-06 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (46, 6, 'ISMUHA INDRA F.', 'Menara Telekomunikasi', NULL, NULL, '503.3.5/67/2011', '2011-06-06 00:00:00', '2014-06-10 00:00:00', NULL, 2011, '2011-06-06 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (47, 9, 'PT. DELTACOMSEL INDONESIA', 'Ds. MAs2 Kec. BKU', NULL, NULL, '503.3.5/121/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (48, 9, 'PT. DELTACOMSEL INDONESIA', 'Dusun Bun Owah', NULL, NULL, '503.3.5/122/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (49, 9, 'PT. DELTACOMSEL INDONESIA', 'Dusun Colok Ds, Bujak', NULL, NULL, '503.3.5/123/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (50, 9, 'PT. DELTACOMSEL INDONESIA', 'Dusun Mendo-Renteng', NULL, NULL, '503.3.5/124/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (51, 9, 'PT. DELTACOMSEL INDONESIA', 'Dasan Kulur, Bunkate', NULL, NULL, '503.3.5/125/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (52, 9, 'PT. DELTACOMSEL INDONESIA', 'Dusun Mong Ds. Kuta', NULL, NULL, '503.3.5/126/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (53, 9, 'PT. DELTACOMSEL INDONESIA', 'Mertak Gonde Ds, Pengadang', NULL, NULL, '503.3.5/127/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (54, 9, 'PT. DELTACOMSEL INDONESIA', 'Dusun Bual Ds. Aik Bual Kec.Kopang', NULL, NULL, '503.3.5/128/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (55, 9, 'PT. DELTACOMSEL INDONESIA', 'Dsn. Embung Karung Ds. Mt. Gamang', NULL, NULL, '503.3.5/129/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (56, 9, 'PT. DELTACOMSEL INDONESIA', 'Jl. Datuk Tuan Hasyim Ds. Bunut Baok', NULL, NULL, '503.3.5/130/2011', '2011-07-12 00:00:00', '2014-07-12 00:00:00', NULL, 2011, '2011-07-12 00:00:00', '2020-06-27 17:22:22');
INSERT INTO `tbl_izin_menara` VALUES (57, 6, 'Andy Fakta', 'Rerung Desa Pemepek Kec. Pringgarata', NULL, NULL, '503.3.3/22/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (58, 6, 'Andy Fakta', 'Lendang Doe Desa Beber Kec. Batukliang', NULL, NULL, '503.3.3/23/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (59, 6, 'Andy Fakta', 'Desa Pendem Kec. Janapria', NULL, NULL, '503.3.3/24/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (60, 6, 'Andy Fakta', 'Lendang Simbe Desa Mertak Tombok Kec. Praya', NULL, NULL, '503.3.3/25/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (61, 6, 'Andy Fakta', 'Pejanggik Pongkor Desa Pejanggik Kec. Praya Tengah', NULL, NULL, '503.3.3/26/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (62, 6, 'Andy Fakta', 'Gunung Toas Desa Rembitan Kec. Pujut', NULL, NULL, '503.3.3/27/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (63, 6, 'Andy Fakta', 'Lingkok Bunut Desa Lekor Kec. Janapria', NULL, NULL, '503.3.3/28/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (64, 6, 'Andy Fakta', 'Bakan Tengak Desa Bakan Kec. Janapria', NULL, NULL, '503.3.3/29/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (65, 6, 'Andy Fakta', 'Perumnas Tampar-Ampar Rt. 03 Rw. 00 Kel. Jontlak', NULL, NULL, '503.3.3/30/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (66, 6, 'Andy Fakta', 'Dusun Tapon Desa Bilebante Kec. Pringgarata', NULL, NULL, '503.3.3/31/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (67, 6, 'Andy Fakta', 'Ketejer Lingk. Ketejer Kel. Praya  Kec. Praya', NULL, NULL, '503.3.3/32/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (68, 6, 'Andy Fakta', 'Pengembuk Desa Kelebuh Kec. Praya Tengah', NULL, NULL, '503.3.3/33/2012', '2012-04-03 00:00:00', '2015-04-03 00:00:00', 'P', 2012, '2012-04-03 00:00:00', '2012-04-03 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (69, 5, 'Budianto Purwahjo', 'Sereneng Desa Mertak Kec. Pujut', NULL, NULL, '503.3.3/85/2012', '2012-12-07 00:00:00', '2015-12-07 00:00:00', 'B', 2012, '2012-12-07 00:00:00', '2012-12-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (70, 5, 'Budianto Purwahjo', 'Batik Bantar Dusun Ebangah Desa Sengkol Kec. Pujut', NULL, NULL, '503.3.3/86/2012', '2012-12-07 00:00:00', '2015-12-07 00:00:00', 'B', 2012, '2012-12-07 00:00:00', '2012-12-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (71, 7, 'Eko Asrianto', 'Labulia Desa Labulia Kec. Jonggat', NULL, NULL, '503.3.3/82/2012', '2012-11-12 00:00:00', '2015-11-12 00:00:00', 'B', 2012, '2012-11-12 00:00:00', '2012-11-12 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (72, 7, 'Januardi Sujarwo', 'Setanggor Timur 2 Desa Setanggor Kecamatan Praya Barat', NULL, NULL, '503.3.3/1/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (73, 7, 'Januardi Sujarwo', 'Darek Desa Darek Kecamatan Praya Barat Daya', NULL, NULL, '503.3.3/2/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (74, 7, 'Januardi Sujarwo', 'Batu Ngerenseng Desa Aik Bukak Kec. Batukliang', NULL, NULL, '503.3.3/3/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (75, 7, 'Januardi Sujarwo', 'Bunklotok Desa Batujai Kecamatan Praya Barat', NULL, NULL, '503.3.3/4/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (76, 7, 'Januardi Sujarwo', 'Kebon Tengak Desa Gemel Kecamatan Jonggat', NULL, NULL, '503.3.3/5/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (77, 7, 'Januardi Sujarwo', 'Lendang Bonter Desa Perina Kecamatan Jonggat', NULL, NULL, '503.3.3/6/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (78, 7, 'Januardi Sujarwo', 'Aik Ampat Desa Ranggagata Kecamatan Praya Barat Daya', NULL, NULL, '503.3.3/7/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (79, 7, 'Januardi Sujarwo', 'Jl. Kh. Agus Salim No. 2 Kel. Praya', NULL, NULL, '503.3.3/8/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (80, 7, 'Januardi Sujarwo', 'Amen Beris Rt. 05 Rw. 02 Kel. Leneng', NULL, NULL, '503.3.3/9/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (81, 7, 'Januardi Sujarwo', 'Semut Desa Kidang Kecamatan Praya Timur', NULL, NULL, '503.3.3/10/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (82, 7, 'Januardi Sujarwo', 'Bebie Daye Desa Aik Mual Kec. Praya', NULL, NULL, '503.3.3/11/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (83, 7, 'Januardi Sujarwo', 'Lekor Barat Desa Lekor Kec. Janapria', NULL, NULL, '503.3.3/12/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (84, 7, 'Januardi Sujarwo', 'Setiling Desa Setiling Kec. Batukliang', NULL, NULL, '503.3.3/13/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (85, 7, 'Aryanto', 'Awang Kebon Rt. 02  Desa Mertak Kec. Pujut', NULL, NULL, '503.3.3/18/2012', '2012-02-15 00:00:00', '2015-02-15 00:00:00', 'B', 2012, '2012-02-15 00:00:00', '2012-02-15 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (86, 7, 'Aryanto', 'Lingkungan Prapen Rt. 06 Kec. Praya', NULL, NULL, '503.3.3/19/2012', '2012-02-15 00:00:00', '2015-02-15 00:00:00', 'B', 2012, '2012-02-15 00:00:00', '2012-02-15 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (87, 7, 'Aryanto', 'Pepao Barat Desa  Lekor Kec. Janapria', NULL, NULL, '503.3.3/40/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (88, 7, 'Aryanto', 'Melar Desa Selebung Rembiga Kec ', NULL, NULL, '503.3.3/41/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (89, 7, 'Aryanto', 'Penaban Rt. 01 Desa Aik Mual Kec. Praya', NULL, NULL, '503.3.3/42/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (90, 7, 'Aryanto', 'Gulung Desa Lekor Kec. Janapria', NULL, NULL, '503.3.3/43/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (91, 7, 'Aryanto', 'Bebile Desa Ganti Kec. Pratim', NULL, NULL, '503.3.3/44/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (92, 7, 'Aryanto', 'Bagek Tenten Desa Batunyala Kec. Prateng', NULL, NULL, '503.3.3/45/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (93, 7, 'Aryanto', 'Berenyok Desa Mujur Kec. Praya Timur', NULL, NULL, '503.3.3/46/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (94, 7, 'Aryanto', 'Tonjong Desa Janapria Kec. Janapria', NULL, NULL, '503.3.3/47/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (95, 7, 'Aryanto', 'Jango Selatan Desa Jango Kec. Janapria', NULL, NULL, '503.3.3/48/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (96, 7, 'Aryanto', 'Aik Paek Desa Ganti Kec. Pratim', NULL, NULL, '503.3.3/49/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (97, 7, 'Aryanto', 'Selebung 2 Desa Selebung Kec.Janapria', NULL, NULL, '503.3.3/50/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (98, 7, 'Aryanto', 'Perempung Desa Landah Kec. Janapria', NULL, NULL, '503.3.3/51/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (99, 7, 'Aryanto', 'Karang Lebah Desa Loang Maka Kec. Janapria', NULL, NULL, '503.3.3/52/2012', '2012-04-23 00:00:00', '2015-04-23 00:00:00', 'B', 2012, '2012-04-23 00:00:00', '2012-04-23 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (100, 7, 'Eko Asrianto', 'Montong Waru Desa Setanggor Kec. Praya Barat', NULL, NULL, '503.3.3/53/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (101, 7, 'Eko Asrianto', 'Tenaru Desa Darek Kec. Praya Barat Daya', NULL, NULL, '503.3.3/54/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (102, 7, 'Eko Asrianto', 'Tenandon Desa Penujak Kec. Praya Barat ', NULL, NULL, '503.3.3/55/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (103, 7, 'Eko Asrianto', 'Open Desa Mangkung Kec. Praya Barat', NULL, NULL, '503.3.3/56/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (104, 7, 'Eko Asrianto', 'Sinah Desa Pengembur Kec. Pujut', NULL, NULL, '503.3.3/57/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (105, 7, 'Eko Asrianto', 'Batu Bolong Desa Ungga Kec. Praya Barat', NULL, NULL, '503.3.3/58/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (106, 7, 'Eko Asrianto', 'Peresak Baru Desa Menemeng Kec. Pringgarata', NULL, NULL, '503.3.3/59/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (107, 7, 'Eko Asrianto', 'Daye Rurung Desa Ketare Kec. Pujut', NULL, NULL, '503.3.3/60/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (108, 7, 'Eko Asrianto', 'Taman Baru Desa Pengenjek Kec. Jonggat', NULL, NULL, '503.3.3/61/2012', '2012-05-07 00:00:00', '2015-05-07 00:00:00', 'B', 2012, '2012-05-07 00:00:00', '2012-05-07 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (109, 7, 'Eko Asrianto', 'Kelebuh Desa Setanggor Kec. Prabar', NULL, NULL, '503.3.3/62/2012', '2012-06-04 00:00:00', '2015-06-04 00:00:00', 'PP', 2012, '2012-06-04 00:00:00', '2012-06-04 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (110, 7, 'Eko Asrianto', 'Majan Desa Batunyala Kec. Prateng', NULL, NULL, '503.3.3/63/2012', '2012-06-04 00:00:00', '2015-06-04 00:00:00', 'PP', 2012, '2012-06-04 00:00:00', '2012-06-04 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (111, 7, 'Eko Asrianto', 'Mongge Kec. Pujut', NULL, NULL, '503.3.3/64/2012', '2012-06-04 00:00:00', '2015-06-04 00:00:00', 'PP', 2012, '2012-06-04 00:00:00', '2012-06-04 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (112, 7, 'Eko Asrianto', 'Ganti I Desa Ganti Kec. Pratim', NULL, NULL, '503.3.3/65/2012', '2012-06-04 00:00:00', '2015-06-04 00:00:00', 'PP', 2012, '2012-06-04 00:00:00', '2012-06-04 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (113, 7, 'Eko Asrianto', 'Tonjer Desa Sukadana Kec. Pujut', NULL, NULL, '503.3.3/66/2012', '2012-06-04 00:00:00', '2015-06-04 00:00:00', 'PP', 2012, '2012-06-04 00:00:00', '2012-06-04 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (114, 7, 'Eko Asrianto', 'Jl. Raya Mantang-Kopang Desa Bujak Kec. Batukliang', NULL, NULL, '503.3.3/67/2012', '2012-06-04 00:00:00', '2015-06-04 00:00:00', 'PP', 2012, '2012-06-04 00:00:00', '2012-06-04 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (115, 7, 'Eko Asrianto', 'Stuta Barat Desa Janapria', NULL, NULL, '503.3.3/68/2012', '2012-06-04 00:00:00', '2015-06-04 00:00:00', 'PP', 2012, '2012-06-04 00:00:00', '2012-06-04 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (116, 7, 'Eko Asrianto', 'Bat Peken Desa Bonjeruk Kec. Jonggat', NULL, NULL, '503.3.3/71/2012', '2012-06-06 00:00:00', '2015-06-06 00:00:00', 'B', 2012, '2012-06-06 00:00:00', '2012-06-06 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (117, 7, 'Eko Asrianto', 'Jelantik Desa Jelantik Kec. Jonggat', NULL, NULL, '503.3.3/74/2012', '2012-07-16 00:00:00', '2015-07-16 00:00:00', 'B', 2012, '2012-07-16 00:00:00', '2012-07-16 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (118, 7, 'Eko Asrianto', 'Telaga Desa Sintung Kec. Pringgarata', NULL, NULL, '503.3.3/75/2012', '2012-07-16 00:00:00', '2015-07-16 00:00:00', 'B', 2012, '2012-07-16 00:00:00', '2012-07-16 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (119, 10, 'Ir. Fajar Widyatama', 'Aik Are Desa Ubung Kec. Jonggat', NULL, NULL, '503.3.3/14/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (120, 10, 'Ir. Fajar Widyatama', 'Sisik Timur Desa Sintung Kec. Pringgrata', NULL, NULL, '503.3.3/15/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (121, 10, 'Ir. Fajar Widyatama', 'Dasan Lekong Desa Selebung Kec. Batukliang', NULL, NULL, '503.3.3/16/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (122, 10, 'Ir. Fajar Widyatama', 'Bertais Desa Murbaya Kec. Pringgarata', NULL, NULL, '503.3.3/17/2012', '2012-01-30 00:00:00', '2015-01-30 00:00:00', 'PP.1', 2012, '2012-01-30 00:00:00', '2012-01-30 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (123, 11, 'Hendra Lumintang', 'Periklanan (Bando Jalan)', NULL, NULL, '503.3.3/38/2012', '2012-04-10 00:00:00', '2015-04-10 00:00:00', 'B', 2012, '2012-04-10 00:00:00', '2012-04-10 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (124, 11, 'Hendra Lumintang', 'Periklanan (Billboard)', NULL, NULL, '503.3.3/39/2012', '2012-04-10 00:00:00', '2015-04-10 00:00:00', 'B', 2012, '2012-04-10 00:00:00', '2012-04-10 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (125, 8, 'Baiq Fahriani', 'Rt. 05 Kel. Gonjak Kec. Praya', NULL, NULL, '503.3.3/35/2012', '2012-04-10 00:00:00', '2015-04-10 00:00:00', 'B', 2012, '2012-04-10 00:00:00', '2012-04-10 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (126, 8, 'Baiq Fahriani', 'Dusun Sepaung Desa Mt. Gamang Kec. Kopang', NULL, NULL, '503.3.3/36/2012', '2012-04-10 00:00:00', '2015-04-10 00:00:00', 'B', 2012, '2012-04-10 00:00:00', '2012-04-10 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (127, 8, 'Baiq Fahriani', 'Ujung Desa Kuta Kec. Pujut', NULL, NULL, '503.3.3/37/2012', '2012-04-10 00:00:00', '2015-04-10 00:00:00', 'B', 2012, '2012-04-10 00:00:00', '2012-04-10 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (128, 8, 'Baiq Fahriani', 'Pengadang Desa Pengadang Kec. Praya Tengah', NULL, NULL, '503.3.3/77/2012', '2012-07-27 00:00:00', '2015-07-27 00:00:00', 'B', 2012, '2012-07-27 00:00:00', '2012-07-27 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (129, 17, 'Pt. Axis Telecom Indonesia', 'Perok Barat Desa Janapria Kec. Janapria', NULL, NULL, '503.3.3/72/2012', '2012-06-14 00:00:00', '2015-06-14 00:00:00', 'B', 2012, '2012-06-14 00:00:00', '2012-06-14 00:00:00');
INSERT INTO `tbl_izin_menara` VALUES (130, 18, 'Ricky Gandhi S.', 'Pasar Sengkol Desa Sengkol Kec. Pujut', NULL, NULL, '503.3.3/34/2012', '2012-04-04 00:00:00', '2015-04-04 00:00:00', 'B', 2012, '2012-04-04 00:00:00', '2012-04-04 00:00:00');

-- ----------------------------
-- Table structure for tbl_menara_bakti
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menara_bakti`;
CREATE TABLE `tbl_menara_bakti`  (
  `id_menara_bakti` int(11) NOT NULL AUTO_INCREMENT,
  `nama_site_lokasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latitude` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `longitude` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_berdiri` int(4) NULL DEFAULT NULL,
  `kategori` int(1) NULL DEFAULT NULL,
  `id_kecamatan` int(2) NULL DEFAULT NULL,
  `id_desa` int(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_menara_bakti`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_menara_bakti
-- ----------------------------
INSERT INTO `tbl_menara_bakti` VALUES (1, 'SDN 2 Ganti', '', '-8.583217041565739', '116.32796098554687', 0, 1, 6, 72);
INSERT INTO `tbl_menara_bakti` VALUES (2, 'Desa Ganti', '', '-8.63209869783349', '116.36482984296875', 0, 2, 6, 72);
INSERT INTO `tbl_menara_bakti` VALUES (3, 'SDN 3 Mujur', '', '-8.637529598733908', '116.30165845625', 0, 1, 6, 72);

-- ----------------------------
-- Table structure for tbl_menara_seluler
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menara_seluler`;
CREATE TABLE `tbl_menara_seluler`  (
  `id_tower` int(11) NOT NULL AUTO_INCREMENT,
  `id_site` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_desa` int(11) NULL DEFAULT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `latitude` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `longitude` varchar(24) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_site` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_tower` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_kontrak` year NULL DEFAULT NULL,
  `tahun_pembangunan` year NULL DEFAULT NULL,
  `pemilik_lahan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tinggi_menara` int(11) NULL DEFAULT NULL,
  `luas_lahan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imb` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ijin_operasi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kapasitas_max` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kapasistas_terpakai` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelengkapan_lampu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelengkapan_pagar` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelengkapan_grounding` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelengkapan_pengangkal_petir` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kelengkapan_catu_daya` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kondisi_struktur_menara` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kondisi_pondasi_menara` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `informasi_blankspot` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_gambar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_by` int(11) NULL DEFAULT NULL,
  `updated_by` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_tower`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 260 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_menara_seluler
-- ----------------------------
INSERT INTO `tbl_menara_seluler` VALUES (36, 'KNT-WNT-0083-X-B', 9, 105, 13, '-8.671464', '116.3367', 'Mongas Kopang', 'Jalan Raya Kopang Praya Desa Darmaji Kec Kopang Kab Lombok Tengah Propinsi NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (33, 'KNT-WNT-0066-X-B', 1, 13, 13, '-8.652764', '116.265678', 'Barejulat Jonggat', 'Dusun Bunsalak RT 001 Desa Jago Kec. Praya Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (32, 'KNT-WNT-0098-X-P', 1, 11, 13, '-8.64997', '116.29748', 'Aikmual', 'Jl. Raya Montong Terep Kec. Praya Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (31, 'KNT-WNT-0096-X-P', 4, 52, 13, '-8.77665', '116.26855', 'Tanak Awu Lombok Tengah', 'Dusun Tatak, Desa Tanak Awu Kec.Pujut - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (30, 'KNT-WNT-0092-X-P', 1, 1, 13, '-8.69716', '116.28199', 'Ketejer', 'Kampung Ketejer, Kelurahan Praya, Kec.Praya, Kab.Lombok Tengah NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (29, 'KNT-WNT-0088-X-P', 4, 44, 13, '-8.77322', '116.30621', 'PUJUT LOMBOK TENGAH', 'Dusun Bumi Gora, Desa Kawo Kec.Pujut Lombok Tengah - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (28, 'KNT-WNT-0076-X-P', 6, 74, 13, '-8.80988', '116.36623', 'MARONG LOMBOK TENGAH', 'Dusun Kidang, Desa Kidang Kec.Praya Timur - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (27, 'KNT-WNT-0075-X-P', 7, 79, 13, '-8.72508', '116.4052', 'SUWANGKA LOMBOK TENGAH', 'Lingkok Buak Barat, RT.04 RW.00 Ds.Saba Kec.Janapria Lombok Tengah NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (25, 'KNT-WNT-0070-X-P', 8, 91, 13, '-8.60875', '116.22277', 'SINTUNG TIMUR LOMBOK BARAT', 'Jl. Raya Sintung Ds. Sintung, Kc. Pringgarata - Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (22, 'KNT-WNT-0045-X-P', 7, 75, 13, '-8.75283', '116.42979', 'LEKOR', 'Jl. Lingkok Bunut Desa Lekor Kec. Janapria- Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (21, 'KNT-WNT-0041-X-P', 9, 103, 13, '-8.65476', '116.34589', 'DASAN BARU KOPANG LOMTENG', 'JL. Jongkor Ds. Dasan Baru Dusun Retot Barat Kec. Kopang, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (20, 'KNT-WNT-0038-X-P', 3, 35, 13, '-8.62724', '116.30894', 'BARABALI', 'Gunung Panggung, Desa Barabali, Kecamatan Batukliang – Mantang, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (19, 'KNT-WNT-0037-X-P', 2, 19, 13, '-8.68391', '116.19203', 'LABULIA', 'Dusun Tandek, Desa Labu lia, Kec. Jonggat, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (18, 'KNT-WNT-0021-X-P', 7, 76, 13, '-8.72605', '116.37713', 'LANGKO LOMBOK TIMUR', 'Jln.Pondok Ds.Langko Kec.Janapria Kota Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (17, 'KNT-WNT-0020-X-P', 12, 139, 13, '-8.5542', '116.31297', 'SELAT PAMEKPEK LOMBOK TENGAH', 'Dsn.Selojan, Ds.Karang Sidemen Kec.Batu kliang Utara Kab.lombok Tengah Prop.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (15, 'KNT-WNT-0017-X-P', 2, 19, 13, '-8.68967', '116.17362', 'ENJAK', 'Dusun Enjak, Desa Labu Lia, Kec. Jonggat, Kb. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (14, 'KNT-WNT-0016-X-P', 7, 79, 13, '-8.70299', '116.41689', 'KERUAK SABA', 'Dusun Keruak, Desa Saba, Kec. Janapria, Kb. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (13, 'KNT-WNT-0012-X-P', 9, 104, 13, '-8.63186', '116.37218', 'MONTONG GAMANG KOPANG LOMTENG', 'Jl. Rapat Maji, Montong Gamang, Kopang, Kabupaten Lombok Tengah, Nusa Tenggara Bar. 83553', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (12, 'KNT-WNT-0011-X-P', 5, 63, 13, '-8.7223', '116.22581', 'BATU BEDUK', 'Dusun Batu Beduk, Desa Batujai, Kec. Praya Barat, Kab. Lombok Tengah, Prov. NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (11, 'KNT-WNT-0010-X-P', 7, 77, 13, '-8.70679', '116.38662', 'STUTA LOMTENG', 'Desa Janapria RT.00/RW.00, Kec.Janapria,Kab.Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (10, 'KNT-WNT-0054-X-B', 4, 53, 13, '-8.78272', '116.27611', 'KKETARA UTARA', 'Dusun Perigih, Desa Ketara, Kecamatan Pujut, Lombok Tengah, NTB 83573,Ketara,Pujut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (9, 'KNT-WNT-0038-X-B', 4, 44, 13, '-8.77904', '116.31489', '3G Pujut Lomteng', 'Dusun Karang Daye RT. 04 Desa Kawo,Kawo,Pujut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (8, 'KNT-WNT-0025-H-P', 8, 90, 13, '-8.61059', '116.21045', 'BL190422GR0', 'DSN .Jabon Tentan RT.01/RW.03 Ds.Bagu Kec.Pringgarata Kab.Lombok Tengah Prop.Nusa Tenggara Barat\n,Bagu,Pringgarata', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (7, 'KNT-WNT-0013-H-P', 1, 1, 13, '-8.7018', '116.28269', 'Praya', 'Jl. Basuki Rahmat 60 Kab. Lombok Tengah Kec. Praya Lombok Tengah,Praya ,Praya ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (6, 'KNT-WNT-0009-H-P', 10, 111, 13, '-8.72369', '116.29942', 'Gerantung', 'Jl. Raya Praya Mujur Dn. Gerantung,Sasake,Praya Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (5, 'KNT-WNT-0010-H-P', 5, 55, 13, '-8.77435', '116.23457', 'Bonder', 'Dusun Jurangare , Lombok Tengah,Bonder ,Praya Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (3, 'KNT-WNT-0010-M-B', 4, 39, 13, '-8.80019', '116.2915', 'Sengkol', 'Kab Nusa Tenggara Barat,Sengkol,Pujut', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (39, 'KNT-WNT-0080-X-B', 2, 16, 13, '-8.656083', '116.248742', 'Perina Jonggat', 'Dn. Bat Rurung, Ds. Barejulat, Kec. Jonggat, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (37, 'KNT-WNT-0065-X-B', 12, 137, 13, '-8.565786', '116.331131', 'Aiqdareq Batukliang', 'Dusun Aiq Berik RT 007 Desa Aiq Berik Kec Teratak Kab Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (35, 'KNT-WNT-0073-X-B', 7, 79, 13, '-8.713733', '116.410094', 'Janapria Janapria', 'Dusun Jembe Utara Desa saba Kecamatan Janapria Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (23, 'KNT-WNT-0052-X-P', 3, 33, 13, '-8.60616', '116.30322', 'MANTANG RAYA LOMTENG', 'JL. Raya Mantang Desa AIQ Darek Kec. Batuk Liang Kab. Praya, Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (34, 'KNT-WNT-0072-X-B', 1, 7, 13, '-8.677592', '116.269736', 'Jago Praya', 'Lingkungan Kuang Rundun Timur RT 001 Kel Gonjak Kec Praya Kab Lombok Tengah Propinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (24, 'KNT-WNT-0057-X-P', 4, 47, 13, '-8.9032', '116.31245', 'BATIK BANTAR', 'Bukit Bantar Loteng, Lombok, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (16, 'KNT-WNT-0018-X-P', 8, 92, 13, '-8.62151', '116.18552', 'BILEBANTE', 'Dusun Tapon, Desa Bilebante, Kc. Pringgarata, Kb. Lombok Tengah NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (4, 'KNT-WNT-0008-H-P', 2, 24, 13, '-8.67957', '116.2322', 'Bererong Nyerot', 'Jl. Raya Proya Mataram Dsn. Bererong, Kab.Lombok Tengah Lombok Tengah NTB,Nyerot,Jonggat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (2, 'KNT-WNT-0005-M-B', 3, 32, 13, '-8.61812', '116.32048', 'Mantang', 'Jl. Raya Mantang - Kopang Rt01, Kab. Lombok Tengah,Mantang,Batukliang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (1, 'KNT-WNT-0003-F-P', 1, 4, 13, '-8.71525', '116.28682', 'Praya', 'Kantor Telkom Pelayanan Praya, Jl. Pejanggi No. 7 Kab. Lombok Tengah,Semayan ,Praya ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (41, 'KNT-WNT-0101-X-B', 4, 54, 13, '-8.815539', '116.352122', 'Pujut Bangketparak', 'Dusun Bunbaru rt. 03 Desa Bangket Parak Kec. Pujut Kab.Lombok Tengah-NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (42, 'KNT-WNT-0108-X-B', 10, 115, 13, '-8.742836', '116.292542', 'Prayatengah Lajut', 'Dusun Selebung, RT.001 Desa Lajut Kecamatan Praya Tengah Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (43, 'KNT-WNT-0109-X-B', 6, 71, 13, '-8.815972', '116.385303', 'Prayatimur Semoyang', 'Dusun Kemalik Aran Desa Bila Lando Kec. Praya Timur Kab.Lombok Tengah-NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (44, 'KNT-WNT-0118-X-B', 5, 58, 13, '-8.800992', '116.241086', 'Prayabarat Kateng', 'Dusun Pasek siji RT 01 Desa Kateng Kecamatan Praya Barat Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (45, 'KNT-WNT-0122-X-B', 10, 117, 13, '-8.730392', '116.334764', 'Prayatengah Kelebuh', 'Dusun Sanggeng RT. 01 Desa Kelebuh Kecamatan Praya Tengah Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (46, 'KNT-WNT-0123-X-B', 6, 67, 13, '-8.784267', '116.390611', 'Prayatimur Ganti', 'Dusun Mandak RT. 01 Desa Semoyang Kec. Praya Timur Kab.Lombok Tengah-NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (47, 'KNT-WNT-0100-X-B', 5, 55, 13, '-8.785289', '116.226364', 'Prayabarat Bonder', 'Dusun Dasan Tengak RT 01 Desa Bonder Kecamatan Praya Barat Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (48, 'KNT-WNT-0103-X-B', 7, 81, 13, '-8.664106', '116.360917', 'Kopang Dasanbaru', 'Dusun Durian RT. 01 Desa Durian Kec.Janapria Kab.Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (49, 'KNT-WNT-0105-X-B', 4, 40, 13, '-8.800561', '116.309569', 'Pujut Sengkol', 'Dusun Anak Anjan RT. 03  Desa Segala Anyar Kecamatan Pujut Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (50, 'KNT-WNT-0110-X-B', 7, 80, 13, '-8.693881', '116.347367', 'Janapria Bakan', 'Dusun Keruo RT.01 Desa Bakan Kecamatan Janapria Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (51, 'KNT-WNT-0120-X-B', 1, 4, 13, '-8.621281', '116.267097', 'Pringgarata Tamanindah', 'Lingkungan Kekere Timur RT.001 Kel.Semayan Kec.Praya Kab.Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (52, 'KNT-WNT-0121-X-B', 4, 43, 13, '-8.824333', '116.332694', 'Pujut Pengengat', 'Dusun Tempit Desa Pengengat Kecamatan Pujut Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (53, 'KNT-WNT-0098-X-B', 8, 89, 13, '-8.601497', '116.236497', 'Pringgarata Murbaya', 'Dusun Padamara Desa Murbaya Kecamatan Pringgarata Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (54, 'KNT-WNT-0115-X-B', 10, 111, 13, '-8.739392', '116.259033', 'Prayabarat Batujai', 'Lingkungan Karang Baru Barat Kel. Sasake Kecamatan Praya Tengah Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (55, 'KNT-WNT-0132-X-B', 1, 1, 13, '-8.708967', '116.273694', 'Praya Perapen', 'Jalan Jendral Sudirman Kel Praya Kec Praya Kab Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (56, 'KNT-WNT-0094-X-B', 4, 46, 13, '-8.843436', '116.287997', 'Pujut Rembitan', 'Dusun Sade Desa Rembitan Kec. Pujut Kab.Lombok Tengah-NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (57, 'KNT-WNT-0116-X-B', 11, 122, 13, '-8.718897', '116.197494', 'Prayabaratdaya Ungga', 'Dusun Ampan Lolat RT.02 Desa Ungga Kecamatan Praya Barat Daya Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (58, 'KNT-WNT-0091-X-B', 1, 6, 13, '-8.711', '116.288639', 'Prayatengah Jontlak', 'Jalan Tiugalih Dusun Makam  Desa Makam Kec. Praya Kab. Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (59, 'KNT-WNT-0008-I-P', 1, 1, 13, '-8.709028', '116.269064', 'Praya', 'JL. ANYELIR 30, RT 09 / 02 RIJANI AGUNG, KEL. PRAPEN, KEC. PRAYA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (60, 'NBLT0001', 1, 9, 1, '-8.6838', '116.25621', 'JAGO PRAYA ROAD', 'Dusun Mendo, Kel Renteng, Kec Praya, Kab Lomteng, Prop NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (61, 'NBLT0002', 1, 14, 1, '-8.70121', '116.29572', 'BUNUT BAOK SELATAN', 'Jalan Datu Tuan Hasyim, Desa Bunut Baok, Kec. Praya, Kab.Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (62, 'NBLT0003', 9, 106, 1, '-8.56493', '116.37621', 'WAJAGENGSENG UTARA', 'Dusun Bual, Desa Wajageseng, Kec. Kopang, Kab.Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/145/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (63, 'NBLT0004', 2, 28, 1, '-8.65851', '116.23665', 'BUNKATELOMTENG', 'Dusun Dasan Kulur, Desa Bunkate, Kec. Jonggat,', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/149/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (64, 'NBLT0005', 2, 22, 1, '-8.63722', '116.24355', 'PENGENJEK LOMTENG', 'Dusun Bunndah Desa pengenjek,Kec.jonggat, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/151/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (65, 'NBLT0006', 4, 47, 1, '-8.87442', '116.27757', 'PRABU LOMTENG', 'Jl. Raya Sengkol Kuta. Dusun Mong Desa Kuta Kecamatan Sengkol Kab. Lombok Tengah , NTB', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/148/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (66, 'NBLT0007', 10, 116, 1, '-8.696', '116.33072', 'PENGADANG TIMUR', 'Dusun Mertagonda, Kadus Regat, Desa Pengadang, Kec. Praya Tengah,', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/147/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (67, 'NBLT0008', 3, 29, 1, '-8.64208', '116.34572', 'KOPANG SELATAN', 'Dusun Colok, Desa Bujak, Kec. Batukliang, Kab.Lombok Tengah, Prop. NTB', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/150/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (68, 'NBLT0009', 12, 138, 1, '-8.59903', '116.35336', 'MAS-MAS LOMTENG', 'Bajur Desa Mas Mas, Kec. Batukliang Utara, Kab.Lombok Tengah, Prop. NTB', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/153/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (69, 'NBLT0010', 9, 104, 1, '-8.64277', '116.37832', 'MONTONG GAMANG BARAT', 'Dusun Embung Karung, Montong Gamang Barat, Kab.Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, '503.10.6/146/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (70, 'NBLT0013', 1, 1, 1, '-8.70382', '116.278', 'PRAYA CITY', 'Jl. H.Abdullah Dusun Tengari, Kel. Praya, Kec. Praya, Kab. Lombok tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (71, 'NBLT0014', 1, 10, 1, '-8.66703', '116.29553', 'MERTAK TOMBOK', 'Dusun Lendeng Simbe RT.01, Kel. Mertak Tombok, Kec. Praya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (72, 'NBLT0015', 8, 88, 1, '-8.59094', '116.27258', 'SEPAKEK', 'Jurang Sate Jalan Negara, Desa Sepakek, Kec. Pringgarata, Kab. Lombok Tengah, Prov. NTB', NULL, NULL, NULL, NULL, NULL, NULL, '503/12/2008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (73, 'NBLT0016', 4, 46, 1, '-8.82401', '116.29294', 'REMBITAN', 'Gunung Toa, Dusun Rembitan II, Kc. Pujut, Kb. Lombok Tengah, NTB ', NULL, NULL, NULL, NULL, NULL, NULL, '92/647/PTK/PPW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (74, 'NBLT0017', 6, 66, 1, '-8.74309', '116.4013', 'BELEKA', 'Desa Beleka RT.00/RW.0 Kec. Praya Timur, Kab.Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '97/647/PTK/PPW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (75, 'NBLT0018', 10, 117, 1, '-8.72692', '116.35275', 'SANGGENG', 'Pengembok, Desa Kelebuh RT.00 / TW 00, Kec.Praya Tengah, Kab.Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, '95/647/PTK/PPW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (76, 'NBLT0019', 10, 112, 1, '-8.69821', '116.3137', 'JURANG JALER', 'Jl. Praya Kopang Kadus, Jurang Jaler, Kec. Praya Tengah, Kab. Lombok Tengah, Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, '503.23/687/2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (77, 'NBLT0020', 2, 25, 1, '-8.69244', '116.22589', 'SUKARARA LOTENG', 'Dusun Blong Daye, Desa Sukarara, Kec. Jonggat, Kabupaten Lombok Tengah, Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, '124/647/PTK/PPW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (78, 'NBLT0021', 7, 84, 1, '-8.68392', '116.369', 'KEREMBONG LOMTENG', 'Dusun Kerembong Barat, Ds Kerembong RT.02 Kec. Janapria Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, '117/647/PTK/PPW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (79, 'NBLT0022', 1, 12, 1, '-8.654889', '116.31963', 'MONTONG TEREP LOMTENG', 'Kampung Bodak Dusun Batu Menek Desa Montong Terep Kecamatan Praya Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (80, 'NBLT0023', 3, 36, 1, '-8.61279', '116.2798', 'BEBER LOMTENG', 'Dusun Lendang Doe, Desa Beber, Kc.   Batu Kliang,  Kb. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '53/647/TR/DPU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (81, 'NBLT0024', 8, 93, 1, '-8.57496', '116.28013', 'SEDAU LOMTENG', 'Dusun Sedau Rarung,  Desa Pemepek, Kc. Pringgarata, Kb. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '54/647/TR/DPU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (82, 'NBLT0025', 3, 29, 1, '-8.62329', '116.3296', 'MANTANG KOPANG ROAD LOMTENG', 'Jl.  Raya Mantang Kopang, Kampung Tenten, Dusun Kebon  Randu, Desa Bujak, Kc. Batu Kliang, Kb. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '55/647/TR/DPU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (83, 'NBLT0026', 8, 95, 1, '-8.61394', '116.24088', 'PRINGGARATA BARAT - BADSPOT-', 'Desa Arjangka, Kec. Pringgarata Kab.LombokTengah, Kab. Mataram, Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, '648/29/III/KP2T/2011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (84, 'NBLT0027', 5, 59, 1, '-8.77734', '116.20644', 'KELEBUH SETANGGOR', 'Dusun Kelebuh, Desa Setanggor, Kec. Praya Barat, Kb. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '648/26/VII/KP2T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (85, 'NBLT0028', 4, 41, 1, '-8.83215', '116.30935', 'NYAMPE', 'Dusun Mongge, Desa Sukadana, Kec. Pujut, Kb. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '648/27/VII/KP2T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (86, 'NBLT0029', 4, 41, 1, '-8.81314', '116.31268', 'KETANGAN', 'Dusun Tonjer, Desa Sukadana, Kec. Pujut, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '648/24/VII/KP2T', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (87, 'NBLT0030', 7, 80, 1, '-8.67934', '116.34872', 'BUKIT BAKAU', 'Desa Bakan, Kecamatan Janapria, Kabupaten  Lombok  Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '503.23/686/2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (88, 'NBLT0031', 7, 82, 1, '-8.67305', '116.38152', 'PENDEM', 'Desa  Pendem Kecamatan  Janapria, Kabupaten Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '75/647/TR/DPU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (89, 'NBLT0032', 9, 104, 1, '-8.65528', '116.37245', 'PENIMPOH', 'Dusun Nyanggi, Desa Montong Gamang, Kecamatan Kopang, Kabupaten Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, '503.23/685/2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (90, 'NBLT0033', 8, 90, 1, '-8.62072', '116.19994', 'BAGU', 'Gg. Bagu Ds. Ds. Bagu Kc. Pringgarata - Lombok Barat', NULL, NULL, NULL, NULL, NULL, NULL, '57/647/PTK/PPW\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (91, 'NBLT0034', 3, 37, 1, '-8.62695', '116.28463', 'PRINGGARATA II', 'Dsn. Pagutan, Ds. Pagutan Kc. Batu Kliang, Kb. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, '89/647/PTK/PPW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (92, 'NBLT0035', 5, 57, 1, '-8.84227', '116.20404', 'MANGKUNG', 'Dusun batu Ampun, Desa Mangkung Kec. Praya barat Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, '503.32/688/2018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (93, NULL, 1, 7, 2, '-8.671297', '116.284426', 'Aikmual', 'Gubuk Rejeng RT. 05 RW. 06 Kel. Gonjak Kec. Praya Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (94, NULL, 9, 104, 2, '-8.634694', '116.3745', 'Montong gamang', 'Jl. Raya Montong Gamang Dusun Sepaung Desa Montong Gamang Kec. Kopang Kab. Loteng NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (95, NULL, 12, 134, 2, '-8.583333', '116.285389', 'Tanak beak', 'Dusun Tanak Beak Timur Desa Tanak Beak Kec. Batukliang Utara  Kab. Loteng, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (96, NULL, 4, 46, 2, '-8.82957', '116.2941', 'Rembitan', 'Dusun Rembitan III Desa Rembitan Kec. Pujut Kab. Loteng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (97, NULL, 4, 39, 2, '-8.90301', '116.31244', 'Batik bantar kuta', 'Jl. Ke Tanjung An Gunung Batik Bantar Desa Sengkol Kec. Oujut Kab. Lombok Tengah, NTB.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (98, NULL, 9, 102, 2, '-8.63578', '116.35008', 'Kopang', 'Desa Kopang Rembiga, Kec. Kopang, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (99, NULL, 9, NULL, 2, '-8.57928', '116.37425', 'Wajageseng', 'Dusun Peseng , Desa Wajegeseng, Kec. Kopang, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (100, NULL, 1, 1, 2, '-8.70918', '116.2784', 'Praya', 'Jl. WR. Supratman (Lale Sruni), RT.09 RW. 03, Lingkungan Kampung Jawa, Kel. Praya, Kec. Praya, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (101, NULL, 1, 8, 2, '-8.71583', '116.25628', 'Panjisari', 'Jl. Raya Praya - Batujai, Dusun Sebeng, RT. 03, Kel. Panjisari, Kec. Praya, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (102, NULL, 5, 61, 2, '-8.85323', '116.18073', 'Selong Blanak', 'Jl. Raya Selong Belanak, Dusun Juwet, Desa Selong blanak, Kec Praya Barat, Kab lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (103, NULL, 4, 52, 2, '-8.76726', '116.2646', 'Bandara Internasional Lombok (BIL)', 'Tampuk Dusun Tanak Awu Bat, RT. 01, Desa Tanak Awu, Kec. Pujut, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (104, NULL, 1, 9, 2, '-8.69191', '116.26438', 'Terminal Praya', 'RT. 01 RW. 01 Ling. Renteng, Kel.Renteng,Kec.Praya,Kab.lombok tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (105, NULL, 10, 116, 2, '-8.68017', '116.33139', 'Pengadang', 'Jl. Raya Praya - Pengadang, Desa Pengadang, Kec. Praya Tengah, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (106, NULL, 4, 47, 2, '-8.8966', '116.29811', 'Kuta Lombok', 'Dusun Ujung, Desa Kuta Kec. Pujut Kab. Loteng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (107, NULL, 12, 135, 2, '-8.57694', '116.34509', 'Aik Bukak', 'Desa Aik Bukak Kec. Batu Keliang Utara Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (108, NULL, 1, 2, 2, '-8.70295', '116.26575', 'Sukarno Hatta Praya', 'Jl. Sukarno Hatta, Komplek Perumahan Sakinah No. 01, Kel. Leneng, Kec. Praya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (109, NULL, 4, 39, 2, '-8.9059', '116.31637', 'Tanjung Ann', 'Jl. Menuju Pantai Ann, Desa Sengkol Kec. Pujut, Kab. Lombok tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (110, '23PYA005', 6, 68, 3, '-8.759025', '116.349862', 'MUJUR', 'DUSUN PENGENDUNG,DESA MUJUR,KEC MUJUR,KAB LOMBOK TENGAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (111, '23PYA006', 2, 17, 3, '-8.653007', '116.199585', 'BONJERUK', 'UBUNG DESA UBUNG,KEC JONGGAT,KAB LOMBOK TENGAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (112, '23PYA007', 5, 63, 3, '-8.742276', '116.242101', 'PENUNJAK', 'DESA BATU AJI, KEC. PRAYA BARAT, KAB. LOMBOK TENGAH - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (113, '23PYA008', 4, 39, 3, '-8.799826', '116.293586', 'SENGKOL', 'DESA SENGKOL, KEC. PUJUT, KAB. LOMBOK TENGAH - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (114, '23PYA012', 7, 77, 3, '-8.694778', '116.403', 'JANAPRIA', 'DSN. BATU BUNGUS TIMUR, DESA JANAPRIA, KEC JANAPRIA, LOMBOK TENGAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (115, '23PYA020', 4, 47, 3, '-8.8899', '116.2783', 'V_KUTA', 'KUTA, DESA KUTA KEC. PUJUT KAB. LOMBOK TENGAH NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (116, 'T000373', 9, 102, 4, '-8.63419', '116.348', 'KOPANG', 'Jl. Kampung Lauk Rurung I Desa Kopang rembiga kec. Kopang ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (117, '180234109', 5, 61, 4, '-8.87136', '116.1671', 'SELONG BELANAK 2', 'Dusun selong belanak, desa selong belanak, kec. praya barat, kab. lombok tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (118, '180223109', 6, 68, 4, '-8.74998', '116.32394', 'NEW MUJUR', 'Dusun Ular Naga Desa Pejanggik Kec.Praya Kab.Lombok Tengah Prov.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (119, '180238104', 4, 47, 4, '-8.89828', '116.30178', 'NOVOTEL LOMBOK', 'Jl. Novotel Pantai Aan,Dusun Ujung Desa Kuta,Kec. Pujut, Kab. Lombok Tengah NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (120, '180124109', 4, 50, 5, '-8.88862', '116.33914', 'KUTA LOMBOK4', 'Dusun Serenang Desa Mertak Kec. Pujut Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (121, '180123109', 4, 50, 5, '-8.88412', '116.36658', 'KUTA LOMBOK5', 'Dusun mertak RT kelekuh desa mertak kecamatan pujut keba[', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (122, '180121109', 4, 47, 5, '-8.87382', '116.27398', 'KUTA LOMBOK2', 'dusun mongo desa kuta kecamatan pujut kabupaten lombok tengah propinsi NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (123, '180122109', 4, 39, 5, '-8.91056', '116.3416', 'KUTA LOMBOK6', 'Desun grupuk desa sengkol kecamatan pujut kabupaten lombok tengah propinsi NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (124, '180125109', 4, 41, 5, '-8.88867', '116.31042', 'KUTA LOMBOK3', 'Jalan Raya Kuta Awang KM 7 Dusun Petiwong  Desa Sukadana Kecamatan  Pujut Kabupaten Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (125, '180239110', 1, 5, 5, '-8.71001', '116.25735', 'PRAYA WAGE ROAD', 'Jl. Seroja, Serangat Selatan RT. 01 RW. 01, Kel. Prapen, Kec. Praya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (126, '180271109', 6, 68, 5, '-8.76373', '116.3608', 'MUJUR1', 'Dusun Budi Waton Desa Mujur Kec Praya Timur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (127, '180275109', 1, 6, 5, '-8.70698', '116.28309', 'BASUKI RAHMAT PRAYA', 'kampung Tiwu Biras  Rt 004 Rw 001Kelurahan Tiwugalih Kecamatan PrayaKelurahan Tiwugalih Kecamatan Praya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (128, '180412109', 11, 122, 5, '-8.72231', '116.19267', 'UNGGA PRAYA BARAT DAYA', 'Dusun Banteng Kurus RT00 RW00 Desa Rangga Gate Kecamatan Praya Barat Daya Kabupaten Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (129, '180404109', 2, 24, 5, '-8.6731', '116.22446', 'JELANTIK JONGGAT 2', 'Dusun Tetangga RT00 RW00 Desa Nyerot Kecamatan Jonggat Kabupaten Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (130, '180405109', 9, 102, 5, '-8.6491', '116.36141', 'KOPANG REMBIGA KOPANG 2', 'Jl Singanulung RT 01 Dsn Lingkung Ds. Kopang Rembiga Kecamatan Kopang Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (131, '180409109', 4, 43, 5, '-8.82826', '116.31878', 'PENGENGAT PUJUT', 'Jl. Desa Pengengat Dusun Beledu Ds. Pengengat Kec. Pujut Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (132, '180410109', 9, 108, 5, '-8.66277', '116.34099', 'SEMPARU KOPANG', 'Jl Raya Praya – Kopang Rt 02 Rw 01 Desa Semparu Kecamatan Kopang Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (133, '180449109', 1, 5, 5, '-8.71371', '116.269', 'PRAPEN PRAYA', 'Mareumbu Kel. Prapen RT00 RW00 Kel. Prapen kec. Praya Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (134, '180408109', 7, 76, 5, '-8.72167', '116.37196', 'LANGKO JANAPRIA', 'Jl. Desa langko Dusun Langko Gunting Kec. Janapria Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (135, '180411109', 8, 97, 5, '-8.6217', '116.22318', 'SISIK PRINGGARATA', 'Dusun sisik Timur Desa Sisik Kecamatan Pringgarata, Lombok Tengah Desa Sisik Kecamatan Pringgarata, Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (136, '180406109', 2, 19, 5, '-8.68117', '116.18934', 'LABULIA JONGGAT', 'Tomber RT- RW- Desa Labulia Kecamatan Jonggat Kabupaten Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (137, '180407109', 4, 52, 5, '-8.78876', '116.2667', 'SENGKOL SPLIT', 'TANAK AWU RT.00 RW.00 DESA TANAK AWU KEC. PUJUTKAB LOMBOK TENGAH PROV. NUSA TENGGARA BARAT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (138, '180573109', 8, 88, 5, '-8.60168', '116.25615', 'SEPAKEKPRINGGARATA', 'SB. Sepakek Barat RT.00 RW.00 Desa Sepakek Kec. Pringgarata Kab. Lombok Tengah, Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (139, '180577109', 4, 49, 5, '-8.85786', '116.24638', 'GUNUNGPRABU', 'Dusun Jelateng Desa Tumpak Kecamatan Pujut Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (140, '180578109', 4, 49, 5, '-8.89066', '116.23953', 'TUMPAK', 'Dusun Tumpak Desa Tumpak Kec Pujut Kabupaten Lombok Tengah Propinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (141, '180579109', 4, 48, 5, '-8.8198', '116.25704', 'KAMPUNGSADE', 'Dusun Pengembur RT.- RW.- Desa Pengembur Kecamatan Pujut Kabupaten Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (142, '180493126', 11, 124, 5, '-8.74629', '116.18606', 'PELAMBIK', 'Desa Pelambik, Kecamatan Praya Barat Daya Kabupaten Lombok Tengah Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (143, '180492126', 5, 55, 5, '-8.77564', '116.233316', 'BONDIR_PRAYA BARAT', 'DUSUN JURING, DESA BONDER KECAMATAN PRAYA BARATKABUPATEN LOMBOK TENGAH PROVINSI NUSA TENGGARA BARAT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (144, 'R5200011', 1, 2, 14, '-8.7037', '116.26884', 'PRAPEN', 'Lingkungan Tebero RT.08 Kel. Leneng Kec. Praya Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (145, '2624800', 1, 7, 14, '-8.677167', '116.282967', 'Gonjak', 'Jl. Praya Manang, Desa Kampung Tetegan, Kel. Gonjak, Kec. Praya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (146, 'B635', 9, 101, 14, '-8.608525', '116.365136', 'Bebuaq Lombok Tengah', 'Dsn.Jurid Ds.Bebuaq Kec.Kopang Kab.Lombok Tengah Prop.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (147, 'B654', 5, 60, 14, '-8.74355', '116.241217', 'Praya Barat Lombok Tengah', 'Dusun Karang Daya, Desa Panujak, Kec.Praya Barat - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (148, '2691', 3, 33, 14, '-8.593056', '116.291417', 'Tanak Beaq', 'Jl. Al. Fallah Rt. 06, Dusun Pancordao, Ds. Aik Darek, Kc. Batukliang, Kb. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (149, '2689', 5, 57, 14, '-8.800944', '116.226525', 'Penujak Loteng', 'Mangkung Daya, Desa Mangkung, Kec.Praya Barat, Kab.Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (150, '2673', 10, 114, 14, '-8.729331', '116.312636', 'Batunyala Lombok', 'Ds. Batunyala, Kec. Praya Tengah, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (151, '18XL05B0019', 8, 91, 15, '-862558', '11622414', 'Sintung', 'Jl. Sisik Timur  Desa Sintung Pringgata Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (152, '18XL05B0018', 8, 89, 15, '-860525', '11625597', 'Kekalik Bagus', 'Jl. Dusun Kertais  Murbaya Pringgata Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (153, '18XL05B0025', 3, 30, 15, '-858656', '11631133', 'Dasan Lekong', 'Jl. Dasan Lekong, Desa Selebung  Selebung Batu Keliang Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (154, '18XL05B0026', 2, 17, 15, '-865258', '11620294', 'Aek Ara', 'Dusun Aik Are, Desa Ubung  Ubung Jonggat Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (155, '16TS02B0164', 11, 130, 15, '-881688', '11614374', 'batu jangkih', 'JL.Desa Batu jangkih dusun  Batu Jangkih Praya Barat Daya Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (156, '15TS12B0370', 1, 1, 15, '-869973', '11628265', 'Praya (SMA 1 Praya)', 'JL. Basuki Rahmat RT.08 RW.- No. 64 Praya Praya Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (157, '17TS08W0150', 12, 135, 15, '-858280', '11634931', 'AIK BUKAQ', 'Dsn Goak Daye, RT01/RW01  Aik Bukaq Batukliang Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (158, '16TS10W0138', 1, 14, 15, '-870122', '11629546', 'RSUD PRAYA', 'Dusun Gelogor Mapong RT04  Bunut Baok Praya Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (159, '16TS09W1330', 4, 44, 15, '-878218', '11631073', 'SEGALE ANYAR', 'Jl. Pariwisata Dusun Karang Jangkong RT0  Kawo Pujut Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (160, '11TI01V0813', 7, 80, 15, '-867951', '11634765', 'BUKIT BAKAN', 'Desa Bakan  Desa Bakan Kec. Janapria Loteng Lombok Tengah Lombok Tengah 80221', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (161, '11TI01V0814', 1, 1, 15, '-870987', '11627957', 'PRAYA', 'Jl. Rahmat Basuki No.1 Lombok Tengah Lombok Tengah Lombok Tengah Lombok Tengah 80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (162, '19IS11B0473', 4, 140, 15, '-888200', '11639260', 'AWANG', 'DUSUN AWANG KEBON DESA AWANG KECAMATAN P  Lombok Tengah  80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (163, '19IS11B0472', 3, 32, 15, '-860993', '11630722', 'MANTANG', 'RAJUMAS, DESA MANTANG, KECAMATAN BATUKLI  Lombok Tengah  80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (164, '19IS11B0304', 2, 23, 15, '-868400', '11623858', 'PUYUNG', 'JL. RAYA PUYUNG, KP PEDALAMAN, DESA PUYUNG  Lombok Tengah  80234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (165, NULL, 10, 117, 7, '-8.74333', '116.36514', 'Repok Leneng', 'Dusun Repok Leneng Desa Kelebuh Kecamatan Praya Tengah, Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (166, NULL, 4, 48, 7, '-8.80664', '116.261', 'Pengembur', 'Dusun Pengembur II Desa Pengembur Kecamatan Pujut Kab Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (167, NULL, 10, 115, 7, '-8.74771', '116.30575', 'Lajut', 'Dusun Ngolak Rt 002 Desa Lajut Kec. Praya Tengah Kab Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (168, NULL, 10, 113, 7, '-8.70686', '116.34164', 'Beraim', 'Dusun Beraim Daya Desa Beraim Kecamatan Praya Tengah Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (169, NULL, 6, 67, 7, '-8.7972', '116.39079', 'Semoyang', 'Dusun Batu Gulung Desa Semoyang Kec Praya Timur Kab Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (170, NULL, 8, 93, 7, '-8.55958', '116.29317', 'Pidendang', 'Dusun Pidendang, Desa Pemepek, Kec.Pringgarata, Kab.Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (171, NULL, 6, 73, 7, '-8.78308', '116.35211', 'Marong', 'Dusun Rangah Karang Galuh Desa Marong Kec Praya Timur Kab Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (172, NULL, 3, 29, 7, '-8.64093', '116.33114', 'Bujak', 'Dusun Dasan Tengah Desa Bujak Kec Batu Kliang Kab Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (173, NULL, 4, 45, 7, '-8.79375', '116.33297', 'Barelantan', 'Dusun Barelantan Desa Gapura Kecamatan Pajut Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (174, NULL, 12, 135, 7, '-8.58691', '116.35337', 'Aik Bukak', 'Dusun Batungerengseng, Desa Aik Bukak, Kec. Batukliang Utara, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (175, NULL, 1, 11, 7, '-8.64521', '116.27564', 'Aikmual Praya', 'Dusun Bebie Daye, Desa Aik mual, Kec. Praya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (176, NULL, 2, 21, 7, '-8.64444', '116.25108', 'Barejulat(XL)', 'Dusun Lendang Bonter, Desa Prine, Kec. Jonggat, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (177, NULL, 2, 26, 7, '-8.67585', '116.24908', 'Gemel', 'Dusun Kebon Tengak, Desa Gemel, RT. 01, Kec. Jonggat, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (178, NULL, 5, 63, 7, '-8.72042', '116.24875', 'Wage', 'Dusun Bunklotok, Desa Batujai, Kec. Praya Barat, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (179, NULL, 5, 59, 7, '-8.75869', '116.22303', 'Setanggor Praya(XL)', 'Dusun Setanggor Timur 2, Desa Setanggor, Kec. Praya Barat, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (180, NULL, 11, 125, 7, '-8.73806', '116.2089', 'Darek', 'Dusun Darek, Desa Darek, Kec. Praya Barat Daya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (181, NULL, 11, 126, 7, '-8.71824', '116.18143', 'Ranggata', 'Dusun Aik Ampat, Desa Ranggagata, Kec. Praya Barat Daya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (182, NULL, 1, 1, 7, '-8.70933', '116.28096', 'Praya Agus Salim', 'Jl. KH. Agus Salim, No. 2, Praya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (183, NULL, 1, 2, 7, '-8.69856', '116.26783', 'Leneng Praya', 'Amen Bermis, Rt. 05 Rw. 02, Kel. Leneng, Kec. Praya, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (184, NULL, 6, 74, 7, '-8.83308', '116.37328', 'Kidang', 'Dusun Semut, Desa Kidang, Kec. Praya Timur, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (185, NULL, 12, 133, 7, '-8.55833', '116.35789', 'Setiling', 'Dusun Setiling, Desa Setiling, Kec. Batukliang Utara, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (186, NULL, 7, 75, 7, '-8.73215', '116.43417', 'Lekor Janapria', 'Dusun Lekor Barat, Desa Lekor, Kec. Janapria, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (187, NULL, 3, 31, 7, '-8.61162', '116.34287', 'Peresak', 'Dusun Subahnala, Desa Peresak, Kec. Batuk Liang, Kab. Lombok Tengah, NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (188, NULL, 2, 18, 7, '-8.66499', '116.21562', 'Jelantik', 'Taman Desa Jelantik, Kel. Jenggot, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (189, NULL, 1, 2, 7, '-8.69699', '116.25537', 'Renteng', 'Dusun Renteng, Desa Leneng Kec. Praya Kab. Loombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (190, NULL, 1, 3, 7, '-8.69018', '116.27268', 'Gerunung Lomteng', 'Lingkungan Tanggak, Kelurahan Gerunung Kec. Praya Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (191, NULL, 4, 47, 7, '-8.8919', '116.27641', 'Kuta Lombok', 'Dusun Pebelo/Kuta II RT. 02, Desa Kuta Kec. Pujut, Kab. Lombok Tengah NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (192, NULL, 1, 4, 7, '-8.72022', '116.2825', 'Praya Timur', 'Dusun Semayan Rt. 03 / Rw. 01, Kel. Semayan, Praya , Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (193, NULL, 1, 13, 7, '-8.66519', '116.26325', 'Jago Lomteng', 'Dusun Jago Desa Jago, Kec. Praya - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (194, NULL, 5, 63, 7, '-8.73658', '116.24403', 'Leneng Batujai', 'Dusun Karang Dalim Daya, Desa Batujai, Kec. Praya Barat, Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (195, NULL, 5, 60, 7, '-8.7593', '116.25672', 'Penunjak Tanak Awu Road', 'Jl. Wakar Sembawi, Dusun Ketapang Wakar Sumbawi, Desa Penunjak, Kec. Praya Barat, Kab. Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (196, NULL, 5, 63, 7, '-8.70931', '116.24086', 'Rentang Lomteng', 'Dusun Petok, Desa Batujai, Kec. Praya Barat, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (197, NULL, 5, 55, 7, '-8.77453', '116.23447', 'Bonder', 'Dusun Jurang Are, Desa Bonder, Kec. Praya Barat, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (198, NULL, 10, 110, 7, '-8.70899', '116.30383', 'Jontlak', 'Dusun Jontlak RT 05 RW 01, Kelurahan Jontlak, Kecamatan Praya Tengah, Kabupaten Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (199, NULL, 1, 14, 7, '-8.68352', '116.29851', 'Bunut Baok', 'Dusun Lendak Kondak RT 05, Desa Bunut Baok, Kecamatan Praya - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (200, NULL, 2, 23, 7, '-8.68863', '116.24487', 'Gemel Selatan', 'Dusun Waker Desa Puyung, Kec. Jonggat, Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (201, NULL, 9, 102, 7, '-8.64596', '116.36554', 'Kopang Rembiga', 'Dusun Bora, Desa Kopang Rembiga, Kec. Kopang, Kab. Lombok Tengah - NTB   ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (202, NULL, 1, 5, 7, '-8.71482', '116.27805', 'Tiwugalih Praya', 'Lingkungan Prapen, RT.02 Kel.Prapen, Kec.Praya, Kab.Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (203, NULL, 4, 50, 7, '-8.8823', '116.39236', 'Awang Lomteng', ' Dusun Awang Kebon, RT. 01, Desa Mertak, Kecamatan Pujut, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (204, NULL, 2, 19, 7, '-8.68196', '116.17931', 'Labulia Lombar', ' Jl. By Pass - BIL, Dusun Labulia, Desa Labulia, Kecamatan Jonggat, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (205, NULL, 7, 85, 7, '-8.69417', '116.42014', '3G Saba Lomteng', ' Dusun Jango, Desa Jango, Kecamatan Janapria Kabupaten Lombok Tengah - NTB  v', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (206, NULL, 7, 78, 7, '-8.7311', '116.391', '3G Langko Timur', ' Dusun Karang Lebah, Desa Loang Maka, Kec. Janapria, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (207, NULL, 5, 59, 7, '-8.76173', '116.21403', '3G Montong Waru Lomteng', ' Jl. Raya Montong Waru-Setanggor, Desa Sitanggor, Kecamatan. Praya Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (208, NULL, 7, 83, 7, '-8.70317', '116.36083', '3G Selebung Rembiga', ' Dusun Melar, Desa Selebung Rembiga, Kecamatan Janapria, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (209, NULL, 4, 48, 7, '-8.8154', '116.24936', '3G Bondir Lomteng', ' Jl. Montong Balas Dusun Sinah, Desa Pengembur, Kecamatan Pujut, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (210, NULL, 4, 53, 7, '-8.78583', '116.27973', '3G Ketara Lomteng', ' Jl. BIL - Ketara, Dusun Yayang Rurun, Desa Ketara, Kecamatan Pujut, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (211, NULL, 5, 63, 7, '-8.73694', '116.22067', '3G Batujai Lomteng', ' Dusun Mengeluk, Desa Batujai, Kecamatan Praya Barat, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (212, NULL, 5, 60, 7, '-8.75859', '116.23831', '3G Batujai Penujak', ' Jl. Raya Penujak - Mangkung, Dusun Tenanden, Desa Penujak, Kecamatan Praya Barat, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (213, NULL, 2, 22, 7, '-8.63704', '116.26096', '3G Pengenjek Pagutan Road', ' Jl. Pengenjek Pagutan, Desa Pengenjek, Dusun Taman Baru, Kecamatan Jonggat, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (214, NULL, 1, 11, 7, '-8.66312', '116.28545', '3G Aikmual Montong Terep', ' Dusun Penaban, RT. 01, Desa Aikmual, Kecamatan Praya, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (215, NULL, 11, 122, 7, '-8.70876', '116.2124', '3G Batu Beduk Road', ' Jl. By Pass - Bill, Dusun Batu Bolong, Desa Ungga Kecamatan Praya Barat Daya, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (216, NULL, 5, 57, 7, '-8.81991', '116.21263', '3G Bondir Mangkung Road', ' Jl. Selong Belanak - Penunjak, Dusun Open, Desa Mangkung, Kec. Praya Barat, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (217, NULL, 7, 77, 7, '-8.69496', '116.38713', '3G Durian Janapria', 'Dusun Tonjong, Desa Janapria, Kecamatan Janapria, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (218, NULL, 8, 91, 7, '-8.61976', '116.21416', '3G Bilebante Road', ' Jl. Dusun Dasan Telaga, Desa Sintung, Kec. Pringgarata, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (219, NULL, 2, 27, 7, '-8.6465', '116.21618', '3G Ubung Bonjeruk', ' Jl. Raya Bonjeruk, Dusun Surabaya, Desa Bonjeruk, Kecamatan Jonggat, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (220, NULL, 7, 75, 7, '-8.72132', '116.44108', '3G Lekor Sukarara Road', ' Dusun Pepao Barat, Desa Lekor, Kec. Janapria, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (221, NULL, 6, 68, 7, '-8.75052', '116.3587', '3G Kelebuh Mujur', ' Dusun Perenyok, Desa Mujur, Kecamatan Praya Timur, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (222, NULL, 6, 69, 7, '-8.78333', '116.3722', '3G Landah Lomtim', ' Dusun Perempung, RT. 01, Desa Landah, Kec. Praya Timur, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (223, NULL, 6, 72, 7, '-8.77151', '116.41738', '3G Ganti Sukaraja Road', ' Dusun Bebile, Desa Ganti, Kecamatan Praya Timur, Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (224, NULL, 6, 72, 7, '-8.75256', '116.39417', '3G Ganti Beleka Road', ' Dusun Aik Paek, Desa Ganti, Kecamatan Praya Timur, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (225, NULL, 7, 75, 7, '-8.74206', '116.42877', '3G Beleka Lekor', ' Dusun Gulung, Desa Lekor Kec. Janapria, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (226, NULL, 10, 114, 7, '-8.73831', '116.31658', '3G Batunyala Serewa Road', ' Dusun Bagek Tenten, Desa Batunyala, Kecamatan Praya Tengah, Kabupaten Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (227, NULL, 8, 94, 7, '-8.63317', '116.19463', '3G Bilebante Mataram', ' Jl. Dasan Gundul Menemeng, Dusun Peresak Baru, Desa Menemeng, Kec. Pringgarata, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (228, NULL, 2, 18, 7, '-8.65983', '116.20992', 'Jelantik Barat (262D837)', ' Dusun Aik Ampat, Desa Jelantik, Kec. Jonggat, Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (229, NULL, 5, 60, 7, '-8.74847', '116.24525', 'Panjisari Lomteng', 'Dusun Kangi, Desa Penujak, Kec. Praya Barat, Kab. Lombok Tengah, Propinsi Nusa Tenggara Barat - 83572', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (230, NULL, 5, 57, 7, '-8.80577', '116.22605', 'Bondir', 'Dusun Mangkung Lauq, Desa Mangkung, Kec. Praya Barat, Kab. Lombok Tengah - Nusa Tenggara Barat (83572)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (231, NULL, 6, 68, 7, '-8.76858', '116.34839', 'Mujur Sukaraja', 'Dusun Mujur, Desa Mujur, Kec. Praya Timur, Kab. Lombok Tengah, Propinsi Nusa Tenggara Barat - 53581', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (232, NULL, 11, 124, 7, '-8.74686', '116.18792', 'Darek Ranggagata', 'Dusun Sengkarek, Desa Plambik, Kec. Praya Barat Daya,  Kabupaten Lombok Tengah, Propinsi Nusa Tenggara Barat - 83571', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (233, NULL, 9, 102, 7, '-8.63462', '116.35846', 'Kopang Rembiga Lomteng', 'Renggung, Dusun Pedagi, Desa Kopang Rembiga, Kabupaten Lombok Tengah Propinsi Nusa Tenggara Barat - 83553', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (234, NULL, 4, 52, 7, '-8.779', '116.27294', 'Tanakawu Timur', 'Dusun Rebile, Desa Tanak Awu, Kecamatan Pujut, Kabupaten Lombok Tengah, Propinsi Nusa Tenggara Barat (83753)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (235, NULL, 4, 53, 7, '-8.79117', '116.28414', 'Ketara Timur', 'Dusun Enggaek, Desa Ketara, Kecamatan Pujut, Kabupaten Lombok Tengah, Propinsi Nusa Tenggara Barat (83573)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (236, NULL, 3, 32, 7, '-8.61797', '116.31042', 'Batukliang Timur', 'Dusun Taman Pedalaman, Desa Mantang, Kecamatan Batukliang, Kabupaten Lombok Tengah, Propinsi Nusa Tenggara Barat (83552)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (237, NULL, 3, 32, 7, '-8.61289', '116.31058', 'Mantang Barat', 'Weker, Dusun Sengkol, Desa Mantang, Kecamatan Batukliang, Kabupaten Lombok Tengah- Nusa Tenggara Barat (83552)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (238, NULL, 3, 32, 7, '-8.61811', '116.31636', 'Batukliang Barat', 'Dusun Jantuk, Desa Mantang, Kecamatan Batukliang, Kabupaten Lombok Tengah, Propinsi Nusa Tenggara Barat (83552)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (239, NULL, 3, 30, 7, '-8.60928', '116.31658', 'Selebung Selatan', 'Dusun Lendang Tengah, Desa Selebung, Kecamatan Batukliang, Kabupaten Lombok Tengah, Propinsi Nusa Tenggara Barat (83552)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (240, NULL, 1, 1, 7, '-8.70304', '116.27149', 'Gerunung Utara', 'Jl. A. Yani, Kel. Praya, Kec. Praya, Kab. Lombok Tengah, Nusa Tenggara Barat (83511)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (241, NULL, 9, 107, 7, '-8.54455', '116.37865', 'Wajageseng Selatan', 'Dusun Pertanian, Desa Aikbual, Kec. Kopang, Kab. Lombok Tengah-Nusa Tenggara Barat ( 83553)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (242, NULL, 9, NULL, 7, '-8.55389', '116.38028', 'Montong Betok Tenggara', 'Dusun Talun Ambon, Desa Air Bual, Kec. Kopang, Kab. Lombok Tengah, Nusa Tenggara Barat (83663)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (243, NULL, 9, 106, 7, '-8.57614', '116.36607', 'Wajageseng Barat', 'Dusun Lendang Telaga, Desa Wajageseng, Kec. Kopang, Kab. Lombok Tengah, Nusa Tenggara Barat (83553)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (244, NULL, 8, 92, 7, '-8.6199', '116.19251', 'Bilebante Timur', 'Dusun Bilebante, Desa Bilebante, Kecamatan Pringgarata, Kab. Lombok Tengah, Nusa Tenggara Barat (83562)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (245, NULL, 5, 57, 7, '-8.84211', '116.20369', 'Mangkung', 'Dusun Batu Ampun, Desa Mangkung Kec. Praya Barat Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (246, NULL, 8, 90, 7, '-8.61344', '116.20203', 'Bagu Lomteng', 'Dsn Medas. Ds. Bagu Kc. Pringgarata - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (247, NULL, 12, 139, 7, '-8.55378', '116.31356', 'Selat Pamepek', 'Dsn.Selojan, Ds.Karang Sidemen Kec.Batu kliang Utara Kab.lombok Tengah Prop.NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (248, NULL, 9, 101, 7, '-8.60873', '116.36486', 'Bebuaq', 'Dsn. Jurid Ds. Bebuaq Kec. Kopang Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (249, NULL, 5, 63, 7, '-8.7223', '116.22625', 'Batu Beduk', 'Dusun Batu Beduk, Desa Batujai, Kec. Praya barat Kab. Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (250, NULL, 6, 74, 7, '-8.81014', '116.36624', 'Marong Lombok Tengah', 'Dusun Kidang, Desa Kidang Kec.Praya Timur - Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (251, NULL, 5, 57, 7, '-8.80101', '116.22616', 'Penunjak Mangkung Daya', 'Mangkung Daye Ds. Mangkung Kec. Praya Barat Kab. Lomteng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (252, NULL, 4, 42, 7, '-8.81278', '116.33114', 'Teruwai', 'Monyel, Ds.  Teruwai, Kecamatan Pujut, Kab.Lombok Tengah - NTB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (253, 'NB-0005-T-S', 2, 18, 16, '-8.6723', '116.2245', 'Jelantik', 'Jl. Praya - Sweta, Dusun Simbar, Desa Jelantik, Kecamatan Jonggat, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (254, 'NB-0006-T-S', 3, 32, 16, '-8.616', '116.3111', 'Mantang', 'Mantang I Pedalaman, Desa Mantang, Kecamatan Batukliang, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (255, 'NB-0007-T-S', 6, 72, 16, '-8.76915', '116.400223', 'Ganti', 'Jl. Ganti II, Dusun Bebatu, Desa Ganti, Kecamatan Praya Timur, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (256, 'NB-0012-T-S', 4, 47, 16, '-8.8904', '116.2783', 'Kuta', 'Kuta Desa Kuta, Kecamatan Pujut, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (257, 'NB-0015-T-S', 4, 46, 16, '-8.854056', '116.184722', 'Rep Lombok 1 (Kuta)', 'Dusun Selemang Desa Rembitan, Kecamatan Pujut, Kabupaten Lombok Tengah, Provinsi Nusa Tenggara Barat\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (258, 'BA-0332-T-B', 10, 114, 16, '-8.72954', '116.31222', 'Gerantung', 'Jalan Raya Lintas Riris Praya Dusun Macan Desa Batunyala, Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `tbl_menara_seluler` VALUES (259, 'BA-0319-T-B', 4, 39, 16, '-8.80101', '116.29179', 'Sengkol', 'Jalan Raya Sengkol - Kuta, Dusun Pampang Desa Sengkol  \nKec. Pujut Lombok Tengah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tbl_pengajuan_permohonan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pengajuan_permohonan`;
CREATE TABLE `tbl_pengajuan_permohonan`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nomor_pengajuan` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_perusahaan` int(11) NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email_pemohon` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telepon_pemohon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(10) NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `file_url` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pengajuan_permohonan
-- ----------------------------
INSERT INTO `tbl_pengajuan_permohonan` VALUES (2, '002/LOTENG-GIS/I/2021', 1, 'Permohonan izin menara di desa ganti', 'lukman821@gmail.com', '087756286084', 0, '2021-01-29 01:26:39', '2021-01-29 01:26:39', '2a01ebfadb04f8840a6ff31dd40e0e9c.pdf');

-- ----------------------------
-- Table structure for tbl_permohonan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_permohonan`;
CREATE TABLE `tbl_permohonan`  (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_syarat` int(255) NULL DEFAULT NULL,
  `id_pengajuan` int(255) NOT NULL,
  `status` int(10) NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `proccess_at` timestamp(0) NULL DEFAULT NULL,
  `accept_at` timestamp(0) NULL DEFAULT NULL,
  `source` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_pengajuan`(`id_pengajuan`) USING BTREE,
  CONSTRAINT `tbl_permohonan_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `tbl_pengajuan_permohonan` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_permohonan
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_syarat
-- ----------------------------
DROP TABLE IF EXISTS `tbl_syarat`;
CREATE TABLE `tbl_syarat`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slug` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `is_trashed` int(10) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_syarat
-- ----------------------------
INSERT INTO `tbl_syarat` VALUES (1, 'Surat Permohonan Rekomendas', 'surat-permohonan-rekomendasi', '2021-01-19 21:55:37', '2021-01-19 22:46:52', 0);
INSERT INTO `tbl_syarat` VALUES (3, 'Surat Pernyataan Kepemilikan / Bangunan', 'surat-pernyataan-kepemilikan', '2021-01-19 22:52:29', '2021-01-19 22:52:29', 0);
INSERT INTO `tbl_syarat` VALUES (4, 'Surat Keterangan Tanah', 'suket-tanah', '2021-01-19 22:52:59', '2021-01-19 22:52:59', 0);
INSERT INTO `tbl_syarat` VALUES (5, 'Surat Pernyataan Tidak Sengketa dan Tidak Dalam Jaminan', 'suket-tidak-sengketa', '2021-01-19 22:53:40', '2021-01-19 22:53:40', 0);
INSERT INTO `tbl_syarat` VALUES (6, 'Surat Pernyataan Status Lahan dan Bangunan', 'super-status-lahan', '2021-01-19 22:54:15', '2021-01-19 22:54:15', 0);
INSERT INTO `tbl_syarat` VALUES (7, 'Surat Rekomendasi Kepla Desa', 'surek-kepala-desa', '2021-01-19 22:54:44', '2021-01-19 22:54:44', 0);
INSERT INTO `tbl_syarat` VALUES (8, 'Surat Rekmondasi Camat', 'surek-camat', '2021-01-19 22:55:14', '2021-01-19 22:55:14', 0);
INSERT INTO `tbl_syarat` VALUES (9, 'Berita Acara Pengukuran Warga Radius Tower', 'berita-acara-pengukuran-radius', '2021-01-19 22:56:29', '2021-01-19 22:56:29', 0);
INSERT INTO `tbl_syarat` VALUES (10, 'Bukti Penerimaan Pemberitahuan Persetujuan Warga Dalam Radius', 'bukti-persetujuan-warga-dalam-radius', '2021-01-19 22:57:36', '2021-01-19 22:57:36', 0);
INSERT INTO `tbl_syarat` VALUES (11, 'Surat Persetujuan Warga Dalam Radius', 'surat-persetujuan-warga-dalam-radius', '2021-01-19 23:00:47', '2021-01-19 23:01:09', 0);
INSERT INTO `tbl_syarat` VALUES (12, 'Berita Acara Kesepakatan (BAK)', 'berita-acara-kesepakatan', '2021-01-19 23:01:52', '2021-01-19 23:01:52', 0);
INSERT INTO `tbl_syarat` VALUES (13, 'Sketsa Batas Lahan', 'sketsa-batas-lahan', '2021-01-19 23:02:16', '2021-01-19 23:02:16', 0);
INSERT INTO `tbl_syarat` VALUES (14, 'Berita Acara Negosiasi ( BAN ) Sewa Lahan', 'ban-sewa-lahan', '2021-01-19 23:04:15', '2021-01-19 23:04:15', 0);
INSERT INTO `tbl_syarat` VALUES (15, 'Surat Persetujuan Lahan dan Jalan', 'surat-persetujuan-lahan-jalan', '2021-01-19 23:04:56', '2021-01-19 23:04:56', 0);
INSERT INTO `tbl_syarat` VALUES (16, 'Surat Pernyataan Persetujuan Keluarga', 'super-persetujuan-keluarga', '2021-01-19 23:05:31', '2021-01-19 23:05:31', 0);
INSERT INTO `tbl_syarat` VALUES (17, 'Surat Persetujuan Suami Isteri', 'super-suami-isteri', '2021-01-19 23:05:57', '2021-01-19 23:05:57', 0);
INSERT INTO `tbl_syarat` VALUES (18, 'Surat Pernyataan Tower Bersama', 'super-tower-bersama', '2021-01-19 23:06:40', '2021-01-19 23:06:40', 0);
INSERT INTO `tbl_syarat` VALUES (19, 'Layout atau Denah Lokasi Penempatan Menara / Tower Dalam Radius Tower', 'layout-denah-penempatan-menara-dalam-radius', '2021-01-19 23:08:17', '2021-01-19 23:08:17', 0);
INSERT INTO `tbl_syarat` VALUES (20, 'Surat Keterangan Bebas Banjir', 'suket-bebas-banjir', '2021-01-19 23:08:36', '2021-01-19 23:08:36', 0);
INSERT INTO `tbl_syarat` VALUES (21, 'Foto Copy KTP Warga Radius Tower', 'foto-copy-ktp-warga-radius-tower', '2021-01-19 23:09:19', '2021-01-19 23:09:19', 0);
INSERT INTO `tbl_syarat` VALUES (22, 'KK, NPWP, Buku Nikah, SPPT, Sertifikat Pemilik', 'kk-buku-nikah-sertifikat-pemilik', '2021-01-19 23:10:17', '2021-01-19 23:10:17', 0);

-- ----------------------------
-- Table structure for trx_pengajuan
-- ----------------------------
DROP TABLE IF EXISTS `trx_pengajuan`;
CREATE TABLE `trx_pengajuan`  (
  `id_pengajuan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(5) NULL DEFAULT NULL,
  `komentar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_by` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trx_pengajuan
-- ----------------------------
INSERT INTO `trx_pengajuan` VALUES ('2', NULL, 'DI update', '2021-01-29 09:08:26', '2021-01-29 21:08:26', 'lukman821@gmail.com');

-- ----------------------------
-- Table structure for user_token
-- ----------------------------
DROP TABLE IF EXISTS `user_token`;
CREATE TABLE `user_token`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_token
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` enum('administrator','user') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'user',
  `last_login` datetime(0) NULL DEFAULT NULL,
  `avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'noavatar.png',
  `active` enum('0','1') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1',
  `id_perusahaan` int(255) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `username`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 41 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Super Admin', '0809899993', 'administrator', '$2y$10$hhnC6P3N3EMPjrHIxyrjY.kGzRGNY4bUJXCq.XdsCbNCz3PQfW8kS', 'administrator', '2021-01-29 01:09:17', 'administrator_20190804204056.jpg', '1', 0);
INSERT INTO `users` VALUES (33, 'Farid Julianto', '123456778888', 'faridjulianto.ganti@gmail.com', '$2y$10$.GhKy9qGSOYF5fzGtEgO/eYgrgDJAXwlqH6SbBo05Cv3gYQ5PKvk2', 'user', '2021-01-17 23:43:12', 'noavatar.png', '1', 0);
INSERT INTO `users` VALUES (34, 'Walet Coba', '12345', 'walet.ganti@gmail.com', '$2y$10$gI8TSP/GeH6RodcasuS6T.z/hQCqU7TfBgSbxiDh.Vg9TtOZtHtm6', 'user', '2021-01-28 10:21:56', 'noavatar.png', '1', 39);
INSERT INTO `users` VALUES (35, 'Mahir', '123456', 'mahir.ganti@gmail.com', '$2y$10$8DSs4iWkNA8bhoroH8C3peX1TAlpFmN8xoBj5Rx0ZzrDtza1kKPsi', 'user', '2021-01-23 01:12:41', 'noavatar.png', '1', 0);
INSERT INTO `users` VALUES (40, 'Lukman Hakim', '087756286084', 'lukman821@gmail.com', '$2y$10$PfTo41yqw.0c/ykuphcN1.06hj0f3rB7/4d7Mgcf7PvSpCk3BwyBm', 'user', '2021-01-29 21:04:28', 'noavatar.png', '1', 1);

SET FOREIGN_KEY_CHECKS = 1;
