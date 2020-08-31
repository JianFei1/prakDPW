<?php
$mahasiswa = array(
    "nim0"=>"190411100014",
    "nama0"=>"mustafit",
    "alamat0"=>"jl.kerang timur",
    "nim1"=>"180411100001",
    "nama1"=>"husein",
    "alamat1"=>"jl.kebanggan jaya",
    "nim2"=>"200411100099",
    "nama2"=>"Ryzen",
    "alamat2"=>"jl.bakulan",
    "nim3"=>"170411100011",
    "nama3"=>"RYco",
    "alamat3"=>"jl. bangsal",
    "nim4"=>"160411100022",
    "nama4"=>"rangga",
    "alamat4"=>"jl. Bunga inda",
    "nim5"=>"150411100011",
    "nama5"=>"keira",
    "alamat5"=>"jl. telang"

);
foreach ($mahasiswa as $x => $y ){
    for ($i = 0; $i<=count($mahasiswa)/3; $i++){
        if ($x=="nama$i"){
            echo "nama : $y";
            echo "<br>";
        break;
        }elseif ($x=="nim$i") {
            echo "nim : $y";
            echo "<br>";
        break;
        }elseif ($x=="alamat$i") {
            echo "alamat : $y";
            echo "<br>";
            echo "<br>";
        break;
        }
        else {
        }
    }
}

?>