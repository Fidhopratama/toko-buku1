<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Halaman Admin</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .content-wrapper {
      padding: 20px;
    }

    .content-header {
      margin-bottom: 20px;
    }

    .content-header h1 {
      font-size: 28px;
      margin: 0;
    }

    .breadcrumb {
      background-color: #f4f4f4;
      padding: 10px;
      border-radius: 5px;
      list-style: none;
      margin: 0;
      display: inline-block;
    }

    .breadcrumb li {
      display: inline;
      margin-right: 5px;
    }

    .breadcrumb li a {
      text-decoration: none;
      color: #333;
    }

    .breadcrumb li.active {
      font-weight: bold;
    }

    .content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      margin-top: 20px;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
    }

    .card {
      border: 1px solid #ddd;
      border-radius: 5px;
      padding: 20px;
      margin: 10px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      width: calc(33.3333% - 20px); /* Mengatur lebar card sesuai dengan jumlah card */
    }

    .card h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .card img {
      width: 100%;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="content-wrapper">
    <div class="content-header">
      <h1>Beranda <small>Halaman Admin</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">BERANDA</li>
      </ol>
    </div>
    <div class="content">
      <h4>Silahkan Pilih Menu di Samping untuk Mengolah Data.</h4>
      
      <div class="card-container">
        <div class="card">
          <img src="<?php echo 'dist/img/59-harrypotter.jpeg'; ?>" alt="Harry Potter Image">
          <div class="card-body">
            <h2>Harry Potter 1</h2>
            <!-- Isi Card Body -->
          </div>
        </div>

        <div class="card">
          <img src="<?php echo 'dist/img/234-harrypotter1.jpeg'; ?>" alt="Harry Potter Image">
          <div class="card-body">
            <h2>Harry Potter 2</h2>
            <!-- Isi Card Body -->
          </div>
        </div>

        <div class="card">
          <img src="<?php echo 'dist/img/592-harrypotter2.jpeg'; ?>" alt="Harry Potter Image">
          <div class="card-body">
            <h2>Harry Potter 3</h2>
            <!-- Isi Card Body -->
          </div>
        </div>
      </div>

      <!--
      <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/fEW67tZ8K-k?si=6XnWyqq3WB0EibVz?autoplay=1" frameborder="0" allowfullscreen></iframe>
      </div>
      -->
    </div>
  </div>
</body>
</html>
