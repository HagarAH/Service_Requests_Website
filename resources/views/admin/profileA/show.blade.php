@extends('layouts.profileframe')


@section('procontent')


                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <form class="pt-3">
                                    <div class="form-row ">
                                        <div class="position-absolute pos-right pr-2  sm:rounded-lg">
                                            <div class="d-flex justify-content-center my-n1">
                                                <div
                                                    class="profile-photo rounded-circle d-flex align-items-center justify-content-center">
                                                    <p class="text-center">{{ substr(';', 0, 1) }}{{ substr('D)', 0, 1) }}</p>
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
                                    <div class="d-flex justify-content-end pt-6">
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
