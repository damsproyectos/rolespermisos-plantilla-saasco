@extends('dashboard.master')

@section('content')

    @can('editor.post.create')
        <a class="btn btn-primary my-3" href="{{ route('post.create') }}" target="blank">Create</a>
    @endcan
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
                    Posted
                </th>
                <th>
                    Category
                </th>
                <th>
                    Options
                </th>
            </tr>

        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{ $p->id }}
                    </td>
                    <td>
                        {{ $p->title }}
                    </td>
                    <td>
                        {{ $p->posted }}
                    </td>
                    <td>
                        {{ $p->category->title }}
                    </td>
                    <td>
                        @can('editor.post.show')
                            <a class="btn btn-success mt-2" href="{{ route('post.show',$p) }}">Show</a>
                        @endcan

                        @can('editor.post.update')
                            <a class="btn btn-success mt-2" href="{{ route('post.edit',$p) }}">Edit</a>
                        @endcan

                        <form action="{{ route('post.destroy', $p) }}" method="post">
                            @method('DELETE')
                            @csrf

                            @can('editor.post.destroy')
                                <button class="btn btn-danger mt-2" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            @endcan
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2"></div>
    {{ $posts->links() }}

@endsection
