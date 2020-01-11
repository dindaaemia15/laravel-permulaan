<?php

use Illuminate\Database\Seeder;

    class PostsTableSeeder extends Seeder
    {
        public function run()
        {
            $data = [
                ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
                ['title'=>'Haruskah Menunda Nikah?', 'content'=>'lorem ipsum'],
                ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
                ];
        // masukan data ke daabase
        DB::table('posts')->insert($data);                
        }
    }
    
