<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/edit-offer.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap"
      rel="stylesheet"
    />

    <title>Offer</title>
  </head>
  <body>
    <x-app-layout>
    </x-app-layout>
    <div class="container">
        <form class="form" action="{{ route('offers.update', $offer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h1>Edit offer</h1>
        <p>Product Title</p>
        <input
          name="offer_product_name"
          id="product-title"
          autocomplete="off"
          type="text"
          placeholder="Product Offred"
        />
        <p>Condition</p>
        <select name="condition" id="dropdown">
          <option value="option1">New</option>
          <option value="option2" selected>Used like new</option>
          <option value="option3">Good</option>
          <option value="option3">Bad</option>
        </select>
        <p>Price</p>
        <input
          name="price"
          id="price"
          autocomplete="off"
          type="text"
          placeholder="Price Offred"
        />
        <p>Description</p>
        <textarea
          name="description"
          id="description"
          cols="30"
          rows="10"
          placeholder="Product Description"
        ></textarea>
        <div class="drag">
          <input name="photo" type="file" accept="image/*" id="drag-file" />
        </div>
        <div class="btn">
          <button class="submit">Submit</button>
          <button type="button" onclick="window.history.back();" class="cancel">Cancel</button>
        </div>
      </form>
    </div>
    <footer>
      <p>© 2024 NeedItNow® Yassine Amgarou • Privacy Policy</p>
    </footer>
  </body>
</html>
