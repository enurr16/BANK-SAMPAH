<h1>Halaman Data Kelas</h1>

<table border="1" cellpadding="10">
    <a href="{{ route('kelas.create') }}">Tambah Data</a>
    <tr>
        <th>ID</th>
        <th>Nama Kelas</th>
    </tr>

    @foreach ($kelas as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_kelas }}</td>
        </tr>
    @endforeach
</table>
