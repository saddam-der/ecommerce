<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Keranjang</title>
</head>

<body >
    @include('parsial.header')
    <div class="container my-5 pb-5">
        <div class="row">
            <!-- /.col-lg-3 -->
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-borderless" style="width:100%">
                        <thead class="bg-info">
                            <tr class="text-center">
                                <th class="text-left" style="width: 200px" scope="col">Barang</th>
                                <th style="width: 50px" scope="col">Harga</th>
                                <th style="width: 120px" scope="col">Jumlah</th>
                                <th style="width: 20px" scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody><hr>
                            @foreach ($psn as $qwe)
                                @if(Auth::user()->id == $qwe->id_user && $qwe->status == "belum" )
                                    @foreach ($dn as $item)
                                    <tr class="text-center">
                                        <th class="text-left" scope="row">{{  $item->nama_makanan }}</th>
                                        <td>{{  $item->harga_makanan }}</td>
                                        <td>{{  $item->jumlah }}</td>
                                        <td>{{  $item->subtotal }}</td>
                                    </tr>
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                    </table><hr>
                    <button type="button" name="" id="" class="btn btn-primary float-right mr-5 " btn-lg btn-block">Bayar</button>
                </div>
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="container-fluid py-5" style="background-color:#f1f1f1">
        <div class="row text-center">
            <div class="col-12"> &copy; DMARE</div>
        </div>
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script>

    </script>
</body>

</html>
