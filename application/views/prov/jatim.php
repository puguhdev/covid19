<?php 
$ch = curl_init ("https://covid19dev.jatimprov.go.id/xweb/draxi");;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$page = curl_exec($ch);

preg_match('#<table[^>]*>(.+?)</table>#is', $page, $matches);
foreach ($matches as &$match) {
    $match = $match;
}
echo '<div class="container mt-4 mb-4">
        <div class="card">
            <div class="card-header bg-green">Data Pasien Covid-19 Provinsi Jawa Timur</div>
            <div class="card-body table-responsive">
            <table class="table table-hover table-sm table-bordered" id="table">'.
                $matches[1]
            .'</table>
            </div>
        </div>
      </div>';