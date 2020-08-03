<html>
<title>Tambah</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
<style>
body {font-family:'Montserrat';padding: 70px; background: linear-gradient(#3498db 30%,#ecf0f1 30%);}
table {border-spacing:0;}
label {font-weight: bold}
</style>
<body>
    <table width="100%" class="container shadow">
        <thead>
            <tr class="teal">
                <th class="text-left pl-4 pt-4 pb-3"><h2>Tambah <b>Data</b></h2></th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr>
                <td class="p-4">
                    <table width="100%" class="text-teal container">
                        <form action="/tambah" method="POST">
                            {{ csrf_field() }}
                            <tr>
                                <td class="pb-3">
                                    <label>NPM</label><br>
                                <input name="npm" type="text" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    <label>Nama Lengkap</label><br>
                                    <input name="nama" type="text" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    <label>Tempat Lahir</label><br>
                                    <input name="tempat_lahir" type="text" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    <label>Tanggal Lahir</label><br>
                                    <input name="tanggal_lahir" type="date" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    <label>Gender</label><br>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    <label>Agama</label><br>
                                    <input name="agama" type="text" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-3">
                                    <label>Alamat</label><br>
                                    <textarea name="alamat" class="form-control" id="alamat" rows="5" style="resize:none;" class="form-control" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-4">
                                    <label>No. Ponsel</label><br>
                                    <input name="ponsel" type="text" class="form-control" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <button type="submit" class="btn btn-success">Tambah</button>&nbsp;
                                    <a href="/profile" class="btn btn-danger">Batal</a>
                                </td>
                            </tr>
                        </form>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
