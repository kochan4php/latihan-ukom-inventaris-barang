@extends('layouts.main')

@section('container')
    <div class="row" style="min-height: 100vh; display: flex; justify-content: center; align-items: center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Progam Menghitung Volume Air dalam Tabung</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="diameter" class="form-label">Diameter Tabung</label>
                            <input type="number" class="form-control" id="diameter" name="diameter">
                        </div>
                        <div class="mb-3">
                            <label for="tinggi" class="form-label">Tinggi</label>
                            <input type="number" class="form-control" name="tinggi" id="tinggi">
                        </div>
                        <button type="submit" id="jumlahkan" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                @if (isset($hasil))
                    <div class="card-footer">
                        <h3 class="text-center result">Hasil : {{ $hasil }}<span></span></h3>
                    </div>
                @else
                    <div class="card-footer">
                        <h3 class="text-center result">Hasil : 0<span></span></h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
