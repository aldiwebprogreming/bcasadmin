 <div class="container-fluid">

                    <!-- Page Heading -->
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Product</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form method="post" action="" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Images</label>
                                            <input type="file" name="images" class="form-control">
                                             <?= form_error('images', '<small class="text-danger pl-3">', '</small>'); ?>

                                             <img src="<?= base_url('assets/upload/') ?><?= $det['gambar'] ?>" style="height: 100px;">
                                        </div>

                                         <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" name="nama_produk" class="form-control" value="<?= $det['nama_produk'] ?>">
                                             <?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                 

                                        <div class="form-group">
                                            <label>Desk</label>
                                            <textarea class="form-control" name="desk"><?= $det['deskripsi'] ?></textarea>
                                             <?= form_error('desk', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                 

                                       <div class="form-group">
                                        <label >Merk</label>
                                        <select name="merk" class="form-control">
                                            <option><?= $det['id_merk'] ?></option>
                                            <option disabled="">-- Pilih Brand --</option>
                                            <?php foreach($brand as $data){ ?>
                                                <option value="<?= $data['kode_brand'] ?>"><?= $data['name_brand'] ?></option>
                                            <?php } ?>
                                        </select>
                                      </div>
                            
                                      <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
