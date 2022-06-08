<!-- Menghitung Persentase -->

<div class="container">
                
                <div class="row justify-content-center">
                <div class="col-md-8">
                    <h3 class="text-center">Nilai Total Maksimum dan Minimum</h3>
                    <table border="1px" width="800px" class="table table-dark table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Maksimum</th>
                                <th>Minimum</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Perulangan untuk menampilkan isi Array Daftar Maskapai beserta Rute Penerbangan -->
                            <?php
                                
                                $max_lingkaran=max($lingkaran); 
                                $min_lingkaran=min($lingkaran);

                                $max_persegi=max($persegi); 
                                $min_persegi=min($persegi); 

                                $max_segitiga=max($segitiga); 
                                $min_segitiga=min($segitiga);

                                $min_bangun=array($min_segitiga,$min_lingkaran,$min_persegi);
                                $max_bangun=array($max_segitiga,$max_lingkaran,$max_persegi);

                                $max=max($max_bangun);
                                $min=min($min_bangun);
                             
                                echo "<tr>";
                                echo "<td> $max </td>";
                                echo "<td> $min</td>";
                                echo "</tr>";
                            
                            ?>
    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
