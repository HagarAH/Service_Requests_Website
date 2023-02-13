@extends('layouts.table_pdf')

@section('title')
    Kullanıcı Talep
@endsection


@section('head')
    <tr>
        <th>ID</th>
        <th>Durum<i class="text-white">.............</i></th>

        <th>Kategori</th>
        <th>Açıklama</th>

        <th>Geri BIldirim</th>
        <th>Guncelle</th>
    </tr>
@endsection



@section('body')
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->status_id }}</td>

            <td>{{ $post->category->name }}</td>
            <td>{{ $post->description}}</td>

            <td>{{ $post->comment}}</td>

            <td class="d-flex align-items-center justify-content-center">
                @if($post->status_id == 1)
                    <a href="{{ route('Post.edit', $post->id) }}" class="mr-1">
                        <i class="fal fa-edit fa-lg"></i>
                    </a>
                    <form action="{{ route('Post.destroy',$post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-white p-0">
                            <i class="text-primary fal fa-trash-alt fa-lg"></i>
                        </button>
                    </form>


                @else
                    <a href="javascript:void(0);" class="disabled mr-1">
                        <i class="fal fa-edit fa-lg"></i>
                    </a>
                    <a href="javascript:void(0);" class="disabled">
                        <i class="fal fa-trash-alt fa-lg"></i>
                    </a>
                @endif

            </td>
        </tr>
    @endforeach
@endsection


