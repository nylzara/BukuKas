<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="bg-white border border-light shadow-sm p-2 rounded m-3">
        <div class="text-center font-weight-bold h3 mb-4 text-gray-800"><?= $title; ?></div>
    </div>

    <div class="bg-white border border-light shadow-sm p-4 rounded m-3">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <?= form_open_multipart('user/edit');?>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email"
                                value="<?= $user['email'] ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                            <?= form_error('name',' <small class="text-danger pl-3">' ,'</small>'); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2">Gambar</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/profile/'). $user['image']; ?>"
                                        class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class=" col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>









        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->