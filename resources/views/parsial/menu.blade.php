
    <div class="row">
        
        @foreach ($pgn as $item)
        @if($item->stok > 0)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <a href="#"><img class="card-img-top" width="100px" height="200px" src="{{ asset('storage/' . $item->gambar_makanan) }}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">{{ $item->nama_makanan }}</a>
                    </h4>
                    <h5>Rp.{{ $item->harga_makanan }}</h5>
                    <p class="card-text">{{ $item->rincian_makanan }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"> tesa</small>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <!-- /.row -->
    {{ $pgn->links() }}
