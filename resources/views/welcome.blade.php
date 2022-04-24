<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }
      html {
          font-size: 62.5%;
      }

      body {
          font-family: "Poppins", sans-serif;
          line-height: 1.6;
          color: #1a1a1a;
          font-size: 1.6rem;
          overflow-x: hidden;
      }
      a {
          color: #2196f3;
          text-decoration: none;
      }

      .container {
          display: grid;
          grid-template-rows: minmax(min-content, 100vh);
          grid-template-columns: repeat(2, 50vw);
      }
      .heading-secondary {
          font-size: 3rem;
      }
      .heading-primary {
          font-size: 5rem;
      }
      .span-blue {
          color: #2196f3;
      }
      .signup-container,
      .signup-form {
          display: flex;
          flex-direction: column;
          gap: 2rem;
      }
      .signup-container {
          width: 100vw;
          padding: 10rem 10rem;
          align-items: flex-start;
          justify-content: flex-start;

          grid-column: 1 / 2;
          grid-row: 1;
      }
      .signup-form {
          max-width: 45rem;
          width: 100%;
      }
      .text-mute {
          color: #aaa;
      }

      .input-text {
          font-family: inherit;
          font-size: 1.8rem;
          padding: 3rem 5rem 1rem 2rem;
          border: none;
          border-radius: 2rem;
          background: #eee;
          width: 100%;
      }
      .input-text:focus {
          outline-color: #2196f3;
      }

      .btn {
          padding: 2rem 3rem;
          border: none;
          background: #2196f3;
          color: #fff;
          border-radius: 1rem;
          cursor: pointer;
          font-family: inherit;
          font-weight: 500;
          font-size: inherit;
      }
      .btn-login {
          align-self: flex-end;
          width: 100%;
          margin-top: 2rem;
          box-shadow: 0 5px 5px #00000020;
      }
      .btn-login:active {
          box-shadow: none;
      }
      .btn-login:hover {
          background: #2180f9;
      }
      .inp {
          position: relative;
      }
      .label {
          pointer-events: none;

          position: absolute;
          top: 2rem;
          left: 2rem;
          color: #00000070;
          font-weight: 500;
          font-size: 1.8rem;

          transition: all 0.2s;
          transform-origin: left;
      }
      .input-text:not(:placeholder-shown) + .label,
      .input-text:focus + .label {
          top: 0.7rem;
          transform: scale(0.75);
      }
      .input-text:focus + .label {
          color: #2196f3;
      }

      .input-icon {
          position: absolute;
          top: 2rem;
          right: 2rem;
          font-size: 2rem;
          color: #00000070;
      }
      .input-icon-password {
          cursor: pointer;
      }

      .btn-google {
          color: #222;
          background: #fff;
          border: solid 1px #eee;
          padding: 1.5rem;

          display: flex;
          justify-content: center;
          align-items: center;

          box-shadow: 0 1px 2px #00000020;
      }

      .btn-google img {
          width: 3rem;
          margin-right: 1rem;
      }

      .login-wrapper {
          max-width: 45rem;
          width: 100%;
      }
      .line-breaker .line {
          width: 50%;
          height: 1px;
          background: #eee;
      }
      .line-breaker {
          display: flex;
          justify-content: center;
          align-items: center;
          color: #ccc;

          margin: 3rem 0;
      }
      .line-breaker span:nth-child(2) {
          margin: 0 2rem;
      }

      .welcome-container {
          background: #eeeeee75;
          grid-column: 2 / 3;
          grid-row: 1;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: flex-start;
          padding: 10rem;
      }
      .lg {
          font-size: 6rem;
      }
      .welcome-container img {
          width: 100%;
      }

      @media only screen and (max-width: 700px) {
          html {
            font-size: 54.5%;
        }
    }

    @media only screen and (max-width: 600px) {
      .signup-container {
        padding: 5rem;
    }
}
@media only screen and (max-width: 400px) {
  html {
    font-size: 48.5%;
}

.input-text:not(:placeholder-shown) + .label,
.input-text:focus + .label {
    top: 0.6rem;
    transform: scale(0.75);
}
.label {
    font-size: 1.9rem;
}
}

@media only screen and (max-width: 1200px) {
  .signup-container {
    grid-column: 1 / 3;
    grid-row: 1/3;
}
.welcome-container {
    display: none;
}
}

</style>
</head>
<body class="antialiased">
   <!-- all this code taken from  https://codepen.io/ibrahim-zulfiqar/pen/QWaQPje -->
    <div class="container">
      <main class="signup-container">
        <h1 class="heading-primary">Lara-Pdf-Viewr<span class="span-blue">.</span></h1>
        <div class="signup-form">
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" ><button class="btn">Home</button> </a>
            @else
            <a href="{{ route('login') }}" class="btn-login"><button class="btn btn-login">Login</button></a>
            <div class="line-breaker">
            <span class="line"></span>
            <span>or</span>
            <span class="line"></span>
            </div>
            @if (Route::has('register'))
            <a href="{{ route('register') }}"><button class="btn btn-login">Register</button></a>
            @endif
            @endauth
        @endif
        
    </div>
</main>
<div class="welcome-container">
    <h1 class="heading-secondary">Welcome to <span class="lg">PDF Uploader/Viewr!</span></h1>
    <img src="https://media.kasperskydaily.com/wp-content/uploads/sites/92/2020/02/28163447/36C3-PDF-encryption-featured2.jpg" alt="">
</div>
</div>
</body>
</html>
