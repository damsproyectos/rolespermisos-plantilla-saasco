@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">





                {{-- @extends('dashboard.master')
                @section('content') --}}
                    <div class="text-end mt-3">
                        @can('editor.permission.create')
                            <a class="btn btn-primary my-3" href="{{ route('permission.create') }}" target="blank">Create</a>
                        @endcan
                    </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Options
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($permissions as $p)
                            <tr>
                                <td>
                                    {{ $p->id }}
                                </td>
                                <td>
                                    {{ $p->name }}
                                </td>
                                <td>
                                    @can('editor.permission.show')
                                        <a class="btn btn-success mt-2" href="{{ route('permission.show',$p) }}">Show</a>
                                    @endcan

                                    @can('editor.permission.update')
                                        <a class="btn btn-success mt-2" href="{{ route('permission.edit',$p) }}">Edit</a>
                                    @endcan

                                    <form action="{{ route('permission.destroy', $p) }}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        @can('editor.permission.destroy')
                                            <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2"></div>
                {{ $permissions->links() }}
                {{-- @endsection --}}




            </div> <!--END row-->
        </div> <!---END container-fluid-->
    </div> <!--  END content-body -->
@endsection

