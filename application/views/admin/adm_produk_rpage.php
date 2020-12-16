 <!-- MAIN CONTENT-->
 <div class="main-content">
     <div class="section__content section__content--p30">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <div class="overview-wrap">
                         <h2 class="title-1">Data Produk</h2>
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
                     <a href="<?= base_url("admin/produk/create") ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                             <i class="zmdi zmdi-plus"></i>Tambah Produk</button></a>
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
                             <th>nama</th>
                             <th>harga</th>
                             <th>berat</th>
                             <th>komposisi</th>
                             <th>aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $counter = 1;
                            foreach ($dataProduk as $key => $produk) : ?>
                             <tr class="tr-shadow">
                                 <td><?= $counter++ ?></td>
                                 <td>
                                     <span><?= $produk->nama_produk ?></span>
                                 </td>
                                 <td>Rp <?= $produk->harga_satuan ?></td>
                                 <td><?= $produk->berat_satuan ?> Kg</td>
                                 <td>
                                     <?= substr($produk->komposisi, 0,10) ?>
                                 </td>
                                 <td>
                                     <div class="table-data-feature">
                                         <!--<button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                             <i class="zmdi zmdi-eye"></i>
                                         </button>-->
                                         <a href="<?= base_url("admin/produk/edit?id_produk=$produk->id_produk") ?>"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                 <i class="zmdi zmdi-edit"></i>
                                             </button></a>
                                         <a href="<?= base_url("admin/produk/delete?id_produk=$produk->id_produk") ?>">
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