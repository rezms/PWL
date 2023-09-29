<?php
//membuat koneksi ke database mysql
$koneksi=mysqli_connect('192.168.10.253','a122106604','polke001','a122106604');

function enkripsiurl($id)
{
        $enc = base64_encode(rand()* strtotime(date("H:i:s"))."-".$id);
        return $enc;
}

function dekripurl($string)
{
        $kode = base64_decode($string);
        $id = explode("-", $kode);
        
        if(count($id) > 1)
        {
            return $id[1];
        }
        else
        {
            return 0;
        }
}

?>



