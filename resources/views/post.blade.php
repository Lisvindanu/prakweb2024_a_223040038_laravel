<x-layout>
    <x-slot:tittle>{{ $tittle }}</x-slot:tittle>

{{--    <article class="py-8 max-w-screen-md border-b border-gray-300">--}}
{{--        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->tittle }}</h2>--}}
{{--        <div>--}}
{{--            By--}}
{{--            <a class="text-base text-gray-500 hover:underline" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in--}}
{{--            <a class="text-base text-gray-500 hover:underline" href="/categories/{{$post->category->slug}}"> {{$post->category->name}} </a>--}}
{{--            | {{$post->created_at->diffForHumans()}}--}}
{{--        </div>--}}
{{--        <p class="my-4 font-light">{{ $post->body }}</p>--}}
{{--        <a href="/posts" class="font-medium text-blue-400">&laquo;Back To Post</a>--}}
{{--    </article>--}}


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-ss text-blue-600 hover:underline">&laquo; Back to all posts</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{$post->author->name}}">
                            <div>
                                <a href="/posts?author={{$post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$post->author->name}}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 my-1">{{$post->created_at->diffForHumans()}}</p>
                                <a href="/posts?category={{$post->category->slug}}">
                  <span class="bg-{{$post->category->color}}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                       {{$post->category->name}}
                  </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{$post->category->slug}}</h1>
                </header>
                <p>{{($post->body) }}</p>
            </article>
        </div>
    </main>
</x-layout>
