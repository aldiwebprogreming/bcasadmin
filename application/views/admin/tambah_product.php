 <div class="container-fluid">

                    <!-- Page Heading -->
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Product</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form method="post" action="<?= base_url('admin/tambah_product') ?>" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Images</label>
                                            <input type="file" name="images" class="form-control" required="" id="preview_gambar">
                                             <?= form_error('images', '<small class="text-danger pl-3">', '</small>'); ?>
                                             <img src="<?= base_url('assets/img/gambar.jpg') ?>" id="gambar_nodin" width="200" alt="Preview Gambar" class="mt-2" />
                                        </div>

                                         <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" class="form-control"  placeholder="" name="nama_produk" value="<?php echo set_value('nama_produk'); ?>">
                                             <?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>

                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="desk"><?php echo set_value('desk'); ?></textarea>

                                        </div>
                 

                                       <div class="form-group">
                                        <label >Brand</label>
                                        <select name="id_merk" class="form-control">
                                            <option disabled="">-- Pilih Brand --</option>
                                            <?php foreach($brand as $brd){ ?>
                                            <option value="<?= $brd['kode_brand'] ?>"><?= $brd['name_brand'] ?></option>
                                         <?php } ?>
                                        </select>
                                      </div>
                            
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
