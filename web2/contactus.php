<!DOCTYPE html>
<html>
<head>
<title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> GALAXY TOURISM </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">services</a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="contactus.php">contact</a>
      </li>
            
      
    </ul>


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <h1> GALAXY TOURISM :)</h1>
  <p>ALL JOURNEYS HAVE SECRET DESTINATIONS OF WHICH THE TRAVELLER IS UNAWARE
</p>

</section>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">Contact</h2>
</div>
<div class="w-50 m-auto"> 
<form action="userinfo.php" method ="post">

<div class="form-group">
<label>username</label>
<input type="text" name="user" autocomplete="off" class="form-control"
</div>


   <div class="form-group">
    <label>Email Id</label>
      <input  type="text" name="email" autocomplete="off" class="form-control">
    
  </div>


   <div class="form-group">
    <label>mobile</label>
      <input  type="text" name="mobile" autocomplete="off" class="form-control">
    
  </div>


 

   <div class="form-group">
    <label>comments</label>
    <textarea class="form-control" name="comments"> </textarea>
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
     </div>
</section>
<footer>
<p  class="p-3 bg-dark text-white text-center"> @GALAXY_TOURISM
</p>
</footer>
</body>
</html>