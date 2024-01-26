@extends('component.layout')

@section('body')
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='{{ route('mahasiswa.create')}}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-2">NIM</th>
                <th class="col-md-3">Nama</th>
                <th class="col-md-2">Kelas</th>
                <th class="col-md-2">Alamat</th>
                <th class="col-md-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;?>
            @foreach ($dataMhs as $data)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $data->nim}}</td>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->kelas}}</td>
                <td>{{ $data->alamat}}</td>
                <td>
                    <a href='{{ route('mahasiswa.edit',$data->id) }}' class="btn btn-warning btn-sm">Edit</a>

                    <form class="d-inline" action="{{ route('mahasiswa.destroy',$data->id) }}" method="POST">
                        @csrf @method('delete')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>  
            <?php $i++ ?> 
            @endforeach
        </tbody>
    </table>
</div>
<!-- AKHIR DATA -->
@endsection