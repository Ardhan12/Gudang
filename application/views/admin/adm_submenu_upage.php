<div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Update Sub Menu</h2>

                     </div>

                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
 
<div class="col-lg-12">
    <div class="card">
        <!--<div class="card-header">
            <strong>Basic Form</strong> Elements
        </div>-->
        <div class="card-body card-block">
            <form action="<?php echo site_url('admin/submenu/edit'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                <input type="hidden" name="id" value="<?= $_GET["id"]?>">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama Menu</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="nama_sub_menu" value="<?=$dataSubMenu->nama_sub_menu?>" name="nama_sub_menu" class="form-control">
                        <small class="form-text text-muted">Masukan nama menu</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Pilih Menu Utama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        
                        <div class="rs-select2--primary rs-select2--md rs-select2--primary">
                            <select class="js-select2" name="menu_utama">
                                <option >None</option>
                                
                                <?php foreach ($dataMenu as $key => $menu) : ?>
                                     
                                    <?php if( $menu->id == $dataSubMenu->id_menu): ?>
                                        <option selected="selected" value="<?=$dataSubMenu->id_menu?>"><?= $menu->nama_menu ?></option>
                                    <?php else:     ?>
                                        <option   value="<?= $menu->id?>"><?= $menu->nama_menu ?></option>
                                    <?php endif; ?>

                                <?php endforeach ?>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <small class="form-text text-muted">Pilih menu utama</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Pilih Halaman Statis</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="rs-select2--primary rs-select2--md rs-select2--primary">
                            <select class="js-select2" name="hal_statis">
                                <option >None</option>
                                <option selected="selected"> <?= $dataSubMenu->hal_statis ?></option>
                                
                                <?php foreach ($dataHalaman as $key => $halaman) : ?> 

                                     <?php if( $halaman->judul == $dataSubMenu->hal_statis): ?>
                                        <option selected="selected" value="<?=$dataSubMenu->hal_statis?>"><?= $halaman->judul ?></option>
                                    <?php else:     ?>
                                        <option   value="<?= $halaman->judul?>"><?= $halaman->judul ?></option>
                                    <?php endif; ?>

                                <?php endforeach ?>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <small class="form-text text-muted">Pilih Halaman Statis</small>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Tampilkan di Website Publik?</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-checkbox1" class="form-check-label ">
                                <input <?= $dataSubMenu->status_sub_menu>0? "checked" : ""?> type="checkbox" id="tampilkan_menu" name="tampilkan" value="1" class="form-check-input">Ya
                            </label>
                        </div>
                    </div>
                </div>
                
                 
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan Perubahan
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Batal
                    </button>
                </div>
                
            </form>
        </div>
        
    </div>
    
</div>