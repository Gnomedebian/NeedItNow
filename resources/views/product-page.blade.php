<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/product-page.css') }}" rel="stylesheet" />
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
      <div class="info-section">
        <div class="product-img">
          <img src="{{ asset('storage/' . $post->photo) }}" alt="photo">
        </div>
        <div class="product-infos">
          <h1 class="h1">{{ $post->product_name }}</h1>
          <h2 class="h2">Location : {{ $post->location }}</h2>
          <h5 class="h5">{{ $post->created_at->format('M d, Y') }}</h5>
          <p class="p">
            {{ $post->description }}
          </p>
          
          @if ($isOwner)
          <a href="{{ route('posts.edit', $post->id) }}" class="offer-btn">Edit Your Need</a>
          <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Delete Need</button>
          </form>
          @else
          <a href="{{ route('offer.create', $post->id) }}" class="offer-btn">Provide Offer</a>
          @endif
        </div>
      </div>
        @if ($isOwner) {{--owner of the post--}}
        <h1 class="ofr-title">Offers Received</h1>
        @foreach ($offers as $offer)
        <div class="myoffer">
            <div class="offer-img">
              <img class="img-ofr" src="{{ asset('storage/' . $offer->photo) }}" alt="offer_img">
            </div>
            <div class="offer-infos">
                <h1 class="h1">{{$offer->offer_product_name}}</h1>
                <h2 class="h2">Price: {{$offer->price}}</h2>
                <h2 class="h2">Location: {{$offer->location}}</h2>
                <h2 class="h2">Phone: {{$offer->phone}}</h2>
                <p class="p">
                  {{$offer->description}}
                </p>
              </div>
            </div>
            @endforeach
        @else
        <h1 class="ofr-title">Offers Given</h1>
        @foreach ($offers as $offer)
        <div class="myoffer">
            <div class="offer-img">
              <img class="img-ofr" src="{{ asset('storage/' . $offer->photo) }}" alt="offer_img">
            </div>
            <div class="offer-infos">
                <h1 class="h1">{{$offer->offer_product_name}}</h1>
                <h2 class="h2">Price: {{$offer->price}} DH</h2>
                <h2 class="h2">Condition: {{$offer->condition}}</h2>
                <h2 class="h2">Location: {{$offer->location}}</h2>
                <h2 class="h2">Phone: {{$offer->phone}}</h2>
                <p class="p">
                  {{$offer->description}}
                </p>
                <a href="{{ route('offers.edit', $offer->id) }}" class="edit-btn">Edit Offer</a>
                <form action="{{ route('offers.destroy', $offer->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="delete-btn">Delete Offer</button>
              </form>
              </div>
            </div>
            @endforeach
            @endif
    </div>
    <footer>
      <p>© 2024 NeedItNow® Yassine Amgarou • Privacy Policy</p>
    </footer>
  </body>
</html>
