    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Info Lowongan Pekerjaan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php base_url('dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Info Lowongan Pekerjaan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <button type="button" class="btn btn-primary mb-3 elevation-3" data-toggle="modal" data-target="#tambah_data" style="opacity: .8">Tambah Data</button>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Info Lowongan Pekerjaan</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Info Lowongan</th>
                                            <th>Url Info Lowongan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($tampil as $row) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $row->nama_loker; ?></td>
                                            <td><?= $row->url_loker; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm mr-1 elevation-3" data-toggle="modal" data-target="#ubah_data<?php echo $row->id_info_loker ; ?>" style="opacity: .8">
                                                    <i class="fas fa-pen-alt"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm elevation-3" data-toggle="modal" data-target="#hapus_data<?php echo $row->id_info_loker ; ?>" style="opacity: .8">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Info Lowongan</th>
                                            <th>Url Info Lowongan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Info Lowongan Pekerjaan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <form action="<?= base_url('info_loker/tambah'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_loker">Nama Loker</label>
                            <input type="text" name="nama_loker" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="url_loker">Url Loker</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                                </div>
                                <input type="text" name="url_loker" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default elevation-3" data-dismiss="modal" style="opacity: .8">Keluar</button>
                        <button type="submit" class="btn btn-primary elevation-3 simpan" style="opacity: .8">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php foreach ($tampil as $row) { ?>
    <div class="modal fade" id="ubah_data<?php echo $row->id_info_loker ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Info Lowongan Pekerjaan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <form action="<?= base_url('info_loker/ubah/'. $row->id_info_loker ); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_loker">Nama Loker</label>
                            <input type="text" name="nama_loker" class="form-control" value="<?= $row->nama_loker; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="url_loker">Url Loker</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                                </div>
                                <input type="text" name="url_loker" class="form-control" value="<?= $row->url_loker; ?>" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default elevation-3" data-dismiss="modal" style="opacity: .8">Keluar</button>
                        <button type="submit" class="btn btn-primary elevation-3 simpan" style="opacity: .8">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php foreach ($tampil as $row) { ?>
    <div class="modal fade" id="hapus_data<?php echo $row->id_info_loker ; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data Loker</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <form action="<?= base_url('info_loker/hapus/'. $row->id_info_loker) ?>" method="post">
                    <div class="modal-body">
                        Data akan dihapus permanent!
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default elevation-3" data-dismiss="modal" style="opacity: .8">Keluar</button>
                        <button type="submit" class="btn btn-danger elevation-3 simpan" style="opacity: .8">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
        