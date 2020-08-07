<?php 
    $query1 = mysqli_query($conn,"Select * from about");
?>

<?php if(mysqli_num_rows($query1)>0) { ?>
                        <?php while($row=mysqli_fetch_array($query1)) { ?>
                          
                     
<div class="container"> 
  <div class="row"> 
    <div class="col-sm-12 text-justify">
      <img src="" alt="">
      <br>  
      <h1>Tentang Kami</h1>
      <br>  
        <p><?php echo $row["about_description"]?></p>
    </div>
    
  </div>
  <div class="row text-center mt-5">
    <div class="col-md-6">
      <img class="mb-4" src="icon/002.png" alt="visi" width="64" height="64">
      <h5 class="my-3">Visi</h5>
       <p><?php echo $row["visi"]?></p>
    </div>
    <div class="col-md-6">
    <img class="mb-4" src="icon/003.png" alt="misi" width="64" height="64">
      <h5 class="my-3">Misi</h5>
 <p><?php echo $row["misi"]?></p>
    </div>
  </div>
</div>
   <?php }  ?>
  <?php } ?>  
  <div class="container mt-5">
    <div  class="row text-center">
      <div class="col-md-12">
        <h1>Tahapan Bangun Baru dan Renovasi Rumah</h1>
      </div>
    </div>
    <div class="container">

      <div id="proses1" class="row mt-5 mb-5 animfadeleft">
        <div class="col-md-5">
           <img class="img-fluid" src="img/rencana.jpeg" alt="">
        </div>
        <div class="col-md-7 ">
          <h1>1. Gambar Rencana</h1>
          <p>Terdiri dari gambar denah lantai, denah atap, tampak depan, saming dan gambar potongan. Serta perencanaan Struktur dan gambar pelengkap lainnya berupa denah kusen pintu, jendela, instalasi listrik dan plumbing.</p>
        </div> 
      </div>

    <div id="proses2" class="row mt-5 mb-5 animfadeleft">
      <div class="col-md-5 ">
        <img class="img-fluid" src="img/biaya.jpeg" alt="">
      </div> 
      <div class="col-md-7 ">
        <h1>2. Perhitungan biaya</h1>
        <p>Menjelaskan rencana anggaran biaya berdasarkan jenis pekerjaan, volume pekerjaan dan harga atuan material, sehingga perkiraan total biaya terkontrol.</p>
      </div> 
      
    </div> 

    <div id="proses3" class="row mt-5 mb-5 animfadeleft">
      <div class="col-md-5 ">
         <img class="img-fluid" src="img/pelaksanaan.jpeg" alt="">
      </div> <!-- Tutup Kolom -->
      <div class="col-md-7 ">
        <h1>3. Pelaksanaan</h1>
        <h4></h4>
        <p>Dilaksanakan dengan team work berpengalaman dan diawasi secara penuh berdasarkan gambar kerja dan kualitas terbaik material serta pengendalian biaya pekerjaan.</p>
      </div> 
    </div> 
  </div>
</div>


