<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thai Su Factory</title>
    <link rel="icon" href="img/thaisutop.ico">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/common.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top nav-setting" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand brand-size-bigger" href="home.html" >
                   <img class="thaisu-logo-main" src="img/transthaisu.png" alt="Thaisu" >
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right nav-right-menu navbar-default " >
                    <li class="">
                        <a href="home.html">Home</a>
                    </li>
                    <li class="active">
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="products.php">Products</a>
                    </li>
                    <li>
                        <a href="services.html">Service</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

      <!-- Page Content -->
      <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    <!-- <small>ThaiSu</small> -->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row card">
            <div class="col-md-6">
                <?php
                include 'db.php';
                $query = "SELECT * FROM output_images WHERE category = 'aboutus' ORDER BY imageId DESC LIMIT 1";
                $imgResult = $db->query($query);
                $dbResultx = ($imgResult->rowCount() > 0) ? true : false;
                if($dbResultx){
                    $row2 = $imgResult->fetch(PDO::FETCH_ASSOC);
                ?>
                <img class="img-responsive" style="width:455px;height:273px;" src="imageView.php?image_id=<?php echo $row2["imageId"];?>" alt="">
                <?php
                }
                else{
                ?>
                <img class="img-responsive" style="width:455px;height:273px;" src="http://placehold.it/750x450" alt="">
                <?php
                }
                ?>
            </div>
            <div class="col-md-6">
                <?php
                $sqls = "SELECT * FROM contact_us WHERE id=1";
                $result = $db->query($sqls);
                $count = ($result->rowCount() > 0) ? true : false;
                if($count){
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                ?>
                <h2><?php if($count) echo $row['header']; else echo "เกี่ยวกับเรา"; ?></h2>
                <p><?php if($count) echo $row['detail']; else echo "ขออภัยเว็บไซต์กำลังปรับปรุง"; } ?></p>
            </div>
        </div>
        <!-- /.row -->





        <hr>

    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer id="footer">
        <div class="row">
            <div class="col-md-4">
                <p>Copyright &copy; THAI SU 2017</p>
            </div>
            <div class="col-md-4">
                <li class="footer-list-item">
                    <a class="footer-link" href="home.html" >Home</a>
                </li>
                <li class="active footer-list-item">
                    <a class="footer-link" href="about.php" >About Us</a>
                </li>
                <li class="footer-list-item"> 
                    <a class="footer-link" href="products.php" >Products</a>
                </li>
                <li class="footer-list-item">
                    <a class="footer-link" href="services.html" >Service</a>
                </li>
                <li class="footer-list-item">
                    <a class="footer-link" href="contact.html" >Contact Us</a>
                </li>
            </div>
            <div class="col-md-4">
                <div class="footer-text">
                    <p><b>บริษัท ไทยซูแฟคตอรี่ จำกัด</b></p> 
                    <p>4 ซอย 43 แยก 18 ถนนจันทน์ แขวงบางโคล่เขตบางคอแหลม, กรุงเทพฯ 10120</p>
                    <p>Tel. (02) 211-0870-1</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
