@extends('layouts.app')
@section('title', 'Cartalog - Cartalog Price')
@section('content')
  <div class="container" id="main-container">
    <div class="col-12">
      <div class="row">
        <div class="col-md-5 col-sm-12 m-0 p-0">
          <div class="mb-3">
            <h1 class="font-weight-bold headline-3 betaBadge d-inline-block">
              Harga Cartalog
            </h1>
            <p class="paragraph">
              Harga terakurat yang memudahkan transaksi jual-beli Anda!
            </p>
          </div>
          <div class="mt-4">
            <h4 class="font-weight-bold headline-4 mb-3">
              Isi Detil Kendaraan Anda
            </h4>
            <form class="col-12">
              <div class="row">
                <div class="col-sm-6 mb-3">
                  <label>
                    Merek
                  </label>
                  <select class="form-control select2" name="" id="merek">
                    <option value="">
                      -- Pilih Merek --
                    </option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label>
                    Lokasi
                  </label>
                  <select class="form-control select2" name="" id="lokasi">
                    <option value="JAKARTA D.K.I.">
                      JAKARTA D.K.I.
                    </option>
                    <option value="JAWA TENGAH">
                      JAWA TENGAH
                    </option>
                    <option value="SUMATERA UTARA">
                      SUMATERA UTARA
                    </option>
                    <option value="JAWA TIMUR">
                      JAWA TIMUR
                    </option>
                    <option value="JAWA BARAT">
                      JAWA BARAT
                    </option>
                    <option value="RIAU">
                      RIAU
                    </option>
                    <option value="BANTEN">
                      BANTEN
                    </option>
                    <option value="YOGYAKARTA D.I.">
                      YOGYAKARTA D.I.
                    </option>
                    <option value="LAMPUNG">
                      LAMPUNG
                    </option>
                    <option value="BENGKULU">
                      BENGKULU
                    </option>
                    <option value="SUMATERA BARAT">
                      SUMATERA BARAT
                    </option>
                    <option value="BALI">
                      BALI
                    </option>
                    <option value="ACEH D.I.">
                      ACEH D.I.
                    </option>
                    <option value="KALIMANTAN TIMUR">
                      KALIMANTAN TIMUR
                    </option>
                    <option value="SUMATERA SELATAN">
                      SUMATERA SELATAN
                    </option>
                    <option value="SULAWESI SELATAN">
                      SULAWESI SELATAN
                    </option>
                    <option value="KALIMANTAN SELATAN">
                      KALIMANTAN SELATAN
                    </option>
                    <option value="NUSA TENGGARA BARAT">
                      NUSA TENGGARA BARAT
                    </option>
                    <option value="SULAWESI UTARA">
                      SULAWESI UTARA
                    </option>
                    <option value="MALUKU UTARA">
                      MALUKU UTARA
                    </option>
                    <option value="JAMBI">
                      JAMBI
                    </option>
                    <option value="KALIMANTAN TENGAH">
                      KALIMANTAN TENGAH
                    </option>
                    <option value="SULAWESI TENGAH">
                      SULAWESI TENGAH
                    </option>
                    <option value="MALUKU">
                      MALUKU
                    </option>
                    <option value="SULAWESI BARAT">
                      SULAWESI BARAT
                    </option>
                    <option value="KALIMANTAN BARAT">
                      KALIMANTAN BARAT
                    </option>
                    <option value="PAPUA">
                      PAPUA
                    </option>
                    <option value="NUSA TENGGARA TIMUR">
                      NUSA TENGGARA TIMUR
                    </option>
                    <option value="BANGKA BELITUNG">
                      BANGKA BELITUNG
                    </option>
                    <option value="SULAWESI TENGGARA">
                      SULAWESI TENGGARA
                    </option>
                    <option value="PAPUA BARAT">
                      PAPUA BARAT
                    </option>
                    <option value="GORONTALO">
                      GORONTALO
                    </option>
                    <option value="KALIMANTAN UTARA">
                      KALIMANTAN UTARA
                    </option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label>
                    Model
                  </label>
                  <select class="form-control select2" name="" id="model">
                    <option value="">
                      -- Pilih Model --
                    </option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label>
                    Jarak
                  </label>
                  <input class="form-control" id="jarak" placeholder="Jarak Tempuh" type="number" value="0" />
                </div>
                <div class="col-sm-6 mb-3">
                  <label>
                    Tahun
                  </label>
                  <select class="form-control select2" name="" id="tahun">
                    <option value="">
                      -- Pilih Tahun --
                    </option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label>
                    Warna
                  </label>
                  <select class="form-control select2" name="" id="warna">
                    <option value="">
                      -- Pilih Warna --
                    </option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label>
                    Tipe
                  </label>
                  <select class="form-control select2" name="" id="tipe">
                    <option value="">
                      -- Pilih Tipe --
                    </option>
                  </select>
                </div>
                <div class="col-sm-6 mb-3">
                  <label>
                    Transmisi
                  </label>
                  <select class="form-control select2" name="" id="transmisi">
                    <option value="">
                      -- Pilih Transmisi --
                    </option>
                  </select>
                </div>
                <div class="col-sm-12">
                  <label>
                    Ekspektasi Harga
                  </label>
                  <input class="form-control" type="number" id="harga" placeholder="Ekspektasi Harga" />
                </div>
                <div class="col-md-12">
                  <p class="paragraph mt-4 mediumGrey">
                    Pastikan data yang telah Anda input telah sesuai dengan yang Anda inginkan
                  </p>
                </div>
                <div class="col-md-12">
                  <div class="row px-2">
                    <button class="buttonSubmit py-2 btn btn-danger btn-round col-4" type="button" id="submit">
                      SUBMIT
                    </button>
                    <button class="buttonSubmit py-2 btn btn-danger btn-round col-8" id="qr-code" type="button" disabled="">
                      UNDUH QR CODE
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-7 col-sm-12">
          <h3 class="font-weight-bold headline-3">
            Analisis Harga
          </h3>
          <h3 class="font-weight-bold headline-2 mt-2 mb-4">
            <img class="price-icon" height="30" src="">
            <span class="price price-text">
              Rp.50.000.000,-
            </span>
            </img>
          </h3>
          <div style='background-image: url("{{ asset('assets/chart.png') }}"); height: 190px;'>
          </div>
          <div class="position-relative">
            <div class="slidecontainer col-12">
              <input type="range" min="0" max="100000000" value="100000" class="slider first_class" id="myRange" name="chartSlide" step="50000"/>
              <output class="PriceAnalytic_messageChart__zIvij" for="chartSlide" style="left: 216.5px; top: -190px;">
                <div class="position-relative" style="width: 100%; height: 100%;">
                  <div class="text-center py-2 px-2">
                    <p class="mb-0">
                      <img class="price-icon" height="30" src="{{ asset('assets/iconsip.png') }}">
                      <span class="font-weight-bold price-text popup-price-text" style="letter-spacing: 0.5px;">
                        Harga Cartalog
                      </span>
                      </img>
                    </p>
                    <small class="mb-0 text-help smallFont">
                      Harga anda
                    </small>
                    <p class="mb-1 pb-1" style="border-bottom: 1px solid rgb(209, 209, 209);">
                      <strong class="your-price">
                        Rp.50.000.000,-
                      </strong>
                    </p>
                    <a class="buttonSubmit btn btn-danger btn-sm gradient smallFont py-1 px-3 mt-2" href="../">
                      TEMUKAN
                    </a>
                  </div>
                  <div class="PriceAnalytic_reactangleIndicator__3oBhk" style="left: 87.5px; bottom: -15px;">
                  </div>
                </div>
              </output>
            </div>
          </div>
          <div class="mt-5">
            <div>
              <h3 class="font-weight-bold headline-4 mb-4">
                Analisis Prediksi 5 Tahun Kedepan
              </h3>
              <div id="curveChart" style="width: 100%; min-height: 300px"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 150px;">
        <div class="col-md-4 mb-5">
          <div class="ServiceProduct_itemService__2XMFO text-center p-4">
            <img alt="cart" src="{{ asset('assets/cart.png') }}">
            <h5 class="mt-3 mb-2">
              <strong>
                Beli
              </strong>
            </h5>
            <span class="red d-inline-block px-2">
              Cari mobil untuk dijual
            </span>
            <p class="mb-4 mt-5">
              Masukan mobil dan kota untuk mencari kendaraan di area Anda dengan Harga Cartalog
            </p>
            <span class="buttonSubmit text-uppercase py-2 w-75 d-inline-block ServiceProduct_btnComingSoon__O6uDc">
              Coming Soon
            </span>
            </img>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="ServiceProduct_itemService__2XMFO text-center p-4">
            <img alt="cart" src="{{ asset('assets/sell.png') }}">
            <h5 class="mt-3 mb-2">
              <strong>
                Jual
              </strong>
            </h5>
            <span class="red d-inline-block px-2">
              Cari pembeli sekitar untuk kendaraan Anda
            </span>
            <p class="mb-4 mt-5">
              Kami mempermudah akses ke pembeli kendaraan online terbesar untuk menjual secara cepat dengan harga Cartalog
            </p>
            <span class="buttonSubmit text-uppercase py-2 w-75 d-inline-block ServiceProduct_btnComingSoon__O6uDc">
              Coming Soon
            </span>
            </img>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="ServiceProduct_itemService__2XMFO text-center p-4">
            <img alt="cart" src="{{ asset('assets/pita.png') }}">
            <h5 class="mt-3 mb-2">
              <strong>
                Simpan untuk nanti
              </strong>
            </h5>
            <span class="red d-inline-block px-2">
              Tetap riset kendaraan Anda, bandingkan dan jual nanti
            </span>
            <p class="mb-4 mt-5">
              Masih belum siap ganti kendaraan? Simpan di Garasi Cartalog untuk nanti.
            </p>
            <span class="buttonSubmit text-uppercase py-2 w-75 d-inline-block ServiceProduct_btnComingSoon__O6uDc">
              Coming Soon
            </span>
            </img>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="ServiceProduct_itemService__2XMFO text-center p-4">
            <img alt="cart" src="{{ asset('assets/inspection.png') }}">
            <h5 class="mt-3 mb-2">
              <strong>
                Inspeksi
              </strong>
            </h5>
            <span class="red d-inline-block px-2">
              Inspeksi menyeluruh kendaraan
            </span>
            <p class="mb-4 mt-5">
              Dapatkan sertifikasi dan ketahui kondisi aktual kendaraan Anda
            </p>
            <span class="buttonSubmit text-uppercase py-2 w-75 d-inline-block ServiceProduct_btnComingSoon__O6uDc">
              Coming Soon
            </span>
            </img>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="ServiceProduct_itemService__2XMFO text-center p-4">
            <img alt="cart" src="{{ asset('assets/insurance.png') }}">
            <h5 class="mt-3 mb-2">
              <strong>
                Asuransi & Garansi
              </strong>
            </h5>
            <span class="red d-inline-block px-2">
              Cari pembeli sekitar untuk kendaraan Anda
            </span>
            <p class="mb-4 mt-5">
              Kami mempermudah akses ke pembeli kendaraan online terbesar untuk menjual secara cepat dengan harga Cartalog
            </p>
            <a class="buttonSubmit text-uppercase py-2 w-75 d-inline-block bg-red" href="../">
              Cari Listing
            </a>
            </img>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="ServiceProduct_itemService__2XMFO text-center p-4">
            <img alt="cart" src="{{ asset('assets/service.png') }}">
            <h5 class="mt-3 mb-2">
              <strong>
                Servis Umum
              </strong>
            </h5>
            <span class="red d-inline-block px-2">
              Perawatan kendaraan bebas antrian
            </span>
            <p class="mb-4 mt-5">
              Booking servis berkala terjadwal dan bebas antrian
            </p>
            <span class="buttonSubmit text-uppercase py-2 w-75 d-inline-block ServiceProduct_btnComingSoon__O6uDc">
              Coming Soon
            </span>
            </img>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 50px;">
        <div class="col-md-12 mb-5">
          <h3>
            <strong>
              Harga yang Sama
            </strong>
          </h3>
        </div>
        <div class="col-md-9">
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product1.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-red">
                  Baru
                </span>
                <img alt="premium" class="ml-1" src="{{ asset('assets/premium.png') }}">
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
                </img>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 450.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(246, 180, 43); margin-left: -7px;">
                  <img alt="Harga Terendah" src="{{ asset('assets/price1.png') }}">
                  Harga Terendah
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product2.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-mediumGrey">
                  Bekas
                </span>
                <img alt="premium" class="ml-1" src="{{ asset('assets/premium.png') }}">
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
                </img>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 325.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(30, 172, 36); margin-left: -7px;">
                  <img alt="Harga Cartalog" src="{{ asset('assets/price2.png') }}">
                  Harga Cartalog
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product1.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-red">
                  Baru
                </span>
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 375.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(246, 180, 43); margin-left: -7px;">
                  <img alt="Harga Tinggi" src="{{ asset('assets/price3.png') }}">
                  Harga Tinggi
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product2.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-mediumGrey">
                  Bekas
                </span>
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 38.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(228, 113, 25); margin-left: -7px;">
                  <img alt="Harga Sangat Tinggi" src="{{ asset('assets/price4.png') }}">
                  Harga Sangat Tinggi
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product1.pn') }}'" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-red">
                  Baru
                </span>
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 450.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(246, 180, 43); margin-left: -7px;">
                  <img alt="Harga Terendah" src="{{ asset('assets/price1.png') }}">
                  Harga Terendah
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 450.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-red">
                Baru
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 325.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-mediumGrey">
                Bekas
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 375.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-red">
                Baru
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 38.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-mediumGrey">
                Bekas
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 450.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-red">
                Baru
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center mt-4">
          <a class="buttonSubmit d-inline-block py-2 px-5 text-uppercase font-weight-bold" href="../">
            Cari Lebih Lanjut
          </a>
        </div>
      </div>
      <div class="row" style="margin-top: 100px;">
        <div class="col-md-12 mb-5">
          <h3>
            <strong>
              Model yang Sama
            </strong>
          </h3>
        </div>
        <div class="col-md-9">
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product1.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-red">
                  Baru
                </span>
                <img alt="premium" class="ml-1" src="{{ asset('assets/premium.png') }}">
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
                </img>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 450.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(246, 180, 43); margin-left: -7px;">
                  <img alt="Harga Terendah" src="{{ asset('assets/price1.png') }}">
                  Harga Terendah
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product2.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-mediumGrey">
                  Bekas
                </span>
                <img alt="premium" class="ml-1" src="{{ asset('assets/premium.png') }}">
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
                </img>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 325.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(30, 172, 36); margin-left: -7px;">
                  <img alt="Harga Cartalog" src="{{ asset('assets/price2.png') }}">
                  Harga Cartalog
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product1.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-red">
                  Baru
                </span>
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 375.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(246, 180, 43); margin-left: -7px;">
                  <img alt="Harga Tinggi" src="{{ asset('assets/price3.png') }}">
                  Harga Tinggi
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product2.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-mediumGrey">
                  Bekas
                </span>
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 38.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(228, 113, 25); margin-left: -7px;">
                  <img alt="Harga Sangat Tinggi" src="{{ asset('assets/price4.png') }}">
                  Harga Sangat Tinggi
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
          <div class="productDisplay_itemProduct__2kKcq overflow-hidden mb-3 d-flex">
            <div class="w-25 float-left">
              <img alt="2019 Toyota Highlander Hybrid " class="img-fluid" src="{{ asset('assets/product1.png') }}" style="height: 100%;" />
            </div>
            <div class="descriptionProduct p-3 float-left w-75">
              <div class="overflow-hidden">
                <h5 class="float-left smallTitle mb-0 font-weight-bold" style="line-height: 25px;">
                  2019 Toyota Highlander Hybrid
                </h5>
                <span class="py-1 smallFont px-3 d-inline-block ml-2 white roundedFull bg-red">
                  Baru
                </span>
                <a class="float-right" href="../">
                  <i class="fal fa-plus-circle">
                  </i>
                  Tambahkan ke Garasi
                </a>
              </div>
              <div class="overflow-hidden">
                <span class="float-left red headline-3 font-weight-bold">
                  Rp. 450.000.000,-
                </span>
              </div>
              <div class="overflow-hidden">
                <span style="color: rgb(246, 180, 43); margin-left: -7px;">
                  <img alt="Harga Terendah" src="{{ asset('assets/price1.png') }}">
                  Harga Terendah
                  </img>
                </span>
              </div>
              <div class="row" style="padding: 0px 15px;">
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Kilometer:
                  </span>
                  <br>
                  <strong class="smallFont">
                    0
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Transmisi:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Manual
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Mesin:
                  </span>
                  <br>
                  <strong class="smallFont">
                    2450 CC
                  </strong>
                  </br>
                </div>
                <div class="col-md-2 p-0">
                  <span class="smallFont">
                    Bahan Bakar:
                  </span>
                  <br>
                  <strong class="smallFont">
                    Diesel
                  </strong>
                  </br>
                </div>
                <div class="col-md-4 pr-0">
                  <span class="smallFont">
                    Overall Rating:
                  </span>
                  <br>
                  <div>
                    <i class="fas fa-star productDisplay_activeStar__39rnt">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                    <i class="fas fa-star productDisplay_inactiveStar__2MjJ4">
                    </i>
                  </div>
                  </br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 450.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-red">
                Baru
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 325.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-mediumGrey">
                Bekas
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 375.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-red">
                Baru
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 38.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-mediumGrey">
                Bekas
              </span>
            </div>
          </div>
          <div class="col-md-12 mb-4">
            <a href="../">
              <h5 class="smallTitle font-weight-bold">
                2019 Toyota Highlander Hybrid
              </h5>
            </a>
            <div class="paragraph">
              <span class="d-inline-block" style="line-height: 30px;">
                <span>
                  Harga:
                </span>
                <span>
                  Rp. 450.000.000,-
                </span>
              </span>
              <span class="py-1 smallFont px-2 d-inline-block ml-2 white roundedFull float-right bg-red">
                Baru
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-center mt-4">
          <a class="buttonSubmit d-inline-block py-2 px-5 text-uppercase font-weight-bold" href="../">
            Cari Lebih Lanjut
          </a>
        </div>
      </div>
      <div style="margin-top: 100px;">
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
              <a class="buttonLink" href="../cartalog-price">
                LAINNYA
              </a>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 100px;">
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
              <a class="buttonLink" href="../cartalog-price">
                LAINNYA
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('extraCSS')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
<style>
#comboChart {
  width: 100%;
  height: 500px;
}
#myRange{
  min-width: 400px;
  width: 100%;
}
.slidecontainer {
  width: 100%;
  padding: 0px;
  margin-top: -13px;
}

