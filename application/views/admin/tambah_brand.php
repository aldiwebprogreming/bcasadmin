 <div class="container-fluid">

                    <!-- Page Heading -->
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Brand</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form method="post" action="<?= base_url('admin/tambah_brand') ?>" enctype="multipart/form-data">
                                        <?php 
                                            $kode = rand(1, 100000);
                                            $kode_brand = "brand-".$kode;
                                         ?>
                                        <div class="form-group">
                                            <label>Kode Brand</label>
                                            <input type="text" name="kode_brand" class="form-control" readonly="" value="<?= $kode_brand ?>">
                                             <?= form_error('kode_brand', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Name Brand</label>
                                            <input type="text" class="form-control" placeholder="Name brand" name="name_brand">
                                             <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                 
                            
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
