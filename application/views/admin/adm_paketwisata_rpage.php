 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Data Paket Wisata</h2>

                     </div>

                 </div>
             </div>
             <div class="row m-t-25">
                 <div class="col-sm-6 col-lg-3">
                 </div>
             </div>
             <!-- DATA TABLE -->
             <div class="table-data__tool">
                 <div class="table-data__tool-left">
                     <div class="rs-select2--light rs-select2--md">
                     <form class="form-header form-header" action="" method="post">
                                    <input class="au-input au-input--w400" type="text" placeholder="Cari data ...">
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                     </div>
                 </div>
                 <div class="table-data__tool-right">
                     <a href="<?= base_url("admin/paketwisata/create") ?>" ><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                         <i class="zmdi zmdi-plus"></i>Tambah Paket Wisata</button></a>
                     <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                         
                         <div class="dropDownSelect2"></div>
                     </div>
                 </div>
             </div>
             <div class="table-responsive table-responsive-data2">
                 <table class="table table-data2">
                     <thead>
                         <tr>
                              
                             <th>no</th>
                             <th>Paket Wisata</th>
                             <!-- <th>Halaman Statis</th> -->
                             <th>Jumlah Orang</th>
                             <th>Jumlah Hari</th>
                             <th>Biaya</th>
                             <th>Aksi</th> 
                             <th></th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr class="tr-shadow">
                         <?php $counter=1; foreach($dataPaketWisata as $key => $paketWisata) : ?>     

                             <td><?= $counter++ ?></td>
                             <td>
                                 <span><?= $paketWisata->nama_paket_wisata ?></span>
                             </td>
                             <!-- <td class="link">halamanprofil.html</td> -->
                             <td><?= $paketWisata->jumlah_orang ?></td>
                             <td>
                             <?= $paketWisata->jumlah_hari ?>
                             </td>
                             <td>
                                 Rp <?= $paketWisata->biaya ?>
                            </td>
                             <td>
                                 <div class="table-data-feature d-flex justify-content-start">
                                     <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                         <i class="zmdi zmdi-eye"></i>
                                     </button>
                                     <a href="<?= base_url("admin/paketwisata/edit?id_paket_wisata=$paketWisata->id_paket_wisata") ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                         <i class="zmdi zmdi-edit"></i>
                                     </button></a>
                                     <a href="<?= base_url("admin/paketwisata/delete?id_paket_wisata=$paketWisata->id_paket_wisata") ?>">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                     </a>
                                     
                                 </div>
                             </td>
                         </tr>
                         <?php endforeach ?>

                         
                          
                     </tbody>
                 </table>
             </div>
             <!-- END DATA TABLE -->
         </div>
     </div>
 </div>
 </div>
 </div>
 <!-- END MAIN CONTENT-->
 <!-- END PAGE CONTAINER-->
 </div>

 </div>