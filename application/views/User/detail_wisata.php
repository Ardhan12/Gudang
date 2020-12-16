
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2><?=$wisata->nama_wisata?></h2>
      <ol>
        <li><a href="<?=base_url("")?>">Beranda</a></li>
        <li><a href="<?=base_url("wisata")?>">Wisata</a></li>
        <li><?=$wisata->nama_wisata?></li>
      </ol>
    </div>

  </div>
</section>
 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing ">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6  ">
            <div class="box featured shadow">
              <h3>Foto dan Video</h3>
              <div class="row">
              <!-- gambar1 --> 
              <?php $counter=1; foreach ($dataResource as $key => $resource) : ?>

                <?php if(!$resource->tipe_resource) :?>
                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                        <div class="box featured">
                        <img width="100%" src="<?=base_url("$resource->link_resource")?>" alt="pict1">
                        <div class="btn-wrap">
                            <!--<a href="#keteranganUtama" id="buttonKet<?=$counter?>" class="btn-buy">ket. gambar</a>-->
                            <small id="keterangan<?=$counter++ ?>" class="d- "> <?= $resource->keterangan ?></small>
                        </div>
                        </div>
                    </div>
                <?php else : ?>
                <div class="col-lg-6 col-md-6 mt-4 mt-md-0 ">
                        <div class="box featured "> 
                        <video controls  autoplay    name="media" width="100%"   >
                            <source src="<?=base_url("$resource->link_resource")?>" type="video/mp4" style>
                        </video>
                        <div class="btn-wrap">
                            <!--<a href="#keteranganUtama" id="buttonKet<?=$counter?>" class="btn-buy">ket. video</a>-->
                            <small id="keterangan<?=$counter++ ?>" class="d- "> <?= $resource->keterangan ?></small>
                        </div>
                        </div>
                    </div>

                <?php endif ?>

                    <input type="hidden" id="banyakResource" value="<?=$counter?>">
                <?php endforeach ?>   


              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured ">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <p>keterangan gambar</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 mt-4 mt-md-0">
                <div class="box featured">
                  <img src="<?=base_url("")?>Web_Statis/assets/img/favicon.png" alt="pict1">
                  <div class="btn-wrap">
                    <p >keterangan gambar</p>
                  </div>
                </div>
              </div>
              
            </div>
            </div>
          </div>
            
            <div class="col-lg-6 col-md-6 mt-4 mt-md-0  ">
              <div class="row">
                <div id="#keterangan" class="box featured shadow">
                  <h3>Keterangan Wisata</h3>
                  <div class="text-left">
                  <p id="keteranganUtama"><?=$wisata->keterangan?></p>
                  </div>
                </div>
                
              </div>
            </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
    <!-- map -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
            <a id="rute" target="_blank" href="https://www.google.com/maps/dir/-0.2339557,100.6301166/Kampuang+Wisata+Saribu+Gonjong,+Unnamed+Road,+Koto+Tinggi,+Gunuang+Omeh,+Kabupaten+Lima+Puluh+Kota,+Sumatera+Barat+26256/@-0.1279185,100.4200331,12z/data=!3m1!4b1!4m17!1m6!3m5!1s0x2fd559434c687f03:0xfabd53b2266f129f!2sKampuang+Wisata+Saribu+Gonjong!8m2!3d-0.0228638!4d100.3500092!4m9!1m1!4e1!1m5!1m1!1s0x2fd559434c687f03:0xfabd53b2266f129f!2m2!1d100.3500092!2d-0.0228638!3e0" class="btn btn-info" >Lihat Rute Wisata</a>
        </div>
      </div>
      <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <iframe width="1100" height="315" src="https://www.google.co.id/maps/place/Bofet+Pergaulan/@-0.229835,100.6309176,15z/data=!4m5!3m4!1s0x2e2ab4aefa212925:0xb1f0b044ce780890!8m2!3d-0.2272335!4d100.6275344" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container shadow">
        <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d255347.73412373007!2d100.35000145672721!3d-0.1281180170612779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-0.2340119!2d100.63011759999999!4m5!1s0x2fd559434c687f03%3A0xfabd53b2266f129f!2swisata%20saribu%20gonjong!3m2!1d-0.0228638!2d100.3500092!5e0!3m2!1sen!2sid!4v1597813134635!5m2!1sen!2sid" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         
      </div>
    </section>
  </main><!-- End #main -->


  <script>
    const banyakResource = document.querySelector("#banyakResource").value;
    const keteranganUtama = document.querySelector("#keteranganUtama");
    const buttonKet = []

    for(let index=1;index<=parseInt(banyakResource);index++){
        keterangan.push(document.querySelector("#keterangan"+index))
        buttonKet.push(document.querySelector("#buttonKet"+index))
    }  

    buttonKet.forEach((button,index) => {
        let count = index;

        button.addEventListener("click",( )=>{  
            keteranganUtama.innerHTML= keterangan[count].textContent;
        })
    });
 



  </script>

  
<script> 
  const maps = document.querySelector("#maps")
  const rute = document.querySelector("#rute")
  let lat ;
  let long;

  document.addEventListener('DOMContentLoaded', getLocation, false);


  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.watchPosition(showPosition);
    } else { 
      x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }
      
  function showPosition(position) { 
      
      lat = position.coords.latitude;
      long = position.coords.longitude; 
      maps.src = `https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d255347.73412373007!2d100.35000145672721!3d-0.1281180170612779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d${lat}!2d${long}!4m5!1s0x2fd559434c687f03%3A0xfabd53b2266f129f!2swisata%20saribu%20gonjong!3m2!1d-0.0228638!2d100.3500092!5e0!3m2!1sen!2sid!4v1597813134635!5m2!1sen!2sid`

      rute.href = `https://www.google.com/maps/dir/${lat},${long}/Kampuang+Wisata+Saribu+Gonjong,+Unnamed+Road,+Koto+Tinggi,+Gunuang+Omeh,+Kabupaten+Lima+Puluh+Kota,+Sumatera+Barat+26256/@-0.1279185,100.4200331,12z/data=!3m1!4b1!4m17!1m6!3m5!1s0x2fd559434c687f03:0xfabd53b2266f129f!2sKampuang+Wisata+Saribu+Gonjong!8m2!3d-0.0228638!4d100.3500092!4m9!1m1!4e1!1m5!1m1!1s0x2fd559434c687f03:0xfabd53b2266f129f!2m2!1d100.3500092!2d-0.0228638!3e0`
      
      console.log(lat,long);
  }
  </script>