# pbkk-101

<h3 align="center"><a href="https://pbkk-101.duckdns.org/">https://pbkk-101.duckdns.org/</a></h3>

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)
![Node.js](https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=nodedotjs&logoColor=white)
![Nginx](https://img.shields.io/badge/Nginx-009639?style=for-the-badge&logo=nginx&logoColor=white)
![Azure](https://img.shields.io/badge/Azure-0078D4?style=for-the-badge&logo=microsoftazure&logoColor=white)
![Let's Encrypt](https://img.shields.io/badge/Let's_Encrypt-003A70?style=for-the-badge&logo=letsencrypt&logoColor=white)
![DuckDNS](https://img.shields.io/badge/DuckDNS-3C9C5B?style=for-the-badge&logo=duckduckgo&logoColor=white)
![SSL](https://img.shields.io/badge/SSL-FF9900?style=for-the-badge&logo=ssl&logoColor=white)

- [Website unavailable for you to see? guide to local deploy](#local-deployment)

## Progress Tracker

- [x] **Home Page** - Profil Mahasiswa Kelompok 2
- [x] **About Page** - Profil Departemen Teknik Informatika ITS
- [x] **Project Idea** - Agentic AI Platform
- [x] **Tantangan 1** - `GET '/hitung/{angka1}/{angka2}/{operasi}'`
- [x] **Tantangan 2** - Kustomisasi Visual (Tailwind CSS, Responsive)


## Rangkuman Hasil Website

### 1. Home Page ( Profil Mahasiswa Kelompok 2 )

| ![homepage](./public/screenshots/web-home.png) |
| :--: |
| Pada tampilan Home, terdapat profil anggota kelompok 2 yang terdiri atas Nama Lengkap dan NRP dari masing-masing mahasiswa |

  
### 2. About Page

| ![about](./public/screenshots/web-about.png) |
| :--: |
| Pada tampilan About, terdapat profil singkat mengenai Departemen Teknik Informatika ITS yang  berisikan deskripsi singkat, visi dan misinya. |

| ![about](./public/screenshots/web-about-2.png) |
| :--: |
| Serta lokasi dari Departemen Teknik Informatika ITS |


### 3. Project Idea Page

| ![project-idea](./public/screenshots/web-project-idea.png) |
| :--: |
| Pada tampilan Project Idea, terdapat overview dan tujuan dari ide projek yang ingin kami lakukan ( Tema : monitoring dan analisis log sistem untuk menemukan masalah pada sistem )  

| ![project-idea-2](./public/screenshots/web-project-idea-2.png) |
| :--: |
| Beserta harapan kami dari projek tersebut dan status development dari projek tersebut ( sekarang tercatat sebagai "in development" ) |


### 4. Tantangan 1: ``GET '/hitung/{angka1}/{angka2}/{operasi}'``

| ![tambah](./public/screenshots/web-tantangan1-tambah.png) |
| :--: |
| ![kurang](./public/screenshots/web-tantangan1-kurang.png) |
| ![kali](./public/screenshots/web-tantangan1-kali.png) |
| ![bagi](./public/screenshots/web-tantangan1-bagi.png) |


### 5. Tantangan 2: Kustomisasi Visual

Layout responsif dan menggunakan framework CSS (tailwindcss) untuk styling. Navbar telah diimplementasikan dengan memperhatikan layout yang responsif.

| Android | Navbar Expanded |
| :--: | :--: |
| ![android](./public/screenshots/web-tantangan2-android.png) | ![android-navbar](./public/screenshots/web-tantangan2-android-navbar.png) |


### Bonus: 404 Handler

| ![404](./public/screenshots/web-404.png) |
| :--: |


---


## Local Deployment

1. **Clone the repository**

    ```bash
    git clone https://github.com/ilhmpbta/pbkk-101
    cd pbkk-101
    ```

    * Or if you already have the repository cloned, you can pull the latest changes
    
        ```bash
        git pull
        ```

2. **Install dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Copy environment file**

    ```bash
    cp .env.example .env
    php artisan key:generate
    php artisan config:clear
    ```

4. **Create database**

    ```bash
    touch database/database.sqlite
    php artisan migrate
    ```

    * If you use windows, you have to create the database file with the following command
    
        ```bash
        New-Item -Path "database\database.sqlite" -ItemType File
        php artisan migrate
        ```

5. **Start the app**

    ```bash
    npm run start
    ```

---
