<?php 
    /** PROSES UPDATE**/
    if(isset($_POST['update'])){
        $id_alamat = $_POST["id_alamat"];
        $alamat = $_POST["alamat"];
        mysqli_query($conn, "UPDATE alamat SET id_alamat = '$id_alamat', nama_alamat = '$alamat'
                        WHERE id_alamat = '$id_alamat' ");
        
        header("location:index.php?alamat");
      
    }

    /** MENAMPILKAN DATA PADA FORM **/
    $alamat_id = $_GET["alamat-update"];
    $edit = mysqli_query($conn, "SELECT * FROM alamat WHERE id_alamat = '$alamat_id' ");
    $row_edit = mysqli_fetch_array($edit);

    $alamat = mysqli_query($conn,"SELECT * FROM alamat ORDER BY id_alamat ASC");
    
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Services</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Nama alamat
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-lg-12">
                        <form role="form" action="" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Nama alamat</label>
                                <input class="form-control" type="text" name="alamat" value="<?php echo $row_edit['nama_alamat'] ?>"/> 
                            </div>
                            
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <input type="hidden" name="id_alamat" value="<?php echo $row_edit['id_alamat']?>">

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
                                <th>alamat</th>
                   
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