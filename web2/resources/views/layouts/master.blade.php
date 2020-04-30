<html>
<title>Profil</title>
<!--link rel="stylesheet" type="text/css" href="{{ asset ('/css/style.css')}}"-->
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<script src="/js/app.js"></script>
<style>
body {
    font-family: 'Montserrat', sans-serif;margin: 0px;padding: 0px;
    background: linear-gradient(#3498db 20%,#ecf0f1 20%,#ecf0f1 20%,#ecf0f1 100%);
}
</style>
<body>
<div class="container bg-white" style="margin-top:60px;padding-top:15px">
 @yield('konten')
</div>
<script src="/public/js/app.js"></script>
</body>
</html>

<!--
    <table cellspacing="0">
        <tr>
            <td class="welcome">
                <h2 class="judul"><b>BIODATA</b></h2>
                <table width="100%" class="sec1" border="1">
                <tr>
                    <td width="30%"><img src="image/1.jpg" width="100%"></td>
                    <td width="70%" class="container">
                        <p><b style="font-size:20pt">Hi Semua</b><br>
                        <i class="pudar">Perkenalkan, Aku</i></p>
                        <hr>
                        <table width="100%" border="1">
                            <tr>
                                <td width="26%"><b>Nama</b></td>
                                <td width="2%">:</td>
                                <td width="72%">Asep Herawan</td>
                            </tr>
                            <tr>
                                <td><b>Tempat, Tanggal Lahir</b></td>
                                <td>:</td>
                                <td>Medan, 13 Maret 1999</td>
                            </tr>
                            <tr>
                                <td><b>Umur</b></td>
                                <td>:</td>
                                <td>21 Tahun</td>
                            </tr>
                            <tr>
                                <td><b>Jenis Kelamin</b></td>
                                <td>:</td>
                                <td>Pria</td>
                            </tr>
                            <tr>
                                <td><b>Agama</b></td>
                                <td>:</td>
                                <td>Islam</td>
                            </tr>
                            <tr>
                                <td style="vertical-align:text-top;"><b>Alamat</b></td>
                                <td style="vertical-align:text-top;">:</td>
                                <td>Jl. Pertahanan Ujung, Psr. VII, Desa Patumbak 1, Kec. Patumbak, Kab. Deli Serdang</td>
                            </tr>
                            <tr>
                                <td><b>Pekerjaan</b></td>
                                <td>:</td>
                                <td>Staff Teknisi</td>
                            </tr>
                            <tr>
                                <td><b>Kontak / No.Hp</b></td>
                                <td>:</td>
                                <td>0823-6143-9352</td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>:</td>
                                <td>kankasep99@gmail.com</td>
                            </tr>
                        </table>
                        <input type="submit">
                        <input type="submit">
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td class="welcome">
            <h2 class="judul"><b>KEAHLIAN</b></h2>
            <table width="100%" style="table-layout:fixed;">
                <tr>
                    <td class="portofolio sec1" style="vertical-align:text-top;text-align:center">
                    <b class="xb">KETERAMPILAN</b><hr>
                        <table width="100%" style="table-layout:fixed;">
                            <tr>
                                <td style="text-align:right;"><b>Microsoft Office</b><br>★★★★★★★☆☆☆<br><br></td>
                                <td width="10px"></td>
                                <td><b>CorelDRAW</b><br>★★★★★★★☆☆☆<br><br></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;"><b>Adobe Photoshop</b><br>★★★★★★★☆☆☆<br><br></td>
                                <td width="10px"></td>
                                <td><b>HTML & CSS</b><br>★★★★★★★☆☆☆<br><br></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;"><b>Adobe Illustrator</b><br>★★★★★★★☆☆☆</td>
                                <td width="10px"></td>
                                <td><b>Troubleshoot PC</b><br>★★★★★★★☆☆☆</td>
                            </tr>
                        </table>
                    </td>

                    <td width="10px"></td>
                    <td class="portofolio sec1" style="vertical-align:text-top;text-align:center">
                    <b class="xb">KEMAMPUAN</b><hr>
                        <table width="100%" style="table-layout:fixed;">
                            <tr>
                                <td style="text-align:right;"><b>Bahasa Indonesia</b><br>★★★★★★★☆☆☆<br><br></td>
                                <td width="10px"></td>
                                <td><b>Bekerja Dalam Tekanan</b><br>★★★★★★★☆☆☆<br><br></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;"><b>Bahasa Inggris</b><br>★★★★★★★☆☆☆<br><br></td>
                                <td width="10px"></td>
                                <td><b>Perencanaan</b><br>★★★★★★★☆☆☆<br><br></td>
                            </tr>
                            <tr>
                                <td style="text-align:right;"><b>Berfikir Kritis</b><br>★★★★★★★☆☆☆</td>
                                <td width="10px"></td>
                                <td><b>Kerja Sama Tim</b><br>★★★★★★★☆☆☆</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="welcome">
            <h2 class="judul"><b>PENDIDIKAN</b></h2>
            <table width="100%" style="table-layout:fixed;">
                <tr>
                    <td class="portofolio sec1" style="vertical-align:top">
                    <b class="xb" style="font-size:20;">2005-2011</b><hr>
                    <p class="pudar">&#127963 SD Negeri 101791<br>&#9873 Sekolah Umum</p>
                        <p class="desc">Saya menyelesaikan Sekolah Dasar saya di SD ini, dan suskses dengan peringkat 10 besar setiap semesternya</p>
                    </td>

                    <td width="10px"></td>

                    <td class="portofolio sec1" style="vertical-align:top">
                    <b class="xb" style="font-size:20">2011-2014</b><hr>
                    <p class="pudar">&#127963 SMP Negeri 1 Patumbak<br>&#9873 Sekolah Umum</p>
                        <p class="desc">Saya menyelesaikan Sekolah Menengah Pertama dalam 3 tahun di SMP ini, dan sukses dengan peringkat 10 besar setiap semester</p>
                    </td>

                    <td width="10px"></td>

                    <td class="portofolio sec1" style="vertical-align:top">
                    <b class="xb" style="font-size:20">2014-2017</b><hr>
                    <p class="pudar">&#127963 SMK Negeri 1 Patumbak<br>&#9873 Rekayasa Perangkat Lunak</p>
                        <p class="desc">Saya menyelesaikan Sekolah Menegah Kejuruan dalan 3 tahun di SMK ini, dengan mengambil jurusan Rekayasa Perangkat Lunak (RPL), dan lulus dengan nilai yang cukup bagus</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
-->
