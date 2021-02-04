<div class="jumbotron jumbotron-fluid bg-green">
  <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="display-4">Live Data Covid-19</h1>
            <p class="lead">Informasi Penyebaran Virus Covid-19 Di INDONESIA</p>
        </div>
        <div class="col-md-2 mb-2">
            <div class="card">
                <div class="card-body text-center bg-orange card-idn">
                    <p class="card-text"> Total Positif</p>
                    <?php foreach($coind as $mni): ?>
                    <h4 class="card-title"><?=$mni['positif'];?> <br> <small>Orang</small></h4>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <div class="card">
                <div class="card-body text-center bg-blue card-idn">
                    <p class="card-text"> Total Sembuh</p>
                    <?php foreach($coind as $mni): ?>
                    <h4 class="card-title"><?=$mni['sembuh'];?> <br> <small>Orang</small></h4>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-2">
            <div class="card">
                <div class="card-body text-center bg-red card-idn">
                    <p class="card-text"> Total Meninggal</p>
                    <?php foreach($coind as $mni): ?>
                    <h4 class="card-title"><?=$mni['meninggal'];?> <br> <small>Orang</small></h4>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="global-data">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
                <h4>Pantau Coronavirus Covid-19 Global</h4>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-body text-center bg-orange">
                        <p class="card-text"> <?=$gpos['name'];?> <small><em>global</em></small></p>
                        <h3 class="card-title"><?=$gpos['value'];?> <small>Orang</small></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-body text-center bg-green">
                        <p class="card-text"> <?=$gsem['name'];?> <small><em>global</em></small></p>
                        <h3 class="card-title"><?=$gsem['value'];?> <small>Orang</small></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card">
                    <div class="card-body text-center bg-red">
                        <p class="card-text"> <?=$gmen['name'];?> <small><em>global</em></small></p>
                        <h3 class="card-title"><?=$gmen['value'];?> <small>Orang</small></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-green"><i class="fas fa-cube"></i> Data Kasus Coronavirus Di Indonesia Berdasarkan Provinsi</div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover table-sm" id="table">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>PROVINSI</th>
                        <th>POSITIF</th>
                        <th>SEMBUH</th>
                        <th>MENINGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($total_provinsi as $q){ ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$q->attributes->Provinsi; ?></td>
                            <td><?=$q->attributes->Kasus_Posi; ?></td>
                            <td><?=$q->attributes->Kasus_Semb; ?></td>
                            <td><?=$q->attributes->Kasus_Meni; ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Data Global -->
<div class="container mt-4 mb-4">
    <div class="card">
        <div class="card-header bg-blue"><i class="fas fa-cube"></i> Data Kasus Coronavirus Di Dunia</div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover table-sm" id="table2">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>NEGARA</th>
                        <th>POSITIF</th>
                        <th>SEMBUH</th>
                        <th>MENINGGAL</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($total_global as $q){ ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$q->attributes->Country_Region; ?></td>
                            <td><?=$q->attributes->Confirmed; ?></td>
                            <td><?=$q->attributes->Recovered; ?></td>
                            <td><?=$q->attributes->Deaths; ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>