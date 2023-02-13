@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-id-card'></i> Profil Bilgilerim
                    </h1>
                </div>
                <div id="panel-1" class="panel col-12">

                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <form class="pt-3">
                                    <div class="form-row ">
                                        <div class="position-absolute pos-top pos-right col-4 pt-4">
                                            <img src="img/demo/avatars/avatar-admin-lg.png"
                                                 class="rounded-circle shadow-2 img-thumbnail" alt="">
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
                                    <div class="d-flex justify-content-end pt-2">
                                        <a type="button" href="{{route('profileA.edit',auth()->id())}}" class="btn btn-primary btn-pills waves-effect waves-themed">Güncelle</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
