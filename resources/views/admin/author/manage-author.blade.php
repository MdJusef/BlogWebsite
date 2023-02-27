@extends('admin.master')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Author List</h1>
        <br><br>
{{--        <ol class="breadcrumb mb-4">--}}
{{--            <li class="breadcrumb-item"><a href="index.html">Author List</a></li>--}}
{{--            <li class="breadcrumb-item active">Tables</li>--}}
{{--        </ol>--}}
{{--        <div class="card mb-4">--}}
{{--            <div class="card-body">--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Author List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>Sl Number</th>
                        <th>Author Name</th>
                        <th>Bio Data</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Sl Number</th>
                        <th>Author Name</th>
                        <th>Bio Data</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @php $i=1 @endphp
                    @foreach($authors as $author)
                    <tr class="text-center">
                        <td>{{ $i++ }}</td>
                        <td>{{ $author->author_name }}</td>
                        <td>{{ $author->bio_data }}</td>
                        <td>
                            <img  src="{{ $author->image }}" alt="img" style="height: 50px;width: 80px">
                        </td>
                        <td>
                            <a href="{{ route('edit-author',['id'=>$author->id]) }}" class="btn btn-outline-primary">Edit</a>
                            <form action="{{ route('delete-author') }}" method="post">
                                @csrf
                                <input type="hidden" name="author_id" value="{{ $author->id }}" >
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure !!')">

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
