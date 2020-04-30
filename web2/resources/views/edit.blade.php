<html>
<title>Edit</title>
<link rel="stylesheet" type="text/css" href="{{ asset('/css/w3.css') }}">
<style>
body {font-family: 'Montserrat', sans-serif;padding: 70px;background: linear-gradient(#3498db 30%,#ecf0f1 30%);}
table {border-spacing:0;}
label {font-weight: bold}
</style>
<body>
    <table width="100%" class="w3-container w3-content">
        <thead>
            <tr class="w3-teal">
                <th class="w3-left" style="padding-left:25px;"><h2>Edit <b>Data</b></h2></th>
            </tr>
        </thead>
        <tbody class="w3-white">
            <tr>
                <td>
                    <table width="100%" class="w3-container w3-text-teal">
                        <form action="/{{$profile->id}}/update" method="POST">
                            {{ csrf_field() }}
                            <tr>
                                <td class="w3-padding-16">
                                    <label>NPM</label><br>
                                <input name="npm" type="text"value="{{$profile->npm}}" class="w3-input w3-border w3-round-medium">
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <label>Nama Lengkap</label><br>
                                    <input name="nama" type="text" value="{{$profile->nama}}" class="w3-input w3-border w3-round-medium">
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <label>Tempat Lahir</label><br>
                                    <input name="tempat_lahir" type="text" value="{{$profile->tempat_lahir}}" class="w3-input w3-border w3-round-medium">
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <label>Tanggal Lahir</label><br>
                                    <input name="tanggal_lahir" type="date" value="{{$profile->tanggal_lahir}}" class="w3-input w3-border w3-round-medium">
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <label>Gender</label><br>
                                    <select name="jenis_kelamin" class="w3-input w3-border w3-round-medium">
                                        <option value="Laki-laki" @if($profile->jenis_kelamin == 'Laki-laki')selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($profile->jenis_kelamin == 'Perempuan')selected @endif>Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <label>Agama</label><br>
                                    <input name="agama" type="text" value="{{$profile->agama}}" class="w3-input w3-border w3-round-medium">
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <label>Alamat</label><br>
                                    <textarea name="alamat" class="w3-input w3-border w3-round-medium" id="alamat" rows="5" style="resize:none;" class="w3-input w3-border w3-round-medium">{{$profile->alamat}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <label>No. Ponsel</label><br>
                                    <input name="ponsel" type="text" value="{{$profile->ponsel}}" class="w3-input w3-border w3-round-medium">
                                </td>
                            </tr>
                            <tr>
                                <td class="w3-padding-16">
                                    <button type="submit" class="w3-button w3-yellow w3-large w3-round-medium">Update</button>&nbsp;
                                    <a href="/profile" class="w3-button w3-round-medium w3-red w3-large">Batal</a>
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
