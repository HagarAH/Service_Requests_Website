@extends('layouts.main')


@section('content')
    <div class="page-content">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-plus-square'></i> Kullanıcı Talebi Güncelleme
                    </h1>
                </div>

                <div id="panel-1" class="panel col-12">
                    <div class="panel-container show">
                        <div class="panel-content">
                            <form action="{{route('Post.update', $post->id)}}"
                                  method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="panel-content" data-select2-id="36">
                                    <div class="panel-tag">
                                        Lütfen talebinizi doğru bir şekilde girdiğinizden emin olunuz.
                                    </div>
                                    <div class="form-group" data-select2-id="100">

                                        <label class="form-label" for="single-default">
                                            Sorun Tipi:
                                        </label>
                                        <select required name="category_id" class="select2 form-control w-100 select2-hidden-accessible" id="single-default" data-select2-id="single-default" tabindex="-1" aria-hidden="true">
                                            <optgroup data-select2-id="101">
                                                @foreach($categories as $category)
                                                    <option {{ $post->category_id == $category->id ? 'selected' : '' }}
                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 551.4px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-single-default-container"><span class="select2-selection_rendered" id="select2-single-default-container" role="textbox" aria-readonly="true" ></span><span class="select2-selection_arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                        <div class="form-group mt-2" >
                                            <label class="form-label" for="example-textarea">Açıklama: </label>
                                            <textarea name="description" class="form-control" id="example-textarea" rows="5" required>{{ $post->description }}</textarea>
                                        </div>

                                    </div>



                                    <button class="btn btn-primary waves-effect waves-themed" type="submit">Submit form</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>




@endsection
