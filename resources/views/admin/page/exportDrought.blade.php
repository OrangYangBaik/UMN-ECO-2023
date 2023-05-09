<th></th><th></th><th></th><h1 class="text-center">Data Registrasi DROUGHT</h1>
<?php $i = 1;?>
<table height="100px" id="example" class="table table-striped table-bordered" style="width:100%" >
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Lengkap</th>
        <th>NIM</th>
        <th>Email Student</th>
        <th>Jurusan</th>
        <th>Angkatan</th>
        <th>Username Instagram</th>
        <td>ID Line</td>
        <td>Nomor Telepon</td>
        <th>TOLONG RAWAT TEMAN MARU!</th>
        <th>AKSI HEMAT AIR</th>
        <th>MARU DAN AIR SERBA GUNA</th>
        <th>PANDEMI ? BIJAK AIR!</th>
        <th>TANAM TEMAN MARU (TTM)</th>
        <th>KISAHKU MENGHADAPI KEKERINGAN</th>
        <th>TANAMAN BERMICIN</th>
        <th>MENILIK ISU KEKERINGAN NUSANTARA</th>
        <th>CUCI, HEMAT, CERMAT</th>
        <th>Waktu Daftar</th>
    </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->jurusan }}</td>
            <td>{{ $item->angkatan }}</td>
            <td>{{ $item->username_instagram }}</td>
            <td>{{ $item->id_line }}</td>
            <td>{{ $item->telephone }}</td>
            <td>@if($item->bingo_1 == "0") - @else {{ $item->bingo_1 }} @endif</td>
            <td>@if($item->bingo_2 == "0") - @else {{ $item->bingo_2 }} @endif</td>
            <td>@if($item->bingo_3 == "0") - @else {{ $item->bingo_3 }} @endif</td>
            <td>@if($item->bingo_4 == "0") - @else {{ $item->bingo_4 }} @endif</td>
            <td>@if($item->bingo_5 == "0") - @else {{ $item->bingo_5 }} @endif</td>
            <td>@if($item->bingo_6 == "0") - @else {{ $item->bingo_6 }} @endif</td>
            <td>@if($item->bingo_7 == "0") - @else {{ $item->bingo_7 }} @endif</td>
            <td>@if($item->bingo_8 == "0") - @else {{ $item->bingo_8 }} @endif</td>
            <td>@if($item->bingo_9 == "0") - @else {{ $item->bingo_9 }} @endif</td>
            <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>