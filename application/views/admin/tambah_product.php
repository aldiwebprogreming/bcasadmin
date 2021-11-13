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
                                            <input type="file" name="images" class="form-control" required="">
                                             <?= form_error('images', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control"  placeholder="title" name="title">
                                             <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                 

                                       <div class="form-group">
                                        <label >Brand</label>
                                        <select name="kode_brand" class="form-control">
                                            <option disabled="">-- Pilih Brand --</option>
                                            <option>Brand A</option>
                                            <option>Brand B</option>
                                            <option>Brand C</option>
                                        </select>
                                      </div>
                            
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
