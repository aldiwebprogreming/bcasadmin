 <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Our Strength</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <form method="post" action="" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Desk</label>
                                <textarea class="form-control" name="desk"><?= $strength['desk'] ?></textarea>
                                 <?= form_error('desk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" class="form-control" name="images">
                                 <?= form_error('iamges', '<small class="text-danger pl-3">', '</small>'); ?>
                                 <img class="mt-2" src="<?= base_url('assets/upload/') ?><?= $strength['images'] ?>" style="height: 100px;">
                            </div>
     
                
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

 </div>
