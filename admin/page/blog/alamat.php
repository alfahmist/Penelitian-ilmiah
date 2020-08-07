<?php 

     if(isset($_POST["submit"])) {
       
        $alamat = $_POST["alamat"];
      
        mysqli_query($conn, "INSERT INTO alamat VALUES ('','$alamat') ");

        header("location:index.php?alamat");
        
    }

    /** MENAMPILKAN isi DATA post**/    
        $alamat = mysqli_query($conn,"SELECT * FROM alamat ORDER BY id_alamat ASC");
                                
                                
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Alamat</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Alamat rumah
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-lg-12">
                        <form role="form" action="" method="post" enctype="multipart/form-data" >
                            
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control" type="text" name="alamat" />
                            </div>
                
                            <button type="submit" name="submit" class="btn btn-success">Save</button>
                            <button type="reset" class="btn btn-warning">Reset</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                List Data
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Alamat</th>
                            
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php if(mysqli_num_rows($alamat)) { ?>
                            <?php while ($row_alamat=mysqli_fetch_array($alamat)) { ?>
                                <tr>
                                    <td><?php echo $row_alamat['nama_alamat']?></td>
                              
                                    <td class="center"><a href="index.php?alamat-update=<?php echo $row_alamat['id_alamat'] ?>" class="btn btn-primary btn-xs" type="button">Update</a></td>
                                    <td class="center"><a href="index.php?alamat-delete=<?php echo $row_alamat['id_alamat'] ?>" class="btn btn-primary btn-xs" type="button">Delete</a></td>
                                </tr>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>