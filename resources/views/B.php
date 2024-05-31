Kimia_Farma/
├── app/            
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/       <!-- Menangani Permintaan HTTP, Mengembalikan Respons & Mengelola Logika Bisnis -->
│   │   ├── Controllers/    
│   │   │   ├── Controller.php  
│   │   │   ├── DokterController.php  
│   │   │   ├── ObatController.php  
│   │   │   ├── PasienController.php  
│   │   │   ├── UserController.php  
│   │   │   └── HomeController.php  
│   │   │
│   │   ├── Middleware/
│   │   └── Kernel.php
│   │
│   ├── Providers/
│   └── Models/     <!-- Direktori untuk menyimpan model Eloquent --> 
│       ├── DokterModel.php 
│       ├── ObatModel.php
│       ├── User.php
│       └── PasienModel.php
│   
├── bootstrap/      <!-- Direktori ini berisi file bootstrap aplikasi -->
│   ├── Cache/
│   └── ...
├── config/         <!-- Direktori ini berisi file konfigurasi berbagai aspek aplikasi -->
│   ├── ...
│   └── ...
├── database/       <!-- file-file migrasi untuk membuat & memodifikasi struktur tabel di basis data. -->
│   ├── Factories/
│   ├── Migration/  
│   └── Seeders/
│   
├── public/         <!-- Direktori ini berisi file yang dapat diakses secara publik -->
│   ├── Assets/
│   ├── Images/
│   └── .Htaccess   
│   
├── resources/      <!--    Direktori ini berisi sumber daya aplikasi seperti view (dalam folder views), 
│   │                       file bahasa (dalam folder lang), dan aset frontend seperti file CSS dan JavaScript -->
│   ├── Css/
│   ├── View/       
│   │   ├── Auth/
│   │   ├── Dokter/
│   │   ├── Pasien/
│   │   ├── Obat/
│   │   ├── Pages/
│   │   ├── Includes/
│   │   ├── Layouts/
│   │   └── Welcome.blade.php
│   └── .Js
│   
├── routes/         <!-- Direktori ini berisi file-file yang mendefinisikan semua routes untuk aplikasi Anda. -->
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php     
│   
├── storage/        <!-- Direktori untuk menyimpan file yang dihasilkan aplikasi, seperti log, cache, file sesi, dan file yang diunggah. -->
│   ├── log/
│   ├── app/
│   └── framework/
│   
├── test/           <!-- Direktori ini berisi file-file pengujian untuk aplikasi Anda -->
│   ├── Features/
│   ├── Unit/
│   └── TestCase.php
│   
├── vendor/         <!-- Direktori ini berisi semua dependensi atau pustaka pihak ketiga yang diinstal melalui Composer -->
│   ├── bin/
│   └── ...
├── .env            <!-- File ini berisi (environment variables) seperti pengaturan database, dan layanan pihak ketiga.-->
├── artisan
└── README.md
