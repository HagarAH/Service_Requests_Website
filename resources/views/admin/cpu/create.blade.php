@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-plus-square'></i> Sorun Tipi Eklemek
                    </h1>
                </div>
                <div id="panel-1" class="panel col-12">

                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Uygun bir tür özelliği kullandığınızdan emin olun
                            </div>


                            <form action="{{ route('admin.cpu.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Isim</label>
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Clock</label>
                                    <input value="{{ old('clock') }}" name="clock" type="text" class="form-control">
                                    @error('clock')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Core</label>
                                    <input value="{{ old('core') }}" name="core" type="text" class="form-control">
                                    @error('core')
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


