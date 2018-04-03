# SimiceWeb
Admin Panel Aplikasi Pengaduan Masyarakat based Web

1. NAMA APLIKASI : si-mice (Sistem Informasi Maintenance Improvement
Comunication Empowerment)
2. Terdiri atas 7 modul :
a. Modul pendampingan
Berisi permintaan pendampingan oleh user terhadap permasalahan tugas yang
dijalankannya. Contoh : user menghadapi masalah terhadap instansi BANK, jadi user
menginput permintaan pendampingan baru berupa : tanggal, detail informasi masalah,
upload foto/dokumen.
Selanjutnya admin menjawab permintaan pendampingan tersebut.
Status pendampingan terdiri atas New, Proses, Finish, dan disediakan detail statusnya.
Untuk status di update oleh admin
b. Modul Pengaduan
Terdiri atas 5 pilihan pengaduan yaitu :
- Keorganisasian : berkaitan dengan aduan terhadap permasalahan pengurus lembaga
kemasyarakatan dengan aparat kelurahan
- Rastra dan Raskin Madani : berkaitan dengan aduan terhadap permasalahan dalam hal
Rastra (beras sejahtera) dan Raskin (beras miskin)
- Jumling : berkaitan dengan aduan terhadap permasalahan seperti sampah, lampu jalan
yang mati, parit tersumbat, jalan rusak, dan lainnya (kalau bisa pakai opsi/pilihan yang
bisa di tambah dan dikurangi)
- BSPS dan Aladin : berkaitan dengan aduan BSPS dan Aladin yaitu bantuan rumah untuk
masyarakat miskin
- Dana Stimulan : berkaitan dengan aduan penggunaan dana stimulan yang dilaksanakan
kelurahan
Untuk modul pengaduan ini berisi isian tanggal,detail aduan, jenis aduan (untuk pengaduan
jumling), foto/dokumen diupload, lokasi masalah yang diadukan
c. Modul Informasi
Berisi informasi atau pengumuman berbagai kegiatan yang dilakukan. Berupa gambar, detail
kegiatan, yang diinput oleh admin. Informasi akan tampil dihalaman depan aplikasi berupa
slide show dan dapat dilihat oleh semua orang tanpa harus login.
d. Modul BPJS
Sama seperti modul pendampingan dan pengaduan, tapi masalah lebih spesifik yaitu hanya
khusus BPJS. Modul ini terdiri atas 2 jenis yaitu BPJS Kesehatan dan BPJS Ketenagakerjaan.
User yang mengadukan masalah akan didampingi seperti pendampingan juga, jadi memiliki
status yaitu New, Proses, Finish dan detail statusnya
e. Modul Promosi
Berisi berbagai promosi yang diinput oleh user berupa file gambar, dan detail promosi.
Promosi akan tampil dihalaman depan aplikasi dan dapat dilihat oleh semua orang tanpa
harus login.
f. Modul Silaturahmi
Modul ini seperti aplikasi chating saja, yang menghubungkan semua user dan admin. Bisa
saling mengobrol.
g. Modul Dana Stimulan Pemberdayaan Masyarakat
Modul ini berisi pengajuan proposal kegiatan oleh user. Isian data berupa detail kegiatan,
tanggal pengajuan, file/dokumen proposal yang diupload oleh user.

3. User dalam hal ini adalah pengurus lembaga kemasyarakatan seperti kepling (kepala
lingkungan), dll. Jadi table jenis user harus disediakan
4. User yang telah login akan tetap login selama tidak logout dari aplikasi
5. User hanya dapat merubah password
6. Untuk data user keseluruhan diinput oleh admin, isian data untuk user seperti iduser, NIK,
Nama, Alamat, Kota, Kecamatan, Kelurahan, NoHP, Email, Jenis User, username, password
