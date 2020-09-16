<div class="row">

    @foreach ($pgn as $item)
    @if($item->stok > 0)
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" width="100px" height="200px"
                    src="{{ asset('storage/' . $item->gambar_makanan) }}" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="#" data-toggle="modal"
                        data-target="#view_{{$item->id_makanan}}">{{ $item->nama_makanan }}</a>
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


    <!-- Modal -->
    <div class="modal fade" id="view_{{$item->id_makanan}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pesan Berapa {{ $item->nama_makanan }} ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @if(auth()->user())
                <div class="modal-body">
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <div class="form-group">

                            @foreach ($psn as $qwe)
                            @if($qwe->status == "belum" && $qwe->id_user == Auth::user()->id )
                            <input type="hidden" name="id_pesanan" id="" value="{{ $qwe->id_pesanan }}">{{ $qwe->id_pesanan }}
                            @endif
                            @endforeach
                            <input type="hidden" name="id_makanan" id="" value="{{ $item->id_makanan }}">
                            <input type="hidden" name="nama_makanan" id="" value="{{ $item->nama_makanan }}">
                            <input type="hidden" name="harga_makanan" id="" value="{{ $item->harga_makanan }}">
                            <input type="number" class="form-control" name="jumlah_makanan" id=""
                                aria-describedby="helpId" placeholder="" />
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                </div> --}}
                @endif

                @if(auth()->guest())
                <div class="modal-body">
                    Login Untuk memesan
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach


</div>
<!-- /.row -->
{{ $pgn->links() }}