.slider {
  width: 100%;
  height: 5px;
  border-radius: 5px;
  background-image: linear-gradient(to right, rgb(26,204,26, 1) 0, rgb(254,232,64) 33%, rgb(254,232,64) 66%, rgb(255,37,0, 1) 100%);
  outline: none;
  opacity: 0.7;
  transition: opacity .2s;
  -webkit-appearance: none;
}

.slider:hover {
  background-image: linear-gradient(to right, rgb(26,204,26, 1) 0, rgb(254,232,64) 33%, rgb(254,232,64) 66%, rgb(255,37,0, 1) 100%);
}

.slider::-webkit-slider-thumb {
  width: 23px;
  height: 24px;
  border: 0;
  background: url('{{ asset('assets/japan-flag.png')  }}');
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 23px;
  height: 24px;
  border: 0;
  background: url('{{ asset('assets/japan-flag.png')  }}');
  cursor: pointer;
}
output { 
  position: absolute;
  /*background-image: linear-gradient(top, #444444, #999999);*/
  background-color: white;
  width: 220px; 
  height: 131px; 
  text-align: center; 
  color: grey; 
  border-radius: 10px; 
  display: inline-block; 
  font: bold 15px/30px Georgia;
  bottom: 175%;
  left: 0;
  margin-left: -1%;
}
output:after { 
  content: "";
  position: absolute;
  width: 0;
  height: 0;
  border-top: 10px solid #999999;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  margin-top: -1px;
}
.lowest-price{
  letter-spacing: 0.5px; color: rgb(234, 116, 25);
}
.lower-price{
  letter-spacing: 0.5px; color: rgb(244, 176, 56);
}
.fair-price{
  letter-spacing: 0.5px; color: rgb(61, 193, 57);
}
.higher-price{
  letter-spacing: 0.5px; color: rgb(244, 176, 56);
}
.highest-price{
  letter-spacing: 0.5px; color: rgb(230, 115, 27);
}
</style>
@endsection

