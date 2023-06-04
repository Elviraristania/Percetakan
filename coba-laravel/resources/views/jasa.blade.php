
@extends('layouts.main')

@section('container')
    <article class="mb-10">
        <h1>Pilih Jasa</h1>
    </article>
    <br>
    <br>
        <div class="container-fluid">
            <div class="row">
                @foreach ($jasa as $item)
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Kartunama.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">{{$item->jenis_jasa}}</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">3,5 x 2 inci</option>
                        <option value="2">9 x 5,5 cm</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                </div>
                @endforeach
                {{-- <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Kartunama.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Kartu nama</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">3,5 x 2 inci</option>
                        <option value="2">9 x 5,5 cm</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                      </div>
                </div> --}}
                {{-- <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Amplop.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Amplop</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">4,7 x 4,7 inci</option>
                        <option value="2">3,1 x 3,1 inci</option>
                        <option value="3">1,8 x 4,2 inci</option>
                        <option value="4">11,4 x 8,4 inci</option>
                        <option value="5">5,4 x 7,4 inci</option>
                        <option value="6">4,4 x 6,3 inci</option>
                        <option value="7">4,3 x 8,6 inci</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Undangan.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Undangan</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">Custom</option>
                        <option value="2">Standar</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Poster.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Poster</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">Custom</option>
                        <option value="2">Standar</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Kalender.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Kalender</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">Custom</option>
                        <option value="2">Standar</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Stiker.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Stiker</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">Custom</option>
                        <option value="2">Standar</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Spanduk.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Spanduk</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">Custom</option>
                        <option value="2">Standar</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <img src="img/Paperbag.png" alt="1" style="width:100%; height:50%;" class="img-thumbnail"/>
                    <br>
                    <br>
                    <h5 class="card-title" align="center">Paperbag</h5>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Ukuran</option>
                        <option value="1">Custom</option>
                        <option value="2">Standar</option>
                    </select>
                    <br>
                    <br>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Catatan Pesanan</label>
                      </div>
                </div> --}}
            </div>
    </div>
@endsection
