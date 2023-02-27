@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Author</h3></div>
                    <div class="card-body">
                        <form action="{{ route('update-author') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="author_id" value="{{ $author->id }}" >
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" value="{{ $author->author_name }}" id="" name="author_name" type="text" placeholder="Input Author Name">
                                        <label for="inputEmail">Author Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control"   id="" name="bio_data" type="text"> {{ $author->bio_data }}</textarea>
                                        <label for="inputEmail">Author Bio data</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <img src="{{ asset($author->image) }}" alt="" style="height: 80px;width: 80px">
                                        <input type="file" name="image" class="">
                                    </div>
                                </div>
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





