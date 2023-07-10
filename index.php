<?php

// buat curl resource = unuk inisialisasi curl
$ch = curl_init();

//set url 
//curl_setopt = set option
curl_setopt($ch, CURLOPT_URL,  "https://www.google.co.id/");

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//output contains the output string
//untuk mengeksekusi curl
$output = curl_exec($ch);

//menutup curl
curl_close($ch);

//menampilkan hasil curl
echo $output;

////////////////////////////////////////////////////////////////

//! AGAR MUDAH MAKA BUNGKUS DALAM SEBUAH FUNGSI AGAR BISA DIPANGGIL TERUS MENERUS

function testCurl($url)
{

    // persiapkan curl 
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $url);

    //return the transfer as a string(1) if not = 0
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($ch);

    curl_close($ch);

    return $output;
}

$data = testCurl("https://www.petanikode.com/");
