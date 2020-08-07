<?php 
    /** PROSES UPDATE**/
    if(isset($_POST['update'])){
        $id_perumahan = $_POST["id_perumahan"];
        $nama_kategori = $_POST["nama_kategori"];
        $id_grup = $_POST["id_grup"];
        $nama_gambar = $_POST["nama_gambar"];
        $deskripsi_gambar = $_POST["deskripsi_gambar"];

        $file_name = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        if($file_name == "" || empty($file_name)){
            mysqli_query($conn, "UPDATE perumahan SET nama_kategori ='$nama_kategori', alamat_id = '$id_grup', nama_gambar='$nama_gambar' , deskripsi_gambar='$deskripsi_gambar'
                                WHERE id_perumahan ='$id_perumahan' ");
        } else {
            move_uploaded_file($tmp_name, "../img/".$file_name);
            mysqli_query($conn, "UPDATE perumahan SET nama_kategori ='$nama_kategori', alamat_id = '$id_grup', file_gambar='$file_name' ,nama_gambar='$nama_gambar' , deskripsi_gambar='$deskripsi_gambar'
                                WHERE id_perumahan ='$id_perumahan' ");
        }
        header("location:index.php?services");
      
    }

    /** MENAMPILKAN DATA PADA FORM **/
    $gallery_id = $_GET["services-update"];
    $edit = mysqli_query($conn, "SELECT * FROM perumahan WHERE id_perumahan = '$gallery_id' ");
    $row_edit = mysqli_fetch_array($edit);

    $grup = mysqli_query($conn,"SELECT * FROM alamat ORDER BY id_alamat ASC");
    $perumahan=mysqli_query($conn,"SELECT perumahan.* , alamat.nama_alamat
                                FROM perumahan, alamat 
                                WHERE perumahan.alamat_id = alamat.id_alamat
                                ORDER BY alamat.id_alamat DESC");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Blog &raquo; Post</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Input Data
            </div>
            <div class="panel-body">
                <div class="row">   
                    <div class="col-lg-12">
                        <form role="form" action="" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Nama Kategori</label>
                                <select class="form-control" name="nama_kategori" required>
                                    <option value="<?php echo $row_edit['nama_kategori']?>"><?php echo $row_edit['nama_kategori']?></option>
                                    <option value="Desain Rumah">Desain Rumah</option>
                                    <option value="Renovasi Rumah">Renovasi Rumah</option>
                                    <option value="Bangun Rumah">Bangun Rumah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                 <select class="form-control" name="id_grup">
                                    <option value=""> - choose - </option>
                                    <?php if(mysqli_num_rows($grup)) { ?>
                                        <?php while($row_cat=mysqli_fetch_array($grup)) {?>
                                            <option <?php echo $row_edit["alamat_id"]==$row_cat["id_alamat"] ?  "selected='selected'" : "" ?> 
                                            value="<?php echo $row_cat['id_alamat']?>"> <?php echo $row_cat['nama_alamat']?> </option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Judul Gambar</label>
                                <input class="form-control" type="text" name="nama_gambar" value="<?php echo $row_edit['nama_gambar'] ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Gambar</label>
                                <textarea class="form-control" rows="3" name="deskripsi_gambar"><?php echo $row_edit['deskripsi_gambar'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>File Gambar</label>
                                <?php if($row_edit['file_gambar']==""){echo "<p><img src='asset/no-image.png' width='88'></p>";}else {?>
                                  <p><img src="../img/<?php echo $row_edit['file_gambar']?>" width="88"></p>
                                <?php } ?>
                                <input type="file" name="file" />


                            </div>
                            <button type="submit" name="update" class="btn btn-success">Update</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <input type="hidden" name="id_perumahan" value="<?php echo $row_edit['id_perumahan']?>">
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
                                <th>Kategori</th>
                                <th>Alamat</th>
                                <th>Judul Gambar</th>
                                <th>Deskripsi</th>
                                <th>File Gambar</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php if(mysqli_num_rows($perumahan)>0) { ?>
                            <?php while ($row_perumahan=mysqli_fetch_array($perumahan)) { ?>
                                <tr>
                                    <td><?php echo $row_perumahan['nama_kategori']?></td>
                                    <td><?php echo $row_perumahan['nama_alamat']?></td>
                                    <td><?php echo $row_perumahan['nama_gambar']?></td>
                                    <td><?php echo $row_perumahan['deskripsi_gambar']?></td>
                                    <td>
                                    <?php if($row_perumahan["file_gambar"]==""){echo "<img src='asset/no-image.png' width='88'> ";}else{?>
                                        <img src="../img/<?php echo $row_perumahan['file_gambar']?>" width="88" class="img-responsive" />
                                    <?php } ?>
                                    </td>
                                    <td class="center"><a href="index.php?services-update=<?php echo $row_perumahan['id_perumahan'] ?>" class="btn btn-primary btn-xs" type="button">Update</a></td>
                                    <td class="center"><a href="index.php?services-delete=<?php echo $row_perumahan['id_perumahan'] ?>" class="btn btn-primary btn-xs" type="button">Delete</a></td>
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