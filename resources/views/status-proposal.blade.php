@extends("template")

@section("main")


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="beranda-mhs">Beranda</a></li>
                <li>Lihat Status Proposal</li>
            </ol>
            <h2>Lihat Status Proposal</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <main id="main">

        <div class="container mt-3 mb-3">
            <div>
                <p>Showing <strong>1-4</strong> of <strong>4</strong> items</p>
            </div>
            <div style="align-items: center; display: flex;">
                <a href="pengajuan-proposal"><button type="button" class="btn btn-primary btn-sm"><i class="bi bi-plus" style="color: #FFFFFF;"></i> Tambah Proposal</button></a>
            </div>
        </div>

        <div class="container">
            <table class=" table table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Tracking ID</th>
                        <th>Jenis Kegiatan</th>
                        <th>Nama Program</th>
                        <th>Penyelenggara</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#621234</td>
                        <td>Studi Independen</td>
                        <td>Data Business & Analytics</td>
                        <td>Ruangguru</td>
                        <td>22/03/2023</td>
                        <td><button class="btn btn-warning btn-sm">Diproses</button></td>
                    </tr>
                    <tr>
                        <td>#642345</td>
                        <td>Studi Independen</td>
                        <td>Python For Data Science</td>
                        <td>Hacktiv8</td>
                        <td>15/06/2022</td>
                        <td><button class="btn btn-success btn-sm">Disetujui</button></td>
                    </tr>
                    <tr>
                        <td>#34175</td>
                        <td>Studi Independen</td>
                        <td>Data Analyst</td>
                        <td>GreetEdu</td>
                        <td>06/09/2023</td>
                        <td><button class="btn btn-danger">Ditolak</button></td>
                    </tr>
                    <tr>
                        <td>#89022</td>
                        <td>Magang Bersertifikat</td>
                        <td>Node JS For Back End Web Developer</td>
                        <td>Hacktiv8</td>
                        <td>22/03/2022</td>
                        <td><button class="btn btn-danger">Ditolak</button></td>
                    </tr>

                </tbody>
            </table>
        </div>

    </main><!-- End #main -->

@endsection