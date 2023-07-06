@extends('layouts.app')
@section('content')
    <div class="container">
    <h1>Add Post</h1>
        <section class="mt-3">
            <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Error message when data is not inputted -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card p-3">
                        <label for="floatingInput">Title</label>
                        <input class="form-control" type="text" name="title">
                        <label for="floatingTextArea">Description</label>
                        <textarea class="form-control" name="description" id="floatingTextarea" cols="30" rows="10"></textarea>
                        <label for="formFile" class="form-label">Add Image</label>
                        <img src="" alt="" class="img-blog">
                        <input class="form-control" type="file" name="image">
                </div>
                <button class="btn btn-secondary m-3">Save</button>
            </form>
        </section>
    
    </div>
@endsection