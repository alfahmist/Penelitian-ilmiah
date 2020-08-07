    <?php 
    $query1 = mysqli_query($conn, "SELECT DISTINCT alamat.id_alamat, alamat.nama_alamat, perumahan.nama_kategori 
FROM alamat 
LEFT JOIN perumahan ON alamat.id_alamat = perumahan.alamat_id 
where perumahan.nama_kategori = 'Desain Rumah' 
ORDER BY perumahan.id_perumahan")

    ?>

 
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                            <h3>Desain Rumah</h3>
                            <p>Desain denah rumah adalah kegiatan awal perencanaan arsitektur tempat tinggal idaman menyesuaikan kondisi tanah yang tersedia dan jumlah spesifikasi ruangan yang diharapkan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mulai Gallery -->
    <div class="container gallery-container">

    <h1>Contoh Design</h1>
      <?php if(mysqli_num_rows($query1)) { ?>
                <?php while($row1=mysqli_fetch_array($query1)) { ?>
                    <?php $now = $row1['id_alamat']?>
                      <?php $query2 = mysqli_query($conn,"Select * from perumahan WHERE nama_kategori = 'Desain Rumah' AND alamat_id = $now " ); ?>
    <div class="tz-gallery">
        <div class="row my-3">
            <div class="col-sm-12">
                <h2><?php echo $row1["nama_alamat"]?></h2>
            </div>
        </div>
        <div class="row">
           
                <?php while($row=mysqli_fetch_array($query2)) { ?>
             
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" data-caption="<?php echo $row["nama_gambar"]?>" href="img/<?php echo $row["file_gambar"]?>">
                        <img class="img-thumbnail" src="img/<?php echo $row["file_gambar"]?>" alt="<?php echo $row["nama_gambar"]?>">
                    </a>
                    <div class="caption">
                        <h3><?php echo $row["nama_gambar"]?></h3>
                        <p><?php echo $row["deskripsi_gambar"]?></p>
                    </div>
                </div>
            </div>
            <?php }  ?>
              
           
        
        </div>
  
    </div>
        <?php }  ?>
                    <?php } ?> 
</div>
