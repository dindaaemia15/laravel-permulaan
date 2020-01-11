<?php

use Illuminate\Database\Seeder;

class PostsTablePenggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts= [
            ['nama'=>'Agus','jabatan'=>'Direktur',
            'jk'=>'Laki-Laki','alamat'=>'Jl.Ahmad Yani',
            'agama'=>'Islam','totalgaji'=>'Rp.5.000.000']
        ];
        //masukan data ke database
        DB::table('penggajian')->insert($posts);
    }
}
