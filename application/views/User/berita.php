   <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita</h2>
          <ol>
            <li><a href="<?=base_url("")?>">Beranda</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">
        <?php foreach ($dataBerita as $key => $berita) : ?>
         <!-- template berita -->
         <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url("$berita->gambar")?> " alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?=base_url("berita/detailberita?id_berita=$berita->id_berita")?>"><?= $berita->judul_berita ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <?= $berita->admin_berita ?> </li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>  <time data-date-format="DD MM YYYY"><?= $berita->tgl_post ?></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?= substr($berita->keterangan,0,200)."..." ?>
                </p>
                <div class="read-more">
                  <a href="<?=base_url("berita/detailberita?id_berita=$berita->id_berita")?>">Baca Selengkapnya</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
         <!-- akhir template berita -->
         <?php endforeach ?>
          
        </div>

        <!--<div class="blog-pagination" data-aos="fade-up">
          <ul class="justify-content-center">
            <li class="disabled"><i class="icofont-rounded-left"></i></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
          </ul>
        </div>-->

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
 