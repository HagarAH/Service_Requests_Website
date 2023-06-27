@extends('layouts.profileedit')


@section('proocontent')

                    <div class="panel-container show">
                        <div class="panel-content">

                            <form class="pt-3"
                                  action="{{route('profile.update')}}"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="max-w-7xl mx-auto pb-5 px-4 sm:px-6 ">
                                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                        Profil Bilgisi
                                    </h2>
                                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                        Profil hesap bilgilerinizin güncel kaldığından emin olun.
                                    </p>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-3">
                                        <label class="form-label ">Kullanıcı Adı</label>
                                        <input type="text" name="name"
                                               value="{{auth()->user()->name}}"
                                               class="form-control form-control-range rounded-pill">
                                    </div>
                                    <div class="form-group col-lg-8 ">
                                        <label class="form-label">Eposta</label>
                                        <input type="email" class="form-control form-control-range rounded-pill"
                                               name="email" value="{{auth()->user()->email}}">

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label class="form-label " for="simpleinput">Ad</label>
                                        <input type="text" id="simpleinput" name="fname"
                                               value="{{$profile->fname}}"
                                               class="form-control form-control-range rounded-pill" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4" class="form-label">Soyad</label>
                                        <input name="lname" class="form-control form-control-range rounded-pill"
                                               id="inputPassword4" value="{{ old('lname', $profile->lname) }}" required>
                                    </div>
                                    <div class="position-absolute pos-right pr-6  sm:rounded-lg">
                                        <div class="d-flex justify-content-center my-3">
                                            <div
                                                class="profile-photo rounded-circle d-flex align-items-center justify-content-center">
                                                <p class="text-center">{{ substr($profile->fname, 0, 1) }}{{ substr($profile->lname, 0, 1) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4" class="form-label">Telefon</label>
                                        <input name="phone" class="form-control form-control-range rounded-pill"
                                               id="inputPassword4" value="{{$profile->phone}}" pattern="[0-9]{10}" title="9 haneli telefon numaranınızı yazınız Ör:5557878810929" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label class="form-label pt-4" for="example-select">Genel Mudurluk - Daire
                                            Baskanligi</label>
                                        <select name="daire_id" class="form-control form-control-range rounded-pill">
                                            @foreach($daires as $daire)
                                                <option
                                                    {{ $daire->id === $profile->daire_id ? 'selected' : ''}}
                                                    value="{{$daire->id}}">{{$daire->name}}
                                                    - {{ $daire->mudurluk->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                </hr>
                                <div class="d-flex justify-content-end pr-4 pt-2">
                                    <button type="submit"
                                            class="btn btn-primary btn-pills waves-effect waves-themed">Kaydet
                                    </button>

                                </div>
                            </form>
                            @if (session('status') === 'profile-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400 pos:right"
                                >{{ __('Kaydedildi.') }}</p>
                            @endif
                            <hr class="border-faded">

                            <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                                @csrf
                                @method('put')
                                <div class="max-w-xl">

                                    <div class="max-w-7xl mx-auto pb-5 px-4 sm:px-6 ">
                                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                            Şifre Güncelle
                                        </h2>
                                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                            Hesabınızın güvende kalması için uzun, rastgele bir parola kullandığından
                                            emin olun.
                                        </p>
                                    </div>

                                    <div class="form-group col-md-5 pl-2">
                                        <label for="current_password" class="form-label">Mevcut Şifre</label>
                                        <input id="current_password" name="current_password" type="password"
                                               class="form-control form-control-range rounded-pill "
                                        >
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')"
                                                       class="mt-2"/>
                                    </div>
                                    <div class="form-row pl-2">
                                        <div class="form-group col-md-5">
                                            <label for="password" class="form-label">Yeni Şifre</label>
                                            <input name="password" type="password"
                                                   class="form-control form-control-range rounded-pill"
                                                   id="password">
                                            <x-input-error :messages="$errors->updatePassword->get('password')"
                                                           class="mt-2"/>
                                        </div>

                                        <div class="form-group col-md-5">
                                            <label for="password_confirmation" class="form-label">Şifre Onayı</label>
                                            <input id="password_confirmation" name="password_confirmation"
                                                   type="password"
                                                   class="form-control form-control-range rounded-pill">
                                            <x-input-error
                                                :messages="$errors->updatePassword->get('password_confirmation')"
                                                class="mt-2"/>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end pr-4 pt-2">
                                        <button type="submit"
                                                class="btn btn-primary btn-pills waves-effect waves-themed">Kaydet
                                        </button>

                                    </div>
                                    @if (session('status') === 'password-updated')
                                        <p x-data="{ show: true }"
                                           x-show="show"
                                           x-transition
                                           x-init="setTimeout(() => show = false, 2000)"
                                           class="text-sm text-gray-600 dark:text-gray-400 pos:right"
                                        >{{ __('Kaydedildi.') }}</p>
                                    @endif
                                </div>
                            </form>


                        </div>
                    </div>



@endsection
