<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'Tips Cepat Pintar',
                'content' => 'Lorem Ipsum',
                'cover'   => '',
            ],
            [
                'title' => 'Membangun Visi Misi Sukses',
                'content' => 'Lorem Ipsum',
                'cover'   => '',
            ],
        ]);
    }
}
