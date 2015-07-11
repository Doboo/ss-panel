<?php
include_once 'lib/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $site_name; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <?php include_once 'nav.php';?>

    <div class="jumbotron">
        <h2><?php echo $site_name; ?></h2>
        <p class="lead"> tuanss第000000期，每月50G。</p>
        <p><a class="btn btn-lg btn-success" href="user/login.php" role="button">立即登录</a></p>
    </div>
        <div class="col-lg-6">
            <a href="http://www.vultr.com/?ref=6823336"><h4>Vultr</h4></a>
            <p>使用我的推广链接,注册送10美元，可用2个月</p>
            <h4><a href="https://www.digitalocean.com/?refcode=69936409b631">Digitalocean</a></h4>
            <p> 使用我的推广链接，注册送10美元，可用1个月</p>
        </div>

        <div class="col-lg-6">
            <a href="https://bandwagonhost.com/aff.php?aff=3745"><h4>搬瓦工</h4></a>
            <p>支持支付宝，最低3.99美元1年</p>

            <h4><a href="https://www.linode.com/?r=cbdd41f02c5144e81c1a3885150a2ff2afd28b64">Linode</a></h4>
            <p> 使用我的推广链接，注册送10美元，可用1个月。</p>
        </div>
    <div class="row marketing">
        
    </div><?php
            include_once 'footer.php';
            include_once 'ana.php';?>
</div> <!-- /container -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
