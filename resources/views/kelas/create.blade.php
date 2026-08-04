<h1>Tambah Data Kelas</h1>

<form action="{{ route('kelas.store') }}" method="POST">
    @csrf

    <label>Nama Kelas</label>
    <br>

    <input type="text" name="nama_kelas">

    <br><br>

    <button type="submit">Simpan</button>
</form>
