@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">



                {{-- @extends('dashboard.master')
                @section('content') --}}
                    <h1>{{ $user->name }}</h1>

                    <x-dashboard.user.role.permission.manage :user='$user'/>
                {{-- @endsection --}}



            </div> <!--END row-->
        </div> <!---END container-fluid-->
    </div> <!--  END content-body -->
@endsection
