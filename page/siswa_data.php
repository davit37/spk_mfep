<?php
$conn = new mysqli("127.0.0.1", "root", "", "spk_yaya");
$query = $conn->query("SELECT * FROM `siswa`");



?>
    <div class='card ' style="width: 40rem;">
        <div class="card-header">
            <h5 class='card-title'>
                Data Siswa
            </h5>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class='card-body'>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                    <th scope="col">Nama Siswa</th>
                                    
                                    
                                    
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($query) {
                                    $no=0;

                                    /* fetch object array */
                                    while ($obj = $query->fetch_object()) {
                                        $no++;
                                        echo "<tr><td>$no</td>
                                                <td>$obj->nama_siswa</td>
                              
                                                
                                                
                                                <td><button title='Hapus' id='$obj->id_siswa' triger='delBarang'' type='button' class='btn btn-danger btn-sm deleteAdmin'><i class='fas fa-trash'></i></button>
                                                <button title='Edit' href='' data-toggle='modal' data-target='#edit' id='$obj->id_siswa' triger='del' type='button' class='btn btn-info btn-sm editAdmin'><i class='far fa-edit'></i></button>
                                                </td>
                                                </tr>";
                                    }
                                
                                    /* free result set */
                                    $query->close();
                                }?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


