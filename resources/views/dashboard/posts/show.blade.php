@extends('dashboard.layout.main')
@section('container')
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">
                    {{ $tittle }}
                </h1>

                <!-- Use a responsive layout for the buttons -->
                <div class="mb-3">
                    <div class="d-flex flex-wrap gap-2">
                        <a href="/dashboard/posts" class="badge bg-success d-flex align-items-center">
                            <span data-feather="arrow-left" class="me-2"></span>Back to all my posts
                        </a>
                        <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning d-flex align-items-center">
                            <span data-feather="edit" class="me-2"></span>Edit
                        </a>
                        <form class="d-inline" action="/dashboard/posts/{{$post->slug}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <span data-feather="x-circle"></span>Delete
                            </button>
                        </form>
                    </div>
                </div>

                @if($post -> image)
                    <div class="mb-3">
                        <img src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}" class="img-fluid mt-3">
                    </div>
                @else
                    <div class="mb-3">
                        <img src="@imgslash('img.png')" alt="naruto" class="img-fluid mt-3">
                    </div>
                @endif


                <div class="d-flex align-items-start mb-4">
                    <img src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}" class="rounded-circle me-3" style="width: 80px; height: 80px;">
                    <div>
                        <h5 class="mb-1"><a href="/posts?author={{ $post->author->username }}" class="text-dark text-decoration-none">{{ $post->author->name }}</a></h5>
                        <p class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</p>
                        <a href="/posts?category={{ $post->category->slug }}" class="badge bg-primary text-decoration-none">{{ $post->category->name }}</a>
                    </div>
                </div>

                <div class="mt-3">
                    <p>{!! $post->body !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
