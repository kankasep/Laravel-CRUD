<html>
<title>Profil</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'-->
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
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
    <table class="bg-white table shadow-sm" width="100%">
        <tr>
            <td>
                <a href="/" class="btn">Laravel</a>
            </td>
        </tr>
    </table>
    <table width="100%">
    @if ($message = Session::get('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
        <p>
        <strong><i class="fa fa-check"></i> Sukses ! </strong>{{ $message }}</p>
    </div>
    @endif
        <tr>
            <td class="pt-3 pl-4 pr-4">
                <table class="table table-hover table-light text-teal shadow-sm" width="100%">
                    <thead>
                        <tr class="teal" style="height:70px">
                            <th colspan="6" class="pb-0 pl-4 align-middle"><h3>Data <b>Mahasiswa</b></h3></th>
                            <th><a href="/new" class="btn btn-success float-right p-2">Tambah Data</a></th>
                            <th><a href="/profile/cetak_pdf" class="btn btn-primary p-2" target="_blank">Cetak Data</a></th>
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
                                <i class="btn-group p-2">
                                <a href="/{{$profile->id}}/edit" class="btn btn-warning" title="Edit"><i class="fa fa-pencil"></i>
                                <a href="/{{$profile->id}}/hapus" class="btn btn-danger" onclick="return confirm('Hapus Data Ini ?')" title="Hapus"><i class="fa fa-trash"></i></a>
                                </i>
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
