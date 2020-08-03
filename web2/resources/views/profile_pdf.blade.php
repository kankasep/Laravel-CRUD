<html>
<head>
    <title>Laporan</title>
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->
    <style type="text/css">
        @font-face {
            font-family: 'Source Sans Pro', sans-serif;
            src: url({{ storage_path('fonts/SourceSansPro-Regular.ttf')}});
            font-weight: 400;
            font-style: normal;
        }
        body {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        table {
            border-collapse: collapse;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }
        .table td,
        .table th {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }
        .table thead th {
            vertical-align: bottom;
            text-align: left;
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }
        .table-sm td,
        .table-sm th {
            padding: 0.3rem;
        }
        .table-bordered {
            border: 1px solid #dee2e6;
        }
        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .table-bordered thead td,
        .table-bordered thead th {
            border-bottom-width: 2px;
        }
        .table tr td,
		.table tr th{
			font-size: 9pt;
        }
	</style>
<body>
    <center>
        <h2>LAPORAN DATA MAHASISWA</h2>
    </center>
    <table class="table table-bordered text-teal" width="100%">
        <thead>
            <tr>
                <th width="7%">NPM</th>
                <th width="15%">NAMA</th>
                <th width="20%">TEMPAT, TANGGAL LAHIR</th>
                <th width="8%">GENDER</th>
                <th width="8%">AGAMA</th>
                <th width="20%">ALAMAT</th>
                <th width="12%">NO. PONSEL</th>
            </tr>
        </thead>
        <tbody class="middle">
            @php $i=1 @endphp
            @foreach ($data_profile as $profile)
            <tr>
                <td>{{$profile->npm}}</td>
                <td>{{$profile->nama}}</td>
                <td>{{$profile->tempat_lahir}}, {{$profile->tanggal_lahir}}</td>
                <td>{{$profile->jenis_kelamin}}</td>
                <td>{{$profile->agama}}</td>
                <td>{{$profile->alamat}}</td>
                <td>{{$profile->ponsel}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="7" align="right">Tanggal Cetak : {{date('d/m/Y')}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
