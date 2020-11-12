    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="<?= base_url('dashboard') ?>" class="brand-link">
            <img src="<?= base_url('assets/dist/img/logo-linkedin.png') ?>" alt="APPLogo" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">LamaranAPP</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-header">Proses Lamaran Kerja</li>
                    <li class="nav-item">
                        <a href="<?= base_url('dashboard') ?>" class="nav-link <?= active_link('dashboard') ?>">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a href="<?= base_url('proses') ?>" class="nav-link <?= active_link('proses') ?>">
                            <i class="nav-icon fas fa-table"></i>
                            <p>Semua Proses Lamaran</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('info_loker') ?>" class="nav-link <?= active_link('info_loker') ?>">
                            <i class="nav-icon fa fa-link"></i>
                            <p>Info Loker</p>
                        </a>
                    </li>              
                </ul>
            </nav>
        </div>
    </aside>
