
CREATE DATABASE IF NOT EXISTS smk;
USE smk;

CREATE TABLE IF NOT EXISTS anggota (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    kelas VARCHAR(20)
);

INSERT INTO anggota (nama, kelas)
SELECT 'Andi', 'XI RPL 1'
WHERE NOT EXISTS (
    SELECT 1 FROM anggota WHERE nama = 'Andi' AND kelas = 'XI RPL 1'
);

INSERT INTO anggota (nama, kelas)
SELECT 'Budi', 'XI RPL 2'
WHERE NOT EXISTS (
    SELECT 1 FROM anggota WHERE nama = 'Budi' AND kelas = 'XI RPL 2'
);
