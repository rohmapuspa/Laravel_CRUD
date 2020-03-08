<?php

use Illuminate\Database\Seeder;

class jurusan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
        ['id'=>1,'jurusan'=>'Informatika'],
        ['id'=>2,'jurusan'=>'Sistem Informasi'],
        ['id'=>3,'jurusan'=>'Rekayasa Perangkat Lunak Aplikasi'],
        ['id'=>4,'jurusan'=>'Sistem Informasi Akuntansi'],
        ['id'=>5,'jurusan'=>'Teknologi Komputer']
        ]);

    }
}
