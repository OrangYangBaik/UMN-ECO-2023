<th></th><th></th><th></th><h1 class="text-center">Data Registrasi DOWNPOUR</h1>
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
        <th>Activity Booth 1</th>
        <th>Activity Booth 2</th>
        <th>Activity Booth 3</th>
        <th>Activity Booth 4</th>
        <th>Activity Booth Additional</th>
        <th>Absensi Seminar</th>
        <th>Waktu Daftar</th>
    </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
            @if($item->activity_booth_1 !== null || $item->seminar_ticket !== null)
				<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->student_id }}</td>
				<td>{{ $item->username_student_email }}</td>
				<td>{{ $item->major }}</td>
				<td>{{ $item->generation }}</td>
				<td>{{ $item->instagram_username }}</td>
				<td>{{ $item->line_id }}</td>
				<td>{{ $item->telephone }}</td>
				@if($item->activity_booth_1 === null) <td style="background-color: #000000; color: #ffffff"> Tidak Terdaftar </td> @else @if($item->activity_booth_1 == 0) <td style="background-color: #ff0000;">Belum Mengerjakan</td> @else <td style="background-color: #6cc070;">Lolos (Sudah mengerjakan)</td> @endif @endif
				@if($item->activity_booth_2 === null) <td style="background-color: #000000; color: #ffffff"> Tidak Terdaftar </td> @else @if($item->activity_booth_2 == 0) <td style="background-color: #ff0000;">Belum Mengerjakan</td> @else <td style="background-color: #6cc070;">Lolos (Sudah mengerjakan)</td> @endif @endif
				@if($item->activity_booth_3 === null) <td style="background-color: #000000; color: #ffffff"> Tidak Terdaftar </td> @else @if($item->activity_booth_3 == 0) <td style="background-color: #ff0000;">Belum Mengerjakan</td> @else <td style="background-color: #6cc070;">Lolos (Sudah mengerjakan)</td> @endif @endif
				@if($item->activity_booth_4 === null) <td style="background-color: #000000; color: #ffffff"> Tidak Terdaftar </td> @else @if($item->activity_booth_4 == 0) <td style="background-color: #ff0000;">Belum Mengerjakan</td> @else <td style="background-color: #6cc070;">Lolos (Sudah mengerjakan)</td> @endif @endif
				@if($item->activity_booth_additional === null) <td style="background-color: #000000; color: #ffffff">Belum Mengerjakan</td> @else <td style="background-color: #6cc070;">{{ $item->activity_booth_additional }} </td>@endif
				@if($item->seminar_ticket === null) <td style="background-color: #000000; color: #ffffff"> Tidak Terdaftar </td> @else @if($item->seminar_ticket == 0) <td style="background-color: #ff0000;">Tidak Menghadiri Seminar</td> @else <td style="background-color: #6cc070;">Lolos (Hadir Seminar)</td> @endif @endif
				<td>{{ $item->created_at }}</td>
				</tr>
			@endif
        @endforeach
    </tbody>
</table>