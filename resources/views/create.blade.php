@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create post!
                </div>
                <div class="card-body">
                    <form action="createPost" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" id="Title"  placeholder="Enter title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Text posts</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body" maxlength="150"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="Author">Author</label>
                                <input type="text" class="form-control" id="Author"  placeholder="Enter author" name="author">
                            </div>
                        <button type="submit" class="btn btn-primary" name="create-post">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection