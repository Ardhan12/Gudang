
<?php 
$lima = $empat = $tiga = $dua = $satu = $count = $mean = $perslima = $persempat =$perstiga=$persdua=$perssatu= 0;
foreach ($dataTestimoni as $key => $testi) {
  $count ++;
  switch ($testi->bintang) {
    case 1:
      $satu++;
      break;
    case 2:
      $dua++;
      break;
    case 3:
      $tiga++;
      break;
    case 4:
      $empat++;
      break;
    case 5:
      $lima++;
      break;
    
  }

}

$mean = $satu*1 + $dua*2 + $tiga*3 + $empat*4 + $lima*5;
$mean = $mean/$count;
$mean=round($mean,2);
$perslima = ($lima/$count)*100;
$persempat = ($empat/$count)*100;
$perstiga = ($tiga/$count)*100;
$persdua = ($dua/$count)*100;
$perssatu = ($satu/$count)*100;


?>
    
 
 <main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
     <div class="container">

       <div class="d-flex justify-content-between align-items-center">
         <h2>Testimonial Pengunjung</h2>
         <ol>
           <li><a href="<?= base_url() ?>">Beranda</a></li>
           <li>Testimoni</li>
         </ol>
       </div>

     </div>
   </section><!-- End Breadcrumbs -->
   <!-- bagian utama -->

   <div class="container">
    
     <div class="row justify-content-md-center">

       <div class="text-center card shadow" style="width: 35rem; margin: 20px; padding: 10px;">
           <span class="heading"><p>Form Testimoni</p></span> 
         <form method="post" action="<?= base_url("testimoni/add") ?>" style="padding-right: 10px; padding-bottom: 10px;">
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
             <div class="col-sm-8">
               <input required name="nama_testi" type="Nama" class="form-control" id="inputNama" placeholder="Masukkan Nama">
             </div>
           </div>
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputPekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
             <div class="col-sm-8">
               <input required name="pekerjaan_testi" type="text" class="form-control" id="inputPekerjaan" placeholder="Masukkan Pekerjaan">
             </div>
           </div>
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
             <div class="col-sm-8">
               <input required name="alamat_testi" type="text" class="form-control" id="inputAlamat" placeholder="Masukkan Alamat">
             </div>
           </div>
           <div class="form-group row" style="padding-top: 10px; padding-left: 5px; padding-right: 5px;">
             <label for="inputTesti" class="col-sm-4 col-form-label">Testimoni</label>
             <div class="col-sm-8">
               <input required name="pesan_testi" type="text" class="form-control" id="inputTesti" placeholder="Masukkan Testimoni">
             </div>
           </div><br>
           <div class="rating float-center">
             <input type="radio" name="star" id="star<?=1?>"   value="5"><label for="star1"></label>
             <input type="radio" name="star" id="star<?=2?>"  value="4"><label for="star2"></label>
             <input checked type="radio" name="star" id="star<?=3?>"  value="3"><label for="star3"></label>
             <input type="radio" name="star" id="star<?=4?>"  value="2"><label for="star4"></label>
             <input type="radio" name="star" id="star<?=5?>"  value="1"><label for="star5"></label>
           </div>
           <div class="row" >
             <div class="col-6 col-md-4"></div>
             <div class="col-6 col-md-4"><button id=" " type="submit" class="btn btn-success float-center" style=" padding-right: 10px; ">Kirim Testimoni</button></div>
             <div class="col-6 col-md-4"></div>
           </div>

         </form>
       </div>


       <div id="kotakTestimony" class="card shadow text-center" style="width: 35rem; margin: 20px; padding: 10px;">

         <!-- Add icon library -->
         <link rel="stylesheet" href="<?= base_url() ?>assets/css/rating.css">



         <span class="heading " style="margin-right: 0px;" >  <p>Rating Pengunjung</p></span>
         <div class="text-center">
         <?php for ($rata = 1; $rata <= round($mean); $rata++) : ?> 
                           <big><big> <span class="fa fa-star checked"></span></big></big>
                             
                         <?php endfor  ?>
         
         <p>Dinilai <b> <?= $mean?> </b> Bintang dari <b><?=$count?></b> Ulasan </p>
         <hr style="border:2px solid #f1f1f1">
         </div>

         <div class="row-center">
           <div class="side">
             <div>5 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-5" style="width: <?php echo $perslima; ?>%;"></div>
             </div>
           </div>
           <div class="side right">
             <div><?=$lima?></div>
           </div>
           <div class="side">
             <div>4 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-4" style="width: <?php echo $persempat; ?>%;"></div>
             </div>
           </div>
           <div class="side right">
             <div><?=$empat?></div>
           </div>
           <div class="side">
             <div>3 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-3" style="width: <?php echo $perstiga; ?>%;"></div>
             </div>
           </div>
           <div class="side right">
             <div><?=$tiga?></div>
           </div>
           <div class="side">
             <div>2 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-2" style="width: <?php echo $persdua; ?>%;"></div>
             </div>
           </div>
           <div class="side right">
             <div><?=$dua?></div>
           </div>
           <div class="side">
             <div>1 star</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-1" style="width: <?php echo $perssatu; ?>%;"></div>
             </div>
           </div>
           <div class="side right">
             <div><?=$satu?></div>
           </div>
         </div>

         <br>
         <div>
           <div class="overflow-auto p-3 mb-3 mb-md-0 bg-light" style="max-width: 100%; max-height: 200px;">
             <?php foreach ($dataTestimoni as $key => $testi) : ?>

               <div class="container" style="margin-bottom: 20px; text-align: center;">
                 <div class="row">
                   <div class="col border bg-light" style="padding: 10px;"><b><?= $testi->nama_testi ?></b></div>
                   <!-- <div class="col-md-auto border bg-light center" style="padding: 10px;">
                    <?//= $testi->pekerjaan_testi ?></div>-->
                  

                   <div class="col border bg-light" style="padding: 10px;">
                     <!-- <?php for ($index = 1; $index <= 5; $index++) : ?>
                       <?php if ($index == strval($testi->bintang)) : ?>
                         <span class="fa fa-star checked" name="star" id="star<?= $index ?>" value="<?= 6 - $index ?>"><label for="star<?= $index ?>"></label>
                         <?php else : ?>
                           <span class="fa fa-star" name="star" id="star<?= $index ?>" value="<?= 6 - $index ?>"><label for="star<?= $index ?>"></label>
                           <?php endif ?>
                         <?php endfor  ?> -->


                         <?php for ($index = 1; $index <= $testi->bintang; $index++) : ?> 
                            <small> <span class="fa fa-star checked"></span></small>
                             
                         <?php endfor  ?>

                   </div>
                   <div class="col border bg-light" style="padding: 10px;">
                    <?= $testi->pesan_testi ?></div>

                 </div> 
               </div>


             <?php endforeach ?>
           </div>

         </div> 
       </div>

     </div>
   </div>

 </main>