@section('extraJS')
<script src="{{ asset('js/app.query.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.full.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart(){
    var _data = [['Year', 'Price']];
    if(typeof _prediction != 'undefined' && typeof _prediction.price != 'undefined' && _prediction.price.length) {
      _prediction.price.forEach(function(_p){
          _data.push([_p.year, parseInt(_p.price)]);
        });
    } else {
      const _y = (new Date()).getFullYear();
      for(let i = 0; i < 5; i++) {
        _data.push([`${_y+i}`, 0]); 
      }
    }
    var data = google.visualization.arrayToDataTable(_data);

    var options = {
      // title: 'Analisis Prediksi 5 Tahun Kedepan',
      curveType: 'function',
      legend: 'none',
      series: {
        0: { color: 'red' }
      },
      animation:{
          duration: 700,
          startup: true
      },
      vAxis: {
        format: 'short',
        gridlines: { count: 5 } 
      },
      hAxis: {
        gridlines: { count: 5 } 
      },
      pointSize: 5
    };

    var chart = new google.visualization.AreaChart(document.getElementById('curveChart'));

    chart.draw(data, options);
  }
</script>
<script>
  var _prediction = {
   "price": [],
   "spectrum": {
      "lowRange": {
        "min": 0,
        "max": 0
      },
      "fairRange": {
        "min": 0,
        "max": 0
      },
      "highRange": {
        "min": 0,
        "max": 0
      },
      "regressionPrice": 0
    }
  };
  var merek = '';
  var model = '';
  var tahun = '';
  var tipe = '';
  var lokasi = '';
  var jarak = '';
  var warna = '';
  var bodyType = '';
  var harga = 0;
  $(document).ready(function() {
    __getBrands($('#merek'));
    $("select").select2({theme: "bootstrap"});
    lokasi = $('#lokasi').val();
    var _jquery = $;
    $('#merek').on('change', function(){
      merek = $('#merek').val();
      __getModels($('#model'), merek);
    });
    $('#model').on('change', function(){
      model = $('#model').val();
      __getYear($('#tahun'), merek, model);
      __getBodyType(merek, model, function(bodyType) {
        bodyType = bodyType;
      });
    });
    $('#tahun').on('change', function(){
      tahun = $('#tahun').val();
      __getVarian($('#tipe'), merek, model, tahun);
    });
    $('#tipe').on('change', function(){
      tipe = $('#tipe').val();
      __getColor($('#warna'), merek, model, tahun, tipe);
      __getTransmission($('#transmisi'), merek, model, tahun, tipe);
    });
    $('#warna').on('change', function(){
      warna = $('#warna').val();
    });
    $('#transmisi').on('change', function(){
      transmisi = $('#transmisi').val();
    });
    $('#lokasi').on('change', function(){
      lokasi = $('#lokasi').val();
    });
    $('#jarak').on('change', function(){
      jarak = $('#jarak').val();
    });
    $('#submit').on('click', function(){
      harga = $('#harga').val();
      __getPrediction(lokasi, merek, model, tahun, jarak, tipe, transmisi, warna, bodyType, function(prediction) {
        _prediction = prediction;
        const _slider = $('#myRange');
        $('.your-price').html('Rp.'+currencyFormat(parseInt(harga))+',-');
        _slider.attr('min', _prediction.spectrum.lowRange.min);
        _slider.attr('max', _prediction.spectrum.highRange.max);
        _slider.val(harga);
        _slider.trigger('input');

        drawChart();
      });
    });

    function reInitSelect() {
      $("select").select2("destroy").select2({theme: "bootstrap"});
    }
  });
