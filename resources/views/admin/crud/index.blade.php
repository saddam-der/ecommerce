@extends('admin.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">        
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('admin.create') }}">Tambah Makanan</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
   
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Makanan</th>
            <th>Rincian</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($makanan as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama_makanan }}</td>
            <td>{{ $item->rincian_makanan }}</td>
            <td>{{ $item->harga_makanan }}</td>
            <td>{{ $item->stok }}</td>
            <td class="text-center"><img width="150px" src="{{ asset('storage/' . $item->gambar_makanan) }}"></td>
            <td class="text-center">
                <form action="{{ route('admin.destroy',$item->id_makanan) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('admin.show',$item->id_makanan) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('admin.edit',$item->id_makanan) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection