@extends('layouts.app')
@section('title')
    Profil AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.profile.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Profil AKPI</h2>
                </div>
                <div class="panel-body">
                    <div class="detail-program">
                        <img src="{{ asset('dist/images/profil-akpi-iapc.jpg') }}" class="img-responsive mgb-md" alt="profil">
                        <p class="basic-text mgb-md">Asosiasi Konselor Pastoral Indonesia (AKPI) atau Indonesian Association of Pastoral Counselors (IAPC) didirikan oleh duabelas orang pendiri dan terdiri atas sembilan (9) konselor pastoral, dua (2) peserta Pastoral Counselor Formation Angkatan 01 (2011), dan seorang (1) supervisor klinis di Graha Konseling Salatiga, Salatiga, Jawa Tengah pada tanggal 30 Juni 2012 pukul 10.10 pagi. Untuk sementara Kantor AKPI bertempat di Perumahan Gunungsari No B4, RT 05, RW 06, Sidorejo Kidul, Kecamatan Tingkir, Kota Salatiga, Jawa Tengah 50741. Pengelolaan program dan kegiatan sehari-hari AKPI dilaksanakan oleh Badan Pengurus Nasional AKPI. Badan Pengurus Nasional dipilih oleh anggota AKPI dalam Konvensi Nasional sekali dalam lima (5) tahun.</p>
                        <p class="basic-text mgb-md">AKPI adalah organisasi profesi konselor pastoral (pastoral counselor) praktisi umum disebut Konselor Pastoral (Kon.Pas.) atau Pastoral Counselor (PC), praktisi spesialis disebut Konselor Pastoral Spesalis (Kon.Pas.Sp. ... sesuai dengan spesialisasinya), dan praktisi supervisi pendidikan profesi disebut Supervisor Klinis atau Clinical Supervisor (Kon.Pas.Sp.Sup.). Ketentuan dan persyaratan keanggotaan tercantum dalam Anggaran Dasar dan Anggaran Rumah Tangga AKPI. Praktisi umum dan spesalis AKPI memberi layanan konseling di berbagai seting kehidupan seperti lembaga keagamaan, rumah sakit, sekolah, pendidikan tinggi, lembaga swadaya masyarakat, panti rehabilitasi gangguan jiwa, graha konseling (counseling center), panti asuhan, dan panti wredhan di seluruh wilayah Indonesia.</p>
                        <p class="basic-text mgb-md">Di samping itu ada kategori keanggotaan lain, yakni Pastoral Counselor in Training (PCiT) yakni kandidat konselor pastoral yang telah memenuhi persyaratan akademis dan sedang menjalani praktikum konseling, Anggota Kehormatan, dan Mitra AKPI atau (Associate Member). Salah seorang Anggota Kehormatan AKPI, yakni Pdt. Dr. Aart van Beek M.Th, Th.D. yang tinggal di Sacramento, California, Amerika Serikat.</p>
                        <p class="basic-text mgb-md">AKPI bersifat terbuka, lintasdisiplin, lintasbudaya, dan lintasiman. Sesuai dengan ketentuan dan persyaratan Anggaran Dasar dan Anggaran Rumah Tangganya, AKPI terbuka bagi semua lulusan disiplin ilmu pertolongan - helping profession (seperti lulusan Prodi BK/BP, Psikologi, Pekerjaan Sosial, Kedokteran, dan Keperawatan) dan mazab atau aliran/pedekatan psikologi menjadi konselor pastoral. AKPI juga terbuka untuk konselor pastoral dari semua latarbelakang budaya, asal-usul etnis, agama, mazab/aliran/denominasi keagamaan, dan kepercayaan.</p>
                        <p class="basic-text mgb-md">AKPI didirikan dengan tujuan: (1) turut aktif berperan dalam menciptakan dan meningkatkan peradaban manusia Indonesia dan bahkan manusia universal yang sehat secara holistik, dalam aspek fisik, mental, sosial, dan spiritual, (2) mengembangkan konseling pastoral sebagai ilmu dan profesi, (3) mengembangkan sikap dan kemampuan profesional konselor pastoral, (4) mengembangkan jaringan kerjasama intraprofesi (seprofesi) dan interprofesi (antarprofesi) secara nasional maupun internasional, (5) melaksanakan pendidikan dan pelatihan profesi dan berbagai kegiatan penunjangnya, dalam hal ini termasuk penelitian dan publikasi, (6) melakukan akreditasi dan/atau sertifikasi bagi penyelenggara pendidikan, pelatihan, dan/atau layanan konseling pastoral. Tujuan AKPI tercantum dalam Anggaran Dasar, Anggaran Rumah Tangga, Logo, dan Mars AKPI.</p>
                        <p class="basic-text mgb-md">Sesuai dengan tujuan AKPI dan tradisi organisasi profesi konselor pastoral global, maka program utama AKPI adalah Pastoral Counselor Formation (PCF) atau pendidikan profesi konselor pastoral. PCF terdiri atas dua kegiatan, yakni kuliah intensif bagi kandidat konselor pastoral yang belum memenuhi persyaratan akademis dan praktikum konseling. Praktikum disupervisi oleh supervisor klinis yang ditetapkan oleh AKPI. Ada pun tempat praktikum dapat dipilih oleh peserta atau ditentukan oleh AKPI.</p>
                        <p class="basi-text mgb-md">Dalam rangka mengembangkan profesionalisme konselor pastoral Indonesia, AKPI bekerjasama dengan lembaga lain seperti Sekolah Tinggi Diakones (STD) HKBP Balige, Toba Samosir, Sumatra Utara untuk melaksanakan PCF terintegrasi dengan Prodi S1 dan Rumah Sakit (RS) Griya Waluya, Ponorogo, Jawa Timur untuk tempat praktikum PCiT. Di samping itu AKPI juga dapat membantu dan menjadi payung lembaga lain yang ingin mendirikan layanan konseling (counseling center & graha konseling), pelatihan pendampingan dan konseling, dan kegiatan lain yang berkaitan dengan layanan konseling psikospiritual.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
