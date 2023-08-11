@extends("template")

@section("main")


  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <h2>Beranda</h2>

    </div>
  </section><!-- End Breadcrumbs -->


  <main id="main">
    <section class="inner-page">
      <div class="container">
        <h1 style="text-align: center">Selamat datang, {{ $students->nama_lengkap }}</h1>
        <p style="text-align: center">Di halaman ini, Anda dapat mengajukan proposal untuk proyek Anda dan melihat
          status proposal yang telah anda buat sebelumnya.</p>
        <div style="display: flex; justify-content: center; gap: 40px; margin-top: 40px;">
          <a href="status-proposal"><button type="button" class="btn btn-primary btn-lg">Lihat Status Proposal</button></a>
          <a href="pengajuan-proposal"><button type="button" class="btn btn-success btn-lg">Ajukan Proposal</button></a>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
