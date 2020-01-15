<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
public function hallo()
{
  return "hallodunia";
}

    public function dunia()
    {
      return "halloDidaamelia";
    }

    public function jeniskucing($warna = null)
    {
        if (!$warna){
        return "warna belum dipilih";
        } else {
            return "warna kucing kamu : " .$warna;
        }
    }

    public function warungnasi($ayam = null,$harga = null)
    {
        if(!$ayam){
        return " Anda membeli : <br>$ayam</b>";
        echo $ayam;
    }
    if (!$ayam && !$harga) {
        return "Silahkan masukan item terlebih dahulu.";
    }
    if ($harga >= 15000) {
        echo "Anda membeli ayam dengan ukuran Jumbo";
    }
    if ($harga <= 15000 && $harga >= 7000) {
        echo " Anda membeli ayam dengan ukuran Medium";
    }
    if ($harga < 7000) {
        echo " Anda membeli ayam dengan ukuran Small";
    }

    
}

    };



