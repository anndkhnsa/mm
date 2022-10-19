<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<header class="bg">
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
</div>


      <style>
body{
    font-family: tahoma; 
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

      </style>