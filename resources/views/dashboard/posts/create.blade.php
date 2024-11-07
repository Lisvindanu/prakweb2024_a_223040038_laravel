@extends('dashboard.layout.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
            <label for="tittle" class="form-label">title</label>
            <input type="text" class="form-control" id="tittle" name="tittle" >
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" >
        </div>


        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>
@endsection
