@extends('layouts.main')


@section('content')
    <div id="js-page-content" role="main" class="page-content">
        <div class="page-content">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="subheader">
                        <h1 class="subheader-title">
                            <i class='subheader-icon fal fa-edit'></i>  RAM Güncelleme
                        </h1>
                    </div>
                    <div id="panel-1" class="panel col-12">
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Uygun bir tür özelliği kullandığınızdan emin olun

                            </div>


                            <form action="{{ route('admin.ram.update', $ram->id) }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label class="form-label">Isim</label>
                                    <input value="{{ $ram->name }}" name="name" type="text" class="form-control">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Transfer rate</label>
                                    <input value="{{ $ram->transfer_rate }}" name="transfer_rate" type="text" class="form-control">
                                    @error('transfer_rate')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Clock Speed</label>
                                    <input value="{{ $ram->clock_speed }}" name="clock_speed" type="text" class="form-control">
                                    @error('clock_speed')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Bus Speed</label>
                                    <input value="{{ $ram->bus_speed }}" name="bus_speed" type="text" class="form-control">
                                    @error('bus_speed')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mt-3">Guncelle</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


