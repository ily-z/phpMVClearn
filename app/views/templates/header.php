<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <script src="node_modules\jquery\dist\jquery.min.js"></script> -->
    <script src="../public/js/jquery.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman <?= $data['halaman']?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL;?>">MVC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= BASEURL;?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?= BASEURL?>/about">About</a>
            <a class="nav-item nav-link" href="<?= BASEURL?>/about/page">Page</a>
            <a class="nav-item nav-link" href="<?= BASEURL?>/orang">orang-orang</a>
            </div>
        </div>
  </div>
</nav>