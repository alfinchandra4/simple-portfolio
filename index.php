<!doctype html>
<html lang="en">

<?php include "header.php" ?>

<body>
  <div class="col-md-6 col-sm-12 col-xs-12 offset-md-3 ps-3 pe-3" style="margin-top:100px">

    <?php
    $arrayProjects = [
      [
        'link' => 'kuesioner.php',
        'title' => 'Sistem Informasi Kuesioner UPN "Veteran" Jakarta',
        'created' => 'Januari 2021'
      ],  [
        'link' => 'makam.php',
        'title' => 'Sistem Informasi Pendaftaran Makam Wakaf Bungur',
        'created' => 'Juli 2020'
      ],  [
        'link' => 'pusatkarir.php',
        'title' => 'Sistem Informasi Pusat Karir UPN "Veteran" Jakarta',
        'created' => 'Juni 2020'
      ],[
        'link' => 'elearning.php',
        'title' => 'Sistem Informasi E-Learning',
        'created' => 'Mei 2020'
      ], [
        'link' => 'bmc.php',
        'title' => 'Sistem Informasi Penjadwalan Pasien Pada Klinik Bidakara Medical Center',
        'created' => 'April 2020'
      ], [
        'link' => 'https://serpongparadise.id/',
        'title' => 'Serpongparadise.id',
        'created' => 'Maret 2020'
      ]
    ];

    foreach ($arrayProjects as $key => $value) {
    ?>
      <a href="<?= $value['link'] ?>" class="text-decoration-none">
        <div class="projects">
          <?= $value['title'] ?>
          <div style="font-size: 10pt"><?= $value['created'] ?></div>
        </div>
      </a>

    <?php
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>