 <!-- ======= Footer ======= -->
  <footer id="footer" style="padding-bottom: 10px;">
    <div class="footer-top" style="padding-top: 3p;padding-top: 30px;padding-bottom: 0px;">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
                    
            <div class="footer-info">
            
              <!--<h3>SARUGO</h3>-->
              <a  href="<?=base_url()?>">
                            <img src="<?= base_url() ?>assets/images/sarugo-logo.png" width="100%" height="100%" style="margin-left: -25%; margin-top: -3%; " alt="SARUGO" />
                        </a>
              
              <p>
                Jorong Sungai Dadok, Nagari Koto Tinggi, Kecamatan Gunuang Omeh, Kabupaten Lima Puluh Kota <br>
                Sumatera Barat, Indonesia<br><br>
                <strong>Telepon:</strong> +628-228-504-6121<br>
                <strong>Email:</strong> sarugo@limapuluhkota.go.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.youtube.com/channel/UC6XZt7Ylh8I9fdTV5j27NfA" target="_blank" class="youtuve"><i class="bx bxl-youtube"></i></a>
                <a href="https://www.facebook.com/kampung.wisata.sarugo" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://wa.me/6282285046121" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.instagram.com/kampung.wisata.sarugo/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>
<div class="col-lg-2"></div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu Pintasan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url("event")?>">Event</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url("wisata")?>">Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url("product")?>">Produk</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url("paket")?>">Paket Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?=base_url("testimoni")?>">Testimoni</a></li>
            </ul>
          </div>
<div class="col-md-1"></div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Pemerintah Daerah Kabupaten Lima Puluh Kota</h4>
            <p>Kampung Wisata Saribu Gonjong Smart Brand Kabupaten Lima Puluh Kota</p>

          </div>

        </div>
      </div>
    </div> 
    <div class="container">
      <div class="copyright" style="padding-top: 10px;">
        &copy; 2020<strong><span> SARUGO</span></strong>
      </div>
      <div class="credits" style="padding-top: 0px;">
      Designed by <img src="https://limapuluhkotakab.go.id/assets/images/logokominfo.png" style="width: 25px; margin-bottom: 1px"> <a href="https://kominfo.limapuluhkotakab.go.id/"> Diskominfo Kabupaten Lima Puluh Kota</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>Web_Statis/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>Web_Statis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>Web_Statis/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>Web_Statis/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>Web_Statis/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>Web_Statis/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url()?>Web_Statis/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url()?>Web_Statis/assets/vendor/owl.carousel/owl.carousel.min.js"></script>



  <!-- Template Main JS File -->
  <script src="<?= base_url()?>Web_Statis/assets/js/main.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url()?>assets/js/main.js"></script>
    <script>
      const kirim = document.querySelector("#kirim")
      const inputNama = document.querySelector("#inputNama")
      const inputPekerjaan = document.querySelector("#inputPekerjaan")
      const inputAlamat = document.querySelector("#inputAlamat")
      const inputTesti = document.querySelector("#inputTesti")
      const inputStar = document.querySelector("#inputStar")
      const kotakTestimony = document.querySelector("#kotakTestimony")
      kirim.addEventListener("click",(event)=>{
        event.preventDefault();
        displayTesti();
      })

      function displayTesti(){
        
          kotakTestimony.innerHTML += `<div class="container" style="margin-bottom: 20px; text-align: center;">
        <div class="row">
          <div class="col border bg-light" style="padding: 10px;">${inputNama.value}</div>
          <div class="col-md-auto border bg-light center" style="padding: 10px;">${inputPekerjaan.value}</div>
          <div class="col border bg-light" style="padding: 10px;">${inputAlamat.value}</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">
            <div class="container rating" >
              <input disabled type="radio" name="star" id="star1" value="5"><label for="star1"></label>
              <input disabled type="radio" name="star" id="star2" value="4"><label for="star2"></label>
              <input disabled type="radio" name="star" id="star3" value="3"><label for="star3"></label>
              <input disabled type="radio" name="star" id="star4" value="2"><label for="star4"></label>
              <input disabled type="radio" name="star" id="star5" value="1"><label for="star5"></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">${inputTesti.value}</div>
        </div>
      </div>`
        
      }

    </script>
    <script>
    const tombol_harga = document.querySelector('#tombol_harga')
    const tabel_harga = document.querySelector("#tabel_harga")
    const tombol_ket = document.querySelector('#tombol_ket')
    const tabel_ket = document.querySelector("#tabel_ket")
    const tombol_jadwal = document.querySelector('#tombol_jadwal')
    const tabel_jadwal = document.querySelector("#tabel_jadwal")

    tombol_harga.addEventListener('click',tampil)
    tombol_ket.addEventListener('click',tampil2)
    tombol_jadwal.addEventListener('click',tampil3)

    function tampil(){
      tabel_harga.className = ""
      tabel_jadwal.className = "d-none"
      tabel_ket.className = "d-none"
      tombol_harga.className = "bg-dark"
      tombol_ket.className = ""
      tombol_jadwal.className = ""
    }
    function tampil2(){
      tabel_ket.className = ""
      tabel_jadwal.className = "d-none"
      tabel_harga.className = "d-none"
      tombol_ket.className = "bg-dark"
      tombol_harga.className = ""
      tombol_jadwal.className = ""
    }
    function tampil3(){
      tabel_jadwal.className = ""
      tabel_harga.className = "d-none"
      tabel_ket.className = "d-none"
      tombol_jadwal.className = "bg-dark"
      tombol_ket.className = ""
      tombol_harga.className = ""
    }
  </script>

<script>
      const kirim = document.querySelector("#kirim")
      const inputNama = document.querySelector("#inputNama")
      const inputPekerjaan = document.querySelector("#inputPekerjaan")
      const inputAlamat = document.querySelector("#inputAlamat")
      const inputTesti = document.querySelector("#inputTesti")
      const inputStar = document.querySelector("#inputStar")
      const kotakTestimony = document.querySelector("#kotakTestimony")
      
      kirim.addEventListener("click",(event)=>{
        event.preventDefault();
        displayTesti();
      })

      function displayTesti(){
        
          kotakTestimony.innerHTML += `<div class="container" style="margin-bottom: 20px; text-align: center;">
        <div class="row">
          <div class="col border bg-light" style="padding: 10px;">${inputNama.value}</div>
          <div class="col-md-auto border bg-light center" style="padding: 10px;">${inputPekerjaan.value}</div>
          <div class="col border bg-light" style="padding: 10px;">${inputAlamat.value}</div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">
            <div class="container rating" >
              <input disabled type="radio" name="star" id="star1" value="5"><label for="star1"></label>
              <input disabled type="radio" name="star" id="star2" value="4"><label for="star2"></label>
              <input disabled type="radio" name="star" id="star3" value="3"><label for="star3"></label>
              <input disabled type="radio" name="star" id="star4" value="2"><label for="star4"></label>
              <input disabled type="radio" name="star" id="star5" value="1"><label for="star5"></label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 border bg-light" style="padding: 10px;">${inputTesti.value}</div>
        </div>
      </div>`
        
      }


      console.log("hello from bottom")
</script>      

    

    <script>  
      var lastScrollTop = 0;

       
      document.addEventListener("scroll", function(){  
        var st = window.pageYOffset || document.documentElement.scrollTop;  
        if (st > lastScrollTop){
            // downscroll code 
            topheader.className = "container d-none"
        } else {
            // upscroll code 
            topheader.className = " container"
        }
        lastScrollTop = st <= 0 ? 0 : st;  
      }, false);

    </script>
</body>

</html>