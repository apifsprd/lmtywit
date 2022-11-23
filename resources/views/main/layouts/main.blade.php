<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

    {{-- Style.css --}}
    <link rel="stylesheet" href="/css/mystyle.css">

    <title>{{$title}} | #LMTYWIT</title>
  </head>
  <body>
    
    <div class="main container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row">
                    <a href="/"><h1 class="display-4" id="lmtywit">#lmtywit</h1></a>
                    <h5 class="text-muted d-inline">by <a href="https://linktr.ee/apifsprd" target="_blank">@apifsprd</a></h5>
                </div>

                @yield('content')

                <footer class="blog-footer mt-3">
                    <p>Made by <a href="https://linktr.ee/apifsprd" target="_blank" rel="noopener noreferrer">@apfsprd</a> n his &#x2615;</p>
                    <p>
                        <a href="#">&uarr; Back to top</a>
                    </p>
                </footer>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>