</script>
<script>
  $(function() {
    var el, newPoint, newPlace, offset;

    // Select all range inputs, watch for change
    $("input[type='range']").on('input',function() {

      // Cache this for efficiency
      el = $(this);

      // Measure width of range input
      width = el.width();

      // Figure out placement percentage between left and right of input
      newPoint = (el.val() - el.attr("min")) / (el.attr("max") - el.attr("min"));

      // Janky value to get pointer to line up better
      offset = -1.3;

      // Prevent bubble from going beyond left or right (unsupported browsers)
      if (newPoint < 0) { newPlace = 0; }
      else if (newPoint > 1) { newPlace = width; }
      else { newPlace = width * newPoint + offset; offset -= newPoint; }

      // Move bubble
      el
      .next("output")
      .css({
        left: newPlace,
        marginLeft: (offset-11.4) + "%"
      });
     // .text(el.val());
      $('.price').html('Rp.'+currencyFormat(parseInt(el.val()))+',-');

      switch(cekHarga(parseInt(el.val()))) {
        case -2 :
            $('.price-icon').attr('src', '{{ asset('assets/price0.png') }}');
            $('.price-text').removeClass('lower-price');
            $('.price-text').addClass('lowest-price');
            $('.popup-price-text').html('Harga Sangat Rendah');
          break;
        case -1 :
             $('.price-icon').attr('src', '{{ asset('assets/price1.png') }}');
            $('.price-text').removeClass('lowest-price');
            $('.price-text').removeClass('fair-price');
            $('.price-text').addClass('lower-price');
            $('.popup-price-text').html('Harga Rendah');
          break;
        case 0 :
             $('.price-icon').attr('src', '{{ asset('assets/price2.png') }}');
            $('.price-text').removeClass('lower-price');
            $('.price-text').removeClass('higher-price');
            $('.price-text').addClass('fair-price');
            $('.popup-price-text').html('Harga Cartalog');
          break;
        case 1 :
             $('.price-icon').attr('src', '{{ asset('assets/price3.png') }}');
            $('.price-text').removeClass('highest-price');
            $('.price-text').removeClass('fair-price');
            $('.price-text').addClass('higher-price');
            $('.popup-price-text').html('Harga Tinggi');
          break;
        case 2 :
             $('.price-icon').attr('src', '{{ asset('assets/price4.png') }}');
            $('.price-text').removeClass('higher-price');
            $('.price-text').addClass('highest-price');
            $('.popup-price-text').html('Harga Sangat Tinggi');
          break;
      }
    })
    // Fake a change to position bubble at page load
    .trigger('input');
  });

  const currencyFormat = (x, prepend) => {
    let v = prepend ? prepend + ' ' : '';
    x = isNaN(x) ? 0 : x;
    v += x.toFixed(0).replace('.', ',').replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return v;
  }

  function cekHarga(_harga) {
    const _spectrum = _prediction.spectrum;
    const midLow = ((parseInt(_spectrum.lowRange.max)-parseInt(_spectrum.lowRange.min))/2)+parseInt(_spectrum.lowRange.min);
    const midHigh = ((parseInt(_spectrum.highRange.max)-parseInt(_spectrum.highRange.min))/2)+parseInt(_spectrum.highRange.min);
    if(_harga <= midLow) {
      return -2;
    } else if(_harga <= parseInt(_spectrum.lowRange.max)) {
      return -1;
    } else if(_harga <= parseInt(_spectrum.fairRange.max)) {
      return 0;
    } else if(_harga <= midHigh) {
      return 1;
    } else {
      return 2;
    }
  }
</script>
@endsection