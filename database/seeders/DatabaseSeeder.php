<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\User;
use App\Models\Profile;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the Application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creating users
        $user1 = User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin Siruca',
                'password' => Hash::make('admin123'),
                'isAdmin' => '1',
            ]
        );

        $user2 = User::updateOrCreate(
            ['email' => 'haryo@gmail.com'],
            [
                'name' => 'Haryo',
                'password' => Hash::make('12345678'),
                'isAdmin' => '0',
            ]
        );

        // Creating profiles
        Profile::updateOrCreate(
            ['users_id' => $user1->id],
            [
                'npm' => 'admin',
                'prodi' => 'admin',
                'alamat' => 'Malang',
                'noTelp' => '081232322255',
            ]
        );

        Profile::updateOrCreate(
            ['users_id' => $user2->id],
            [
                'npm' => '2141723212',
                'prodi' => 'Sistem Informasi Bisnis',
                'alamat' => 'Madiun',
                'noTelp' => '089609760132',
            ]
        );

        // Creating categories related to Information Technology
        Kategori::updateOrCreate(
            ['nama' => 'Pemrograman'],
            ['deskripsi' => 'Buku tentang berbagai bahasa pemrograman']
        );
        Kategori::updateOrCreate(
            ['nama' => 'Database'],
            ['deskripsi' => 'Buku tentang pengelolaan basis data']
        );
        Kategori::updateOrCreate(
            ['nama' => 'Jaringan Komputer'],
            ['deskripsi' => 'Buku tentang jaringan komputer dan keamanan']
        );
        Kategori::updateOrCreate(
            ['nama' => 'Sistem Operasi'],
            ['deskripsi' => 'Buku tentang konsep dan pengelolaan sistem operasi']
        );
        Kategori::updateOrCreate(
            ['nama' => 'Kecerdasan Buatan'],
            ['deskripsi' => 'Buku tentang AI dan pembelajaran mesin']
        );
        Kategori::updateOrCreate(
            ['nama' => 'Pengembangan Web'],
            ['deskripsi' => 'Buku tentang pengembangan web dan aplikasi']
        );
        Kategori::updateOrCreate(
            ['nama' => 'Pemrograman Berorientasi Objek'],
            ['deskripsi' => 'Buku tentang konsep OOP']
        );
        Kategori::updateOrCreate(
            ['nama' => 'Keamanan Siber'],
            ['deskripsi' => 'Buku tentang keamanan siber']
        );

        // Creating books related to Information Technology
        Buku::updateOrCreate(
            ['kode_buku' => 'PRG-01'],
            [
                'Judul' => 'Pemrograman Dasar dengan Python',
                'Pengarang' => 'Guido van Rossum',
                'Penerbit' => 'O\'Reilly Media',
                'tahun_terbit' => '2015',
                'deskripsi' => 'Buku ini menjelaskan dasar-dasar pemrograman menggunakan bahasa Python.'
            ]
        );
        Buku::updateOrCreate(
            ['kode_buku' => 'DB-01'],
            [
                'Judul' => 'Desain Database dengan MySQL',
                'Pengarang' => 'Paul DuBois',
                'Penerbit' => 'Sams Publishing',
                'tahun_terbit' => '2008',
                'deskripsi' => 'Buku ini membahas cara mendesain dan mengelola database menggunakan MySQL.'
            ]
        );
        Buku::updateOrCreate(
            ['kode_buku' => 'NET-01'],
            [
                'Judul' => 'Jaringan Komputer: Dasar dan Aplikasinya',
                'Pengarang' => 'Andrew S. Tanenbaum',
                'Penerbit' => 'Prentice Hall',
                'tahun_terbit' => '2003',
                'deskripsi' => 'Buku ini mengulas dasar-dasar jaringan komputer dan aplikasinya dalam dunia nyata.'
            ]
        );
        Buku::updateOrCreate(
            ['kode_buku' => 'OS-01'],
            [
                'Judul' => 'Konsep Sistem Operasi',
                'Pengarang' => 'Abraham Silberschatz',
                'Penerbit' => 'John Wiley & Sons',
                'tahun_terbit' => '2013',
                'deskripsi' => 'Buku ini membahas konsep dasar dan manajemen sistem operasi.'
            ]
        );
        Buku::updateOrCreate(
            ['kode_buku' => 'AI-01'],
            [
                'Judul' => 'Pembelajaran Mesin dan Kecerdasan Buatan',
                'Pengarang' => 'Tom M. Mitchell',
                'Penerbit' => 'McGraw-Hill',
                'tahun_terbit' => '1997',
                'deskripsi' => 'Buku ini memberikan pengantar ke pembelajaran mesin dan kecerdasan buatan.'
            ]
        );
        Buku::updateOrCreate(
            ['kode_buku' => 'WEB-01'],
            [
                'Judul' => 'Pengembangan Web Modern dengan React dan Redux',
                'Pengarang' => 'Dan Abramov',
                'Penerbit' => 'Packt Publishing',
                'tahun_terbit' => '2018',
                'deskripsi' => 'Buku ini membahas pengembangan web menggunakan framework React dan Redux.'
            ]
        );
        Buku::updateOrCreate(
            ['kode_buku' => 'OOP-01'],
            [
                'Judul' => 'Pemrograman Berorientasi Objek dengan Java',
                'Pengarang' => 'Herbert Schildt',
                'Penerbit' => 'McGraw-Hill Education',
                'tahun_terbit' => '2014',
                'deskripsi' => 'Buku ini membahas konsep dan implementasi pemrograman berorientasi objek menggunakan Java.'
            ]
        );
        Buku::updateOrCreate(
            ['kode_buku' => 'SEC-01'],
            [
                'Judul' => 'Keamanan Siber dan Teknik Hacking',
                'Pengarang' => 'Bruce Schneier',
                'Penerbit' => 'John Wiley & Sons',
                'tahun_terbit' => '2015',
                'deskripsi' => 'Buku ini mengulas berbagai aspek keamanan siber dan teknik hacking.'
            ]
        );
    }
}
