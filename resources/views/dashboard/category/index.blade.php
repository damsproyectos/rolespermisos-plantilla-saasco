@extends('dashboard.master')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">




            {{-- @extends('dashboard.master')
            @section('content') --}}
            <div class="text-end mt-3">
                {{-- @can('editor.category.create') --}}
                    <a class="btn btn-primary my-3" href="{{ route('category.create') }}" target="blank">Create</a>
                {{-- @endcan --}}
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                                Options
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($categories as $c)
                            <tr>
                                <td>
                                    {{ $c->id }}
                                </td>
                                <td>
                                    {{ $c->title }}
                                </td>
                                <td>
                                    {{-- @can('editor.category.show') --}}
                                    <a class="btn btn-success mt-2" href="{{ route('category.show', $c) }}">Show</a>
                                    {{-- @endcan --}}

                                    {{-- @can('editor.category.update') --}}
                                        <a class="btn btn-success mt-2" href="{{ route('category.edit', $c) }}">Edit</a>
                                    {{-- @endcan --}}

                                        <form action="{{ route('category.destroy', $c) }}" method="post">
                                            @method('DELETE')
                                            @csrf

                                            {{-- @can('editor.category.destroy') --}}
                                                <button class="btn btn-danger mt-2" type="submit">Delete</button>
                                            {{-- @endcan --}}
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-2"></div>
                {{ $categories->links() }}
            {{-- @endsection --}}



        </div> <!--END row-->
    </div> <!---END container-fluid-->
</div> <!--  END content-body -->
@endsection




