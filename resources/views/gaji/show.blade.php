<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Show Gaji</legend>
        Nip : <b>{{ $gaji->nip }}</b><br>
        Nama : <b>{{ $gaji->nama }}</b><br>
        Agama : <b>{{ $gaji->agama }}</b><br>
        Jenis Kelamin : <b>{{ $gaji->jenis_kelamin }}</b><br>
        Alamat : <b>{{ $gaji->alamat }}</b><br>
        Jabatan : <b>{{ $gaji->jabatan }}</b><br>
        @if($gaji->jabatan=="Manager")
        @php $uang = 5000000 @endphp

        @elseif($gaji->jabatan=="Sekretaris")
        @php $uang = 3500000 @endphp

        @else
        @php $uang = 2500000 @endphp

        @endif

        Jam Kerja : <b>{{ $gaji->jam_kerja }}</b><br>

        @if($gaji->jam_kerja>=250)
        @php $a = $uang*10/100 @endphp

        @elseif($gaji->jam_kerja>=200)
        @php $a = $uang*7.5/100 @endphp

        @elseif($gaji->jam_kerja>=150)
        @php $a = $uang*5/100 @endphp


        @endif
        Gaji Jabatan : <b>{{ $uang }}</b><br>
        Gaji Jam Kerja : <b>{{ $a }}</b><br>
        Total Gaji : <b>{{$uang+$a}}</b>
    </fieldset>
</body>
</html>
