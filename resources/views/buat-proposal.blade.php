@extends('template')

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="beranda">Beranda</a></li>
                <li><a href="pengajuan-proposal">Ajukan Proposal</a></li>
                <li>Buat Proposal</li>
            </ol>
            <h2>Buat Proposal</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            <h2>Nama Kegiatan:</h2>
            <h5>{{ $dataDetail['main']['name'] }}</h5>
            <h2>Penyelenggara:</h2>

            <h5>{{ $dataDetail['main']['mitra_name'] }} </h5>
            <h2>Alamat:</h2>
            <h5>{{ $dataDetail['main']['location'] }}</h5>
            </h5>
            <h2>Batas Akhir Pendaftaran:</h2>

            <h5>{{ $dataDetail['main']['end_registration'] }} </h5>
            <h2>Bentuk Kegiatan:</h2>
            <div style="display: flex; gap: 20px; font-size: 16px">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sks" id="14sks" checked>
                    <label class="form-check-label" for="14sks">
                        Studi Independen Bersertifikat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sks" id="20sks">
                    <label class="form-check-label" for="20sks">
                        Magang Bersertifikat
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sks" id="20sks">
                    <label class="form-check-label" for="20sks">
                        Pertukaran Mahasiswa Merdeka
                    </label>
                </div>
            </div>
            <h2>Kredit:</h2>

            <h5>{{ $dataDetail['main']['credits_count'] }}SKS</h5>
            <h2>Rekognisi:</h2>
            <div style="display: flex; gap: 20px; font-size: 16px">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sks" id="14sks" checked>
                    <label class="form-check-label" for="14sks">
                        14 SKS
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sks" id="20sks">
                    <label class="form-check-label" for="20sks">
                        20 SKS
                    </label>
                </div>
            </div>
            <h2>Model Pelaksanaan:</h2>
            <div style="display: flex; gap: 20px; font-size: 16px">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="model" id="whf" checked>
                    <label class="form-check-label" for="whf">
                        WFH (Work From Home)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="model" id="wfo">
                    <label class="form-check-label" for="wfo">
                        WFO (Work From Office)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="model" id="hybird">
                    <label class="form-check-label" for="hybird">
                        Hybird
                    </label>
                </div>
            </div>



            <h2>Periode Pelaksanaan:</h2>
            @php
                use Carbon\Carbon;
                
                $start = Carbon::parse($dataDetail['nestedData']['start_duration']);
                $end = Carbon::parse($dataDetail['nestedData']['end_duration']);
                $monthsDifference = $start->diffInMonths($end);
            @endphp
            <h5>{{ $dataDetail['nestedData']['start_duration'] }} sampai dengan
                {{ $dataDetail['nestedData']['end_duration'] }} ({{ $monthsDifference }} bulan)</h5>
            <h2>Metode Pelaksanaan:</h2>
            <div style="display: flex; gap: 20px; font-size: 16px">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metode" id="full" checked>
                    <label class="form-check-label" for="full">
                        Full Time
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="metode" id="part">
                    <label class="form-check-label" for="part">
                        Part Time
                    </label>
                </div>
            </div>
            <h2>Deskripsi Umum</h2>

            <p>{!! nl2br(e($dataDetail['nestedData']['description'])) !!}</p>
            <h2>Profil Lulusan Yang Dituju</h2>
            <div style="display: flex; gap: 20px; font-size: 16px">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="profil" id="isd" checked>
                    <label class="form-check-label" for="isd">
                        Information systems developer (ISD)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="profil" id="dea">
                    <label class="form-check-label" for="dea">
                        Data engineer & analyst (DEA)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="profil" id="ras">
                    <label class="form-check-label" for="ras">
                        Research assistant (RAs)
                    </label>
                </div>
            </div>
            <br>

            <div>
                <h2 class="">Modul Pembelajaran:</h2>
                <ol>
                    @foreach ($dataDetail['module'] as $module)
                        <li class="mt-3 ">
                            <strong>{{ $module['objective'] }}</strong>

                            <p>{{ $module['target'] }}</p>
                            <h6 class="fw-bold">Sasaran Pengembangan Skill</h6>
                            <ol type="i">
                                <li>{!! nl2br(e($module['detail'])) !!}</li>
                            </ol>
                            <h6 class="mt-3 fw-bold">Detil Pembelajaran</h6>
                            <ol type="i">
                                @php
                                    $processedResources = preg_replace('/(\d+\))/m', "\n$1", $module['resources']);
                                @endphp
                                <li>{!! nl2br(e($processedResources)) !!}</li>
                            </ol>
                            <h6 class="fw-bold mt-4">Metode Asesmen</h6>
                            <ol type="i">
                                <li>{!! nl2br(e($module['assessment_method'])) !!}</li>
                            </ol>
                        </li>
                        <h4 class="mt-3">Rumusan Sikap</h4>
                        <div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S01" id="s01">
                                <label class="form-check-label" for="s01">
                                    <p>S01 bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S02" id="s02">
                                <label class="form-check-label" for="s02">
                                    <p>S02 menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama,
                                        moral,
                                        dan etika;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S03" id="s03">
                                <label class="form-check-label" for="s03">
                                    <p>S03 berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa,
                                        bernegara, dan
                                        kemajuan
                                        peradaban berdasarkan Pancasila;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S04" id="s04">
                                <label class="form-check-label" for="s04">
                                    <p>S04 berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki
                                        nasionalisme serta
                                        rasa
                                        tanggung jawab pada negara dan bangsa;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S05" id="s05">
                                <label class="form-check-label" for="s05">
                                    <p>S05 menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta
                                        pendapat atau
                                        temuan
                                        orisinal orang lain;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S06" id="s06">
                                <label class="form-check-label" for="s06">
                                    <p>S06 bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat
                                        dan
                                        lingkungan;
                                    </p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S07" id="s07">
                                <label class="form-check-label" for="s07">
                                    <p>S07 taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S08" id="s08">
                                <label class="form-check-label" for="s08">
                                    <p>S08 menginternalisasi nilai, norma, dan etika akademik;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S09" id="s09">
                                <label class="form-check-label" for="s09">
                                    <p>S09 menunjukkan sikap bertanggung jawab atas pekerjaan di bidang keahliannya secara
                                        mandiri;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S10" id="S10">
                                <label class="form-check-label" for="s10">
                                    <p>S10 menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S11" id="s11">
                                <label class="form-check-label" for="s11">
                                    <p>S11 menginternalisasi karakter Del yang Mar-Tuhan, Marroha, dan Marbisuk; dan;</p>
                                </label>
                            </div>
                            <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="S12" id="s12">
                                <label class="form-check-label" for="s12">
                                    <p>S12 teliti, disiplin dan patuh pada standar-standar yang berlaku dalam bidang
                                        keahliannya;</p>
                                </label>
                            </div>
                        </div>

                        <h4 class="mt-3">Rumusan Keterampilan</h4>
                        <div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU1" id="ku1">
                                <label class="form-check-label" for="ku1">
                                    <p>KU1 mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks
                                        pengembangan
                                        atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan
                                        nilai humaniora
                                        yang sesuai dengan bidang keahliannya</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU2" id="ku2">
                                <label class="form-check-label" for="ku2">
                                    <p>KU2 mampu menunjukkan kinerja mandiri, bermutu, dan terukur;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU3" id="ku3">
                                <label class="form-check-label" for="ku3">
                                    <p>KU3 mampu mengkaji implikasi pengembangan atau implementasi ilmu pengetahuan
                                        teknologi
                                        yang memperhatikan dan menerapkan nilai humaniora sesuai dengan keahliannya
                                        berdasarkan kaidah, tata cara dan etika ilmiah dalam rangka menghasilkan solusi,
                                        gagasan,
                                        desain atau kritik seni, menyusun deskripsi saintifik hasil kajiannya dalam bentuk
                                        skripsi
                                        atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU4" id="ku4">
                                <label class="form-check-label" for="ku4">
                                    <p>KU4 mampu mengkaji implikasi pengembangan atau implementasi ilmu pengetahuan
                                        teknologi
                                        yang memperhatikan dan menerapkan nilai humaniora sesuai dengan keahliannya
                                        berdasarkan kaidah, tata cara dan etika ilmiah dalam rangka menghasilkan solusi,
                                        gagasan,
                                        desain atau kritik seni, menyusun deskripsi saintifik hasil kajiannya dalam bentuk
                                        skripsi
                                        atau laporan tugas akhir, dan mengunggahnya dalam laman perguruan tinggi;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU5" id="ku5">
                                <label class="form-check-label" for="ku5">
                                    <p>KU5 mampu mengambil keputusan secara tepat dalam konteks penyelesaian masalah di
                                        bidang
                                        keahliannya, berdasarkan hasil analisis informasi dan data</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU6" id="ku6">
                                <label class="form-check-label" for="ku6">
                                    <p>KU6 mampu memelihara dan mengembangkan jaringan kerja dengan pembimbing, kolega,
                                        sejawat baik di
                                        dalam maupun di luar lembaganya;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU7" id="ku7">
                                <label class="form-check-label" for="ku7">
                                    <p>KU7 mampu bertanggung jawab atas pencapaian hasil kerja kelompok dan melakukan
                                        supervisi
                                        dan evaluasi terhadap penyelesaian pekerjaan yang ditugaskan kepada pekerja yang
                                        berada di
                                        bawah tanggungjawabnya;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU8" id="ku8">
                                <label class="form-check-label" for="ku8">
                                    <p>KU8 mampu melakukan proses evaluasi diri terhadap kelompok kerja yang berada dibawah
                                        tanggung jawabnya, dan mampu mengelola pembelajaran secara mandiri; dan;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KU9" id="ku9">
                                <label class="form-check-label" for="ku9">
                                    KU9 mampu mendokumentasikan, menyimpan, mengamankan, dan menemukan kembali data
                                    untuk menjamin kesahihan dan mencegah plagiasi.
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KK1" id="kk1">
                                <label class="form-check-label" for="kk1">
                                    <p>KK1 mampu menerapkan konsep matematika, sains, rekayasa, dan pola berpikir
                                        komputasional
                                        (computational thinking)
                                        dalam upaya penyelesaian persoalan;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KK2" id="kk2">
                                <label class="form-check-label" for="kk2">
                                    <p>KK2 mampu melakukan pengumpulan, interpretasi, pemrosesan, dan visualisasi data dalam
                                        rangka membentuk informasi untuk menemukan suatu peluang atau menyelesaikan suatu
                                        persoalan;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KK3" id="kk3">
                                <label class="form-check-label" for="kk3">
                                    <p>KK3 mampu merancang, merealisasikan, menguji, serta mengevaluasi solusi berbasis
                                        sistem
                                        informasi melalui pendekatan analitis dengan mempertimbangkan standar teknis, unjuk
                                        kerja, keamanan, serta faktor-faktor ekonomi, sosial, dan lingkungan;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KK4" id="kk4">
                                <label class="form-check-label" for="kk4">
                                    <p>KK4 mampu mengelola proyek dalam upaya penyelesaian persoalan di bidang sistem
                                        informasi;
                                        dan;</p>
                                </label>
                            </div>
                            <div class="form-check" style="display: flex; gap: 20px; font-size: 16px">
                                <input class="form-check-input" type="checkbox" value="KK5" id="kk5">
                                <label class="form-check-label" for="kk5">
                                    <p>KK5 mampu melakukan riset di bidang sistem informasi.</p>
                                </label>
                            </div>
                        </div>
                        <h4 class="mt-4">Penugasan Pengetahuan</h4>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP1" id="pp1">
                            <label class="form-check-label" for="pp1">
                                <p>PP1 menguasai konsep aplikatif matematika, sains, rekayasa dan pola berpikir
                                    komputasional
                                    (computational thinking);</p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP2" id="pp2">
                            <label class="form-check-label" for="pp2">
                                <p>PP2 menguasai konsep aplikatif arsitektur dan pengorganisasian komputer, sistem operasi,
                                    dan
                                    teknologi jaringan komputer;</p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP3" id="pp3">
                            <label class="form-check-label" for="pp3">
                                <p>PP3 menguasai konsep teoretis statistik serta teknik interpretasi data secara mendalam;
                                </p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP4" id="pp4">
                            <label class="form-check-label" for="pp4">
                                <p>PP4 menguasai konsep dan teknik pengumpulan dan analisis kebutuhan, perancangan,
                                    pengembangan, pengujian, dan penerapan solusi berbasis sistem informasi secara mendalam;
                                </p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP5" id="pp5">
                            <label class="form-check-label" for="pp5">
                                <p>PP5 menguasai konsep teoretis dan teknik pemrograman dengan berbagai pendekatan;</p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP6" id="pp6">
                            <label class="form-check-label" for="pp6">
                                <p>PP6 menguasai konsep teoretis dan teknik perancangan, pengembangan, optimasi, dan
                                    manajemen basis data;</p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP7" id="pp7">
                            <label class="form-check-label" for="pp7">
                                <p>PP7 menguasai konsep aplikatif dan teknik penjaminan keamanan dan tata kelola sistem
                                    informasi secara umum;</p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP8" id="pp8">
                            <label class="form-check-label" for="pp8">
                                <p>PP8 menguasai isu terkini mengenai hukum, etika, ekonomi, sosial, dan lingkungan secara
                                    umum
                                    yang erat kaitannya dengan bidang sistem informasi; dan</p>
                            </label>
                        </div>
                        <div class="form-check" div style="display: flex; gap: 20px; font-size: 16px">
                            <input class="form-check-input" type="checkbox" value="PP9" id="pp9">
                            <label class="form-check-label" for="pp9">
                                <p>PP9 menguasai teori aplikatif dalam memanajemen proyek khususnya di bidang sistem
                                    informasi.</p>
                            </label>
                        </div>

                        <h4 class="mt-3">Kemiripan dengan CPMK:</h4>
                        <div>
                            @foreach ($matakuliahStudents->nilai_mahasiswa as $matkul)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="{{ $matkul->nama_matakuliah }}" {{-- {{ $matkul->isTaken() ? 'checked' : '' }} --}} id="">
                                    <label class="form-check-label" for="">
                                        {{ $matkul->nama_matakuliah }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    @endforeach

                </ol>
                <h2>Pengalaman Pendukung</h2>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                        placeholder="Tambahkan pengalaman pendukung"></textarea>
                    <br>
                </div>
            </div>

            <h2>Motivation Video</h2>
            <input class="form-control" type="text" placeholder="Tambahkan alamat video motivasi">

    </section>



    <div style="display: flex; justify-content: center; gap: 40px; margin-bottom: 5px;">
        <a href="#"><button type="button" class="btn btn-primary btn-lg" style="margin-bottom: 20px;">Simpan
                Proposal</button></a>
        <a href="pengajuan-proposal-berhasil"><button type="button" class="btn btn-success btn-lg"
                style="margin-bottom: 20px;">Ajukan Proposal</button></a>
    </div>
    </main><!-- End #main -->
@endsection
