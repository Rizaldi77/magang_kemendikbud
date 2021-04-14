@extends('layouts.main');
@section('title', 'ULT');

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

    <div class="container">
    <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
            <h1>Unit Layanan Terpadu</h1>
            <h2>LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH V Yogyakarta</h2>
            <a href="{{ route('form') }}" class="btn-get-started scrollto">Isi Formulir</a>
        </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/kemendikbudlogo.png" class="img-fluid" alt="Logo Kemendikbud">
        </div>
    </div>
    </div>

    </section><!-- End Hero -->
    <br>
    <br>

    <main id="main">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3 style="" class="pendaftaran">Pelayanan Tata Usaha</h3>
          <p class="card-text">Pelayanan yang berkaitan dengan Tata Usaha dalam Instansi Pendidikan</p>
          <p class="card-text"><small class="text-muted">Pelayanan Fasilitas, Pengajuan Alat dll</small></p>
        </div>
        <br>
        <img src="assets/img/background.jpg" class="card-img-bottom" alt="...">
      </div>
    
@endsection