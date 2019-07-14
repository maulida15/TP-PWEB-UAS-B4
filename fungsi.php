<?php
    $conek = mysqli_connect("localhost","root","","db_pesan");

    function query($query){
       global $conek; 
       $result = mysqli_query($conek, $query);
       $rows = [];
       while($row = mysqli_fetch_assoc($result)){
           $rows[] = $row;
       }
       return $rows;
    }

    function tambah($data){
        global $conek;

        //  $id = htmlspecialchars($data["id"]);
        $nama = htmlspecialchars($data["nama"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $meja = htmlspecialchars($data["meja"]);
        $jam = htmlspecialchars($data["jam"]);
        $menu = htmlspecialchars($data["menu"]);

        $query = "INSERT INTO pesan
                    VALUES
                    ('','$nama','$no_hp','$meja','$jam','$menu')";

        mysqli_query($conek,$query);

        return mysqli_affected_rows($conek);
    }