<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= isset($title) ? $title : 'uTools.info' ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= site_url('application/assest/i/favicon.ico') ?>" type="image/x-icon"/>
    <link rel="stylesheet" href="<?= CSS_PATH . 'reset.css' ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php if (isset($CSS_files) && count($CSS_files) > 0): ?>
        <?php foreach ($CSS_files as $CSS_file_path): ?>
            <link rel="stylesheet" href="<?= CSS_PATH . 'common.css' ?>">
            <link rel="stylesheet" href="<?= CSS_PATH . $CSS_file_path ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6368842171437774",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url() ?>"><span>uTools</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= site_url() ?>">Home</a></li>
                <!-- <li><a href="#">About</a></li>
               <li><a href="#">Projects</a></li>
               <li><a href="#">Contact</a></li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid fill-height text-center">
    <div class="row content">



