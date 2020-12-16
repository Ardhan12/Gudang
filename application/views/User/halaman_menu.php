
    <!-- ======= Static Page Section ======= -->
    <br><br>
    <section id="about" class="about">
      <div class="container">
        <div class="container display1">
            <h3 id="tengah"> <?= $dataHalUtama->judul ?></h3>
        </div>
            <div class="container">
              <div class="row">
              <div class="col-md-2"></div>
                <div class="col-md-8">
                <div class="entry-img">
                  <img src="<?=base_url().$dataHalUtama->gambar?>" alt="" class="img-fluid" width="100%">
                </div>
                <div class="col-md-2"></div>
                </div>
              </div>
            </div>
            <div class="container mt-5">
              <p>
                <?= $dataHalUtama->isi ?>
              </p>
            </div>
             
          </div>
        </div>
      </div>
    </section>
    <!-- End Static Page Section -->
