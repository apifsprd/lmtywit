<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/mystyle.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <title>{{$title}} | #lmtywit</title>
  </head>
  <body>
    
    <header>
    <div class="row justify-content-between">
        <div class="col-4">
        <h1>
            <a href="/"><b>#lmtywit</b></a>
        </h1>
        </div>
        <div class="col-4 align-self-center">
        <h6 class="text-end"><a href="/about">/About</a></h6>
        </div>
    </div>
    </header>

    @yield('content')


    <footer class="mt-5 mb-2 border-top text-center">
    <p class="mt-5">
        Code n write by <a href="https://linktr.ee/apifsprd">@apifsprd</a> with his &#x2615;
    </p>
    <a href="#">Back to top &uarr;</a>
    </footer>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
    ></script>
</body>
</html>