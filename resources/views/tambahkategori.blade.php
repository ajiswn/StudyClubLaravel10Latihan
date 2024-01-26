<h2 style="text-align: center;">Tambah Kategori</h2>

<form action="{{ route('kategori.store') }}" method="POST">
    @csrf

    <div>
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori"> 
    </div>

    <label for="deskripsi">Deskripsi</label>
    <div>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
    </div>

    <input type="submit" value="Buat Kategori">
</form>