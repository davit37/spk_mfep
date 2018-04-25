<?php
$conn = new mysqli("127.0.0.1", "root", "", "spk_yaya");
$querySiswa = $conn->query("SELECT * FROM `siswa`");
$queryFaktor = $conn->query("SELECT * FROM `faktor`");
?>

    <div class='card ' style="width: 50rem;">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class='card-body'>

                        <form class="form-horizontal" action="action/penjualan_action.php" method="POST">
                            <input type="hidden" value="tambah" name="aksi">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Siswa</label>
                                <div class="col-sm-8">
                                   
                                    <select name="siswa" class="form-control search-box" >
                                     
                                    <?php
                                        if ($querySiswa) {
                                            $no=0;

                                            /* fetch object array */
                                            while ($obj = $querySiswa->fetch_object()) {
                                                $no++;
                                                echo "<option value='$obj->id_siswa'>$obj->nama_siswa</option>";
                                            }
                                        
                                            /* free result set */
                                            $querySiswa->close();
                                    }?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Faktor</label>
                                <div class="col-sm-8">
                                
                                     
                                     <?php
                                         if ($queryFaktor) {
                                            
 
                                             /* fetch object array */
                                             while ($obj = $queryFaktor->fetch_object()) {
                                               echo"  
                                                <div class='form-group'>
                                                <label for='inputAddress2'>$obj->nama_faktor</label>
                                                <input type='text' class='form-control' id='Faktor$obj->id_faktor' placeholder='$obj->nama_faktor'>
                                              </div>";

                                             }
                                         
                                             /* free result set */
                                             $queryFaktor->close();
                                     }?>
                                  
                                </div>
                            </div>
                           


                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>