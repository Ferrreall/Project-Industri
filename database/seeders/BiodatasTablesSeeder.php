<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [
                'nama_lengkap' => 'Feri',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Tarate',
                'telepon' => '083113014310',
                'email' => 'feri@gmail.com',
            ],

            [
                'nama_lengkap' => 'Reza',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2009-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Cibiru',
                'telepon' => '085413014310',
                'email' => 'reza@gmail.com',
            ],

            [
                'nama_lengkap' => 'Fatahillah',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-9-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Rancamanyar',
                'telepon' => '083113456310',
                'email' => 'ipat@gmail.com',
            ],

            [
                'nama_lengkap' => 'Rava',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2005-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'kopo',
                'telepon' => '085473014310',
                'email' => 'galang@gmail.com',
            ],

            [
                'nama_lengkap' => 'Alham',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2010-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Rancamanyar',
                'telepon' => '083113014310',
                'email' => 'alham@gmail.com',
            ],

            [
                'nama_lengkap' => 'Arya',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2008-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Tarate',
                'telepon' => '087789014310',
                'email' => 'arya@gmail.com',
            ],

            [
                'nama_lengkap' => 'Faisal',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2007-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Citepus',
                'telepon' => '083113088910',
                'email' => 'faisal@gmail.com',
            ],

            [
                'nama_lengkap' => 'Ahmad',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2007-9-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Kopo',
                'telepon' => '083113014310',
                'email' => 'ahmad@gmail.com',
            ],

            [
                'nama_lengkap' => 'Topik',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2006-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'Bojong Cijerah',
                'telepon' => '083112333310',
                'email' => 'topick@gmail.com',
            ],

            [
                'nama_lengkap' => 'Jauf',
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2006-10-12',
                'tempat_lahir' => 'Bandung',
                'agama' => 'Islam',
                'alamat' => 'TCI',
                'telepon' => '083999914310',
                'email' => 'jaup@gmail.com',
            ],
        ]);
    }
}
