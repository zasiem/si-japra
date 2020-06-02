# SI - JAPRA

## What is SI-Japra?
Aplikasi berbasis web untuk memfasilitasi absensi kerja praktek atau task harian dengan memberikan form sesuai kaidah `scrum`
*support system dari [Gambungstore](https://gambungstore.id), [Travedia](https://travedia.id) dan [S1 Sistem Informasi Tel-U](https://bis.telkomuniversity.ac.id)*

## Features
1. Presensi harian
2. History presensi
3. crud data startup dan divisi (on going)
4. report data absensi (on going)

## Installation & setup
1. `git clone https://github.com/zasiem/si-japra.git`
2. `composer install`
3. `setting .env file`, pastikan database sudah terarah pada service yang dipilih
4. `php spark migrate`
5. Seeding seluruh seeder yang disediakan dengan command `php spark db:seed nama_class_seeder`
5. `follow [this](https://instagram.com/erzaputra_)
6. `Enjoy!`

## Note
Credential email password admin ada pada `UsersSeeder`

## Stacks
1. Codeigniter 4
2. Mysql
3. Bootstrap
4. [Light Bootstrap Dashboard](https://www.creative-tim.com/product/light-bootstrap-dashboard)

## Developers
1. Erza Putra A - Software Engineer
2. none
