<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet"
        />

        <title></title>
    </head>
    <x-app-layout>
    </x-app-layout>
        <body>
            <div class="container">
                <div class="list">
                    @foreach ($posts as $post)
                    <a href="{{ route('product_page.show', $post->id) }}">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('storage/' . $post->photo) }}" alt="photo">
                            </div>
                                <div class="card-info">
                                    <h1 class="h1">{{ $post->product_name }}</h1>
                                    <h2 class="h2">Location : {{ $post->location }}</h2>
                                    <p class="p">
                                        {{ $post->description }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </a>
                </div>
            </div>
            <footer>
            <p>© 2024 NeedItNow® Yassine Amgarou • Privacy Policy</p>
            </footer>
        </body>
</html>
