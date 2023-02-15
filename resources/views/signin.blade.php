<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin</title>

    <link rel="stylesheet" href="{{ asset('css/custom/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
</head>
  <body>
    <div class="container col-4 mt-5 ">

        <div class=" text-bg-light rounded-3 p-3 mt-5">

            <form method="POST" action="{{ route('authenticate') }}">
                @csrf
                <div class="mb-3">
                    <label  class="form-text">Email address</label>
                    <input placeholder="" type="text" class="form-control"  aria-describedby="emailHelp" name="">
                </div>
                
                <div class="mb-3">
                    <label class="form-text">Code</label>
                    <input placeholder="" type="Text" class="form-control"  name="">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>       
                        
            </form> 
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
    
