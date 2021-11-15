 <div class="container-fluid">

                    <!-- Page Heading -->
        

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Data Slide</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form method="post" action="" enctype="multipart/form-data">
                                      <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control"  placeholder="title" name="title" value="<?= $slide['title'] ?>">
                                         <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Deks</label>
                                         <textarea class="form-control" name="desk" ><?= $slide['desk'] ?></textarea>
                                          <?= form_error('deks', '<small class="text-danger pl-3">', '</small>'); ?>
                                      </div>

                                      <div class="form-group">
                                        <label>Images</label>
                                        <input type="file" name="images" class="form-control">
                                         <?= form_error('images', '<small class="text-danger pl-3">', '</small>'); ?>
                                         <img src="<?= base_url('assets/upload/') ?><?= $slide['images'] ?>" style="height: 100px;">
                                      </div>

                                       <div class="form-group">
                                        <label >Slide</label>
                                        <select name="slide" class="form-control">
                                            <option disabled="">-- Pilih Slide --</option>
                                            <option><?= $slide['slid'] ?></option>
                                            <option>Slide 1</option>
                                            <option>Slide 2</option>
                                            <option>Slide 3</option>
                                        </select>
                                      </div>
                            
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
