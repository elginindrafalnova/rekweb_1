<?php
    $mahasiswa =[
        [

        
        "nama" => "Sandhika Galih",
        "nrp"  => "043040023",
        "email" => "sandhikagalih@unpas.ac.id"

    ],
    [
        "nama" => "Erick doang",
        "nrp"  => "02340001",
        "email" => "erik@gmail.com"


    ]

    ];
    $data = json_encode($mahasiswa);
    echo $data;

?>