 <div class="container-fluid">

                    <!-- Page Heading -->

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Input Contact</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address"><?php echo set_value('address'); ?></textarea>
                                        <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                       <input type="text" name="phone" class="form-control" value="<?= set_value('phone') ?>">
                                       <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                     <div class="form-group">
                                        <label>Email</label>
                                       <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>">
                                       <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                     <div class="form-group">
                                        <label>Website</label>
                                      <textarea class="form-control" name="web"><?= set_value('web') ?></textarea>
                                       <?= form_error('web', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                     <div class="form-group">
                                        <label>Open</label>
                                       <input type="text" name="open" class="form-control" value="<?= set_value('open') ?>">
                                        <?= form_error('open', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                     <div class="form-group">
                                        <label>Maps</label>
                                        <textarea class="form-control" name="maps"><?= set_value('maps') ?></textarea>
                                         <?= form_error('maps', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    
                       
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <!--  <button type="submit" class="btn btn-primary">Save changes</button> -->
                               <input type="submit" name="kirim" value="Save changes" class="btn btn-primary" >
                             </form>
                              </div>
                            </div>
                          </div>
                    </div>
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                        </div>
                        <div class="card-body">
                             <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" data-target="#exampleModal">
                              <i class="fas fa-plus"></i> Input Contact
                            </button>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Open</th>
                                            <th>Opsi</th>
                                            
                                        </tr>
                                    </thead>
                        
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach($contact as $data) { 
                                            
                                        ?>
                                        <tr>

                                            <td><?= $data['address'] ?></td>
                                            <td><?= $data['phone'] ?></td>
                                            <td><?= $data['email'] ?></td>
                                            <td><?= $data['open'] ?></td>
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
                                                    <form method="post" action="<?= base_url('admin/hapus_contact') ?>">
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

                                            <!-- Modal detail -->
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModaldet<?= $data['id'] ?>">
                                            <i class="fas fa-eye"></i>
                                            </button>

                                            <div class="modal fade" id="exampleModaldet<?= $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                   
                                                   <div class="form-group">
                                                        <label><strong>Address : </strong></label>
                                                        <p><?= $data['address'] ?></p>
                                                        <hr>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><strong>Phone : </strong></label>
                                                        <p><?= $data['phone'] ?></p>
                                                        <hr>
                                                    </div>

                                                     <div class="form-group">
                                                        <label><strong>Email : </strong></label>
                                                        <p><?= $data['email'] ?></p>
                                                        <hr>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><strong>Website : </strong></label>
                                                        <p><?= $data['web'] ?></p>
                                                        <hr>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><strong>Open : </strong></label>
                                                        <p><?= $data['open'] ?></p>
                                                         <hr>
                                                    </div>

                                                    <div class="form-group">
                                                        <label><strong>Maps : </strong></label>
                                                        <p><?= $data['maps'] ?></p>
                                                        
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    
                                                    </form>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>


                                            <a href="<?= base_url('admin/edit_contact/') ?><?= $data['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pen"></i></a>



                                            </td>
                                        </tr>
                                        <?php } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        