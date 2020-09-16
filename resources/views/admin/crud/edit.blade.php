@extends('admin.layout')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Edit Makanan
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="post" action="{{ route('admin.update',$admin->id_makanan) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_makanan">Nama Makanan</label> <input type="text" name="nama_makanan"
                                class="form-control" id="nama_makanan" aria-describedby="title" placeholder=""
                                value="{{ $admin->nama_makanan }}">
                        </div>
                        <div class="form-group">
                            <label for="rincian_makanan">Rincian</label> <input type="text" name="rincian_makanan"
                                class="form-control" id="rincian_makanan" aria-describedby="writer" placeholder=""
                                value="{{ $admin->rincian_makanan }}">
                        </div>
                        <div class="form-group">
                            <label for="harga_makanan">harga</label> <input type="text" name="harga_makanan"
                                class="form-control" id="publisher" aria-describedby="publisher" placeholder=""
                                value="{{ $admin->harga_makanan }}">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label> <input type="text" name="stok" class="form-control"
                                id="publisher" aria-describedby="publisher" placeholder=""
                                value="{{ $admin->stok }}">
                        </div>

                        <div class="form-group">
                            <div class="card mb-3" style="">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img class="" src="{{ asset('storage/' . $admin->gambar_makanan) }}" alt="{{ $admin->nama_makanan }}"
                                            width="250">
                                    </div>
                                    <div class="col-md-7 ml-5">
                                        <div class="card-body">
                                            <div class="custom-file">
                                                <input type="file" name="gambar_makanan" class="custom-file-input" id="gambar_makanan">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                        <a class="btn btn-primary float-right mr-2" href="{{  route('admin.index') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
