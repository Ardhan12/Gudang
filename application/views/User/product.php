  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Produk</h2>
          <ol>
            <li><a href="<?= base_url()?>">Beranda</a></li>
            <li>Produk</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    
 
<div class="mt-5"></div>
    <?php foreach($dataProduk as $key => $produk): ?>
    <section  class="portfolio-details p-2">
      <div class="container shadow ">

        <div class="row justify-content-md-center">

          <div class="col-lg-5">
            <h2 class="portfolio-title"></h2>
            <h3></h3>
            <div class="owl-carousel portfolio-details-carousel"   >
            
              <?php foreach ($gambarProduk as $key => $gambar) : ?>
                <?php if($gambar->id_produk == $produk->id_produk) : ?>
                  <div style="display: flex; justify-content:center; align-items:center; min-height:300px;">
                  <img src="<?= base_url("$gambar->src")?>" class="img-fluid w-auto rounded"  alt="" style=" max-height: 300px; "  >
                  </div>
                <?php endif ?>
              <?php endforeach ?>
              <!-- <img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
              <img src="<?= base_url("$produk->gambar")?>" class="img-fluid" alt=""> -->
            </div>
          </div>

          
          <div class="col-lg-5 portfolio-info p-5">
            <h2 class="text-center"><b><?= $produk->nama_produk ?></b></h2>
            
            <table class="table table-responsive-md " style="background-color: white; text-align:left; ">
                    <tr>
                      <td><b>Harga Satuan</b>
                      : <?=format_rp($produk->harga_satuan) ?></td>
                    </tr>
                    <tr>
                      <td><b>Berat Satuan</b>
                      : <?= $produk->berat_satuan ?></td>
                    </tr>
                    <tr>
                      <td><b>Keterangan</b>
                      : <?= $produk->keterangan ?></td>
                    </tr>
                    <tr>
                      <td><b>Penjelasan Produk</b>
                      : <?= $produk->penjelasan_produk ?></td>
                    </tr>
                    <tr>
                      <td><b>Komposisi</b>
                      : <?= $produk->komposisi ?></td>
                    </tr>
                  </table>
          </div>

        </div>

      </div>
    </section>
    <?php endforeach  ?>
<div class="mb-5"></div>
    <!-- template produk -->
    <?php //foreach($dataProduk as $key => $produk): ?>
   <!--   <div class="row  justify-content-md-center">
        <div class="col-md-10">
          <div class="icon-box">
            <div class="container">
              <div class="row justify-content-md-center border">
                <h4><?//echo $produk->nama_produk ?></h4>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4 border">
                  <img width="100%" src="<?// echo base_url("$produk->gambar")?> " alt="">
                </div>
                <div class="col-md-8 border">
                  <table class="table border" >
                      <tr>
                        <td>Harga Satuan: <?// echo format_rp($produk->harga_satuan) ?> </td>
                      </tr>
                      <tr>
                        <td>Berat Satuan: <?// echo $produk->berat_satuan ?> </td>
                      </tr>
                      <tr>
                        <td>Komposisi: <?// echo $produk->komposisi ?> </td>
                      </tr>
                      <tr>
                        <td>Keterangan: <?// echo $produk->keterangan ?> </td>
                      </tr>
                      <tr>
                        <td  >Penjelasan produk : 
                          <?// echo $produk->penjelasan_produk ?> 
                        </td>
                        
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir template Produk -->
      <!--<?//php endforeach  ?>-->
  </main><!-- End #main -->