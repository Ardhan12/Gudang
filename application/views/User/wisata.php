<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Wisata</h2>
                <ol>
                    <li><a href="<?= base_url("") ?>">Beranda</a></li>
                    <li>Wisata</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <section id="blog" class="blog" style="background: white;">
        <div class="container">
            <div class="row">
                <?php foreach ($dataWisata as $key => $wisata) : ?>
                    <!-- template wisata -->
                    <div  class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="<?php $gambar=strlen($wisata->gambar)<1?"assets/images/6.png":"$wisata->gambar"; echo  base_url("$gambar"); ?>" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="<?= base_url("wisata/detailwisata?id=$wisata->id_wisata") ?>"><?= $wisata->nama_wisata ?></a>
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= base_url("wisata/detailwisata?id=$wisata->id_wisata") ?>">admin</a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= base_url("wisata/detailwisata?id=$wisata->id_wisata") ?>"><time datetime="<?= $wisata->tgl_post ?>"><?= $wisata->tgl_post ?></time></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>
                                    <?= substr($wisata->keterangan, 0, 200) ?>
                                </p>
                                <div class="read-more">
                                    <a href="<?= base_url("wisata/detailwisata?id=$wisata->id_wisata") ?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                    </div>
                    <!-- akhir template wisata -->
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>