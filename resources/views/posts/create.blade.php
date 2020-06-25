@extends('layouts.app')

@section('content')
    
    <div class="card card-default">
        <div class="card-header">
            Create Post
        </div>
 

    <div class="card-body">
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="from-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="from-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="from-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
            </div>

            <div class="from-group">
                <label for="published_at">Published At</label>
                <input type="text" name="published_at" id="published_at" class="form-control">
            </div>

            <div class="from-group">
                <label for="image">Published At</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="from-group mt-2">
                <button type="submit" class="btn btn-success">
                    Create Post
                </button>
            </div>

        </form>
    </div>
</div>
@endsection