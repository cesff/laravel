<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Gaji</center>
    <table border="1" align="center">
         <thead>
            <tr><br>
                <th>Nip</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gaji as $uang)
                <tr>
                    <td>{{$uang->nip}}</td>
                    <td>{{$uang->nama}}</td>
                    <td>{{$uang->jenis_kelamin}}</td>
                    <td>{{$uang->jabatan}}</td>
                    <td><a href="/uang/{{ $uang->id }}">Lihat</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</table>
</body>
</html>
