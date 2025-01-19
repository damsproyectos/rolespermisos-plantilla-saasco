@extends('dashboard.master')
@section('admin')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">





            {{-- @extends('dashboard.master')
            @section('content') --}}
            <div class="text-end mt-3">
                {{-- @can('editor.user.create') --}}
                    <a class="btn btn-primary my-3" href="{{ route('user.create') }}" target="blank">Create</a>
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
                                Email
                            </th>
                            <th>
                                Role
                            </th>
                            <th>
                                Options
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                            <tr>
                                <td>
                                    {{ $u->id }}
                                </td>
                                <td>
                                    {{ $u->name }}
                                </td>
                                <td>
                                    {{ $u->email }}
                                </td>
                                <td>
                                    {{ $u->rol }}
                                </td>
                                <td>
                                    {{-- @can('editor.user.show') --}}
                                        <a class="btn btn-success mt-2" href="{{ route('user.show', $u) }}">Show</a>
                                    {{-- @endcan --}}

                                    {{-- @can('editor.user.update') --}}
                                        <a class="btn btn-success mt-2" href="{{ route('user.edit', $u) }}">Edit</a>
                                    {{-- @endcan --}}

                                        <form action="{{ route('user.destroy', $u) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            {{-- @can('editor.user.destroy') --}}
                                                <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                            {{-- @endcan --}}
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2"></div>
                {{ $users->links() }}
            {{-- @endsection --}}




        </div> <!--END row-->
    </div> <!---END container-fluid-->
</div> <!--  END content-body -->
@endsection
