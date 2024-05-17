<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/post-need.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Post Your Need</title>
  </head>
    <x-app-layout>
        {{-- <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Post Need') }}
            </h2>
        </x-slot> --}}
        <body>
            <div class="container">
                {{-- wh give request method, and we give route name to action --}}
            <form class="form" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
              @csrf
              <h1 class="h1">Post Your Need</h1>
              <h3 class="h3">Let's dig for your need !</h3>
              <p class="p">Product Title</p>
              <input
                id="product-title"
                name="product_name"
                autocomplete="off"
                type="text"
                placeholder="I need..."
              />
              <p class="p">Description</p>
              <textarea
                id="description"
                name="description"
                cols="30"
                rows="10"
                placeholder="Product Description"
              ></textarea>
              <div class="drag">
                <input type="file" accept="image/*" id="drag-file" name="photo" />
              </div>
              <div class="btn">
                <button type="submit" class="submit">Submit</button>
                <a href="/dashboard" class="cancel">Cancel</a>
              </div>
            </form>
          </div>
          <footer>
            <p>© 2024 NeedItNow® Yassine Amgarou • Privacy Policy</p>
          </footer>
        </body>
    </x-app-layout>
</html>
