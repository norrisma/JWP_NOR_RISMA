<?php
    //Fungsi luas segitiga
    function lSegitiga($a, $t){
        $luas=($a*$t)/2;
        return $luas;
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEGITIGA</title>
    <link rel="stylesheet" href="../vendors/css/bootstrap.min.css">
</head>
<body>
    <!--navbar-->
    <?php include 'navbar.php';?>   
    <br><br><br>
    <div class="container">

        <div class="row justify-content-center">
        </div>
        <br>
        <br>     

        <form action="" method="post">
            <div class="form-group">
                <label>Alas</label>
                <input class="form-control" name="alas" type="text" onkeypress="return isNumberKey(event)" placeholder="Masukkan alas" required/>
            </div>
            <div class="form-group">
                <label>Tinggi</label>
                <input class="form-control" name="tinggi" type="text" onkeypress="return isNumberKey(event)" placeholder="Masukkan tinggi" required/>
            </div>
            <div>
               <button type="submit" name="simpan" class="btn btn-lg btn-success btn-block">
                Hitung
                </button>
                <input type="button" value="Hitung Ulang" class="btn btn-lg btn-danger btn-block" onclick="window.location.href='segitiga.php'" /><hr>
            </div>
         </form>
        <br>  
        <?php 
        if(isset($_POST['simpan'])){ //melakukan pengecekan klik tombol simpan atau tidak,proses setelah hitung di klik
        $alas=$_POST['alas']; //melakukan pengecekan apakah data itu ada isinya 
        $tinggi=$_POST['tinggi'];

        // menghitung luas segitiga
        $luasSegitiga=lSegitiga($alas, $tinggi);

        //Tanggal dan waktu sekarang
        date_default_timezone_set('Asia/Jakarta');
        $tgl=date("l,d-m-Y H:i:s");   
        
        // Format data yang akan diparsing
        $data = "\n $alas|$tinggi|$luasSegitiga|$tgl";

        // Buka file segitiga.txt, kemudian tuliskan isi variabel di atas kedalam segitiga.txt
        $fh = fopen("../output/segitiga.txt", "a");
        fwrite($fh, $data);

        // Tutup file data.txt
        fclose($fh);

        echo "Diketahui : <br />";
        echo "Hasil hitung Segitiga yaitu sebagai berikut<br />";
        echo "Pada $tgl <br />";
        echo "Alas = $alas<br />";
        echo "Tinggi = $tinggi<br />";
        echo "Maka luas Segitiga[ ($alas x $tinggi)/2 ] = $luasSegitiga<br />";

    }  ?>
    </div>


    <script src="assets/vendors/js/bootstrap.min.js"></script>
    <!-- agar angka saja yg bisa -->
<script language=Javascript>
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 46 && charCode > 31 
    && (charCode < 48 || charCode > 57))
        return false;

    return true;
}
</script>
</body>
</html>