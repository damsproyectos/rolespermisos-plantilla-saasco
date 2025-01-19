@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">



                {{-- @extends('dashboard.master')
                @section('content') --}}
                    <h1>{{ $post->title }}</h1>

                    <div class="mb-3">
                        <span>{{ $post->posted }}</span>
                    </div>

                    <div class="mb-3">
                        <span>{{ $post->category->title }}</span>
                    </div>

                    <div class="mb-3">
                        {{ $post->description }}
                    </div>

                    <div class="mb-3">
                        {{ $post->content }}
                    </div>

                    <div class="mb-3">
                        <img src="/uploads/posts/{{ $post->image }}" style="width:250px" alt="{{ $post->title }}">
                        {{ $post->image }}
                    </div>
                {{-- @endsection --}}




            </div> <!--END row-->
        </div> <!---END container-fluid-->
    </div> <!--  END content-body -->
@endsection
