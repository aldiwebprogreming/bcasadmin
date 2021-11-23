 <div class="container-fluid">

                    <!-- Page Heading -->
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Slide</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Desk</th>
                                            <th>Images</th>
                                            <th>Slid</th>
                                            <th>Opsi</th>
                                            
                                        </tr>
                                    </thead>
                        
                                    <tbody>

                                        <?php foreach($slide as $data) { ?>
                                        <tr>
                                            <td><?= $data['title'] ?></td>
                                            <td><?= $data['desk'] ?></td>
                                            <td><img src="<?= base_url('assets/upload/') ?><?= $data['images'] ?>" style="height: 100px;"></td>
                                            <td><?= $data['slid'] ?></td>
                                            <td>
                                               <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $data['id'] ?>">
                                              <i class="fas fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?= $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                    <form method="post" action="<?= base_url('admin/hapus_slide') ?>">
                                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                        <input type="text" name="images" value="<?= $data['images'] ?>">
                                                   
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                                <a href="<?= base_url('admin/edit-slide/') ?><?= $data['id'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        