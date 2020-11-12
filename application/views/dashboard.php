    <div class="content-wrapper">
        <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active"><a href="<?php base_url('dashboard'); ?>">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <h3><?= $total_lamaran['total']; ?></h3>
                                        <p>Total Semua Lamaran</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="<?= base_url('proses'); ?>" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="small-box bg-primary">
                                    <div class="inner">
                                        <h3><?= $total_info_loker['total']; ?></h3>
                                        <p>Total Semua Info Loker</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="<?= base_url('info_loker   '); ?>" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                            <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/dist/img/profile.png'); ?>" alt="profile">
                                        </div>
                                        <h3 class="profile-username text-center">Arfian Joko</h3>
                                        <p class="text-muted text-center">Junior Web Development</p>
                                    </div>                                   
                                </div>
                                
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active " href="#timeline" data-toggle="tab">Langakah Langkah</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Pengaturan</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="timeline">
                                                <div class="timeline timeline-inverse">
                                                    <div class="time-label">
                                                        <span class="bg-success">Pertama</span>
                                                    </div>
                                                    <div>
                                                        <i class="fas far fa-clock bg-secondary"></i>
                                                        <div class="timeline-item">
                                                            <h3 class="timeline-header">Langakah <b>Pertama</b></h3>
                                                            <div class="timeline-body">
                                                                Mencari informasi lowongan pekerjaan di website atau sosial media portal informasi lowongan pekerjaan
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-label">
                                                        <span class="bg-warning">Kedua</span>
                                                    </div>
                                                    <div>
                                                        <i class="fas far fa-clock bg-secondary"></i>
                                                        <div class="timeline-item">
                                                            <h3 class="timeline-header">Langkah <b>Kedua</b></h3>
                                                            <div class="timeline-body">
                                                                Membuat surat lamaran dan berkas persyaratan sesuai syarat yang dibutuhkan oleh perusahaan
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-label">
                                                        <span class="bg-warning">Ketiga</span>
                                                    </div>
                                                    <div>
                                                        <i class="fas far fa-clock bg-secondary"></i>
                                                        <div class="timeline-item">
                                                            <h3 class="timeline-header">Langkah <b>Ketiga</b></h3>
                                                            <div class="timeline-body">
                                                                Mengirim berkas lamaran melalui email atau secara langsung ke perusahaan
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-label">
                                                        <span class="bg-warning">Keempat</span>
                                                    </div>
                                                    <div>
                                                        <i class="fas far fa-clock bg-secondary"></i>
                                                        <div class="timeline-item">
                                                            <h3 class="timeline-header">Langkah <b>Keempat</b></h3>
                                                            <div class="timeline-body">
                                                                Input data ke <b>LamaranAPP</b> Agar supaya saat ada panggilan interview 
                                                                tidak lupa mendaftar di perusahaan apa, dan bisa menggumpulkan data untuk persiapan interview
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-label">
                                                        <span class="bg-success">Selesai</span>
                                                    </div>
                                                    <div>
                                                        <i class="fa fa-check bg-secondary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="settings">
                                                <form class="form-horizontal">
                                                    <div class="form-group row">
                                                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                            </label>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="offset-sm-2 col-sm-10">
                                                            <button type="submit" class="btn btn-danger">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tambah_info_loker" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data Lamaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                </div>
                <form action="" method="post">
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
