<?php



Route::get('/', function () {
    return view('index');
});

Route::get('/about', function() {
    return '<h1>Halo</h1>'
    .'Selamat datang di webapp saya<br>'
    .'Laravel, emang keren.';
    });
     
    // Route::get('profil',function()
    // {
    //     return view('biodata');
    // });

    // Route::get('sekul',function()
    // {
    //     return view('sekolah');
    // });

    // Route::get('pus',function()
    // {
    //     return view('kampus');
    // });

    // Route Parameter
    Route::get('pesan/{makan}/{minum}/{harga}',function($mkn,$mnm,$hrg)
    {
        return 'Makanan yang saya pesan adalah = '.$mkn.'<br>'
        .'minman yang saya pesan adalah = '.$mnm.'<br>'
        .'harganya adalah = '.$hrg;
    });

    // Route Optional Parameter
    Route::get('halo/{nama?}',function($nama='Nurhadi Aldo'){
        return 'Haloo Nama Saya adalah '.$nama;
    });

    Route::get('pesan/{a?}/{b?}/{c?}',function($mkn=null,$minum=null,$hrg){
        if(isset($mkn)){
            $mkn = "Anda Memesan $mkn";
            echo $mkn;
        }
        if(isset($minum)){
            $mium = " & $minum";
            echo $minum;
        }
        if(isset($hrg)){
            $hrg = " dengan harga $hrg";
            echo $hrg;
        }
        if(!$mkn && !$minum && !hrg)
        return " Anda Belum Memesan sesuatu";

    });
    // mencari semua model
    // Route::get('/testmodel', function() {
    //      $query = App\Post::all();
    //      return $query;
    // });
     
    // mencari model berdasarkan id
    // Route::get('/testmodel', function() {
    //     $query = App\Post::find(1);
    //     return $query;
    // });
    
    //  // mencari model berdasarkan title
    //     Route::get('/testmodel', function() {
    //         $query = App\Post::where('title','like','%cepat nikah%')->get();
    //         return $query;
    // });

    // // mengubah record,(hapus semua isi function)
    //  Route::get('/testmodel', function() {
    //      $post = App\Post::find(1);
    //      $post->title = "Ciri Keluarga Sakinah";
    //      $post->save();
    //        return $post;
    //  });

    // menghapus record, (hapus semua isi funcction)
    // Route::get('/testmodel', function() {
    //     $post = App\Post::find(1);
    //     $post->delete();
    //       return $post;
    // });
     
    // menambah record,(hapus semua isi function)
    // Route::get('/testmodel', function() {
    //     $post = new App\Post;
    //     $post->title = "7 Amalan Pembuka Jodoh";
    //      $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    //      $post->save(); 
    //      return $post; 
    //  })

Route::get('/penggajian',function(){
  $query = App\Gaji::all();
    return $query;
 });

Route::get('/penggajian-2',function(){
    $gaji = App\Gaji::where('agama','=','islam')->get();
    return $gaji;
});

Route::get('/penggajian-3',function(){
    $gaji = App\Gaji::select('id','nama','agama')
    ->where('agama','=','islam')->get();
    return $gaji;
});

Route::get('penggajian{id}',function($id){
     $gaji = App\penggajian::find($id);
     return $gaji;
});

Route::get('tambah-data-gaji',function()
{
    $gaji = new App\penggajian();
    $gaji->nama = 'Indah Mambo';
    $gaji->jabatan = 'Sekretaris';
    $gaji->jk = 'Perempuan';
    $gaji->alamat = 'Bojong Honey';
    $gaji->totalgaji = 500000;
    $gaji->agama = 'islam';
    $gaji->save();
    return $gaji;
});





