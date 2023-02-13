@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-plus-square'></i> Disk Ekleme
                    </h1>
                </div>
                <div id="panel-1" class="panel col-12">
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Uygun bir tür özelliği kullandığınızdan emin olun
                            </div>

                            <form action="{{ route('admin.disk.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Isim</label>
                                    <input value="{{ old('name') }}" name="name" type="text" class="form-control">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kapasite</label>
                                    <input value="{{ old('capacity') }}" name="capacity" type="text" class="form-control">
                                    @error('capacity')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Okuma Hizi</label>
                                    <input value="{{ old('read_speed') }}" name="read_speed" type="text" class="form-control">
                                    @error('read_speed')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Yazma Hizi</label>
                                    <input value="{{ old('write_speed') }}" name="write_speed" type="text" class="form-control">
                                    @error('write_speed')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Teknoloji</label>
                                    <input value="{{ old('technology') }}" name="technology" type="text" class="form-control">
                                    @error('technology')
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
    </main>
@endsection


