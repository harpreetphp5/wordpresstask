<?php
/*
Template Name: Blank Template
*/

/*
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/wall_street_journal_icon.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/courier_mail_icon.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/dailytelegraph_icon.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/header_image.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/herald_sun_icon.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/mercury_icon.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/ntnews_icon.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/the_advertiser_icon.png
https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/theaus_icon.png
*/
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Meie+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="margin:0;padding:0;width:100%;">
<?php the_post(); ?>
<div style="max-width:1080px;margin:0 auto;">
<div style="margin-bottom:10px;margin-top:10px;">
    <span>CORPORATE NEWS SUBSCRIPTION</span><span style="float:right;"><b>THE AUSTRALIAN</b><sup style="color:red;font-weight:bold;">*</sup></span>
</div>
<div style="text-align:center;height:310px;padding-top:150px;
    background: url('https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/header_image.png') no-repeat; background-position: center;background-size: cover;">
    <h1>The future of your business <br/>relies on being informed.</h1>
    <a href="#" class="btn btn-primary" style="background: #00405C; color: #fff; text-decoration: none;">Request a quote</a>
</div>
<div style="max-width:640px;margin: 0 auto; font-size:26px; text-align: center;">
    <p>No matter the size of your team or company we can design a corporate news subscription to power your business with accurate and trusted
    information from our range of titles including <i>The Australian, The Wall Street Journal</i> and all of our leading local news brands.
    </p>
</div>
<div class="row news_images" style="max-width:640px;margin: 0 auto;">
    <div class="col-md-3"><img 
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/theaus_icon.png" /></div>
    <div class="col-md-3"><img 
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/wall_street_journal_icon.png" /></div>
    <div class="col-md-3"><img  
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/dailytelegraph_icon.png" /></div>
    <div class="col-md-3 last_image"><img 
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/herald_sun_icon.png" /></div>
    
</div>
<div class="row news_images" style="max-width:640px;margin: 0 auto;border-top: 1px solid #efefef;">
    <div class="col-md-3"><img 
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/courier_mail_icon.png" /></div>
    <div class="col-md-3"><img 
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/the_advertiser_icon.png" /></div>
    <div class="col-md-3"><img  
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/ntnews_icon.png" /></div>
    <div class="col-md-3 last_image"><img 
    src="https://birobit.com/challenge/WPSite/wp-content/uploads/2020/11/mercury_icon.png" /></div>
    
</div>
<?php

echo the_content();
?>
<div style="background: #00405C; padding: 10px 5px 10px 5px; color:#fff; text-align:center; font-size:16px;">
    <p><span style="font-family: 'Meie Script', cursive; font-size: 24px">NewsCorp</span>&nbsp;&nbsp;Australia</p>
    <p>@2020 Nationwide News Pty Limited. All rights reserved.</p>
</div>
</div>
</body>
<?php
