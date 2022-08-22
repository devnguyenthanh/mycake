<!DOCTYPE html>
<html>
<head>
<title>mycake by Thanh</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
 <div class="w3-top" {{-- style="background-color: #fe6787"--}}>   
  <div class="w3-bar w3-padding w3-card" style="letter-spacing:4px;">
    <a href="{{asset('/')}}" class="w3-bar-item w3-button" style="font-weight: 600; color:#c13636">THANH CAKE</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="{{asset('dashboard')}}" class="w3-bar-item w3-button">Home</a>
      <a href="{{asset('products')}}" class="w3-bar-item w3-button">Menu</a>
      <a href="{{asset('gallery')}}" class="w3-bar-item w3-button">Gallery</a>
      <a href="{{asset('news')}}" class="w3-bar-item w3-button">News</a>
      <a href="{{asset('contacts')}}" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="{{asset('template/w3images/sliderpinkdep.jpg')}}" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge" style="color: #c82d4e;"></h1>
    <br> <h5>Thanh Cake</h5>
  </div>
</header>