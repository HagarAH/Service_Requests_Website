@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-plus-square'></i> Islerim Sistemi Ekleme
                    </h1>
                </div>
                <div id="panel-1" class="panel col-12">
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Be sure to use an appropriate type attribute
                            </div>


                            <form action="{{ route('admin.system.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Isim</label>
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Architecture</label>
                                    <input value="{{ old('architecture') }}" name="architecture" type="text" class="form-control">
                                    @error('architecture')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mt-3">Ekle</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


