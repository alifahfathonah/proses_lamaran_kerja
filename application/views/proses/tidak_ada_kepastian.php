    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Lamaran Tidak Ada Kepastian</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('proses'); ?>">Semua Proses Lamaran</a></li>
                            <li class="breadcrumb-item active">Lamaran Tidak Ada Kepastian</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Semua Proses Lamaran Kerja Yang Tidak Ada Kepastian</h3>
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
    
    <?php foreach ($tampil as $row) { ?>
    <div class="modal fade" id="detail_data<?php echo $row->id_lamaran; ?>">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detail Data Proses Lamaran Kerja Yang Tidak Ada Kepastian</h4>
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
                            <th style="width:300px;">Tanggal Dikirim</th>
                            <td><?= $row->tanggal_dikirim; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Untuk Posisi</th>
                            <td><?= $row->posisi_yang_dilamar; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Kirim Dari</th>
                            <td><?= $row->kirim_dari; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Url Info Loker</th>
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
                            <th style="width:300px;">Nama Perusahaan</th>
                            <td><?= $row->nama_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Email Perusahaan</th>
                            <td><?= $row->email_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Nomor Telpon Perusahaan</th>
                            <td><?= $row->nomor_telpon_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Alamat Perusahaan</th>
                            <td><?= $row->alamat_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Jenis Perusahaan</th>
                            <td><?= $row->jenis_perusahaan; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Website Perusahaan</th>
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
                            <th style="width:300px;">Psikotes</th>
                            <td><?= $row->psikotes; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Interview HRD</th>
                            <td><?= $row->interview_hrd; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Interview User</th>
                            <td><?= $row->interview_user; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Interview Owner</th>
                            <td><?= $row->interview_owner; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Tes Kesehatan</th>
                            <td><?= $row->interview_hrd; ?></td>
                        </tr>
                        <tr>
                            <th style="width:300px;">Status Kepastian</th>
                            <td><?= $row->status_kepastian; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default elevation-3" data-dismiss="modal" style="opacity: .8">Keluar</button>
                    <button type="submit" class="btn btn-primary elevation-3 simpan" style="opacity: .8">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
