<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        //header("location:../index.html");
    }
    ?>   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>HEART DESAIN WEB</title>
        <link href="../img/logo/logo1.png" rel="shortcut icon" />

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/back-to-top.css" rel="stylesheet" type="text/css"/>
        <!-- Custom CSS -->
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/animate-custom.css" rel="stylesheet">
        <link src="../fonts/1942.ttf" rel="fonts">
        <link href="../css/quiz.css" rel='stylesheet' type='text/css' />
        <link href="../css/plugin/app.css" rel='stylesheet' type='text/css' />


        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- js -->
        <!-- Login -->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
        
        <!--yang ini di komen aja buat develop atau edit content, biar ga muncul2 loading-->
        <!--<div class="loader"></div>-->  
        <!--header-->
        <?PHP include 'section/header.html' ?>
        <!--end header-->
        <!-- ==== HEADERWRAP ==== -->
        <?PHP include 'section/beranda.html' ?>
        <!-- /headerwrap --> 

        <!-- ==== INFORMASI ==== -->
        <?PHP include 'section/informasi.html' ?>
        <!-- /informasi --> 

        <!-- ==== daftar isi ==== -->
        <?PHP include 'section/daftar_isi.html' ?>
        <!-- /daftar isi --> 


        <!-- ==== materi ==== -->
        <?PHP include 'section/materi.html' ?>
        <!-- materi --> 

        <!-- ==== DAFTAR KUIS ==== -->
        <?PHP include 'section/list_kuis.html' ?>
        <!-- container --> 
        
        <!-- ==== KUIS 1 ==== -->
        <?PHP include 'section/kuis1.html' ?>
        <!-- container --> 
        
        <!-- ==== KUIS 2==== -->
        <!-- container --> 
        
        <!-- ==== KUIS 3==== -->
        <!-- container --> 
        
        <!-- ==== KUIS 4==== -->
        <!-- container --> 

        <!--footer-->
        <?PHP include 'section/footer.html' ?>
        <!--end footer-->
 <a href="#0" class="cd-top">Top</a>
        <!--/login-->  
        <!-- Bootstrap core JavaScript
            ================================================== --> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/modernizr.custom.js"></script>
        <script type="text/javascript" src="../js/modernizr.custom.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../js/retina.js"></script> 
        <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script> 
        <script type="text/javascript" src="../js/smoothscroll.js"></script> 
        <script type="text/javascript" src="../js/jquery-func.js"></script>
        <!--<script type="text/javascript" src="../js/kroggy-v0.1.js"></script> Script ini konflik dengan AngularJS-->
        <script src="../js/main.js" type="text/javascript"></script>
        <script src="../js/modernizr.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(function () {
                $('.loader').fadeIn('slow', function () {
                    $(this).delay(2200).fadeOut('fast');
                });
            });
        </script>
        
        <!-- Ini untuk js-nya plugin ya dek -->
        <script type="text/javascript" src="../js/plugin/libs/angular.min.js"></script>
        <script type="text/javascript" src="../js/plugin/libs/angular-animate.min.js"></script>
        <script type="text/javascript" src="../js/plugin/libs/ngFx.min.js"></script>
        <script type="text/javascript" src="../js/plugin/app.js"></script>
    </body>
</html>
