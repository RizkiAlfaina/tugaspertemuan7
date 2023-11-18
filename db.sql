SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE mhs (
  nim bigint(10) NOT NULL,
  nama varchar(50) NOT NULL,
  prodi varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE mhs
  ADD PRIMARY KEY (id);
-- INSERT DUMMY DATA

INSERT INTO mhs (nim, nama, prodi) VALUES
('0000000001', 'Ari Suhandri', 'IF'),
('0000000002', 'Alina Ardhini', 'IF'),
('0000000003', 'Arisanti Rahayu', 'IF'),
('0000000004', 'Anas Supriyadi', 'IF'),
('0000000005', 'Alia Hariyah', 'IF'),
('0000000006', 'Andre Rama', 'SD'),
('0000000007', 'Ardita Amelia', 'SD'),
('0000000008', 'Anas Widodo', 'SD'),
('0000000009', 'Aryani Ade Wijaya', 'SD'),
('0000000010', 'Anisia Suyatna', 'SD'),
('0000000011', 'Andini Marlinah', 'MTK'),
('0000000012', 'Alvina Eka Prayitna', 'MTK'),
('0000000013', 'Anas Fariz', 'MTK'),
('0000000014', 'Arum Marhamah', 'MTK'),
('0000000015', 'Anita Indah Permata', 'MTK'),
('0000000016', 'Alwi Ariyo', 'TI'),
('0000000017', 'Anissa Ichsan', 'TI'),
('0000000018', 'Afrizal Samsul', 'TI'),
('0000000019', 'Arsyad Yanuar', 'TI'),
('0000000020', 'Andra Wisnu Saputra', 'TI'),
('0000000021', 'Aisyah Amelia', 'EL'),
('0000000022', 'Anna Karinia', 'EL'),
('0000000023', 'Ali Prasetyo', 'EL'),
('0000000024', 'Aris Hikmat', 'EL'),
('0000000025', 'Andra Anggoro', 'EL'),
('0000000026', 'Alina Elly', 'Teknik Lingkungan'),
('0000000027', 'Achmad Ardhiansyah', 'Teknik Geologi'),
('0000000028', 'Alia Ardiyanti', 'Teknik Sistem Tenaga Listrik'),
('0000000029', 'Ardi Suyanto', 'Teknik Fisika'),
('0000000030', 'Anna Ayu', 'Teknik Metalurgi'),
('0000000031', 'Andri Ramadhan', 'Teknik Kimia'),
('0000000032', 'Alifa Sukma', 'Teknik Lingkungan'),
('0000000033', 'Ade Eko Pribadi', 'Teknik Mesin Otomotif'),
('0000000034', 'Aulia Agung', 'Teknik Energi Baru'),
('0000000035', 'Anto Herlambang', 'Teknik Perhitungan Pertambangan'),
('0000000036', 'Alit Pratama', 'Teknik Material Engineering'),
('0000000037', 'Ardianta Lukman', 'Teknik Industri Farmasi'),
('0000000038', 'Anto Maruf', 'Teknik Proses Pertambangan'),
('0000000039', 'Alvianti Anita', 'Teknik Refrigiasi dan Tata Udara'),
('0000000040', 'Andre Ganteng', 'Teknik Material Engineering dan Manufaktur'),
('0000000041', 'Ananda Heryawan', 'Teknik Manufaktur Otomotif'),
('0000000042', 'Albert Ajimat', 'Teknik Industri Tekstil'),
('0000000043', 'Arief Achmad', 'Teknik Material dan Proses Otomotif'),
('0000000044', 'Ainun Nadhir', 'Teknik Manufaktur Pertambangan'),
('0000000045', 'Ajeng Arisani', 'Teknik Material dan Proses Mesin'),
('0000000046', 'Ajeng Astriani', 'Teknik Manufaktur Logistik'),
('0000000047', 'Afia Triwanti', 'Teknik Mesin Kapal dan Sistem Navigasi'),
('0000000048', 'Alvi Erlangga', 'Teknik Mesin dan Refrigiasi'),
('0000000049', 'Anis Ajib', 'Teknik Sipil dan Mesin'),
('0000000050', 'Alwis Djajadi', 'Teknik Geologi dan Sistem Informasi');

UPDATE mhs SET prodi = 'FI' WHERE nim BETWEEN '0000000026' AND '0000000030';
UPDATE mhs SET prodi = 'BIO' WHERE nim BETWEEN '0000000031' AND '0000000035';
UPDATE mhs SET prodi = 'DKV' WHERE nim BETWEEN '0000000036' AND '0000000040';
UPDATE mhs SET prodi = 'MJ' WHERE nim BETWEEN '0000000041' AND '0000000045';
UPDATE mhs SET prodi = 'TK' WHERE nim BETWEEN '0000000046' AND '0000000050';

COMMIT;