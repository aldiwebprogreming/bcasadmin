 <div class="container-fluid">

                    <!-- Page Heading -->

               
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pesan</h6>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Nama usaha</th>
                                            <th>Pesan</th>
                                            <th>Date post</th>
                                            <th>Opsi</th>
                                            
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach($pesan as $data) { 
                                            
                                        ?>
                                        <tr>

                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><?= $data['phone'] ?></td>
                                            <td><?= $data['nama_usaha'] ?></td>
                                            <td><?= $data['pesan'] ?></td>
                                            <td><?= $data['date_create'] ?></td>
                                            <td>


                                             <!--  Modal Hapus   -->
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
                                                    <form method="post" action="<?= base_url('admin/hapus_pesan') ?>">
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

                                            <!-- end modal -->

                                          

                                          



                                            </td>
                                        </tr>
                                        <?php } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        