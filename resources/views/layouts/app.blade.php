<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="Cartalog.id" name="description"/>
    <title>
      @yield('title')
    </title>
    <!-- Bootstrap CSS -->
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" rel="stylesheet">
    <link href="{{ asset('assets/plugins/fontawesome-free-5.10.2-web/css/fontawesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/fontawesome-free-5.10.2-web/css/solid.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/fontawesome-free-5.10.2-web/js/fontawesome.min.js') }}" rel="text/javascript"></script>
    <script src="{{ asset('assets/plugins/fontawesome-free-5.10.2-web/js/solid.min.js') }}" rel="text/javascript"></script>

    @yield('extraCSS')


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>
    <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
  </head>
  <style media="screen" type="text/css">
    .navbar, .navbar .dropdown-item {
			font-size: 13px;
			font-weight: 550;
			color: grey !important;
		}
		.dropdown-toggle.no-caret:after { 
			content: none 
		}
		.badge-success.custom-badge {
			background-color: transparent;
			color: #28a745;
		}
		.custom-badge {
			margin-top: -10px;
			vertical-align: super;
			font-size: 10px;
		}
		/*#navBarSearchForm input[type=text].nav-bar-search-input{
			width: 430px !important;
			height: 30px !important;
		}*/
		input[type=text].nav-bar-search-input.nav-bar-search-input::placeholder {
			font-size: 13px;
			font-weight: 550;
		}
		.navbar-toggler-icon {
			color: grey !important;
		}

    #fp-nav {
      position: fixed;
      z-index: 100;
      margin-top: -32px;
      top: 50%;
      opacity: 1;
      -webkit-transform: translateZ(0)
    }
  </style>
  <style type="text/css">
    /*!
		 * fullPage 3.0.7
		 * https://github.com/alvarotrigo/fullPage.js
		 *
		 * @license GPLv3 for open source use only
		 * or Fullpage Commercial License for commercial use
		 * http://alvarotrigo.com/fullPage/pricing/
		 *
		 * Copyright (C) 2018 http://alvarotrigo.com/fullPage - A project by Alvaro Trigo
			 */
	    .fp-enabled body,
	    html.fp-enabled {
	      margin: 0;
	      padding: 0;
	      overflow: hidden;
	      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
	    }

	    .fp-section {
	      position: relative;
	      -webkit-box-sizing: border-box;
	      -moz-box-sizing: border-box;
	      box-sizing: border-box
	    }

	    .fp-slide {
	      float: left
	    }

	    .fp-slide,
	    .fp-slidesContainer {
	      height: 100%;
	      display: block
	    }

	    .fp-slides {
	      z-index: 1;
	      height: 100%;
	      overflow: hidden;
	      position: relative;
	      -webkit-transition: all .3s ease-out;
	      transition: all .3s ease-out
	    }

	    .fp-section.fp-table,
	    .fp-slide.fp-table {
	      display: table;
	      table-layout: fixed;
	      width: 100%
	    }

	    .fp-tableCell {
	      display: table-cell;
	      vertical-align: middle;
	      width: 100%;
	      height: 100%
	    }

	    .fp-slidesContainer {
	      float: left;
	      position: relative
	    }

	    .fp-controlArrow {
	      -webkit-user-select: none;
	      -moz-user-select: none;
	      -khtml-user-select: none;
	      -ms-user-select: none;
	      position: absolute;
	      z-index: 4;
	      top: 50%;
	      cursor: pointer;
	      width: 0;
	      height: 0;
	      border-style: solid;
	      margin-top: -38px;
	      -webkit-transform: translateZ(0);
	      -ms-transform: translateZ(0);
	      transform: translateZ(0)
	    }

	    .fp-controlArrow.fp-prev {
	      left: 15px;
	      width: 0;
	      border-width: 38.5px 34px 38.5px 0;
	      border-color: transparent #fff transparent transparent
	    }

	    .fp-controlArrow.fp-next {
	      right: 15px;
	      border-width: 38.5px 0 38.5px 34px;
	      border-color: transparent transparent transparent #fff
	    }

	    .fp-scrollable {
	      position: relative
	    }

	    .fp-scrollable,
	    .fp-scroller {
	      /*overflow: */
	      hidden
	    }

	    .iScrollIndicator {
	      border: 0 !important
	    }

	    .fp-notransition {
	      -webkit-transition: none !important;
	      transition: none !important
	    }

	    #fp-nav {
	      position: fixed;
	      z-index: 100;
	      margin-top: -32px;
	      top: 50%;
	      opacity: 1;
	      -webkit-transform: translateZ(0)
	    }

	    #fp-nav.fp-right {
	      right: 17px
	    }

	    #fp-nav.fp-left {
	      left: 17px
	    }

	    .fp-slidesNav {
	      position: absolute;
	      z-index: 4;
	      opacity: 1;
	      -webkit-transform: translateZ(0);
	      -ms-transform: translateZ(0);
	      transform: translateZ(0);
	      left: 0 !important;
	      right: 0;
	      margin: 0 auto !important
	    }

	    .fp-slidesNav.fp-bottom {
	      bottom: 17px
	    }

	    .fp-slidesNav.fp-top {
	      top: 17px
	    }

	    #fp-nav ul,
	    .fp-slidesNav ul {
	      margin: 0;
	      padding: 0
	    }

	    #fp-nav ul li,
	    .fp-slidesNav ul li {
	      display: block;
	      width: 14px;
	      height: 13px;
	      margin: 7px;
	      position: relative
	    }

	    .fp-slidesNav ul li {
	      display: inline-block
	    }

	    #fp-nav ul li a,
	    .fp-slidesNav ul li a {
	      display: block;
	      position: relative;
	      z-index: 1;
	      width: 100%;
	      height: 100%;
	      cursor: pointer;
	      text-decoration: none
	    }

	    #fp-nav ul li:hover a.active span,
	    #fp-nav ul li a.active span,
	    .fp-slidesNav ul li:hover a.active span,
	    .fp-slidesNav ul li a.active span {
	      height: 12px;
	      width: 12px;
	      margin: -6px 0 0 -6px;
	      border-radius: 100%
	    }

	    #fp-nav ul li a span,
	    .fp-slidesNav ul li a span {
	      border-radius: 50%;
	      position: absolute;
	      z-index: 1;
	      height: 4px;
	      width: 4px;
	      border: 0;
	      background: #333;
	      left: 50%;
	      top: 50%;
	      margin: -2px 0 0 -2px;
	      -webkit-transition: all .1s ease-in-out;
	      -moz-transition: all .1s ease-in-out;
	      -o-transition: all .1s ease-in-out;
	      transition: all .1s ease-in-out
	    }

	    #fp-nav ul li:hover a span,
	    .fp-slidesNav ul li:hover a span {
	      width: 10px;
	      height: 10px;
	      margin: -5px 0 0 -5px
	    }

	    #fp-nav ul li .fp-tooltip {
	      position: absolute;
	      top: -2px;
	      color: #fff;
	      font-size: 14px;
	      font-family: arial, helvetica, sans-serif;
	      white-space: nowrap;
	      max-width: 220px;
	      overflow: hidden;
	      display: block;
	      opacity: 0;
	      width: 0;
	      cursor: pointer
	    }

	    #fp-nav.fp-show-active a.active+.fp-tooltip,
	    #fp-nav ul li:hover .fp-tooltip {
	      -webkit-transition: opacity .2s ease-in;
	      transition: opacity .2s ease-in;
	      width: auto;
	      opacity: 1
	    }

	    #fp-nav ul li .fp-tooltip.fp-right {
	      right: 20px
	    }

	    #fp-nav ul li .fp-tooltip.fp-left {
	      left: 20px
	    }

	    /*.fp-auto-height.fp-section,
	    .fp-auto-height .fp-slide,
	    .fp-auto-height .fp-tableCell,
	    .fp-responsive .fp-auto-height-responsive.fp-section,
	    .fp-responsive .fp-auto-height-responsive .fp-slide,
	    .fp-responsive .fp-auto-height-responsive .fp-tableCell {
	      height: auto !important
	    }*/

	    .fp-sr-only {
	      position: absolute;
	      width: 1px;
	      height: 1px;
	      padding: 0;
	      overflow: hidden;
	      clip: rect(0, 0, 0, 0);
	      white-space: nowrap;
	      border: 0
	    }
  </style>
  <style>
    #fp-nav ul li a span {
    		background-color: grey !important;
    	}
    	.sf-page {
    		background-color: rgb(255, 255, 255);

    		height: -moz-calc(100% - 66px);
				/* WebKit */
				height: -webkit-calc(100% - 66px);
				/* Opera */
				height: -o-calc(100% - 66px);
				/* Standard */
				height: calc(100% - 66px);
				margin-bottom: 90px;
    	}
    	a.section-anchor {
			  position: absolute;
			  left: 0px;
			  top: -90px;
    	}
    	.navbar {
		    -webkit-box-shadow: 0 20px 6px -6px #999;
		    -moz-box-shadow: 0 20px 6px -6px #999;
		    box-shadow: 0 8px 20px -6px #999;

		    /* the rest of your styling */
			}

			#main-container {
				margin-top: 75px;
			}

			.nav-bar-search-input {
				background: url('{{ asset('assets/icon/search.png')  }}') no-repeat scroll;
				padding-left:30px;
				background-size: 20px 20px;
				background-position: 95% 50%;
			}

			.header {
				color: grey !important;
			}

			.buttonSubmit {
				border-radius: 20px;
			}
  </style>
  <body class="w-100">
		<div class="container-fluid">
			<div class="header clearfix">
		    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow">
		      <a class="navbar-brand mr-5" href="{{ url('/') }}">
		        <img alt="Cartalog" src="{{ asset('assets/logo.png') }}" width="150"/>
		        <span class="badge custom-badge badge-success">
		          BETA
		        </span>
		      </a>
		      <button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarCollapse" data-toggle="collapse" type="button">
		        <span class="navbar-toggler-icon">
		        </span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarCollapse">
		        <ul class="navbar-nav mr-auto">
		          <li class="nav-item">
		            <a class="nav-link" href="{{ url('harga-cartalog') }}">
		              Harga Cartalog
		              <span class="badge custom-badge badge-success">
		                BETA
		              </span>
		            </a>
		          </li>
		        </ul>
		      </div>
		      {{-- <form class="form-inline mt-2 mt-md-0 pull-right" id="navBarSearchForm">
		        <input aria-label="Search" class="form-control mr-sm-2 nav-bar-search-input" placeholder="Cari dan lihat harga Cartalogmu" type="text"/>
		      </form> --}}
		      <form class="mx-2 my-auto d-inline w-100">
		      	<div class="wrapper">
					  	<input type="text" class="form-control mr-sm-2 nav-bar-search-input" placeholder="Cari dan lihat harga Cartalogmu">
		      	</div>
					</form>
		      <div class="collapse navbar-collapse float-right">
		        <ul class="navbar-nav mr-0">
		          <li class="nav-item dropdown">
		            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
		              <span class="navbar-toggler-icon">
		              </span>
		            </a>
		            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right text-uppercase text-right">
		              <a class="dropdown-item " href="#">
		                Diskusi
		              </a>
		              <a class="dropdown-item" href="#">
		                Chat
		              </a>
		              <a class="dropdown-item" href="#">
		                Tentang Kami
		              </a>
		              <a class="dropdown-item" href="#">
		                Kontak Kami
		              </a>
		              <a class="dropdown-item" href="#">
		                Karir
		              </a>
		              <a class="dropdown-item" href="#">
		                Cara Kerja
		              </a>
		              <a class="dropdown-item" href="#">
		                Download Aplikasi
		              </a>
		            </div>
		          </li>
		        </ul>
		        <ul class="navbar-nav mr-0">
		          <li class="nav-item dropdown">
		            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
		              <div class="pl-3 pr-3">
		                <img alt="foto profil" class="ProfileDropdown_imageProfile__2Rl1D mr-1" height="20" src="{{ asset('assets/dummyProfile.jpg') }}" />
	                  <span class="ml-1" style="font-size: 12px; font-weight: bold;">
	                    Marcello
	                  </span>
		              </div>
		            </a>
		            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right text-uppercase text-right">
		              <a class="dropdown-item " href="#">
		                Diskusi
		              </a>
		              <a class="dropdown-item" href="#">
		                Chat
		              </a>
		              <a class="dropdown-item" href="#">
		                Tentang Kami
		              </a>
		              <a class="dropdown-item" href="#">
		                Kontak Kami
		              </a>
		              <a class="dropdown-item" href="#">
		                Karir
		              </a>
		              <a class="dropdown-item" href="#">
		                Cara Kerja
		              </a>
		              <a class="dropdown-item" href="#">
		                Download Aplikasi
		              </a>
		            </div>
		          </li>
		        </ul>
		        <ul class="navbar-nav mr-0">
		          <li class="nav-item dropdown">
		            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle no-caret" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
		              <span class="navbar-toggler-icon">
		              </span>
		            </a>
		            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right text-uppercase text-right">
		              <a class="dropdown-item " href="#">
		                Diskusi
		              </a>
		              <a class="dropdown-item" href="#">
		                Chat
		              </a>
		              <a class="dropdown-item" href="#">
		                Tentang Kami
		              </a>
		              <a class="dropdown-item" href="#">
		                Kontak Kami
		              </a>
		              <a class="dropdown-item" href="#">
		                Karir
		              </a>
		              <a class="dropdown-item" href="#">
		                Cara Kerja
		              </a>
		              <a class="dropdown-item" href="#">
		                Download Aplikasi
		              </a>
		            </div>
		          </li>
		        </ul>
		      </div>
		    </nav>
		 </div>
		</div>
    <div class="p-0 m-0" style="width: 100%">
      @yield('content')
		  <div class="container-fluid">
		    <div class="row">
		      <div class="col-md-12 p-0">
		        <div class="pt-5" style="margin-top: 100px; background-color: rgb(248, 250, 255);">
		          <div class="container">
		            <div class="row pb-0">
		              <div class="col-md-9 d-flex ">
		                <div class="w-20 float-left align-self-center">
		                  <img alt="cartalog" height="13" src="{{ asset('assets/logo-grey.png') }}">
		                </div>
		                <div class="w-20 float-left FooterStyle_mapLink__1UQ2Z">
		                  <h6 class="font-weight-bold">
		                    Cartalog
		                  </h6>
		                  <ul>
		                    <li>
		                      <a href="../cartalog-price">
		                        Tentang Kami
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Tim Kami
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Press
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Hubungan Investor
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Harga Cartalog
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Download
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Blog
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Karir
		                      </a>
		                    </li>
		                  </ul>
		                </div>
		                <div class="w-20 float-left FooterStyle_mapLink__1UQ2Z">
		                  <h6 class="font-weight-bold">
		                    Dealer
		                  </h6>
		                  <ul>
		                    <li>
		                      <a href="../cartalog-price">
		                        Daftar Garasi
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Informasi Dealer
		                      </a>
		                    </li>
		                  </ul>
		                </div>
		                <div class="w-20 float-left FooterStyle_mapLink__1UQ2Z">
		                  <h6 class="font-weight-bold">
		                    Ketentuan
		                  </h6>
		                  <ul>
		                    <li>
		                      <a href="../cartalog-price">
		                        Ketentuan
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Kerahasiaan
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Interest-based Ads
		                      </a>
		                    </li>
		                  </ul>
		                </div>
		                <div class="w-20 float-left FooterStyle_mapLink__1UQ2Z">
		                  <h6 class="font-weight-bold">
		                    Bantuan
		                  </h6>
		                  <ul>
		                    <li>
		                      <a href="../cartalog-price">
		                        Bantuan
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Kontak Kami
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        Sitemap
		                      </a>
		                    </li>
		                    <li>
		                      <a href="../cartalog-price">
		                        FAQ
		                      </a>
		                    </li>
		                  </ul>
		                </div>
		              </div>
		              <div class="col-md-3">
		                <div class="float-right">
		                  <img alt="app store" class="mr-2" height="40" src="{{ asset('assets/app-store.png') }}">
		                  <img alt="play store" height="38.5" src="{{ asset('assets/google-play.png') }}">
		                  <div class="mt-3">
		                    <a href="https://www.triputra-group.com/" rel="noopener noreferrer" target="_blank">
		                      <img alt="futuready" height="20" src="{{ asset('assets/futuready.png') }}">
		                    </a>
		                    <a href="https://www.assarent.co.id/" rel="noopener noreferrer" target="_blank">
		                      <img alt="assa" class="ml-2 mr-2" height="20" src="{{ asset('assets/assa.png') }}">
		                    </a>
		                    <a href="https://www.futureready.co.id/" rel="noopener noreferrer" target="_blank">
		                      <img alt="triputra" height="40" src="{{ asset('assets/triputra.png') }}">
		                    </a>
		                  </div>
		                  </img>
		                  </img>
		                </div>
		              </div>
		              <div class="col-md-12">
		                <hr class="mt-0" />
		              </div>
		            </div>
		            <div class="row">
		              <div class="col-md-8">
		                <ul>
		                  <li class="float-left mx-2">
		                    <a href="../cartalog-price">
		                      <i class="fab fa-instagram">
		                      </i>
		                    </a>
		                  </li>
		                  <li class="float-left mx-2">
		                    <a href="../cartalog-price">
		                      <i class="fab fa-twitter">
		                      </i>
		                    </a>
		                  </li>
		                  <li class="float-left mx-2">
		                    <a href="../cartalog-price">
		                      <i class="fab fa-facebook">
		                      </i>
		                    </a>
		                  </li>
		                  <li class="float-left mx-2">
		                    <a href="../cartalog-price">
		                      <i class="fas fa-globe">
		                      </i>
		                    </a>
		                  </li>
		                  <li class="float-left mx-2">
		                    <a href="../cartalog-price">
		                      <i class="fab fa-youtube">
		                      </i>
		                    </a>
		                  </li>
		                </ul>
		              </div>
		              <div class="col-md-4">
		                <p class="pb-0 text-right" style="font-size: 13px; color: rgb(113, 113, 113);">
		                  Copyright © 2019 Cartalog. All rights reserved.
		                </p>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
    </div>
    <!-- Optional JavaScript -->

    @yield('extraJS')
  </body>
</html>