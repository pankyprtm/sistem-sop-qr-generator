# 📌 Sistem SOP QR Generator

Sebuah aplikasi berbasis web untuk mengelola **SOP (Standard Operating Procedure)** dengan **QR Code Generator** dan **QR Code Scanner**.  
Sistem ini memudahkan **tamu/visitor** untuk mengetahui SOP suatu ruangan dengan cara **scan QR Code** yang sudah ditempelkan.

---

## ✨ Fitur Utama
- 📄 **Manajemen Data SOP**  
  Tambah, edit, hapus, dan simpan file SOP.
- 🔗 **QR Code Generator**  
  Setiap SOP otomatis memiliki QR Code unik.
- 📱 **QR Code Scanner**  
  User dapat langsung scan QR via kamera perangkat.
- 👨‍💻 **Autentikasi User**  
  Login & logout untuk admin pengelola data.
- 🎨 **UI Modern**  
  Menggunakan **Bootstrap 5** & **AdminLTE**.

---

## 🛠️ Teknologi
- [CodeIgniter 4](https://codeigniter.com/) (Framework PHP)
- [Bootstrap 5](https://getbootstrap.com/) (Frontend)
- [AdminLTE](https://adminlte.io/) (Template Admin)
- JavaScript, HTML, CSS, PHP
- MySQL / MariaDB

---

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/pankyprtm/sistem-sop-qr-generator.git
cd sistem-sop-qr-generator
2. Install Dependencies
composer install

3. Konfigurasi

Copy file .env.example menjadi .env, lalu atur database:

database.default.hostname = localhost
database.default.database = sop_qr
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

4. Migrasi Database
php spark migrate

5. Jalankan Aplikasi
php spark serve


Akses via browser:
👉 http://localhost:8080

📷 Preview
🔹 Dashboard & Data SOP
<p align="center"> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot1.png" width="45%" /> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot2.png" width="45%" /> </p>
🔹 Form Tambah Data
<p align="center"> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot3.png" width="45%" /> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot4.png" width="45%" /> </p>
🔹 QR Code Generator
<p align="center"> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot5.png" width="45%" /> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot6.png" width="45%" /> </p>
🔹 QR Scanner
<p align="center"> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot7.png" width="45%" /> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot8.png" width="45%" /> </p>
🔹 Lainnya
<p align="center"> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot9.png" width="45%" /> <img src="https://raw.githubusercontent.com/pankyprtm/sistem-sop-qr-generator/main/docs/img/Screenshot10.png" width="45%" /> </p>
👨‍💻 Pengembang

Dibuat dan dikembangkan oleh Panky Yoga Pratama.

📜 Lisensi

MIT © 2023
