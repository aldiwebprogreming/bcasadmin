 <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Contact</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <form method="post" action="" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" required=""><?= $contact['address'] ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                               <input type="text" name="phone" class="form-control" required="" value="<?= $contact['phone'] ?>">
                            </div>

                             <div class="form-group">
                                <label>Email</label>
                               <input type="email" name="email" class="form-control" required="" value="<?= $contact['email'] ?>">
                            </div>

                             <div class="form-group">
                                <label>Website</label>
                              <textarea class="form-control" name="web" required=""><?= $contact['web'] ?></textarea>
                            </div>

                             <div class="form-group">
                                <label>Open</label>
                               <input type="text" name="open" class="form-control" required="" value="<?= $contact['open'] ?>">
                            </div>

                             <div class="form-group">
                                <label>Maps</label>
                                <textarea class="form-control" name="maps" required=""><?= $contact['maps'] ?></textarea>
                            </div>
     
                
                          <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                        </form>
                    </div>
                </div>

            </div>
        </div>

 </div>
