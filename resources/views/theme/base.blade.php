<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  
    <title>Blog Dentos</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:whitesmoke;">
        <a class="navbar-brand">
            <img src="" height="20">
        </a>
        <h2>Blog Dentos</h2>
        <a class="navbar-brand" href="#"></a>  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
               <a class="nav-link" href="{{ route('publication.index') }}">Login</a> 
            </li> 
          </ul>
        </div>
      </nav>

@yield('content')
   
 

<br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>