<table>
    <thead>
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>No. Handphone</th>
        <th>Alamat</th>
        <th>Tingkat Keparahan</th>
        <th>Gejala</th>
        <th>Tanggal Konsultasi</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->no_hp }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->keparahan }}</td>
            <td>{{ $item->gejala }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
