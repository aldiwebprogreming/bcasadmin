 <div class="container-fluid">

                    <!-- Page Heading -->
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Imges</th>
                                            <th>Title product</th>
                                            <th>Brand</th>
                                            <th>Opsi</th>
                                            
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php  $no = 1; ?>
                                        <?php foreach($product as $data) { 
                                           
                                        ?>
                                        <tr>

                                            <td><?= $no++; ?></td>
                                            <td><img src="<?= base_url('assets/upload/') ?><?= $data['images'] ?>" style="height: 100px;"></td>
                                            <td><?= $data['title_product'] ?></td>
                                            <td><?= $data['kode_brand'] ?></td>
                                            <td>
                                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                                <a href="<?= base_url('admin/edit_slide') ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        