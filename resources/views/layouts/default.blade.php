<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content page</title>
    @include('partials.styles')
  </head>
  <body>
   <div class="container">

    <div class="row justify-content mt-5">
        <div class="col-lg-6">
            @if(session()->has('success'))
            <!--use alert -->
            <div class="alert alert-success">
                {{ session()->get('success') }}

                @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
                @endif
            </div>
            @endif
        </div>
    </div>

    @yield('content')
   </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>