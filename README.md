---

# Absensi Digital

Absensi Digital adalah aplikasi berbasis web yang dirancang untuk mencatat dan mengelola data kehadiran secara digital. Aplikasi ini dibangun menggunakan framework Laravel dan dijalankan di server web Apache, dengan PHP 8.3 dan MySQL sebagai basis datanya. Proyek ini mendukung pencatatan kehadiran secara efisien dan mudah digunakan dalam lingkungan kerja atau sekolah.

## Fitur Utama
- **Pencatatan Kehadiran Real-time**: Pengguna dapat mencatat kehadiran mereka dengan satu klik.
- **Manajemen Pengguna**: Tambah, hapus, dan edit data pengguna secara mudah.
- **Laporan Kehadiran**: Menyediakan laporan yang dapat diakses kapan saja untuk analisis kehadiran.
- **Migrasi Basis Data**: Otomatisasi skema basis data menggunakan fitur migrasi Laravel.

## Persyaratan
Sebelum memulai instalasi, pastikan Anda memiliki:
- **Ubuntu** 20.04 atau yang lebih baru
- **Git**
- **PHP 8.3** beserta ekstensi yang diperlukan
- **Composer**
- **MySQL** server

## Instalasi
Berikut adalah langkah-langkah instalasi dan konfigurasi untuk menjalankan aplikasi Absensi Digital:

### 1. Update dan Instalasi Paket yang Diperlukan
```bash
sudo apt update && sudo apt upgrade -y
sudo apt install git -y
sudo apt install php8.3-mysql libapache2-mod-php8.3 -y
sudo apt install php8.3-dom php8.3-gd php8.3-mbstring php8.3-xml php8.3-zip php8.3-curl -y
```

### 2. Clone Repository dan Atur Direktori
Clone proyek dari GitHub dan pindahkan ke direktori web server.
```bash
git clone https://github.com/eKyyTRY/Absensi-Digital.git
sudo mv Absensi-Digital /var/www/
cd /var/www/Absensi-Digital
```

### 3. Instalasi dan Konfigurasi Composer
Instal Composer dan instal dependensi proyek.
```bash
sudo apt install composer -y
composer update
composer install
```

### 4. Konfigurasi File Lingkungan (.env)
Salin file `.env` contoh dan sesuaikan dengan konfigurasi Anda.
```bash
cp .env.example .env
sudo chown -R www-data:www-data /var/www/Absensi-Digital
sudo chmod -R 755 /var/www/Absensi-Digital
```

### 5. Generate Application Key dan Migrasi Database
Generate kunci aplikasi Laravel dan jalankan migrasi database.
```bash
sudo php artisan key:generate
php artisan migrate
```

### 6. Konfigurasi Virtual Host Apache
Buat file konfigurasi virtual host Apache:
```bash
sudo nano /etc/apache2/sites-available/absensi-digital.conf
```

Isi file dengan konfigurasi berikut:
```apache
<VirtualHost *:80>
    ServerAdmin admin@example.com
    DocumentRoot /var/www/Absensi-Digital/public
    ServerName absensi-digital.local

    <Directory /var/www/Absensi-Digital>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

Aktifkan konfigurasi situs dan modul rewrite, lalu restart Apache:
```bash
sudo a2ensite absensi-digital.conf
sudo a2enmod rewrite
sudo systemctl restart apache2
```

### 7. Konfigurasi MySQL
Buat database dan user untuk aplikasi:
```bash
sudo apt install mysql-server -y
sudo mysql -u root -p
```

Di dalam MySQL shell:
```sql
CREATE DATABASE absen;
CREATE USER 'absen_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON absen.* TO 'absen_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

### 8. Clear Cache dan Restart Layanan
Pastikan aplikasi bebas dari cache dan konfigurasi baru diterapkan:
```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
```

## Akses Aplikasi
Setelah instalasi selesai, Anda dapat mengakses aplikasi dengan membuka alamat `http://absensi-digital.local` di browser. Pastikan untuk menambahkan entri berikut pada file `/etc/hosts` di mesin Anda:
```plaintext
127.0.0.1 absensi-digital.local
```
