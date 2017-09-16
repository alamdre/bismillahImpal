create table akun (
username varchar(10),
password varchar(15),
jabatan varchar(20),
nip varchar(10),
primary key (username)
);

create table orderbrg(
id_brg varchar(10),
nama_brg varchar(15),
jenis_brg varchar(20),
jumlah int,
harga int,
status varchar(10),
total int,
tenggang_bayar date,
nama_perusahaan varchar(20),
cp varchar(40),
tanggal date,
primary key(id_brg));