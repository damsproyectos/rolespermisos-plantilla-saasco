@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">



                {{-- @extends('dashboard.master')
                @section('content') --}}
                <div class="text-end mt-3">
                {{-- @can('editor.role.create') --}}
                    <a class="btn btn-primary my-3" href="{{ route('role.create') }}" target="blank">Create</a>
                {{-- @endcan --}}
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
                        @foreach ($roles as $r)
                            <tr>
                                <td>
                                    {{ $r->id }}
                                </td>
                                <td>
                                    {{ $r->name }}
                                </td>
                                <td>
                                    {{-- @can('editor.role.show') --}}
                                        <a class="btn btn-success mt-2" href="{{ route('role.show',$r) }}">Show</a>
                                    {{-- @endcan --}}

                                    {{-- @can('editor.role.update') --}}
                                        <a class="btn btn-success mt-2" href="{{ route('role.edit',$r) }}">Edit</a>
                                    {{-- @endcan --}}

                                    <form action="{{ route('role.destroy', $r) }}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        {{-- @can('editor.role.destroy') --}}
                                            <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                        {{-- @endcan --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2"></div>
                {{ $roles->links() }}
                {{-- @endsection --}}




            </div> <!--END row-->
        </div> <!---END container-fluid-->
    </div> <!--  END content-body -->
@endsection
