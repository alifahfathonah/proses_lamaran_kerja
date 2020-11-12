    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Semua Proses</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php base_url('dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Semua Proses Lamaran</li>
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
                                <h3 class="card-title">Semua Proses Lamaran Kerja</h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Untuk Posisi</th>
                                            <th>Kirim Dari</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($tampil as $row) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $row->tanggal_dikirim; ?></td>
                                            <td><?= $row->nama_perusahaan; ?></td>
                                            <td><?= $row->posisi_yang_dilamar; ?></td>
                                            <td><?= $row->kirim_dari; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-info btn-sm mr-1 elevation-3" data-toggle="modal" data-target="#detail_data<?php echo $row->id_lamaran; ?>" style="opacity: .8">
                                                    <i class="fas fa-th-list"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-sm mr-1 elevation-3" data-toggle="modal" data-target="#edit_data<?php echo $row->id_lamaran; ?>" style="opacity: .8">
                                                    <i class="fas fa-pen-alt"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm elevation-3" data-toggle="modal" data-target="#hapus_data<?php echo $row->id_lamaran; ?>" style="opacity: .8">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                    <tfoot>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Untuk Posisi</th>
                                            <th>Kirim Dari</th>
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
    
    <div class="modal fade" id="tambah_data">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Proses Lamaran Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <form action="<?= base_url('proses/tambah'); ?>" method="post" >
                    <div class="modal-body" style="max-height: calc(100vh - 210px); overflow-y: auto;">
                        <div class="form-group">
                            <label for="tanggal_dikirim">Tangal Lamaran Dikirim</label>
                            <div class="input-group" id="tambah_data_tanggal_Kirim" data-target-input="nearest">
                                <div class="input-group-append" data-target="#tambah_data_tanggal_Kirim" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input name="tanggal_dikirim" type="text" class="form-control datetimepicker-input" data-target="#tambah_data_tanggal_Kirim" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="posisi_yang_dilamar">Posisi Yang Dilamar</label>
                            <input type="text" name="posisi_yang_dilamar" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label class="ml-2">Kirim Dari</label>
                            <select name="kirim_dari" class="form-control form-control-user" required>
                                <option disable selected>Pilih Kirim Lamaran Dari</option>
                                <option value="Email">Email</option>
                                <option value="Web">Web</option>
                                <option value="Google Form">Google Form</option>
                                <option value="Kirim Berkas">Kirim Berkas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="url_info_loker">Url Info Loker</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                                </div>
                                <input type="text" name="url_info_loker" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_perusahaan">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="email_perusahaan">Email Perusahaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email_perusahaan" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor_telpon_perusahaan">Nomor Telpon Perusahaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="number" name="nomor_telpon_perusahaan" class="form-control" autocomplete="off" value="62" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_perusahaan">Alamat Perusahaan</label>
                            <textarea class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" rows="2" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_perusahaan">Jenis Perusahaan</label>
                            <input type="text" name="jenis_perusahaan" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="website_perusahaan">Website Perusahaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-rss"></i></span>
                                </div>
                                <input type="text" name="website_perusahaan" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="ml-2">Status Kepastian</label>
                            <select name="status_kepastian" class="form-control form-control-user" required>
                                <option disable selected>Pilih Status Kepastian</option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Tidak Ada Kepastian">Tidak Ada Kepastian</option>
                                <option value="Ditolak">Ditolak</option>
                                <option value="Diterima">Diterima</option>
                            </select>
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
    <div class="modal fade" id="detail_data<?php echo $row->id_lamaran; ?>">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Data Proses Lamaran Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <div class="modal-body" style="max-height: calc(100vh - 210px); overflow-y: auto; ">
                    <table class="table table-bordered table-hover mt-3">
                        <tr>
                            <th style="font-size:20px;" colspan="2">Detail Lamaran</th>
                        </tr>
                        <tr>
                            <th style="width:250px;">Tanggal Dikirim</th>
                            <td><?= $row->tanggal_dikirim; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Untuk Posisi</th>
                            <td><?= $row->posisi_yang_dilamar; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Kirim Dari</th>
                            <td><?= $row->kirim_dari; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Url Info Loker</th>
                            <th>
                                <a href="https://<?= $row->url_info_loker; ?>" target="_blank">
                                    <?= $row->url_info_loker; ?>
                                </a>
                            </th>
                        </tr>
                        <tr>
                            <th style="font-size:20px;" colspan="2">Detail Perusahaan</th>
                        </tr>
                        <tr>
                            <th style="width:250px;">Nama Perusahaan</th>
                            <td><?= $row->nama_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Email Perusahaan</th>
                            <td><?= $row->email_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Nomor Telpon Perusahaan</th>
                            <td><?= $row->nomor_telpon_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Alamat Perusahaan</th>
                            <td><?= $row->alamat_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Jenis Perusahaan</th>
                            <td><?= $row->jenis_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Website Perusahaan</th>
                            <td>
                                <a href="https://<?= $row->website_perusahaan; ?>" target="_blank">
                                    <?= $row->website_perusahaan; ?>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th style="font-size:20px;" colspan="2">Detail Tes Masuk</th>
                        </tr>
                        <tr>
                            <th style="width:250px;">Psikotes</th>
                            <td><?= $row->psikotes; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Interview HRD</th>
                            <td><?= $row->interview_hrd; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Interview User</th>
                            <td><?= $row->interview_user; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Interview Owner</th>
                            <td><?= $row->interview_owner; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Tes Kesehatan</th>
                            <td><?= $row->interview_hrd; ?></td>
                        </tr>
                        <tr>
                            <th style="width:250px;">Status Kepastian</th>
                            <td><?= $row->status_kepastian; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default elevation-3" data-dismiss="modal" style="opacity: .8">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php foreach ($tampil as $row) { ?>
    <div class="modal fade" id="edit_data<?php echo $row->id_lamaran; ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Data Proses Lamaran Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <form action="<?= base_url('proses/ubah/' . $row->id_lamaran) ?>" method="post">
                    <div class="modal-body" style="max-height: calc(100vh - 210px); overflow-y: auto;">
                        <div class="form-group">
                            <label for="tanggal_dikirim">Tangal Lamaran Dikirim</label>
                            <div class="input-group" id="edit_data_tanggal_Kirim" data-target-input="nearest">
                                <div class="input-group-append" data-target="#edit_data_tanggal_Kirim" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input name="tanggal_dikirim" type="text" class="form-control datetimepicker-input" value="<?= $row->tanggal_dikirim; ?>" data-target="#edit_data_tanggal_Kirim" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="posisi_yang_dilamar">Posisi Yang Dilamar</label>
                            <input type="text" name="posisi_yang_dilamar" class="form-control" value="<?= $row->posisi_yang_dilamar; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label class="ml-2">Kirim Dari</label>
                            <select name="kirim_dari" class="form-control form-control-user" required>
                                <option disable selected><?= $row->kirim_dari; ?></option>
                                <option value="Email">Email</option>
                                <option value="Web">Web</option>
                                <option value="Google Form">Google Form</option>
                                <option value="Kirim Berkas">Kirim Berkas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="url_info_loker">Url Info Loker</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                                </div>
                                <input type="text" name="url_info_loker" class="form-control" value="<?= $row->url_info_loker	; ?>" va autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_perusahaan">Nama Perusahaan</label>
                            <input type="text" name="nama_perusahaan" class="form-control" value="<?= $row->nama_perusahaan	; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="email_perusahaan">Email Perusahaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email_perusahaan" class="form-control" value="<?= $row->email_perusahaan; ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor_telpon_perusahaan">Nomor Telpon Perusahaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="number" name="nomor_telpon_perusahaan" class="form-control" value="<?= $row->nomor_telpon_perusahaan; ?>" autocomplete="off" value="62" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat_perusahaan">Alamat Perusahaan</label>
                            <textarea name="alamat_perusahaan" class="form-control" rows="2" required><?= $row->alamat_perusahaan; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jenis_perusahaan">Jenis Perusahaan</label>
                            <input type="text" name="jenis_perusahaan" class="form-control" value="<?= $row->jenis_perusahaan; ?>" autocomplete="off" required>
                        </div>                        
                        <div class="form-group">
                            <label for="website_perusahaan">Website Perusahaan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-rss"></i></span>
                                </div>
                                <input type="text" name="website_perusahaan" class="form-control" value="<?= $row->website_perusahaan; ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="psikotes">Psikotes</label>
                            <input type="text" name="psikotes" class="form-control" value="<?= $row->psikotes; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="interview_hrd">Interview HRD</label>
                            <input type="text" name="interview_hrd" class="form-control" value="<?= $row->interview_hrd; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="interview_user">Interview User</label>
                            <input type="text" name="interview_user" class="form-control" value="<?= $row->interview_user; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="interview_owner">Interview Owner</label>
                            <input type="text" name="interview_owner" class="form-control" value="<?= $row->interview_owner; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label for="tes_kesehatan">Tes Kesehatan</label>
                            <input type="text" name="tes_kesehatan" class="form-control" value="<?= $row->tes_kesehatan; ?>" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label class="ml-2">Status Kepastian</label>
                            <select name="status_kepastian" class="form-control form-control-user" required>
                                <option disable selected><?= $row->status_kepastian; ?></option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Tidak Ada Kepastian">Tidak Ada Kepastian</option>
                                <option value="Ditolak">Ditolak</option>
                                <option value="Diterima">Diterima</option>
                            </select>
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
    <div class="modal fade" id="hapus_data<?php echo $row->id_lamaran; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data Lamaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <form action="<?= base_url('proses/hapus/' . $row->id_lamaran) ?>" method="post">
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
