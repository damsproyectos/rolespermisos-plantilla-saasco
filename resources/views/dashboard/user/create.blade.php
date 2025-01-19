@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">



                {{-- @extends('dashboard.master')
                @section('content') --}}
                    @include('dashboard.fragment._errors-form')

                <form action="{{ route('user.store') }}" method="post">
                        @include('dashboard.user._form')
                </form>
                {{-- @endsection --}}




            </div> <!--END row-->
        </div> <!---END container-fluid-->
    </div> <!--  END content-body -->
@endsection
