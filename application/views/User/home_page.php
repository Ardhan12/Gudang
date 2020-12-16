<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
      
          <video autoplay muted loop id="myVideo"  style="min-height: 110%; min-width: 100%; right: 0px; bottom: 0px; position: center">
            <source src="https://limapuluhkotakab.go.id/assets/images/iconhome/videopakai.mp4" type="video/mp4" style>
            
          </video>
          
      </div>
      <?php foreach ($dataBanner as $key => $banner) : ?>
        <div class="carousel-item " style='background-image:url(<?= base_url() . $banner->foto ?>)'>
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><?= $banner->judul ?></h2>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">
  <!-- test halaman berita -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog" style=" background: #f7f9fa; padding-top:0px; ">
    <div class="container">
      <!-- test -->
      <div class="row">

        <!-- <div class="col-md-8"></div> -->
        <div class="col-lg-12 position-sticky  ">
          <article id="event" class="entry entry-single  shadow  rounded" style="padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;">
            <div class="sidebar mb-0 shadow-none bg-white " style="margin-left: 0px;">
              <h2 class="entry-title text-center" style="margin-top: 20px;">Event Terkini Sarugo</h2>
              <!-- <div class="sidebar-item recent-posts"> -->
              <section id="hero bg-white" style="padding-top: 15px;">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                  <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                  <div class="carousel-inner" role="listbox">
                    <!-- <div class="carousel-item active px-0"style="margin:0;padding:0;">
                            <div class="carousel-container mx-0" style="margin:0;padding:0;"> -->
                    <!-- event logic
                              <?php foreach ($dataEvent as $key => $event) : ?>
                                <a href="<?= base_url("event?id_event=$event->id_event") ?>">  
                                  <div class="post-item shadow p-3 bg-light rounded clearfix">
                                    <img class="rounded" src="<?= base_url("$event->gambar") ?>" width="100%" alt="">
                                    <h4><a href="<?= base_url("event?id_event=$event->id_event") ?>"><?= $event->nama_event  ?></a></h4>
                                    <time datetime="2020-01-01"><?= $event->tgl_awal ?></time>
                                  </div>
                                </a>
                              <?php endforeach ?>
                              end -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="d-none carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="container">
                            <div class="row d-flex justify-content-center">

                            <?php foreach ($dataEvent as $key => $event) : if($key>2){break;} ?>

                              <div class="col-md-4"  >
                                <div class="full blog_img_popular">
                                  <div class="row justify-content-center ">
                                    <img class="rounded-circle m-2 shadow " style="z-index:-10; min-width:300px; max-width:300px; height:200px;" src="<?= base_url("$event->gambar") ?>" alt="gambar event"   />
                                  </div>
                                  <a href="<?= base_url("event?id_event=$event->id_event") ?>" class="btn-info">
                                    <div class="text-center" >
                                    <span class="btn btn-danger" style="width:100%;"><?= $event->nama_event ?></span>
                                    </div>
                                  </a>
                                </div>
                              </div>

                              <?php endforeach ?>

                               
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <!-- </div>   -->
                    <!-- </div> -->
                  </div>
                </div>
              </section>
              <div class="entry-footer clearfix">
                  <div class="row d-flex justify-content-center">
                    <a href="<?= base_url("event")?>"><b><i class="icofont-tasks-alt"></i> Lihat Event Lainnya</b></a>  
                  </div>
              </div>
              <!-- </div>  -->
            </div>
        </div>
        </article>
      </div>
      <!-- </div> -->
      <!-- test -->


      <!-- Sejarah, Lokasi dan halaman statis -->
      <div class="row ">
        <div class="col-lg-12 entries ">
          <article class="entry entry-single shadow p-3 mb-5 bg-white rounded ">
            <br>
            <h2 class="entry-title text-center">
              Profil dan Sejarah
            </h2>

            <br>
            <div class="row justify-content-md-center">
              <div class="col-md-8 ">
                <div class="entry-img">
                  <img src="<?= base_url() ?>assets/images/6.png" alt="" class="img-fluid" width="100%">
                </div>
              </div>
            </div>

            <div class="entry-meta">
              <!-- <ul>
              <li class="d-flex align-items-center"><i class="icofont-user"></i>  Admin </li>
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i>  <time datetime="123456">123456</time> </li>
             
             </ul> -->
            </div>

            <div class="entry-content">
              <div class="container mt-5">
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
              </div>
              <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
              </ul>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>

            </div>

           <!-- <div class="entry-footer clearfix">
              <!-- xx 

              <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
              </div>

            </div>-->

          </article><!-- End blog entry -->


          <article class="entry entry-single shadow p-3 mb-5 bg-white rounded ">

            <h2 class="entry-title text-center" id="tengah"> Akses Lokasi</h2>
            <!-- maps -->
            <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8180028233132!2d100.34782051432003!3d-0.02285843555805685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd559434c687f03%3A0xfabd53b2266f129f!2sKampuang%20Wisata%20Saribu%20Gonjong!5e0!3m2!1sid!2sid!4v1598428920152!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
            <!-- end maps -->
            <br>
            <p>
              &emsp;&emsp;Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p class="font-italic">
              &emsp;&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

          </article><!-- End blog entry -->



          <!-- halaman static -->
          <?php foreach ($dataHalStatis as $key => $halStatis) : ?>
            <?php if ($halStatis->add_to_beranda) : ?>

              <!-- ======= Static Page Section ======= -->
              <article class="entry entry-single shadow p-3 mb-5 bg-white rounded">
                <div class="container display1">
                  <br>
                  <h2 id="tengah" class="entry-title text-center"> <?= $halStatis->judul ?></h2>
                  <br>
                </div>
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-md-8">
                      <div class="entry-img">
                        <img src="<?= base_url() . $halStatis->gambar ?>" alt="" class="img-fluid rounded" width="100%">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="container ">
                  <p>&emsp;&emsp;
                    <?= $halStatis->isi ?>
                  </p>
                </div>

              </article><!-- End blog entry -->

              <!-- End Static Page Section -->

            <?php endif ?>
          <?php endforeach ?>
          <!-- akhir halaman Static -->

        </div><!-- End blog entries list -->

        <div class="d-none col-lg-4 position-sticky bg-light">

          <div class="sidebar  ">


            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">


              <div class="post-item clearfix">
                <img src="assets/img/business-20.jpg" alt="">
                <h4><a href="Berita3.html">Quidem autem et impedit</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/business-26.jpg" alt="">
                <h4><a href="Berita4.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/business-30.jpg" alt="">
                <h4><a href="Berita5.html">Laborum corporis quo dara net para</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

              <div class="post-item clearfix">
                <img src="assets/img/business-16.jpg" alt="">
                <h4><a href="Berita6.html">Et dolores corrupti quae illo quod dolor</a></h4>
                <time datetime="2020-01-01">Jan 1, 2020</time>
              </div>

            </div><!-- End sidebar recent posts-->
          </div><!-- End sidebar -->
        </div><!-- End blog sidebar -->

      </div>
    </div>
  </section><!-- End Blog Section -->

  <!-- akhir test halaman aberita -->



</main><!-- End #main -->