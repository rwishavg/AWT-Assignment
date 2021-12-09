<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p >Welcome to student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <div class="sports">
        <p>Favourite Players</p>
      </div>
      <div class="images">
          <div class="image"> <a href="https://en.wikipedia.org/wiki/Rohit_Sharma"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_CgvBgvfzPFqu5Zvy5LxMtFe-0srT53FpqQ&usqp=CAU" alt="Rohit Sharma"></a> 
          </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/LeBron_James"><img src="https://www.cleveland.com/resizer/UdYn8NKXL9DSnIZawbMvcAk7aXk=/1280x0/smart/advancelocal-adapter-image-uploads.s3.amazonaws.com/image.cleveland.com/home/cleve-media/width2048/img/cavs_impact/photo/lebron-james--f3eced26831f287d.jpg" alt="Lebron James"></a>
            </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Alex_Caruso"><img src="https://cdn.vox-cdn.com/thumbor/Qn41Br_L3Fs5Eqe_C-qW5NqA2BY=/0x66:1877x1340/1200x800/filters:focal(740x298:1040x598)/cdn.vox-cdn.com/uploads/chorus_image/image/67007802/1203737491.jpg.0.jpg" alt="Alex Caruso"></a>
            </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/MS_Dhoni"><img src="https://im.indiatimes.in/facebook/2019/Jul/ms_dhoni_himself_has_not_spoken_on_his_retirement_plans_1563350842.jpg" alt="Dhoni"></a>  
          </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Ravichandran_Ashwin"><img src="https://c.ndtvimg.com/2021-10/vcf1vr78_ravichandran-ashwin-india-jersey-instagram_625x300_18_October_21.jpg" alt="Ashwin"></a>  
          </div>
      </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
