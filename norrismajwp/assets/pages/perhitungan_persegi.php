<!-- Menampilkan Tabel Perhitungan Persegi -->
<div class="container">                  
            <div class="row justify-content-center">
			<div class="col-md-8">
				<h4 class="text-center">TABEL PERSEGI</h4>
				<table border="1px" width="800px"  class="table table-bordered table-dark table-striped table-hover">
					<thead>
						<tr>
                            <th>Nomor</th>
                            <th>Sisi</th>
							<th>Sisi</th>
							<th>Luas Persegi</th>
							<th>Waktu</th>							
						</tr>
					</thead>
					<tbody>
						<!-- Perulangan untuk menampilkan isi Array Daftar Perhitungan Persegi -->
						<?php
                        $txt_file    = file_get_contents('../output/persegi.txt');// membaca file txt
						//mengambil tanpa xmapp
                        $rowsPersegi        = explode("\n", $txt_file);// Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
                        $hit=count($rowsPersegi); //menghitung jumlah data array yg ada di  rows persegi
                        // echo $hit;

                        $i=1;
						//untuk menampilkan perulangan data
                        for ($j=$hit-1; 0 <=$j ; $j--) {  //hit-1 jumlahnya tuh dikurang 1 dari jumlah persegi
							//menampilkan data dari data yg terakhir kli di input
							//$j sma dengan $hit
                        	
                            // Explode digunakan untuk memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
                            $rowDatapersegi = explode('|', $rowsPersegi[$j]);//sebagai pemisah string pada file txt
                    
							//menampilkan data
							echo "<tr>";
                            echo "<td> $i </td>";
							echo "<td> $rowDatapersegi[0] </td>";
							echo "<td> $rowDatapersegi[1] </td>";
							echo "<td> $rowDatapersegi[2] </td>";
							echo "<td> $rowDatapersegi[3] </td>";		
							$persegi[]=$rowDatapersegi[2];		//$persegi akan menampilkan tot dari max-min		
							echo "</tr>";
                            $i++;
						}
                        $jum_persegi=$hit; //jumlah bangun 
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>