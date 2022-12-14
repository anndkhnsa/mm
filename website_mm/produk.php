<!DOCTYPE html>
<html>
<head>
	<title>MULTIMEDIA|SMK N 1 BANTUL</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
body{
  
}
body {
    /* font-family: Arial, Helvetica, sans-serif; 
    margin: 0; 
    font-weight: lighter; */
}
.menu img {
    float: left; 
    padding: 20px 90px;
    height: 100px;
}
.menu > a{
    font-size: 16px;
}
nav{
    top: 0;
    position: absolute;
    width: 100%;
    z-index: 1;
    background-color: #000;
}
/* ini */
.dropdownn {
    overflow: hidden;
    font-family: Arial;
}

/* Links inside the navbar */
.dropdownn a {
    float: left;
    font-size: px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
/* The dropdown container */
.dropdownn {
    float: left;
    overflow: hidden;
}
/* Dropdown button */
.dropdownn .dropbtnn {
    font-size: 16px;
    border: none;
    outline: none;
    color: hwb(0 100% 0%);
    padding: 0px 10px;
    background-color: inherit;
    font-family: inherit; /* Important for vertical align on mobile phones */
    margin: 0; /* Important for vertical align on mobile phones */
}
/* Dropdown content (hidden by default) */
.dropdown-contentt {
    display: none;
    position: absolute;
    background-color: #070069;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
/* Links inside the dropdown */
.dropdown-contentt a {
    float: none;
    color: #fff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
/* Add a grey background color to dropdown links on hover */
.dropdown-contentt a:hover {
    background-color: #605353;
}
/* Show the dropdown menu on hover */
.dropdownn:hover .dropdown-contentt {
    display: block;
}
.dropdownn button:hover{
    cursor: pointer;;
}
.bgColor{
    background-color: white;
    color: black;
}
.menu ul{
    list-style: none;
    display: inline-flex; 
    float: right; 
    padding-right: 80px; 
    padding-top: 28px;
}
.menu ul li{
    padding-right: 20px; 
    padding-top: 8px;
}

.menu ul li a {
    text-decoration: none; 
    cursor: pointer; 
    color: white;
}
.menu ul li a:hover {
    border-bottom: solid 2px #fff;
}

.isi{
    height: 100px;
    width: 100%;
    background-color: #fff;
}
.btn{
background-color: #0b00a7;
border:none;
}
.btn-info{
background-color: 070069;
}


/*  ==== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.container{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.container .heading{
  width: 50%;
  padding-bottom: 50px;
}
.container .heading h3{
  font-size: 3em;
  /* font-weight: bolder; */
  padding-bottom: 10px;
  border-bottom: 3px solid #222;
}

.container .heading h3 span{
  font-weight: 100;
}
.container .box{
 display: flex;
 flex-direction: row;
 justify-content: space-between;
}

.container .box .dream{
  flex-direction: column;
  width: 32.5%;
}

.container .box .dream img{
  width: 100%;
  padding-bottom: 15px;
  border-radius: 5px;
}

.container .btn{
  margin: 40px 0 70px 0;
  background: #222;
  padding: 15px 40px ;
  border-radius: 5px;
}

.container .btn a{
 color: #fff;
 font-size: 1.2em;
 text-decoration: none;
 font-weight: bolder;
 letter-spacing: 3px;
}

@media only screen and (max-width: 769px){
    .container .box{
   flex-direction: column;
  }

.container .box .dream{
  width: 100%;
}

}

@media only screen and (max-width: 643px){
.container .heading{
  width: 100%;
}
.container .heading h3{
  font-size: 1em;

}


}


.isi h3 {
  margin-top: 150px;
}
</style>

</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<!-- <div class="top">
<div class='bghitam'></div> -->


<!-- navigation-bar -->
<?php include('includes/navbar.php');?>
  <!-- <header class="bg">
    <nav>
      <div class="menu">
        <a href=""><img src="img/logo_smk.png"></a>
          <ul>
            <li><a href="index.php">HOME</a></li>
              <div class="navbar">
                <div class="dropdownn">
                <button class="dropbtnn">PROFIL
                  <i class="fa fa-caret-down"></i>
                </button>
                  <div class="dropdown-contentt">
                     <a href="index.php#visi">VISI DAN MISI</a>
                     <a href="fasilitas.php">FASILITAS</a>
                     <a href="data_guru.php">GURU</a>
                     <a href="data_siswa.php">SISWA</a>
                  </div>
                </div>
              </div>
              <li><a href="prestasi.php">PRESTASI</a></li>
              <li><a href="produk.php">PRODUK</a></li>
              <li><a href="index.php#berita">INFORMASI</a></li>
          </ul>
      </div>
    </nav>
  </header> 
</div> -->



<div class="isi">
  <div class="container">
    <div class="heading">
      <h3> Produk <span>Multimedia</span></h3>
    </div>
    <div class="box">
      
      <div class="dream">
        <img src="img/galeri/1.jpg">
         <img src="img/galeri/2.jpg">
          <img src="img/galeri/3.jpg">
           <img src="img/galeri/4.jpg">
            <img src="img/galeri/5.jpg">
            
      </div>

        <div class="dream">
        <img src="img/galeri/6.jpg">
         <img src="img/galeri/7.jpg">
          <img src="img/galeri/1.jpg">
           <img src="img/galeri/2.jpg">
            <img src="img/galeri/3.jpg">
            
      </div>

        <div class="dream">
        <img src="img/galeri/11.jpg">
         <img src="img/galeri/12.jpg">
          <img src="img/galeri/13.jpg">
           <img src="img/galeri/14.jpg">
            <img src="img/galeri/15.jpg">       
      </div>
    </div>
    <div class="btn">
      <a href="#">More</a>
    </div>

  </div>

      <?php include('includes/footer.php');?>

  </body>
</html> 