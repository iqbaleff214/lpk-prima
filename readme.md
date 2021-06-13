# LPK Prima Kapuas

By M. Iqbal Effendi

## Skema Database

### Tabel admin

| Kolom    | Tipe                   | Keterangan  |
| -------- | ---------------------- | ----------- |
| id_user  | int(11) auto_increment | Primary Key |
| username | vachar(50)             |             |
| password | vachar(255)            |             |
| nama     | vachar(50)             |             |

### Tabel siswa

| Kolom               | Tipe                   | Keterangan  |
| ------------------- | ---------------------- | ----------- |
| id_siswa            | int(11) auto_increment | Primary Key |
| nama                | vachar(100)            |             |
| tempat_lahir        | vachar(100)            |             |
| tanggal_lahir       | date                   |             |
| orang_tua           | vachar(100)            |             |
| agama               | vachar(100)            |             |
| agama               | vachar(100)            |             |
| jenis_kelamin       | enum('L', 'P')         |             |
| pendidikan_terakhir | vachar(100)            |             |
| pekerjaan           | vachar(100)            |             |
| alamat              | vachar(255)            |             |
| no_telp             | vachar(20)             |             |
| program             | vachar(100)            |             |
| status              | int(11)                |             |

### Tabel nilai

| Kolom    | Tipe                   | Keterangan                   |
| -------- | ---------------------- | ---------------------------- |
| id_nilai | int(11) auto_increment | Primary Key                  |
| tanggal  | date                   |                              |
| pn1      | vachar(5)              |                              |
| pn2      | vachar(5)              |                              |
| pn3      | vachar(5)              |                              |
| pn4      | vachar(5)              |                              |
| hasil    | vachar(15)             |                              |
| id_siswa | int(11)                | Foreign Key (siswa.id_siswa) |
