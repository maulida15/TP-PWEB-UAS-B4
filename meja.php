<?php
    require 'fungsi.php';

    $conek=mysqli_connect("localhost","root","","db_pesan");
        if(isset($_POST["submit"])){
            if(tambah($_POST)>0){
                echo "
                    <script>
                        alert('pesanan berhasil dikirim');
                    </script>";
            }
            else{
                echo "
                    <script>
                        alert('pesanan gagal dikirim');
                    </script>";
            }
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="web.css">


    <title>restaurant</title>
    <style>
</style>
</head>
<body>
        <div class="topnav">
                <a class="active" href="index.html">Home</a>
                <a href="profile.html">profile</a>
                <a href="meja.php">Booking Tempat</a>
                <div class="dropdown">
                        <button class="dropbtn">menu
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="menu.html">makanan</a>
                          <a href="menu2.html">minuman</a>
                          
                        </div>
                      </div>
              <a href="about.html">About</a>
              </div>
              <div class="boking">
                <h3><u>SELAMAT DATANG DI RESTAURANT KAMI</u> </h3>
              </div>
                <div class="boxprofil">
                  <img src="chef.jpg" class="img">
                  <div class="container">
                    <form action="" method="post">
                      <label for="nama">Nama Pemesan</label>
                      <input type="text" id="nama" name="nama" placeholder="Masukan Nama.." required>
                  
                      <label for="hp">No Handpone</label>
                      <input type="text" id="no_hp" name="no_hp" placeholder="Masukan No Handpone.." required>
                  
                      <label for="meja">Pilih Meja</label>
                      <select id="meja" name="meja" required>
                        <option value="">Pilih Nomor Meja</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        
                      </select>

                      <label for="jam">Jam Booking</label><br><br>
                      <input type="time" name="jam" id="jam"  required> <br><br>
                        
                      
                  
                      <label for="pesan">Menu Pesanan</label>
                      <textarea id="menu" name="menu" placeholder="Untuk pemesanan menu dan jumlah silahkan lihat pada daftar menu.." style="height:100px" required></textarea>
                  
                      <input type="submit" value="Submit" name="submit">
                    </form>
                  </div>
                  
          </div>
        
    </body>
</html>
