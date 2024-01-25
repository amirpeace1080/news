<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <link rel="stylesheet" href="<?php $this->asset('css/bootstrap.min.css') ?>" media="all" type="text/css">
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>" media="all" type="text/css">
</head>
<body>
    <section id="app">
        <nav class="navbar navbar-expand-lg navbar-dark-bg-blue">
            <a href="<?php $this->url('panel') ?>" class="navbar-brand">news site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $this->url('home') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php      foreach($categories as $category){  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $this->url('home/category/' . $category['id']) ?>">
                        <?php
                            echo $category['name'];
                        ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>