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
  <link href="css/product.css" rel="stylesheet">

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
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li class="active">
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
        <div class="row worm-gear">
          <div class="col-md-6">
            <h1 class="page-header">Products
              <small>Worm Gear</small>
            </h1>
          </div>
          <div class="col-md-6">
            <div id="search-container" class="form-group pull-right" >
                <button id="product-search" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                <input id="input-product-search" type="text" class="form-control" placeholder="Enter Product Keywords...">
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <?php
        include 'db.php';
        ?>
        <?php
        $query = "SELECT * FROM output_images ORDER BY imageId DESC";
        $result = $db->query($query);
        $dbResult = $result->fetchAll();
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KAD',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KAD</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KAD'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?><?php echo $row["category"]?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KA',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KA</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KA'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KOD',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KOD</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KOD'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KO',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KO</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KO'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KH',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KH</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KH'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KADE',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KADE</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KADE'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KR',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KR</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KR'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KOFN',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KOFN</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KOFN'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KRE',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KRE</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KRE'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('KRFN',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">KRFN</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'KRFN'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>

        <?php 
        $haveCategoryItem = false;
        foreach($dbResult as $row){
          if(strcmp('LB',$row['category']) == 0){
            $haveCategoryItem = true;
          }
        }
        if(!empty($dbResult) && $haveCategoryItem){
          ?>
          <div class="row card">
            <div class="col-lg-12">
              <h3 class="page-header">LB</h3>
            </div>
            <?php
            foreach($dbResult as $row)
            {
              if($row["category"] == 'LB'){
              ?>
              <div class="col-md-3 item-content" data-name="<?php echo $row["name"]; ?>">
                <div class="text-center">
                  <div class="">
                    <img class="text-center " src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" width="125" height="125" alt="">
                  </div>
                  <div class="">
                    <h5><?php echo $row["name"]; ?>
                    </h5>
                    <!-- <p><?php echo $row["category"]; ?></p> -->
                    <a href="catalog.pdf" target="_blank"  class="btn btn-primary">Download Catalogue</a>
                  </div>
                </div>
              </div>
              <?php
              }
            }
            ?>
          </div>
          <?php
        }
        ?>
        <!-- /.Service Panels -->

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
                <li class="footer-list-item">
                    <a class="footer-link" href="about.php" >About Us</a>
                </li>
                <li class="active footer-list-item"> 
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
      <script src="js/products.js"></script>

    </body>

    </html>
