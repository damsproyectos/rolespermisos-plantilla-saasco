@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">



                {{-- @extends('dashboard.master')
                @section('content') --}}

                    @include('dashboard.fragment._errors-form')

                <form action="{{ route('post.update', $post->id) }}" method="post" enctype='multipart/form-data'>
                        @method('PATCH')
                        @include('dashboard.post._form', [ 'task'=>'edit' ])
                </form>
                {{-- @endsection --}}




            </div> <!--END row-->
        </div> <!---END container-fluid-->
    </div> <!--  END content-body -->
@endsection
