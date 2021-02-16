<?php
session_start();
require_once "pdo.php";

$mindate = date('Y-m-d'); 

if(isset($_POST['date']) && isset($_POST['mandapam'])){
    $year = 'booking'.substr($_POST['date'], 0, 4); 
    $stmt = $pdo->prepare('SELECT available_time FROM '.$year.' where mandapam = :mandapam AND booking_date = :date');
    $stmt->execute(array(':mandapam' => $_POST['mandapam'], ':date'=> $_POST['date']));
    while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        $_SESSION['available'] = false;
        $_SESSION['available_time'] = $row['available_time'];
        header('Location: availability.php');
        return;
    }
    $_SESSION['available'] = $_SESSION['available'] = true;
    header('Location: availability.php');
    return;
  }

?>
<html
    class=" js flexbox canvas canvastext webgl touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"
    lang="zxx">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style>

<head>
    <style>
        .dismissButton {
            background-color: #fff;
            border: 1px solid #dadce0;
            color: #1a73e8;
            border-radius: 4px;
            font-family: Roboto, sans-serif;
            font-size: 14px;
            height: 36px;
            cursor: pointer;
            padding: 0 24px
        }

        .dismissButton:hover {
            background-color: rgba(66, 133, 244, 0.04);
            border: 1px solid #d2e3fc
        }

        .dismissButton:focus {
            background-color: rgba(66, 133, 244, 0.12);
            border: 1px solid #d2e3fc;
            outline: 0
        }

        .dismissButton:hover:focus {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd
        }

        .dismissButton:active {
            background-color: rgba(66, 133, 244, 0.16);
            border: 1px solid #d2e2fd;
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .dismissButton:disabled {
            background-color: #fff;
            border: 1px solid #f1f3f4;
            color: #3c4043
        }
    </style>
    <style>
        .gm-style .gm-style-mtc label,
        .gm-style .gm-style-mtc div {
            font-weight: 400
        }

        .gm-style .gm-style-mtc ul,
        .gm-style .gm-style-mtc li {
            box-sizing: border-box
        }
    </style>
    <style>
        .gm-control-active>img {
            box-sizing: content-box;
            display: none;
            left: 50%;
            pointer-events: none;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .gm-control-active>img:nth-child(1) {
            display: block
        }

        .gm-control-active:hover>img:nth-child(1),
        .gm-control-active:active>img:nth-child(1) {
            display: none
        }

        .gm-control-active:hover>img:nth-child(2),
        .gm-control-active:active>img:nth-child(3) {
            display: block
        }
    </style>
    <link type="text/css" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700">
    <style>
        .gm-ui-hover-effect {
            opacity: .6
        }

        .gm-ui-hover-effect:hover {
            opacity: 1
        }
    </style>
    <style>
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px;
            box-sizing: border-box
        }
    </style>
    <style>
        @media print {

            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {

            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }
    </style>
    <style>
        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }
    </style>
    <style>
        .gm-style img {
            max-width: none;
        }

        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
a {
  text-decoration: none;
  color: #000000;
}

a:hover {
  color: #222222
}

/* Dropdown */

.dropdown {
  display: inline-block;
  position: relative;
}

.dd-button {
  display: inline-block;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 10px 30px 10px 20px;
  background-color: #ffffff;
  cursor: pointer;
  white-space: nowrap;
}

.dd-button:after {
  content: '';
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid black;
}

.dd-button:hover {
  background-color: #eeeeee;
}


.dd-input {
  display: none;
}

.dd-menu {
  position: absolute;
  top: 100%;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 0;
  margin: 2px 0 0 0;
  box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
  background-color: #ffffff;
  list-style-type: none;
}

.dd-input + .dd-menu {
  display: none;
} 

.dd-input:checked + .dd-menu {
  display: block;
} 

.dd-menu li {
  padding: 10px 20px;
  cursor: pointer;
  white-space: nowrap;
}

.dd-menu li:hover {
  background-color: #f6f6f6;
}

.dd-menu li a {
  display: block;
  margin: -10px -20px;
  padding: 10px 20px;
}

.dd-menu li.divider{
  padding: 0;
  border-bottom: 1px solid #cccccc;
}
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPSTT Availability</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/img/logo.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">

    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/43/6/intl/en_gb/common.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/43/6/intl/en_gb/util.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/43/6/intl/en_gb/map.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/43/6/intl/en_gb/marker.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/43/6/intl/en_gb/stats.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/43/6/intl/en_gb/onion.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d40.67161363841455&amp;2d-74.0104732923174&amp;2m2&amp;1d40.79259042049005&amp;2d-73.85827669551274&amp;2u14&amp;4sen-GB&amp;5e0&amp;6sm%40540000000&amp;7b0&amp;8e0&amp;12e2&amp;callback=_xdc_._o1is1c&amp;key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;token=52635"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps/vt?pb=!1m4!1m3!1i14!2i4826!3i6157!1m4!1m3!1i14!2i4827!3i6157!1m4!1m3!1i14!2i4826!3i6158!1m4!1m3!1i14!2i4826!3i6159!1m4!1m3!1i14!2i4827!3i6158!1m4!1m3!1i14!2i4827!3i6159!1m4!1m3!1i14!2i4828!3i6157!1m4!1m3!1i14!2i4828!3i6158!1m4!1m3!1i14!2i4828!3i6159!1m4!1m3!1i14!2i4826!3i6160!1m4!1m3!1i14!2i4827!3i6160!1m4!1m3!1i14!2i4828!3i6160!2m3!1e0!2sm!3i540264326!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjZ8cy5lOmcuZnxwLmM6I2ZmRjFGMUYxLHMudDo0fHAuYzojZmZGMUYxRjF8cC52Om9mZixzLnQ6NDl8cy5lOmcuc3xwLnY6b258cC5jOiNmZmYscy50OjQ5fHMuZTpnLmZ8cC5jOiNmZmYscy50OjUxfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZGMUYxRjF8cC53OjEuOCxzLnQ6NTF8cy5lOmcuc3xwLmM6I2ZmRUNFQ0VDLHMudDoyfHMuZTpnLmZ8cC52Om9ufHAuYzojZmZGRjUxNTEscy50OjF8cy5lOmd8cC5jOiNmZmYscy50OjUwfHMuZTpnLmZ8cC5jOiNmZkYxRjFGMSxzLnQ6NTB8cy5lOmcuZnxwLmM6I2ZmZmZmZmZmLHMudDo1fHMuZTpnLmZ8cC52Om9ufHAuYzojZmZGOUY5Rjkscy50OjN8cy5lOmwudC5mfHAuYzojZmZCN0I3Qjcscy50OjF8cy5lOmwudC5mfHAudjpvbnxwLmM6I2ZmOGI4YjhiLHMudDoyfHMuZTpsLml8cC52Om9mZixzLnQ6MnxzLmU6bHxwLnY6b2ZmLHMudDo1MHxzLmU6Zy5zfHAuYzojZmZkNmQ2ZDYscy50OjN8cy5lOmwuaXxwLnY6b2ZmLHMudDoyfHMuZTpnLmZ8cC5jOiNmZkVCRUJFQg!4e3!12m1!5b1&amp;callback=_xdc_._h6usy3&amp;key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;token=84061"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps-api-v3/api/js/43/6/intl/en_gb/controls.js"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1shttps%3A%2F%2Fdemo.hasthemes.com%2Fstomv-preview%2Fstomv%2Fcontact-us.html&amp;4sAIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;callback=_xdc_._wzopiv&amp;key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;token=2824"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps/api/js/QuotaService.RecordEvent?1shttps%3A%2F%2Fdemo.hasthemes.com%2Fstomv-preview%2Fstomv%2Fcontact-us.html&amp;3sAIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;7s9nkolf&amp;10e1&amp;callback=_xdc_._hchhk6&amp;key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;token=123686"></script>
    <script type="text/javascript" charset="UTF-8"
        src="https://maps.googleapis.com/maps/vt?pb=!1m4!1m3!1i14!2i4826!3i6157!1m4!1m3!1i14!2i4827!3i6157!1m4!1m3!1i14!2i4826!3i6158!1m4!1m3!1i14!2i4826!3i6159!1m4!1m3!1i14!2i4827!3i6158!1m4!1m3!1i14!2i4827!3i6159!1m4!1m3!1i14!2i4828!3i6157!1m4!1m3!1i14!2i4828!3i6158!1m4!1m3!1i14!2i4828!3i6159!1m4!1m3!1i14!2i4826!3i6160!1m4!1m3!1i14!2i4827!3i6160!1m4!1m3!1i14!2i4828!3i6160!2m3!1e0!2sm!3i540264326!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e3!12m1!5b1&amp;callback=_xdc_._23e4t8&amp;key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;token=110972"></script>
</head>

<body>





    <!--====================  header area ====================-->
    <div class="header-area header-area--default">


        <!-- Header Bottom Wrap Start -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center">
                        <div class="header__logo">
                            <div class="logo">
                                <a href="index.html">
                                    <img class="Nav-Img" alt="" src="assets/images/img/NavLogo.png" />
                                </a>
                            </div>
                        </div>
                        <div class="header-right">
                            <div class="header__navigation menu-style-three d-none d-lg-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li class="has-children has-children--multilevel-submenu active">
                                            <a href="index.html">
                                                <span>Home
                                                </span>
                                            </a>
                                        </li>
                                        <li class="has-children">
                                            <a href="events-details.html">
                                                <span>About
                                                </span>
                                            </a>

                                        <li class="has-children">
                                            <a href="gallery.html">
                                                <span>Gallery
                                                </span>
                                            </a>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="#">
                                                <span>Mandapams
                                                </span>
                                            </a>
                                            <ul class="submenu">
                                                <li>
                                                    <a href="vaikundam.html">
                                                        <span>Vaikundam
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="ananthashayanam.html">
                                                        <span>Ananthashayanam
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="Bhajanapura.html">
                                                        <span>Bhajanapura
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="mahalakshmi.html">
                                                        <span>Mahalakshmi
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="sudarshanam.html">
                                                        <span>Sudarshanam
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-children">
                                            <a href="chithralayam.html">
                                                <span>Chithralayam
                                                </span>
                                            </a>
                                        </li>
                                        </li>
                                        <li class="has-children">
                                            <a href="contact-us.html">
                                                <span>Contact
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>


                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->



    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area--bg-two bg-overlay-black-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="breadcrumb-title text-white">Availability</h3>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Availability</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
                
            </div>
        </div>
    </div>
    <br><br>

<div class="d-flex flex-wrap justify-content-center align-item-center">
    <div class="d-flex flex-wrap justify-content-center align-item-center shadow px-3 mb-5" style="width=410px;  border-radius: 5px;">
        <form method="POST" class="d-flex flex-wrap justify-content-center align-item-center">
            <div class="d-flex flex-column bd-highlight mb-3 ">
            <label class="p-2 bd-highlight" for="date">Select date : </label>
            <input class="p-2 bd-highlight my-3" type="date" id="date" name="date" max="2025-12-31" min=<?echo($mindate)?>>
                <label class="p-2 bd-highlight" for="mandapam">Select Mandapam : </label>
                <select class="p-2 bd-highlight" id="mandapam" name="mandapam"> 
                    <option value="Sree Vaikundom">Sree Vaikundom</option>
                    <option value="Ananthasayanam">Ananthasayanam</option>
                    <option value="Bhajanappura">Bhajanappura</option>
                    <option value="Mahalakshmi">Mahalakshmi</option>
                    <option value="Sudharsan">Sudharsan</option>
                </select>
                <button type="submit" class="p-2 bd-highlight btn btn-outline-warning mt-3" style="width:130px; border-radius: 25px; align-self: center;">Check</button>
            </div>
            
        </form>
    </div>
</div>
</div>
   
   <div  class="d-flex flex-wrap align-items-center justify-content-center">
    <?php 
        if (isset($_SESSION['available'])){
            if($_SESSION['available'] === true){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert mb-5 " style="width:500px;">
                Mandapam is available! Please contact the office for booking
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
                unset($_SESSION['available']);
            }else if($_SESSION['available'] === false && isset($_SESSION['available_time'])){
                echo '<div class="alert alert-danger alert-dismissible fade show mb-5" role="alert" style="width:500px;">
                <strong>Sorry! </strong>'.$_SESSION['available_time'].'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';   
                unset($_SESSION['available']);
                unset($_SESSION['available_time']);
            }
        }else{
            echo '<div class="alert alert-secondary alert-dismissible fade show mb-5" role="alert" style="width:500px;">
                Please select date and mandapam
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
        } 
    ?>
    </div>

    
    <!--========== Footer Area Start ==========-->
    <footer class="footer-area bg-footer">
        <div class="footer-top section-space--ptb_80 section-pb text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget-footer mt-30">
                            <div class="footer-title">
                                <h6>Address</h6>
                            </div>
                            <div class="footer-contents">
                                <ul>
                                    <li><span>Sree Padmanabha Swamy Temple <br>
                                            Fort, Thiruvananthapuram - 695023, <br>
                                            Kerala, India</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-30">
                            <div class="footer-title">
                                <h6>Related Links</h6>
                            </div>
                            <div class="footer-contents">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="events-details.html">About</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget-footer mt-30">
                            <div class="footer-title">
                                <h6>Information</h6>
                            </div>
                            <div class="footer-contents">
                                <ul>
                                    <li>Monday:- 10:00 AM - 05:00 PM</li>
                                    <li>Tuesday:- 10:00 AM - 05:00 PM</li>
                                    <li>Wednesday:- 10:00 AM - 05:00 PM</li>
                                    <li>Thursday:- 10:00 AM - 05:00 PM</li>
                                    <li>Friday:- 10:00 AM - 05:00 PM</li>
                                    <li>Saturday:- 10:00 AM - 05:00 PM</li>
                                    <li>Sunday:- Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="widget-footer mt-30">
                            <div class="footer-title">
								<h6>Official Temple website
								</h6>
							</div>
							<div class="footer-logo mb-15">
								<a href="https://spst.in">
									<img alt="" src="assets/images/img/logo-padmanabhaswami.png" class="img-fluid">
								</a>
							</div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right-box">
                            <p class="text-white">Copyright © 2021 GADS LLP <a href="https://gadssolutions.in/"
                                    target="_blank">All Right Reserved</a>.</p>
                            <p class=" text-white"><a href="#">Privacy policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--==========// Footer Area End ==========-->





    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top flaticon-up-arrow"></i>
        <i class="arrow-bottom flaticon-up-arrow"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/img/NavLogo.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children has-children--multilevel-submenu active">
                            <a href="index.html">
                                <span>Home
                                </span>
                            </a>
                        </li>
                        <li class="has-children">
                            <a href="events-details.html">
                                <span>About
                                </span>
                            </a>

                        <li class="has-children">
                            <a href="gallery.html">
                                <span>Gallery
                                </span>
                            </a>
                        </li>
                        <li class="has-children ">
                            <a href="vaikundam.html">
                                <span>Sree Vaikundom
                                </span>
                            </a>
                        </li>
                        <li class="has-children ">
                            <a href="ananthashayanam.html">
                                <span>Ananthasayanam
                                </span>
                            </a>
                        </li>
                        <li class="has-children ">
                            <a href="Bhajanapura.html">
                                <span>Bhajanappura
                                </span>
                            </a>
                        </li>
                        <li class="has-children ">
                            <a href="mahalakshmi.html">
                                <span>Mahalakshmi
                                </span>
                            </a>
                        </li>
                        <li class="has-children ">
                            <a href="sudarshanam.html">
                                <span>Sudharsan
                                </span>
                            </a>
                        </li>
                        </li>
                        <li class="has-children">
                            <a href="chithralayam.html">
                                <span>Chithralayam
                                </span>
                            </a>
                        </li>
                        <li class="has-children">
                            <a href="contact-us.html">
                                <span>Contact
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->





    <!-- JS
    ============================================ -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>


    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->


    <script src="assets/js/plugins/plugins.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    
</body>

</html>