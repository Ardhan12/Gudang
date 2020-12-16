<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Paket Wisata</h2>
        <ol>
          <li><a href="<?= base_url() ?>">Beranda</a></li>
          <li><a href="<?= base_url("paket") ?>">Paket Wisata</a></li>
          <li><?= $dataPaketWisata->nama_paket_wisata ?></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->


  <section id="features" class="features">
    <div class="container">

      <div class="section-title">
        <h2>SARUGO</h2>
        <p><?= $dataPaketWisata->nama_paket_wisata ?></p>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">Harga Paket Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-2" id="tombol_ket">Keterangan Paket Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-3" id="tombol_jadwal">Jadwal Paket Wisata</a>
            </li>
            
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Harga Paket Wisata</h3>
                  <table style="width: 75%; background-color: white; text-align:left; ">
                    <tr>
                      <td><b>Jumlah orang</td>
                      <td>: <?= $dataPaketWisata->jumlah_orang ?> Orang</td>
                    </tr>
                    <tr>
                      <td><b> Hari</td>
                      <td>: <?= $dataPaketWisata->jumlah_hari ?> Hari</td>
                    </tr>
                    <tr>
                      <td><b>Total Biaya</td>
                      <td>: <?= format_rp($dataPaketWisata->biaya) ?></td>
                    </tr>
                  </table>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?=base_url()?>assets/images/sarugo-logo.png" alt="" class="img-fluid" style="padding-bottom: 25px;">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Keterangan Paket Wisata</h3>
                  <table style="width: 75%; background-color: white;" >
                
                      <tr>
                        <td style="width: 30%;"><b>Objek Wisata</td>
                        <td>
                          <ul>
                            <!-- <li> Wisata ambil jeruk</li>
                  <li> Wisata mandi di sungai</li>
                  <li> Wisata bikin souvenir</li> -->
                            <li><?= $dataPaketWisata->objek_wisata ?></li>
                          </ul>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 30%;"><b>Fasilitas</td>
                        <td>
                          <ul>
                            <!-- <li>Makan</li>
                  <li> Minum</li>
                  <li> Penginapan</li> -->
                            <li><?= $dataPaketWisata->fasilitas ?></li>
                          </ul>
                        </td>
                      </tr>
                 
                  </table>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?=base_url()?>assets/images/sarugo-logo.png" alt="" class="img-fluid" style="padding-bottom: 25px;">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Jadwal Paket Wisata</h3>
                  <table style="width: 75%; background-color: white;" >

                    <?php foreach ($dataJadwal as $key => $jadwal) : ?>
                      <tr>
                        <td style="width: 30%;"><b> Hari <?=  "ke-" . $jadwal->hari_jadwal ?> </td>
                        <td ><?= $jadwal->kegiatan ?></td>
                      </tr>
                    <?php endforeach ?>
                    <!-- <tr>
              <td style="width: 30%; text-align: center;"> Hari kedua </td>
              <td style="text-align: center;">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laboru</td>
            </tr> -->
                  </table>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="<?=base_url()?>assets/images/sarugo-logo.png" alt="" class="img-fluid" style="padding-bottom: 25px;">
                </div>
              </div>
            </div>

           

          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- section -->
  <!--<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="align-items-center">
          <h4 style="text-align: center;"><?echo // $dataPaketWisata->nama_paket_wisata ?></h4>
      </div>
    </div>
  </div>




  <!-- <div class="col-lg-10 col-md-10 col-sm-10" > -->
  <!--   <section class="testimonials-item">
      <div class="row">
        <div class="col-lg-12">
          <table align="center" border="1" style="width: 75%; background-color:darkgray; cursor: pointer;">
            <tr style="text-align: center; color: white;">
                <th id="tombol_harga" class="bg-dark" >Harga</th>
                <th id="tombol_ket">Keterangan</th>
                <th id="tombol_jadwal">Jadwal</oth>
            </tr>
        </table><br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <table id="tabel_harga" align="center" border="1" style="width: 75%; background-color: white;">
            <tr>
              <td>Jumlah orang</td>
              <td><?echo // $dataPaketWisata->jumlah_orang ?> Orang</td>
            </tr>
            <tr>
              <td>Jumlah Hari</td>
              <td><?echo // $dataPaketWisata->jumlah_hari ?> Hari</td>
            </tr>
            <tr>
              <td>Total Biaya</td>
              <td><?echo // format_rp($dataPaketWisata->biaya) ?></td>
            </tr>
          </table>
     <!--     <table id="tabel_ket" align="center" class="table d-none" style="width: 75%;" border="1">
            <tbody>
              <tr>
                <td style="width: 30%; text-align: center;">Object Wisata</td>
                <td><ul>
                  <!-- <li> Wisata ambil jeruk</li>
                  <li> Wisata mandi di sungai</li>
                  <li> Wisata bikin souvenir</li> -->
  <!--             <li><?echo // $dataPaketWisata->objek_wisata ?></li>
                </ul></td>
              </tr>
              <tr>
                <td style="width: 30%; text-align: center;">Fasilitas</td>
                <td><ul>
                  <!-- <li>Makan</li>
                  <li> Minum</li>
                  <li> Penginapan</li> -->
  <!--           <li><?echo // $dataPaketWisata->fasilitas ?></li>
                </ul></td>
              </tr>
            </tbody>
          </table>
          <table id="tabel_jadwal" align="center" class="table d-none" style="width: 75%;" border="1">
            
            <?php //  foreach($dataJadwal as $key => $jadwal): 
            ?>
                <tr>
                    <td style="width: 30%; text-align: center;"> Hari <?echo // $jadwal->hari_jadwal==1?"Pertama":"ke-".$jadwal->hari_jadwal ?> </td>
                    <td style="text-align: center;"><?echo // $jadwal->kegiatan ?></td>
                </tr>
            <?php // endforeach 
            ?>
            <!-- <tr>
              <td style="width: 30%; text-align: center;"> Hari kedua </td>
              <td style="text-align: center;">Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laboru</td>
            </tr> -->
  <!--       </table>
        </div>
      </div>
      
      </div>
    </section>

<!-- end section -->

</main><!-- End #main -->