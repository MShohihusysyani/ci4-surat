<?= $this->extend('layouts/templates'); ?>


<?= $this->section('content'); ?>

<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Pengguna</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/user/save" method="post">
                                <?= csrf_field(); ?>
                                <div class="card-body">
                                    <div class="form-group">
                                        <?php
                                        if (session()->getFlashdata('errNama')) {
                                            $isInvalidNama = 'is-invalid';
                                        } else {
                                            $isInvalidNama = '';
                                        }
                                        ?>
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control <?= $isInvalidNama ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
                                        <?php
                                        if (session()->getFlashdata('errNama')) {
                                            echo '<div id="validationServer03Feedback" class="invalid-feedback"> ' . session()->getFlashdata('errNama') . '</div>';
                                        }
                                        ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama_alias">Nama Alias</label>
                                        <input type="text" class="form-control" id="nama_alias" name="nama_alias" placeholder="Nama Alias">
                                    </div>

                                    <div class="form-group">
                                        <?php
                                        if (session()->getFlashdata('errUsername')) {
                                            $isInvalidUsername = 'is-invalid';
                                        } else {
                                            $isInvalidUsername = '';
                                        }
                                        ?>
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control <?= $isInvalidUsername ?>" id="username" name="username" placeholder="Username">
                                        <?php
                                        if (session()->getFlashdata('errUsername')) {
                                            echo '<div id="validationServer03Feedback" class="invalid-feedback"> ' . session()->getFlashdata('errUsername') . '</div>';
                                        }
                                        ?>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control select2" style="width: 100%;" id="role" name="role">
                                            <option value="Superadmin">Superadmin</option>
                                            <option value="Direktur utama">Direktur Utama</option>
                                            <option value="Direktur operasional">Direktur Operasional</option>
                                            <option value="Kadiv">Kadiv</option>
                                            <option value="Staf">Staf</option>
                                            <option value="Klien">Klien</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
        </section>
        <!-- /.content -->
    </div>
</div>
<!-- ./wrapper -->
<?= $this->endsection('content'); ?>