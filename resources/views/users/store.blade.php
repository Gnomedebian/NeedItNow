<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap"
      rel="stylesheet"
    />

    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <div class="logo">
        <div class="icon"></div>
        <div class="logo-name">NeedItNow</div>
      </div>
      <div class="section">
        <h1>Sign-Up</h1>
        <h3>Let's get all set up.</h3>
        <p>Full Name</p>
        <form class="usr-form" method="POST" action="/users">
          @csrf
          <input
            name="full_name"
            id="full_name"
            autocomplete="off"
            type="text"
            placeholder="Full Name"
          />
          <p>City</p>
          <input name="location" id="location" autocomplete="off" type="text" placeholder="City" />
          <p>Phone</p>
          <input name="phone" id="phone" autocomplete="off" type="text" placeholder="Phone" />
          <p>Email</p>
          <input
            name="email"
            id="email"
            autocomplete="off"
            type="text"
            placeholder="Enter your email"
          />
          <p>Password</p>
          <input
            name="password"
            id="password"
            autocomplete="off"
            type="password"
            placeholder="Enter you password"
          />
          <button class="sign-btn">Sign Up</button>
        </form>
        <div class="log-in">Have an account? Log In</div>
      </div>
    </div>
    <footer>
      <p>© 2024 NeedItNow® Yassine Amgarou • Privacy Policy</p>
    </footer>
  </body>
</html>
