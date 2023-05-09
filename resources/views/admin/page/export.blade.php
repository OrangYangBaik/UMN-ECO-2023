<th></th><th></th><th></th><h1 class="text-center">HASIL RECRUITMENT {{ $title }}</h1>
<?php $i = 1;?>
<table height="100px" id="example" class="table table-striped table-bordered" style="width:100%" >
    <thead>
    <tr>
        <th>No.</th>
        <th>Nama Lengkap</th>
        <th>Team</th>
        <th>Subdivisi</th>
        <th>NIM</th>
        <th>Angkatan</th>
        <th>Jurusan</th>
        <th>Image</th>
        <th>Tempat, Tanggal Lahir</th>
        <th>Instagram</th>
        <td>ID Line</td>
        <td>Nomor Telepon</td>
        <th>Kelebihan</th>
        <th>Kekurangan</th>
        <th>Pengalaman Organisasi</th>
        <th>Apa itu UMN ECO?</th>
        <th>Kenapa daftar ke tim ini</th>
        <th>Paham dengan jobdesc?</th>
        <th>Pertanyaan 1</th>
        <th>Pertanyaan 2</th>
        <th>Pertanyaan 3</th>
        <th>Status Recruitment</th>
        <th>Waktu Daftar</th>
    </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $item->Name }}</td>
            <td>{{ $item->Team }}</td>
            <td>@if($item->Subdivisi) {{ $item->Subdivisi }} @else - @endif</td>
            <td>{{ $item->NIM }}</td>
            <td>{{ $item->Angkatan }}</td>
            <td>{{ $item->Jurusan }}</td>
            <td></td>
            <td>{{ $item->Tempat_lahir }}, {{ $item->Tanggal_lahir }}</td>
            <td>{{ $item->Instagram_account }}</td>
            <td>{{ $item->Line_id }}</td>
            <td>{{ $item->Phone_number }}</td>
            <td>{{ $item->Kelebihan }}</td>
            <td>{{ $item->Kekurangan }}</td>
            <td>{{ $item->Experience }}</td>
            <td>{{ $item->What }}</td>
            <td>{{ $item->Why }}</td>
            <td>{{ $item->Paham_jobdesc }}</td>
            <td>{{ $item->Question1 }}</td>
            <td>@if($item->Question2) {{ $item->Question2 }} @else - @endif</td>
            <td>@if($item->Question3) {{ $item->Question3 }} @else - @endif</td>
            <td>Wait</td>
            <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>