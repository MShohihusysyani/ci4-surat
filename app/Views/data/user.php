<?= $this->extend('layouts/templates'); ?>


<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <br>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success">
                            <i class="icon fas fa-check"></i>
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?> -->
                    <div class="swal" data-swal="<?= session()->get('pesan') ?>"></div>
                    <div class="card">
                        <div class="card-header">
                            <h2>Management Pengguna</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="/user/tambah" class="btn bg-gradient-primary"> <i class="fas fa-plus">
                                </i> Tambah Data</a><br><br>
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama Pengguna</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama Pengguna</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot> -->

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $user['username']; ?></td>
                                            <td><?= $user['nama_lengkap']; ?></td>
                                            <td><?= $user['role']; ?></td>
                                            <td><a href="/user/edit/<?= $user['id']; ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                                <a href="/user/delete/<?= $user['id']; ?>" class="btn btn-danger btn-sm btn-hapus"> <i class="fas fa-trash">
                                                    </i>
                                                    Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>