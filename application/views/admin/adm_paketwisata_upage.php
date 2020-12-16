<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Update Data Paket Wisata</h2>

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
            <form action="<?= base_url('admin/paketwisata/update'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <input type="hidden" name="id_paket_wisata" value="<?=$paketWisata->id_paket_wisata?>">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class="form-control-label">Nama Paket</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input value="<?=$paketWisata->nama_paket_wisata?>" type="text" id="nama_paket_wisata" name="nama_paket_wisata" class="form-control">
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

                <div class=" d-none row form-group">
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
                        <input  value="<?=$paketWisata->jumlah_orang?>" placeholder="1" min="1" max="100" type="number" id="judul_hlmstat" name="jumlah_orang" class="form-control">
                        <small class="form-text text-muted">Masukan jumlah orang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Biaya/Harga (Rp)</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input value="<?=$paketWisata->biaya?>" placeholder="Masukkan biaya perjalanan paket wisata.." min="1000" max="9999999999" type="number" id="judul_hlmstat" name="biaya" class="form-control">
                        <small class="form-text text-muted">Masukan biaya perjalanan</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Jumlah Hari</label>
                    </div>
                    
                    <div class="col-12 col-md-9">
                        <input type="hidden" name="jumlah_hari"  value="<?=$paketWisata->jumlah_hari?>">
                        <input disabled id="jumlah_hari" value="<?=$paketWisata->jumlah_hari?>" placeholder="1" type="number" min="1" max="100"   name="jumlah_hari" class="form-control">
                        <small class="form-text text-muted">Jumlah hari</small>
                    </div>
                </div>
                <div class="jadwal">
                    <?php foreach ($dataJadwal as $key => $jadwal) : ?>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label"> &emsp; > Hari Ke-<?=$jadwal->hari_jadwal?></label>
                            </div>
                            
                            <div class="col-12 col-md-9">
                                <input type="hidden" name="id_jadwal<?=$key?>" value="<?=$jadwal->id_jadwal?>">
                                <input id="jumlah_hari" value="<?=$jadwal->kegiatan?>" placeholder="Masukkan kegiatan yang akan dilakukan" type="text"    name="jadwal<?=$key?>" class="form-control">
                                <small class="form-text text-muted">  Kegiatan hari ke-<?=$jadwal->hari_jadwal?></small>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                
                <!-- jumlah hari loop hingga ke-n-->

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Objek Wisata</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="objek_wisata" id="isi_hlmstat" rows="9" placeholder="Masukkan objek wisata apa saja yang dapat dikunjungi oleh pengunjung ..." class="form-control summernote"><?=$paketWisata->objek_wisata?></textarea>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="textarea-input" class=" form-control-label">Fasilitas</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="fasilitas" id="isi_hlmstat" rows="9" placeholder="Masukkan fasilitas yang disediakan untuk pengunjung ..." class="form-control summernote"><?=$paketWisata->fasilitas?></textarea>
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
                        <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
                    </button>
                    <button onClick="window.history.back()"   class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Batal
                    </button>
                </div>
                
            </form>
        </div>
        
    </div>
    
</div>