<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
 
	<title></title>
</head>
<body>

	<!--NAVBAR-->
	<nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top">
  <div class="container-fluid">
    <img src="assets/image/logo.png" width="90px" height="32px"> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i id="bar" class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
            <ul>
              <li><a href="">Akun</a></li>
              <li><a href="">Setting</a></li>
              <li><a href="">Keluar</a></li>
            </ul>
        </li>
        
        <!--
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        -->
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" type="submit">Search</button>
        <!--
          <i class="far fa-search"></i>
        -->
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/image/arabika.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ARABIKA</h5>
        <p>Kopi Arabika adalah salah satu kopi yang populer di dunia. Jenis kopi ini hampir bisa di temui di seluruh dunia, Toppers. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/image/robusta.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>ROBUSTA</h5>
        <p>Jenis kopi yang satu ini juga populer di dunia.Kopi ini bisa tumbuh tidak hanya di daerah yang sejuk, tetapi juga bisa tumbuh di daerah yang panas.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/image/liberika.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>LIBERIKA</h5>
        <p>Kopi Liberika merupakan perpaduan dari biji Kopi Arabika dan Kopi Robusta. Jenis kopi ini berasal dari Liberia dan Afrika.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>

<p class="text">Rekomendasi</p>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="assets/image/toraja.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kopi Toraja</h5>
          <p class="card-text">Jenis kopi ini berasal dari Indonesia, tepatnya Tanah Toraja, Sulawesi. Cita rasa yang dimiliki kopi ini adalah beri dan rempah. 
                              Aromanya didominasi rempah dan kayu manis, Toppers. Setelah menikmati Kopi Toraja ini, aftertaste yang bisa kamu rasakan adalah rasa dark chocolate.</p>
          <a href="#" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="assets/image/gayo.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kopi Gayo</h5>
          <p class="card-text">kopi ini berasal dari Tanah Gayo, Aceh. Aromanya yang harum dan rasanya yang gurih, cita rasanya kelas dunia!
                              Kopi ini berasal dari pohon kopi yang ditanam di dataran tinggi. Kopi asal Indonesia ini populer di beberapa negara, loh, seperti Amerika Serikat dan Eropa.</p>
          <a href="#" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem;">
        <img src="assets/image/luwak.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kopi Luwak</h5>
          <p class="card-text">Tidak hanya terkenal di Indonesia, kopi luwak juga terkenal di dunia, Jenis kopi yang satu ini punya harga jual yang tinggi karena proses pembuatannya yang tidak mudah.
                              Kopi Luwak berasal dari biji kopi yang dikonsumsi oleh Luwak. Kotoran luwak yang mengandung biji kopi inilah yang kemudian diolah.</p>
          <a href="#" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- CSS -->
<style type="text/css">
  .carousel-item{
    height: 600px;
  }
  .form-control{
    width: 300px;
  }
  .text{
    font-size: 30px;
    padding-left: 120px;
    font-weight: bold;
  }

  .navbar{
    font-size: 16px;
    background-color: #623b28ee;
  }
  .navbar ul li ul{
    display: none;
    position: absolute;
    background-color: white;
    border-radius: 5px;
  }
  .navbar ul li ul li{
    display: block;
  }
  .navbar ul li ul li a:hover{
    background-color: violet;
    color: white;
    border-top: none;
  }
  .navbar ul li ul li a:active{
    position: relative;
    top: 1px;
  }

  .navbar-light .navbar-toggler{
    border: none;
    outline: none;
  }
  #bar{
    font-size: 1.5rem;
    padding: 5px;
    cursor: pointer;
    font-weight: 500;
    transition: 0.3s ease;
    color: black;
  }
  @media only screen and (max-width: 991px){
    body > nav > div > button:hover,
    body > nav > div > button:focus{
      background-color: white;
    }
    #navbarSupportedContent > ul {
      margin: 1rem;
      justify-content: flex-end;
      align-items: flex-end;
      text-align: right;
    }
    #navbarSupportedContent > ul > li:nth-child(n) > a{
      padding: 10px 0;
    }
  }

  .navbar-light .navbar-nav .nav-link{
    padding: 0 20px;
    color: black;
    transition: 0.3s ease;
  }
  .navbar-light .navbar-nav .nav-link:hover,
  .navbar i:hover,
  .navbar-light .navbar-nav .nav-link.active, .navbar i.active{
    color: white;
  }
</style>

<!-- JS -->
<script type="text/javascript"> 
  $(document).ready(function(){
    $(".navbar li").hover(function(){
        $(this).find("ul").slideToggle("normal");
      })
  })
</script>

</body>
</html>