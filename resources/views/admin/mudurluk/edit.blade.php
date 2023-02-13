@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-edit'></i> Müdürlük Güncelleme
                    </h1>
                </div>
                <div id="panel-1" class="panel col-12">
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Uygun bir tür özelliği kullandığınızdan emin olun

                            </div>


                            <form action="{{ route('admin.mudurluk.update', $mudurluk->id) }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label class="form-label">Isim</label>
                                    <input value="{{ $mudurluk->name }}" name="name" type="text" class="form-control">
                                    @error('name')
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


