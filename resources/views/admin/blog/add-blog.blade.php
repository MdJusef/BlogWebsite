@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Blog</h3></div>
                    <div class="card-body">
                        <form action="{{ route('new-blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="category_id" id="">

                                            <option value="">Select a Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <select class="form-control" name="author_id" id="">
                                            <option value="">Select a Author</option>
                                            @foreach($authors as $author)
                                                <option value="{{ $category->author_id }}">{{ $author->author_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" name="title" type="text" placeholder="Enter Brand name" />
                                        <label for="inputLastName">Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="slug" type="text" placeholder="Input Price" />
                                <label for="inputEmail">slug</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="editor" name="description" type="text" placeholder="Input Description"> </textarea>
                                <label for="inputEmail">Description</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="image" type="file" placeholder="Image" />
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="date" type="date" placeholder=""> </input>
                                <label for="inputEmail">Date</label>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <input type="submit" value="submit" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


