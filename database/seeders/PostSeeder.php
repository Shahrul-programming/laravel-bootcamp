<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('posts')->insert([
            [
                'slug' => 'asas-laravel-untuk-pemulaan1',
                'title' => 'Asas Laravel untuk Pemulaan1',
                'content' => 'Laravel adalah framework PHP yang popular untuk membangunkan aplikasi web. Dalam artikel ini, kita akan meneroka asas-asas Laravel, termasuk cara memasang dan memulakan projek Laravel pertama anda.',
                'author' => 'Shahrul Naduan Hamidon',
                'author_info' => 'Pengajar Pengaturcaraan',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'category' => 'Pembangunan Web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'asas-laravel-untuk-pemulaan2',
                'title' => 'Asas Laravel untuk Pemulaan2',
                'content' => 'Laravel adalah framework PHP yang popular untuk membangunkan aplikasi web. Dalam artikel ini, kita akan meneroka asas-asas Laravel, termasuk cara memasang dan memulakan projek Laravel pertama anda.',
                'author' => 'Shahrul Naduan Hamidon',
                'author_info' => 'Pengajar Pengaturcaraan',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'category' => 'Pembangunan Web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'asas-laravel-untuk-pemulaan3',
                'title' => 'Asas Laravel untuk Pemulaan3',
                'content' => 'Laravel adalah framework PHP yang popular untuk membangunkan aplikasi web. Dalam artikel ini, kita akan meneroka asas-asas Laravel, termasuk cara memasang dan memulakan projek Laravel pertama anda.',
                'author' => 'Shahrul Naduan Hamidon',
                'author_info' => 'Pengajar Pengaturcaraan',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'category' => 'Pembangunan Web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => 'asas-laravel-untuk-pemulaan4',
                'title' => 'Asas Laravel untuk Pemulaan4',
                'content' => 'Laravel adalah framework PHP yang popular untuk membangunkan aplikasi web. Dalam artikel ini, kita akan meneroka asas-asas Laravel, termasuk cara memasang dan memulakan projek Laravel pertama anda.',
                'author' => 'Shahrul Naduan Hamidon',
                'author_info' => 'Pengajar Pengaturcaraan',
                'image' => 'https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
                'category' => 'Pembangunan Web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
