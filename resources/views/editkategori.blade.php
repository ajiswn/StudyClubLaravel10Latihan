<h2 style="text-align: center;">Edit Kategori</h2>

<form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
    @csrf @method('put')

    <div>
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori }}"> 
    </div>

    <label for="deskripsi">Deskripsi</label>
    <div>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{ $kategori->deskripsi}}</textarea>
    </div>

    <input type="submit" value="Edit Kategori">
</form>