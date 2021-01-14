<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Admin Organiku</title>
    
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="Produk Sehat Dan Segar" name="keywords">
    <meta content="Cv PipoOrganiku" name="author">
    <meta content="Admin dashboard" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../assets/images/favicon/favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="footable/css/footablebootstrap.css" type="text/css">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="icon_fonts_assets/feather/style.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.0" rel="stylesheet">
  
  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
<!--
      <div aria-hidden="true" class="onboarding-modal modal fade animated show-on-load" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Skip Intro</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-slider-w">
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon2.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Example of onboarding screen!
                  </h4>
                  <div class="onboarding-text">
                    This is an example of a multistep onboarding screen, you can use it to introduce your customers to your app, or collect additional information from them before they start using your app.
                  </div>
                </div>
              </div>
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon5.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Example Request Information
                  </h4>
                  <div class="onboarding-text">
                    In this example you can see a form where you can request some additional information from the customer when they land on the app page.
                  </div>
                  <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Your Full Name</label><input class="form-control" placeholder="Enter your full name..." type="text" value="">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="">Your Role</label><select class="form-control">
                            <option>
                              Web Developer
                            </option>
                            <option>
                              Business Owner
                            </option>
                            <option>
                              Other
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon6.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Showcase App Features
                  </h4>
                  <div class="onboarding-text">
                    In this example you can showcase some of the features of your application, it is very handy to make new users aware of your hidden features. You can use boostrap columns to split them up.
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="features-list">
                        <li>
                          Fully Responsive design
                        </li>
                        <li>
                          Pre-built app layouts
                        </li>
                        <li>
                          Incredible Flexibility
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="features-list">
                        <li>
                          Boxed & Full Layouts
                        </li>
                        <li>
                          Based on Bootstrap 4
                        </li>
                        <li>
                          Developer Friendly     
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
-->
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="i./"><span>Organiku Admin</span></a>
            <div class="mm-buttons">
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
              <li class="">
              <a href="./">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span></a>
            </li>
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-package"></div>
                </div>
                <span>Produk</span></a>
            </li>
            <li class="">
              <a href="upload_produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-coins-4"></div>
                </div>
                <span>Upload Produk</span></a>
            </li>
             <li class="">
              <a href="add_faq">
                <div class="icon-w">
                  <div class="os-icon os-icon-ui-92"></div>
                </div>
                <span>Data Faq</span>
                
                <div class="badge badge-danger" style="background: #ff8900;">
                    4
                </div>  </a>
            </li>
            <li class="">
              <a href="add_faq">
                <form action="" method="post">
                    <input type="submit" name="logout" value="Log Out" class="btn btn-primary">
                </form>
             </a>
            </li>
              
            </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->
            
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="./">
              <div class="logo-label">
                Oragniku Admin
              </div>
            </a>
          </div>
          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>Menu</span>
            </li>
<!--
            <li class="">
              <a href="./">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span></a>
            </li>
-->
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-package"></div>
                </div>
                <span>Produk</span></a>
            </li>
            <li class="">
              <a href="upload_produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-coins-4"></div>
                </div>
                <span>Upload Produk</span></a>
            </li>
             
<!--
            <li class="sub-header">
              <span>Order Report</span>
            </li>
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-ui-44"></div>
                </div>
                <span>New Order</span>
                <div class="badge badge-danger" style="background: #1c83ed;">
                    4
                </div>  
              </a>
            </li>
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-grid-18"></div>
                </div>
                <span>On Process</span>
                
                <div class="badge badge-danger" style="background: #42c3f2;">
                    4
                </div>  
                </a>
            </li>
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-ui-92"></div>
                </div>
                <span>On Shipped</span>
                
                <div class="badge badge-danger" style="background: #ff8900;">
                    4
                </div>  </a>
            </li>
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-emoticon-smile"></div>
                </div>
                <span>Done</span>
                
                <div class="badge badge-danger" style="background: #53d462;">
                    4
                </div>  </a>
            </li>
            
            <li class="sub-header">
              <span>Feature</span>
            </li>
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-ui-44"></div>
                </div>
                <span>Report Transaction</span>
                <div class="badge badge-danger" style="background: #1c83ed;">
                    4
                </div>  
              </a>
            </li>
            <li class="">
              <a href="produk">
                <div class="icon-w">
                  <div class="os-icon os-icon-grid-18"></div>
                </div>
                <span>User Admin</span>
                
                <div class="badge badge-danger" style="background: #42c3f2;">
                    4
                </div>  
                </a>
            </li>
            <li class="">
              <a href="add_faq">
                <div class="icon-w">
                  <div class="os-icon os-icon-ui-92"></div>
                </div>
                <span>Data Faq</span>
                
                <div class="badge badge-danger" style="background: #ff8900;">
                    4
                </div>  </a>
            </li>
-->
            <li class="">
              <a href="add_faq">
                <div class="icon-w">
                  <div class="os-icon os-icon-ui-92"></div>
                </div>
                <form action="" method="post">
                    <input type="submit" name="logout" value="Log Out" class="btn">
                </form>
             </a>
            </li>
          </ul>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-transparent">
            <!--------------------
            START - Top Menu Controls
            -------------------->
            <div class="top-menu-controls">
              <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
              <!--------------------
              END - Messages Link in secondary top menu
              --------------------><!--------------------
              START - Settings Link in secondary top menu
              -------------------->
              
              <!--------------------
              END - Settings Link in secondary top menu
              --------------------><!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
              
              <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          --------------------><!--------------------
          START - Breadcrumbs
          -------------------->
          
          <!--------------------
          END - Breadcrumbs
          -------------------->