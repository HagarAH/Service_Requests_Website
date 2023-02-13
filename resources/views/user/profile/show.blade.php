@extends('layouts.main')


@section('content')
    <div class="page-content">

        <div class="d-flex justify-content-center">
            <div class="col-xl-7">
                <div id="panel-1" class="panel">
                    <div class="panel-container show">
                        <div class="panel-content">
                            <form class="pt-3">
                                <div class="form-row ">
                                    <div class="position-absolute pos-top pos-right col-4 pt-4">
                                        <div class="d-flex justify-content-center my-3">
                                            <div
                                                class="profile-photo rounded-circle d-flex align-items-center justify-content-center">
                                                <p class="text-center">{{ substr($profile->fname, 0, 1) }}{{ substr($profile->lname, 0, 1) }}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="form-label">Eposta</label>
                                        <input type="email" class="form-control form-control-range rounded-pill"
                                               readonly=" " id="inputEmail4" value="{{auth()->user()->email}}">

                                    </div>
                                </div>
                                <div class="form-row pt-3">
                                    <div class="form-group col-md-4">
                                        <label class="form-label " for="simpleinput">Kullanıcı Adı</label>
                                        <input type="text" id="simpleinput"
                                               readonly=" " value="{{auth()->user()->name}}"
                                               class="form-control form-control-range rounded-pill">
                                    </div>
                                </div>
                                <div>
                                    <p><i class="text-white">....</i></p>
                                </div>
                                <hr class="border-faded mb-4">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="form-label " for="simpleinput">Ad</label>
                                        <input type="text" id="simpleinput"
                                               readonly=" " value="{{$profile->fname}}"
                                               class="form-control form-control-range rounded-pill">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4" class="form-label">Soyad</label>
                                        <input class="form-control form-control-range rounded-pill"
                                               readonly=" " id="inputPassword4" value="{{$profile->lname}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="form-label">Telefon</label>
                                        <input class="form-control form-control-range rounded-pill"
                                               readonly=" " id="inputPassword4" value="{{$profile->phone}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label class="form-label pt-4" for="example-select">Müdürlük</label>
                                        <input class="form-control form-control-range rounded-pill"
                                               readonly=" " value="{{$profile->daire->mudurluk->name}}">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="form-label pt-4" for="example-select">Daire</label>
                                        <input class="form-control form-control-range rounded-pill"
                                               readonly=" " value="{{$profile->daire->name}}">
                                    </div>
                                </div>

                                </hr>
                                <div class="d-flex justify-content-end pt-2">
                                    <a type="button" href="{{ route('profile.edit', $profile->id) }}"
                                       class="btn btn-primary btn-pills waves-effect waves-themed">Düzenle</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


