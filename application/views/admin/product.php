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
                                            <th>Nama Produk</th>
                                            <th>Desk</th>
                                            <th>Id Merek</th>
                                            <th>Opsi</th>
                                            
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php  $no = 1; ?>
                                        <?php foreach($product as $data) { 
                                           
                                        ?>
                                        <tr>

                                            <td><?= $no++; ?></td>
                                            <td><img src="<?= base_url('assets/upload/') ?><?= $data['gambar'] ?>" style="height: 100px;"></td>
                                            <td><?= $data['nama_produk'] ?></td>
                                            <td><?= $data['deskripsi'] ?></td>
                                            <td><?= $data['id_merk'] ?></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $data['id_produk'] ?>">
                                              <i class="fas fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?= $data['id_produk'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Pesan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                    Apakah anda ingin menghapus data ini?
                                                    <form method="post" action="<?= base_url('admin/hapus_product') ?>">
                                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                   
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                                
                                                <a href="<?= base_url('admin/edit-product/') ?><?= $data['alias'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        