APLIKASI PORTAL SMK LPPM RI BANDUNG

Cara Penggunaan :

1. Clone Aplikasi menggunakan gitclone
2. Copy env.example menjadi .env
3. Pada CLI ketikkan php artisan key:generate
4. Ubah config pada .env dengan database, dan username masing - masing
5. Lakukan migrasi dengan mengetikkan pada CLI php artisan migrate:fresh
6. Lakukan seeding pada CLI dengan mengetikkan php artisan db:seed
