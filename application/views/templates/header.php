<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <link href="/assets/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
    <div class="wrap">
        <div id="header">
            <a href="/"><img src="/css/img/logo.png" alt="logo" /></a>
            <ul id="navigation">
                <li><a href="<?= site_url('welcome/accueil') ?>">Accueil</a></li>
                <li><a href="<?= site_url('welcome/bonjour') ?>">bonjour</a></li>
            </ul>
        </div><!-- end header -->