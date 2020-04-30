<html>
<title>Profil</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/w3.css') }}">
<style>
body {font-family: 'Montserrat';background:#ecf0f1 74.5%;}
body a {text-decoration: none;}
table {border-spacing:0px;}
.middle td {vertical-align:middle}
</style>
<body>
    <table class="w3-bar w3-white w3-card" width="100%">
        <tr>
            <td class="">
                <a href="/" class=" w3-bar-item w3-button w3-padding-16">Laravel</a>
            </td>
        </tr>
    </table>
    <table width="100%" class="w3-container" style="padding-top:20px;">
        <tr>
            <td>
                <table class="w3-table w3-white w3-bordered w3-hoverable w3-text-teal" width="100%">
                    <thead>
                        <tr class="w3-teal">
                            <th colspan="6" style="padding-left:25px;"><h3>Data <b>Mahasiswa</b></h3></th>
                            <th colspan="2" class="w3-right-align"><a href="/new" class="w3-button w3-green w3-round-medium w3-padding-16">Tambah Data</a></th>
                        </tr>
                        <tr>
                            <th class="w3-padding-16" width="9%">NPM</th>
                            <th class="w3-padding-16" width="15%">NAMA</th>
                            <th class="w3-padding-16" width="20%">TEMPAT, TANGGAL LAHIR</th>
                            <th class="w3-padding-16" width="8%">GENDER</th>
                            <th class="w3-padding-16" width="8%">AGAMA</th>
                            <th class="w3-padding-16" width="20%">ALAMAT</th>
                            <th class="w3-padding-16" width="13%">NO. PONSEL</th>
                            <th class="w3-padding-16" width="10%">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="middle">
                        @foreach ($data_profile as $profile)
                        <tr>
                            <td>{{$profile->npm}}</td>
                            <td>{{$profile->nama}}</td>
                            <td>{{$profile->tempat_lahir}}, {{$profile->tanggal_lahir}}</td>
                            <td>{{$profile->jenis_kelamin}}</td>
                            <td>{{$profile->agama}}</td>
                            <td>{{$profile->alamat}}</td>
                            <td>{{$profile->ponsel}}</td>
                            <td>
                                <h4>
                                <a href="/{{$profile->id}}/edit" class="w3-text-yellow" title="Edit">&#9998;</a>&nbsp;
                                <a href="/{{$profile->id}}/hapus" class="w3-text-red" onclick="return confirm('Hapus Data Ini ?')" title="Hapus">&#9938;</a>
                                </h4>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
