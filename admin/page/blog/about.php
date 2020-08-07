<?php 
   
    /** **/
    if(isset($_POST["submit"])) {
        $description = $_POST["about_description"];
        $visi = $_POST["visi"];
        $misi = $_POST["misi"];

        mysqli_query($conn, "INSERT INTO about VALUES ('','$description ','$visi','$misi') ");

        header("location:index.php?about");
        
    }
  
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">About</h1>
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
                                <label>Deskripsi perusahaan</label>
                              
                                <textarea class="form-control" type="text" name="about_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Visi</label>
                               <textarea class="form-control" type="text" name="visi"></textarea>
                            </div>
                             <div class="form-group">
                                <label>Misi</label>
                                <textarea class="form-control" type="text" name="misi"></textarea>
                            </div>

                             <?php 
 $about = mysqli_query($conn,"Select * from about");
                             if(mysqli_num_rows($about)>0) { ?>
                                <?php while($row_about=mysqli_fetch_array($about)) { ?>
                                    <button type="submit" name="submit" class="btn btn-success" disabled>Save</button>
                                <?php }   ?>
                               
                            <?php } else { ?>  <button type="submit" name="submit" class="btn btn-success">Save</button> <?php } ?> 
                                
                                
                    
                            
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
                    <table class="table" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Tentang Kami</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
 $about = mysqli_query($conn,"Select * from about");
                        if(mysqli_num_rows($about)) { ?>
                            <?php while ($row_about=mysqli_fetch_array($about)) { ?>
                                <tr>
                                    <td><?php echo $row_about['about_description'] ?></td>
                                    <td><?php echo $row_about['visi'] ?></td>
                                    <td><?php echo $row_about['misi'] ?></td>
                                    
                                    <td class="center"><a href="index.php?about-update=<?php echo $row_about['id'] ?>" class="btn btn-primary btn-xs" type="button">Update</a></td>
                                    <td class="center"><a href="index.php?about-delete=<?php echo $row_about['id'] ?>" class="btn btn-primary btn-xs" type="button">Delete</a></td>
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

