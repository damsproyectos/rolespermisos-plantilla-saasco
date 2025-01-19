@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">





            {{-- @extends('dashboard.master')
            @section('content') --}}
                <h1>{{ $role->name }}</h1>
                <x-dashboard.role.permission.manage :role="$role" />
            {{-- @endsection --}}




        </div> <!--END row-->
    </div> <!---END container-fluid-->
</div> <!--  END content-body -->
@endsection
