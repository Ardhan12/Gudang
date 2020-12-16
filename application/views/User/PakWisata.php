 <main id="main">

   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
     <div class="container">

       <div class="d-flex justify-content-between align-items-center">
         <h2>Paket Wisata</h2>
         <ol>
           <li><a href="<?= base_url() ?>">Beranda</a></li>
           <li>Paket Wisata</li>
         </ol>
       </div>

     </div>
   </section><!-- End Breadcrumbs -->

   <!-- ======= Pricing Section ======= -->
   <section id="pricing" class="pricing">
     <div class="container">

       <div class="row">

         <?php foreach ($dataPaketWisata as $key => $paketWisata) : ?>
           <div class="col-lg-3 col-md-6 mb-5">
             <div class="box featured">
               <h3><?= $paketWisata->nama_paket_wisata ?></h3>
               <ul>
                 <li>Selama <?= $paketWisata->jumlah_hari ?> Hari</li>
                 <li>Max <?= $paketWisata->jumlah_orang ?> Orang</li>
                 <li><?= substr($paketWisata->objek_wisata,0,30).', dll.' ?></li>
               </ul>
               <h4><?= format_rp($paketWisata->biaya); ?></h4>
               <div class="btn-wrap">
                 <a href="<?= base_url("paket/detailpaket?id_paket_wisata=$paketWisata->id_paket_wisata") ?>" class="btn-buy">Baca Selengkapnya</a>
               </div>
             </div>
           </div>
         <?php endforeach ?>

       </div>
     </div>
   </section><!-- End Pricing Section -->

   <!-- ======= Frequently Asked Questions Section ======= -->

 </main><!-- End #main -->