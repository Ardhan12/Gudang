<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Form Input Data Paket Wisata</h2>

                     </div>

                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
 
<div class="col-lg-12">
    <div class="card"> 
        <div class="card-body card-block">
            <form action="<?= base_url('admin/paketwisata/create'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="form-control-label">Nama Paket</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input required type="text" id="judul_hlmstat" name="nama_paket_wisata" class="form-control">
                        <small class="form-text text-muted">Masukan Nama Paket Wisata</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Menu</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Paket Wisata</p>
                    </div>
                </div>


                <div class="d-none row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Link Halaman</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="link_menu" name="link_menu" class="form-control">
                        <small class="form-text text-muted">Masukan Link Halaman Statis</small>
                    </div>
                </div>

                <div class="d-none row form-group">
                    <div class="col col-md-3">
                        <label for="file-input" class=" form-control-label">Upload Gambar</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="gbr_hlmstat" name="gbr_hlmstat" class="form-control-file">
                        <small class="form-text text-muted">File JPG/JPEG/PNG max file 2Mb</small>
                    </div>
                </div>
                

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Jumlah Orang</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input required placeholder="1" min="1" max="100" type="number" id="judul_hlmstat" name="jumlah_orang" class="form-control">
                        <small class="form-text text-muted">Masukan jumlah orang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Biaya/Harga (Rp)</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input required placeholder="Masukkan biaya perjalanan paket wisata.." min="1000" max="9999999999" type="number" id="judul_hlmstat" name="biaya" class="form-control">
                        <small class="form-text text-muted">Masukan biaya perjalanan</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Jumlah Hari</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input id="jumlah_hari" required placeholder="1" type="number" min="1" max="100"   name="jumlah_hari" class="form-control">
                        <small class="form-text text-muted">Masukan Jumlah hari</small>
                    </div>
                </div>
                <div class="jadwal">

                </div>
                
                <!-- jumlah hari loop hingga ke-n-->

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Objek Wisata</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="objek_wisata" id="isi_hlmstat" rows="9" placeholder="Masukkan objek wisata apa saja yang dapat dikunjungi oleh pengunjung ..." class="form-control summernote"></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Fasilitas</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="fasilitas" id="isi_hlmstat" rows="9" placeholder="Masukkan fasilitas yang disediakan untuk pengunjung ..." class="form-control summernote"></textarea>
                    </div>
                </div>
                
                <div class="d-none row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Tampilkan di Beranda?</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-checkbox1" class="form-check-label ">
                                <input type="checkbox" id="tampilkan_hlmstat" name="tampilkan_hlmstat" value="option1" class="form-check-input">Ya
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
                
            </form>
        </div>
        
    </div>
    
</div>

<script>
    const jadwal = document.querySelector(".jadwal")
    const jumlah_hari = document.querySelector("#jumlah_hari")
    jumlah_hari.addEventListener("change",generateForm)
    jumlah_hari.addEventListener("keyup",generateForm)
 
    function generateForm() {
        jadwal.innerHTML = '';
       for(let index=1;index<=parseInt(jumlah_hari.value);index++){
        jadwal.innerHTML += `<div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label"> &emsp; > Hari Ke-${index}</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input id="jumlah_hari" required placeholder="Masukkan kegiatan yang akan dilakukan" type="text"    name="jadwal${index}" class="form-control">
                        <small class="form-text text-muted">Masukan Kegiatan hari ke-${index}</small>
                    </div>
                </div>`;
       }
    };
 

    
</script>