create DATABASE PERPUSTAKAAN_db
use PERPUSTAKAAN_DB;

CREATE TABLE buku(
    id INT identity(1,1) PRIMARY KEY,
    judul VARCHAR(200) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    tahun INT,
    stok INT DEFAULT 0
);

CREATE TABLE anggota (
    id INT identity (1,1) PRIMARY KEY,
    nama VARCHAR (100) NOT NULL,
    email VARCHAR (100) UNIQUE NOT NULL,
    tgl_daftar date
);

CREATE TABLE peminjaman(
    id INT IDENTITY (1,1) PRIMARY KEY,
    id_buku INT NOT NULL,
    id_anggota INT NOT NULL,
    tanggal_pinjam DATE,
    tanggal_kembali DATE

    FOREIGN KEY (id_buku) REFERENCES buku(id),
    FOREIGN KEY (id_anggota) REFERENCES anggota(id)
);

select *from buku;
select*from anggota;
select*from peminjaman;

INSERT INTO buku (judul, penulis, tahun, stok)
VALUES 
('Pemrograman PHP', 'Yuna Elisabet', 2022, 8),
('BUMI', 'Tere Liye', 2020, 10),
('Aku adalah orang', 'Budi', 2023, 20),
('Cinta Misteri', 'Desta', 2025, 13),
('Gurindam', 'Hamzah', 2022, 3);

SELECT * FROM buku
WHERE tahun>2020
ORDER BY judul ASC;

SELECT * FROM buku 
where judul like '%PHP%';


UPDATE buku
set stok = 10
where id = 2;

delete from buku
where id = 5;

insert into buku (judul, penulis, tahun, stok)
values ('Gurindam', 'Hamzah',2026, 16);