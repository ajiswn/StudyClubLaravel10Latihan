<h2>Detail Kategori</h2>


<table>
    <tr>
        <td><b>Nama Kategori</b></td>
        <td>: {{$kategori->nama_kategori}}</td>
    </tr>
    <tr>
        <td><b>Keterangan</b></td>
        <td>: {{ $kategori->deskripsi }}</td>
    </tr>
</table>
<a href="{{ route('kategori.index')}}"><button>Kembali ke Index</button></a>
<a href="{{ route('kategori.edit',$kategori->id)}}"><button>Edit Kategori</button></a>
