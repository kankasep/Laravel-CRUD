<html>
<title>Profil</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href={{ asset('/css/bootstrap.min.css')}}>
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<style>
body {font-family: 'Montserrat';background:#ecf0f1 74.5%;}
/*body a {text-decoration: none;}*/
table {border-spacing:0px;}
.middle td {vertical-align:middle}
</style>
<body>
    <table class="bg-white table shadow" width="100%">
        <tr>
            <td>
                <a href="/" class="btn">Laravel</a>
            </td>
        </tr>
    </table>
    <table width="100%">
    @if ($message = Session::get('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>{{ $message }}</strong>
    </div>
    @endif
        <tr>
            <td class="pt-3 pl-4 pr-4">
                <table class="table table-hover table-light text-teal shadow-sm" width="100%">
                    <thead>
                        <tr class="teal" style="height:70px">
                            <th colspan="6" class="pb-0 pl-4 align-middle"><h3>Data <b>Mahasiswa</b></h3></th>
                            <th colspan="2"><a href="/new" class="btn btn-success float-right p-2">Tambah Data</a></th>
                        </tr>
                        <tr>
                            <th width="7%">NPM</th>
                            <th width="15%">NAMA</th>
                            <th width="20%">TEMPAT, TANGGAL LAHIR</th>
                            <th width="8%">GENDER</th>
                            <th width="8%">AGAMA</th>
                            <th width="20%">ALAMAT</th>
                            <th width="12%">NO. PONSEL</th>
                            <th width="10%">AKSI</th>
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
                                <h4 class="btn-group">
                                <a href="/{{$profile->id}}/edit" class="btn btn-warning" title="Edit">&#9998;
                                <a href="/{{$profile->id}}/hapus" class="btn btn-danger" onclick="return confirm('Hapus Data Ini ?')" title="Hapus">&otimes;</a>
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
