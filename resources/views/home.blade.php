@extends('layouts.app')
@section('title', 'Cartalog - Home')
@section('content')
		<div class="container-fluid" id="main-container">

      <div id="fullpage-wrapper">
        <div class="_section section1 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-1">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="fp-scrollable" style="height: 594px;">
              <div class="fp-scroller" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
                <div class="position-relative" style="display: flex; flex-wrap: wrap; height: 100vh;">
                  <div class="Style_videoWrap__3qHqM" style="width: 100%; height: 100%;">
                    <video autoplay="" loop="" preload="auto" src="{{ asset('assets/video/video-banner.mp4') }}" style="width: 100%; height: 100%;">
                    </video>
                  </div>
                  <div class="Style_gradientVideo__1k_r- p-4 text-center">
                    <div class="Style_contentTop__1itzd">
                      <img alt="cartalog" height="15" src="{{ asset('assets/logo-white.png') }}">
                      <h3 class="heading-4 white font-weight-bold mt-2">
                        Katalog Mobil Terlengkap
                      </h3>
                      </img>
                    </div>
                    <a class="bg-red white roundedFull text-uppercase font-weight-bold Style_pricingButton__2pIMs" href="./cartalog-price">
                      Semua dimulai dari harga
                      <span class="betaBadge">
                        <img alt="cartalog" class="mb-1 ml-2" height="18" src="{{ asset('assets/logo-white.png') }}"/>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="iScrollVerticalScrollbar iScrollLoneScrollbar" style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; overflow: hidden;">
                <div class="iScrollIndicator" style="box-sizing: border-box; position: absolute; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.9); border-radius: 3px; width: 100%; transition-duration: 0ms; display: none; height: 586px; transform: translate(0px, 0px) translateZ(0px); transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section2 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-2">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="fp-scrollable" style="height: 594px;">
              <div class="fp-scroller" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, -16px) translateZ(0px);">
                <div class="mb-5 container">
                  <div class="pb-3 row">
                    <div class="col-md-4">
                      <div class="mb-4">
                        <h4 class="font-weight-bold extraGrey headline-3">
                          Harga Cartalog
                        </h4>
                        <p class="body-2 mediumGrey">
                          Kami menganalisis jutaan kendaraan untuk mendapatkan Harga Cartalog
                        </p>
                        <span class="FeatureHome_lineSeparator__1z6r5 d-inline-block bg-mediumGrey">
                        </span>
                      </div>
                      <div class="mb-4">
                        <h4 class="font-weight-bold extraGrey headline-3">
                          Garasi Cartalog
                        </h4>
                        <p class="body-2 mediumGrey">
                          Totalitas penjualan kendaraan, pemasaran digital dan kemudahan manajemen persediaan Anda
                        </p>
                        <span class="FeatureHome_lineSeparator__1z6r5 d-inline-block bg-mediumGrey">
                        </span>
                      </div>
                      <div class="mb-4">
                        <h4 class="font-weight-bold extraGrey headline-3">
                          Pembayaran Cartalog
                        </h4>
                        <p class="body-2 mediumGrey">
                          Kemudahan pembayaran transaksi jual beli dan layanan kendaraan sesuai dengan pilihan Anda
                        </p>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div style="width: 100%; height: 360px;">
                        <video autoplay="" loop="" preload="auto" src="https://cartalog.id/assets/home/feature-section.mp4" style="width: 100%; height: 100%;">
                        </video>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img alt="cartalog" height="12" src="{{ asset('assets/logo-grey.png') }}">
                      <h4 class="font-weight-bold extraGrey headline-3 mt-1">
                        Yang Perlu Anda Ketahui
                      </h4>
                      </img>
                    </div>
                    <div class="col-md-7">
                      <p class="body-2 mediumGrey">
                        Kemudahan fitur-fitur yang kami desain dengan teknologi revolusioner untuk membantu Anda melakukan transaksi kendaraan.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="iScrollVerticalScrollbar iScrollLoneScrollbar" style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; overflow: hidden;">
                <div class="iScrollIndicator" style="box-sizing: border-box; position: absolute; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.9); border-radius: 3px; width: 100%; transition-duration: 0ms; display: block; height: 571px; transform: translate(0px, 19px) translateZ(0px); transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section3 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-3">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="fp-scrollable" style="height: 594px;">
              <div class="fp-scroller" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, -38px) translateZ(0px);">
                <div class="container-fluid mb-5">
                  <div class="row d-flex">
                    <div class="col-md-8 pl-0">
                      <div class="pb-4" style='background-image: url("https://cartalog.id/assets/home/volvo.png"); background-size: cover; background-position: center center;'>
                        <div class="d-flex justify-content-center align-items-end" style="height: 560px;">
                          <div class="w-29 px-3 RisetSection_borderRightInformation__2jaP8 RisetSection_wrapItemInformation__soy1C">
                            <h5 class="white font-weight-bold smallTitle">
                              Kesepakatan Terbaik
                            </h5>
                            <p class="white paragraph mb-0">
                              Bandingkan kendaraan dengan Harga Cartalog, review dari pengguna dan rating dari inpeksi independen
                            </p>
                          </div>
                          <div class="w-29 px-3 RisetSection_borderRightInformation__2jaP8 RisetSection_wrapItemInformation__soy1C">
                            <h5 class="white font-weight-bold smallTitle">
                              Informasi Berharga
                            </h5>
                            <p class="white paragraph mb-0">
                              Akses tidak berbayar untuk review dan harga pasar yang dinamis - semua di Cartalog
                            </p>
                          </div>
                          <div class="w-29 px-3 RisetSection_wrapItemInformation__soy1C">
                            <h5 class="white font-weight-bold smallTitle">
                              Pencarian Personal
                            </h5>
                            <p class="white paragraph mb-0">
                              Cartalog memudahkan layanan personal, mencari kendaraan dengan fitur-fitur layanan yang sesuai dengan kebutuhan
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 d-flex align-self-center">
                      <div>
                        <h4 class="font-weight-bold mb-0">
                          Riset & Testimoni
                        </h4>
                        <div class="overflow-hidden">
                          <hr class="float-left" width="70">
                          </hr>
                        </div>
                        <p class="w-75 extraGrey mb-5">
                          Solusi kendaraan lengkap dengan riset di Harga Cartalog. review dan testimoni para ahli dan dapatkan rating dari inpeksi independen.
                        </p>
                        <a class="buttonLink text-uppercase font-weight-bold" href="./">
                          Riset
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="iScrollVerticalScrollbar iScrollLoneScrollbar" style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; overflow: hidden;">
                <div class="iScrollIndicator" style="box-sizing: border-box; position: absolute; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.9); border-radius: 3px; width: 100%; transition-duration: 0ms; display: block; height: 551px; transform: translate(0px, 39px) translateZ(0px); transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section4 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-4">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="fp-scrollable" style="height: 594px;">
              <div class="fp-scroller" style="transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(0px, -98px) translateZ(0px);">
                <div>
                  <img alt="sedan" class="img-fluid" src="{{ asset('assets/sedan.png') }}">
                  <div class="container" style="margin-bottom: 5.5rem; margin-top: 2rem;">
                    <div class="row">
                      <div class="col-md-5">
                        <h6 class="font-weight-bold mediumGrey">
                          Garasi Cartalog
                        </h6>
                        <h4 class="font-weight-bold extraGrey">
                          Mobil Impian? Simpan di Garasi
                        </h4>
                      </div>
                      <div class="col-md-7">
                        <p class="paragraph mt-3">
                          Di Garasi Cartalog, kendaraan anda terkelola dengan analisis yang akurat. Kami merancang kelengkapan layanan untuk membantu proses jual beli kendaraan Anda.
                        </p>
                      </div>
                    </div>
                  </div>
                  </img>
                </div>
              </div>
              <div class="iScrollVerticalScrollbar iScrollLoneScrollbar" style="position: absolute; z-index: 9999; width: 7px; bottom: 2px; top: 2px; right: 1px; overflow: hidden;">
                <div class="iScrollIndicator" style="box-sizing: border-box; position: absolute; background: rgba(0, 0, 0, 0.5); border: 1px solid rgba(255, 255, 255, 0.9); border-radius: 3px; width: 100%; transition-duration: 0ms; display: block; height: 503px; transform: translate(0px, 87px) translateZ(0px); transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section5 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-5">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center mb-5">
                  <a class="buttonLink text-uppercase active" href="./" style="border-radius: 100px 0px 0px 100px; border-right: 0px;">
                    Mobil Baru
                  </a>
                  <a class="buttonLink text-transform-uppercase " href="./" style="border-radius: 0px 100px 100px 0px;">
                    Mobil Bekas
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                  <div class="row">
                    <div class="col-md-3 ">
                      <ul class="MerkSection_listMerk__2QU38">
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 ">
                      <ul class="MerkSection_listMerk__2QU38">
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 ">
                      <ul class="MerkSection_listMerk__2QU38">
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-3 ">
                      <ul class="MerkSection_listMerk__2QU38">
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                        <li>
                          <img alt="acura" src="{{ asset('assets/acura.png') }}">
                          Acura
                          </img>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-1">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center mt-5 mb-5">
                  <a class="text-uppercase buttonLink" href="./">
                    Lihat Lebih Banyak
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section6 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-6">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="container mb-5">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="mb-0 mediumGrey font-weight-bold">
                    News
                  </h6>
                  <h4 class="font-weight-bold extraGrey">
                    Test Drive Terbaru
                  </h4>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <img alt="main news" class="img-fluid" src="{{ asset('assets/main-news.png') }}" style="border-radius: 4px;" />
                </div>
                <div class="col-md-5">
                  <h4 class="font-weight-bold extraGrey headline-4">
                    Cek Tarif Tol Trans Jawa Untuk Mudik 2019
                  </h4>
                  <p class="paragraph mb-2">
                    Jaka Ken, 21 January 2019
                  </p>
                  <p class="paragraph extraGrey">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                  </p>
                  <a class="buttonLink font-weight" href="./">
                    BACA
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <hr>
                  </hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 d-flex justify-content-between">
                  <div class="w-19 float-left position-relative">
                    <div class="NewsSection_itemNews__2WHM0" style='background-image: url("https://cartalog.id/assets/news/1.png");'>
                      <div class="position-absolute p-2 NewsSection_titleNews__1jZqN">
                        <h6 class="paragraph white m-0 align-middle">
                          Perpanjang SIM A Kini Lebih Mudah dengan Ecommerce...
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="w-19 float-left position-relative">
                    <div class="NewsSection_itemNews__2WHM0" style='background-image: url("https://cartalog.id/assets/news/2.png");'>
                      <div class="position-absolute p-2 NewsSection_titleNews__1jZqN">
                        <h6 class="paragraph white m-0 align-middle">
                          City Car Terbaik untuk Menemani Kegiatan Sehari-harimu...
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="w-19 float-left position-relative">
                    <div class="NewsSection_itemNews__2WHM0" style='background-image: url("https://cartalog.id/assets/news/3.png");'>
                      <div class="position-absolute p-2 NewsSection_titleNews__1jZqN">
                        <h6 class="paragraph white m-0 align-middle">
                          Perpanjang SIM A Kini Lebih Mudah dengan Ecommerce...
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="w-19 float-left position-relative">
                    <div class="NewsSection_itemNews__2WHM0" style='background-image: url("https://cartalog.id/assets/news/4.png");'>
                      <div class="position-absolute p-2 NewsSection_titleNews__1jZqN">
                        <h6 class="paragraph white m-0 align-middle">
                          City Car Terbaik untuk Menemani Kegiatan Sehari-harimu...
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="w-19 float-left position-relative">
                    <div class="NewsSection_itemNews__2WHM0" style='background-image: url("https://cartalog.id/assets/news/5.png");'>
                      <div class="position-absolute p-2 NewsSection_titleNews__1jZqN">
                        <h6 class="paragraph white m-0 align-middle">
                          Perpanjang SIM A Kini Lebih Mudah dengan Ecommerce...
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section7 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-7">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="container mb-5">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="mb-0 mediumGrey font-weight-bold">
                    Tersertifikasi
                  </h6>
                  <h4 class="font-weight-bold extraGrey">
                    Kendaraan Inspeksi
                  </h4>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12 text-center">
                  <a class="buttonLink" href="./">
                    LAINNYA
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section7 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-8">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="container mb-5">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="mb-0 mediumGrey font-weight-bold">
                    Populer
                  </h6>
                  <h4 class="font-weight-bold extraGrey">
                    Kendaraan Rekomendasi
                  </h4>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
                <div class="col-md-4 mb-2">
                  <h5 style="font-size: 18px; font-weight: bold;">
                    New Buick Encore
                  </h5>
                  <p style="font-size: 15px;">
                    35,578 listings starting at $13,987
                  </p>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-md-12 text-center">
                  <a class="buttonLink" href="./">
                    LAINNYA
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="_section section8 fp-section fp-table sf-page">
          <a class="section-anchor" id="section-9">
          </a>
          <div class="fp-tableCell" style="height: 594px;">
            <div class="container">
              <div class="row pb-2">
                <div class="col-md-5 mt-5">
                  <h2 class="heading-2 font-weight-bold" style="width: 330px; letter-spacing: 0.7px; line-height: 40px;">
                    Cari Mobil Idamanmu dengan Cartalog
                  </h2>
                  <a class="mt-4 font-weight-bold bg-red d-inline-block roundedFull py-2 px-5 white text-uppercase" href="./" style="letter-spacing: 0.5px;">
                    Cari Mobil Idamanmu
                  </a>
                </div>
                <div class="col-md-7 text-center">
                  <img alt="tesla" src="{{ asset('assets/tesla.png') }}" width="80%" />
                </div>
                <div class="col-md-12">
                  <hr>
                  </hr>
                </div>
              </div>
              <div class="row pb-0">
                <div class="col-md-9 d-flex ">
                  <div class="w-20 float-left align-self-center">
                    <img alt="cartalog" height="13" src="{{ asset('assets/logo-grey.png') }}" />
                  </div>
                  <div class="w-20 float-left FooterStyle_mapLink__1UQ2Z">
                    <h6 class="font-weight-bold">
                      Cartalog
                    </h6>
                    <ul>
                      <li>
                        <a href="./">
                          Tentang Kami
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Tim Kami
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Press
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Hubungan Investor
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Harga Cartalog
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Download
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a href="./">
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
                        <a href="./">
                          Daftar Garasi
                        </a>
                      </li>
                      <li>
                        <a href="./">
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
                        <a href="./">
                          Ketentuan
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Kerahasiaan
                        </a>
                      </li>
                      <li>
                        <a href="./">
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
                        <a href="./">
                          Bantuan
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Kontak Kami
                        </a>
                      </li>
                      <li>
                        <a href="./">
                          Sitemap
                        </a>
                      </li>
                      <li>
                        <a href="./">
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
                        <img alt="futuready" height="20" src="{{ asset('assets/futuready.png') }}" />
                      </a>
                      <a href="https://www.assarent.co.id/" rel="noopener noreferrer" target="_blank">
                        <img alt="assa" class="ml-2 mr-2" height="20" src="{{ asset('assets/assa.png') }}" />
                      </a>
                      <a href="https://www.futureready.co.id/" rel="noopener noreferrer" target="_blank">
                        <img alt="triputra" height="40" src="{{ asset('assets/triputra.png') }}" />
                      </a>
                    </div>
                    </img>
                    </img>
                  </div>
                </div>
                <div class="col-md-12">
                  <hr class="mt-0">
                  </hr>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <ul>
                    <li class="float-left mx-2">
                      <a href="./">
                        <i class="fab fa-instagram">
                        </i>
                      </a>
                    </li>
                    <li class="float-left mx-2">
                      <a href="./">
                        <i class="fab fa-twitter">
                        </i>
                      </a>
                    </li>
                    <li class="float-left mx-2">
                      <a href="./">
                        <i class="fab fa-facebook">
                        </i>
                      </a>
                    </li>
                    <li class="float-left mx-2">
                      <a href="./">
                        <i class="fas fa-globe">
                        </i>
                      </a>
                    </li>
                    <li class="float-left mx-2">
                      <a href="./">
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


	    <div id="fp-nav" class="fp-left" style="margin-top: -125px;">
	      <ul>
	        <li><a href="./#section-1" class=""><span class="fp-sr-only">Section 1</span><span></span></a></li>
	        <li><a href="./#section-2" class=""><span class="fp-sr-only">Section 2</span><span></span></a></li>
	        <li><a href="./#section-3" class=""><span class="fp-sr-only">Section 3</span><span></span></a></li>
	        <li><a href="./#section-4" class=""><span class="fp-sr-only">Section 4</span><span></span></a></li>
	        <li><a href="./#section-5" class=""><span class="fp-sr-only">Section 5</span><span></span></a></li>
	        <li><a href="./#section-6" class=""><span class="fp-sr-only">Section 6</span><span></span></a></li>
	        <li><a href="./#section-7" class=""><span class="fp-sr-only">Section 7</span><span></span></a></li>
	        <li><a href="./#section-8" class=""><span class="fp-sr-only">Section 8</span><span></span></a></li>
	        <li><a href="./#section-9" class=""><span class="fp-sr-only">Section 9</span><span></span></a></li>
	      </ul>
	    </div>
		</div>
@endsection