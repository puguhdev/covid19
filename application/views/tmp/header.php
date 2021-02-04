<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?=site_url()?>">
            <img src="<?=site_url('assets/logo2.png')?>" class="img-fluid" width="140" alt="Rimo Digital">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="<?=site_url()?>"><i class="fas fa-home"></i> Home</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data Per Kabupaten/Kota
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?=site_url('provinsi-aceh')?>">Aceh</a>
                        <a class="dropdown-item" href="<?=site_url('provinsi-jatim')?>">Jawa Timur</a>
                        <a class="dropdown-item" href="<?=site_url('provinsi-ntb')?>">Nusa Tenggara Barat</a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>