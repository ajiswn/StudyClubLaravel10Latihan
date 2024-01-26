<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
        
        *{
            font-family: "Poppins", sans-serif;
        }
        table td{
            padding: 10px;
        }
        table th  {
        background-color: rgba(0, 0, 0, 0.10);
        border : 2px solid rgba(0, 0, 0, 0.10);
        font-size: 14px;
        padding: 1rem;
        text-align: center;
        width: auto;
        font-weight: 500;
        }

        table td {
        font-size: 14px;
        font-weight: 350;       
        padding: 1rem;
        border : 2px solid rgba(0, 0, 0, 0.10);
        }

        table {
        border-style: none;
        border-collapse: collapse;
        margin-top: 1.25rem;
        }
        td button{
        border: none;
        color: black;
        padding: 0 1.13rem;
        border-radius: 8px;
        }
        .edit {
        background-color: #AEC6CF;
        }

        .hapus {
        background-color: #FFDAB9;
        }
        .detail {
        background-color: #B0E57C;
        }

        tbody tr:hover td{
        background-color: rgb(240, 240, 240);
        }

        tr:nth-child(even) td {
        background-color: rgb(250,250,250);
        }

        tr:nth-child(odd) td {
        background-color: rgb(255, 255, 255);
        }

        td button:hover {
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        }

        td + .nim{
            font-weight: 500;
        }

        td:last-child {
        text-align: center;
        }

        button:hover {
        cursor: pointer;
        }

    </style>
</head>
<body>
    <h2 style="text-align: center;">Daftar Kategori</h2>
<div>
    <a href="{{ route('kategori.create')}}"><button class="tambah">Tambah Kategori</button></a>
    <p></p>

    <table border="1" cellspacing="0" width="auto">
        <tr>
            <th>ID</th>
            <th>Nama Kategori</th>
            <th>Keterangan</th>
            <th colspan="3">Aksi</th>
        </tr>

        @foreach($kategori as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_kategori}}</td>
            <td>{{$data->deskripsi}}</td>
            <td>
                <a href="{{ route('kategori.show',$data->id) }}">
                    <button type="submit" class="detail">DETAIL</button>
                </a>
            </td>
            <td>
                <a href="{{ route('kategori.edit',$data->id) }}">
                    <button type="submit" class="edit">EDIT</button>
                </a>
            </td>
            <td>
                <form action="{{ route('kategori.destroy',$data->id) }}" method="post">
                    @csrf @method('delete')
                    <button type="submit" class="hapus">HAPUS</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>



