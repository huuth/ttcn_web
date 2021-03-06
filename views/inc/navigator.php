<!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    1-900-6996
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> infor@phongtro69.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <?php if(isset($_SESSION['user_infor'])):?>
                    </a>
                      <div class="dropdown">
                      <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['user_infor']['name_display'];?>
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href='index.php?ctr=account&act=getIndex&user_id=<?php echo $_SESSION['user_infor']['user_id'];?>'>Thông tin cá nhân</a></li>
                        <li><a href="index.php?ctr=auth&act=logout">Thoát</a></li>                        
                      </ul>
                    </div>
                    <div class="posting">
                      <a href="index.php?ctr=addnews&act=getAddNews">ĐĂNG TIN</a>
                    </div>
                  <?php else :?>                    
                    <a href="index.php?ctr=auth&act=getRegister" class="aa-register">ĐĂNG KÝ</a>
                    <a href="index.php?ctr=auth&act=getLogin" class="aa-login">ĐĂNG NHẬP</a>                    
                  <?php endif;?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->

  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <!-- Text based logo -->
           <a class="navbar-brand aa-logo" href="index.php">PHONGTRO<span>69</span></a>
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <?php 
              $classCss='';
              if($_SERVER["REQUEST_URI"] == '/index.php' ||  $_SERVER["REQUEST_URI"] == '/' || $_SERVER["REQUEST_URI"] == '' || $_SERVER["REQUEST_URI"] == '/index.php?ctr=home&act=getIndex'){
                $classCss = 'active';
              }              
            ?>                        
            <li class="<?php echo $classCss ?>"><a href="index.php">TRANG CHỦ</a></li>
            <?php if(isset($_SESSION['typeList'])): ?>
              <?php 
                  foreach($_SESSION['typeList'] as $type): 
                    if(isset($_GET['type_id']) && ($_GET['type_id'] == $type['type_id'])){
                      $classCss = 'active';
                    }else{
                      $classCss = '';
                    }
              ?>
              <li class="<?php echo $classCss; ?>"><a style="text-transform: uppercase;" href="index.php?ctr=search&act=getRent&type_id=<?php echo $type['type_id'];?>"><?php echo $type['type_name']; ?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>                      
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->