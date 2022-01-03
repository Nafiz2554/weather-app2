<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Demo</title>
  <style>
    body {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%230e2a47'%3e%3c/rect%3e%3cpath d='M 0%2c225 C 57.6%2c181.8 172.8%2c22.6 288%2c9 C 403.2%2c-4.6 460.8%2c142 576%2c157 C 691.2%2c172 748.8%2c64.2 864%2c84 C 979.2%2c103.8 1036.8%2c269.2 1152%2c256 C 1267.2%2c242.8 1382.4%2c65.6 1440%2c18L1440 560L0 560z' fill='%23184a7e'%3e%3c/path%3e%3cpath d='M 0%2c286 C 96%2c314.8 288%2c421.2 480%2c430 C 672%2c438.8 768%2c330 960%2c330 C 1152%2c330 1344%2c410 1440%2c430L1440 560L0 560z' fill='%232264ab'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e");
      /* background-image: url(./img/cloud11.PNG); */
      /* background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='%231e3266'%3e%3c/rect%3e%3cpath d='M1560 560L0 560 L0 296.35Q46.91 223.26%2c 120 270.17Q179.95 258.12%2c 192 318.07Q197.24 251.31%2c 264 256.55Q332.06 204.61%2c 384 272.67Q461.23 277.9%2c 456 355.14Q473.76 252.9%2c 576 270.67Q617.55 240.22%2c 648 281.77Q672.46 234.23%2c 720 258.68Q776.89 243.57%2c 792 300.46Q840.86 277.32%2c 864 326.18Q904.82 247%2c 984 287.82Q1006.58 238.39%2c 1056 260.97Q1140.77 225.74%2c 1176 310.51Q1201.83 264.34%2c 1248 290.16Q1299.76 269.92%2c 1320 321.68Q1373.79 255.47%2c 1440 309.25Q1483.14 232.39%2c 1560 275.54z' fill='%23182f5d'%3e%3c/path%3e%3cpath d='M1536 560L0 560 L0 417.24Q15.56 360.8%2c 72 376.36Q112.15 296.51%2c 192 336.67Q236.99 309.66%2c 264 354.65Q319.26 337.91%2c 336 393.18Q387.38 372.56%2c 408 423.95Q409.19 353.13%2c 480 354.32Q531.12 285.44%2c 600 336.56Q708.78 325.34%2c 720 434.12Q740.33 382.45%2c 792 402.78Q799.75 338.53%2c 864 346.29Q893.75 304.05%2c 936 333.8Q1030.06 307.86%2c 1056 401.91Q1127.77 353.68%2c 1176 425.45Q1198.79 328.24%2c 1296 351.03Q1349.76 284.79%2c 1416 338.56Q1491.17 293.74%2c 1536 368.91z' fill='%2325467d'%3e%3c/path%3e%3cpath d='M1512 560L0 560 L0 443.53Q73.04 396.56%2c 120 469.6Q124.38 401.99%2c 192 406.37Q279.48 421.85%2c 264 509.33Q300.75 426.08%2c 384 462.83Q433.4 440.23%2c 456 489.62Q465.29 426.91%2c 528 436.2Q550.69 386.89%2c 600 409.58Q643.46 381.04%2c 672 424.51Q774.8 407.31%2c 792 510.1Q832.79 430.89%2c 912 471.68Q919.98 407.66%2c 984 415.64Q1054.93 366.57%2c 1104 437.51Q1175.4 436.91%2c 1176 508.32Q1205.59 465.9%2c 1248 495.49Q1277.57 453.06%2c 1320 482.63Q1363.29 405.92%2c 1440 449.21Q1455.89 393.1%2c 1512 408.99z' fill='%23356cb1'%3e%3c/path%3e%3cpath d='M1512 560L0 560 L0 491.82Q86.35 458.17%2c 120 544.53Q164.63 517.15%2c 192 561.78Q236.23 534.01%2c 264 578.24Q280.27 474.51%2c 384 490.78Q455.95 442.73%2c 504 514.68Q566.17 504.85%2c 576 567.01Q599.08 518.09%2c 648 541.16Q687.99 461.14%2c 768 501.13Q861.59 474.72%2c 888 568.31Q910.9 519.21%2c 960 542.12Q983.03 493.15%2c 1032 516.19Q1058.34 470.53%2c 1104 496.87Q1160.67 481.54%2c 1176 538.2Q1198.52 488.72%2c 1248 511.24Q1271.83 463.07%2c 1320 486.9Q1414.92 461.82%2c 1440 556.74Q1488.13 532.88%2c 1512 581.01z' fill='white'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3c/defs%3e%3c/svg%3e"); */
      background-size: cover;
      background-attachment: fixed;
      font-family: poppin, 'Times New Roman', Times, serif;
      font-size: large;
      overflow: hidden;
    }

    h1 {
      color: floralwhite;
      text-shadow: 3px 3px 3px black;
      font-weight: 700;
      text-align: center;
      margin-top: 90px;
    }
    h2{
      text-align: center;
      font-weight: bold;
      color:#001a40;
      text-shadow: 0px 1px 2px black;
    }

    b {
      color:  #29393c;
      text-shadow: 1px 1px 1px lightseagreen;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
     
  </style>
</head>

<body>
  <div class="container">
    <div class="card shadow"  style="background-image: url(./img/sun.jpg);background-size:cover;border-radius:10px;">
      <div class="card-body">
        <div class="row">
          <div class="col-7">
            <div class="card shadow"  style="background-color:#ffffff40;border-radius:10px;">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <form class="row g-3">
                      <div class="hstack gap-3">
                        <input class="form-control" type="text" name="city" id="city" placeholder="Enter your city name">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <h1>Search weather for your location</h1>
          </div>
          <div class="col-5">
            <div class="card shadow"  style="background-color:#ffffff40;border-radius:10px;">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                   
                        <div class="row">
                          <div class="col-12">
                            <div class="alert" role="alert">
                              <div class="card shadow"  style="background-color:#ffffff40;border-radius:60px;">
                                <div class="card-body">
                                  <div class="row">

                                    <div class="col-12">
                                     
                                      <?php
                                      echo '
                                      <b style="font-size:30px;">Today</b>
                                       <span style="color:#101268;font-weight:bolder;font-size:20px;padding-left:13rem; ">
                                       ' . date("d-m-y") . '
                                       <b>,</b>
                                      </span>                     
                                      <span style="color:#fff700;font-size:20px;font-weight:bolder;">
                                      ' . date("D") . '
                                      </span>'; ?>
                                    </div>

                                    <div class="col-12">
                                      <?php
                                      if (array_key_exists('submit', $_GET)) {
                                        // Checking if input is empty
                                        if ($_GET['city'] == "" or !$_GET['city']) {
                                          $error = "Sorry, input field is empty!";
                                          if ($error) {
                                            echo '<br> <div class="alert alert-danger" role="alert">' . $error . '</div>';
                                          }
                                        }

                                        if ($_GET['city']) {
                                          $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=" . $_GET['city'] . "&appid=0e379f411e447d942d155a99c76481b9");
                                          $weather_data = json_decode($apiData, true);

                                          echo "
                                           <div class='alert' role='alert' style='background-image: url(./img/cloud11.PNG);background-size:cover;border-radius:0px;box-shadow:3px 3px 7px 3px gray;'>
                                           <b>Temperature:</b>
                                           <span class='badge bg-primary float-end'>
                                             " . $weather_data['list'][0]['main']['temp'] . "
                                                                                        
                                           </span>
                                            
                                           <br>
            
                                          <b>Feels Like:</b>
                                          <span class='badge bg-primary float-end'>
                                          " . $weather_data['list'][0]['main']['feels_like'] . "
                                          </span>
            
                                           <br>
            
                                          <b>Max-Temperature:</b>
                                         <span class='badge bg-primary float-end'>
                                           " . $weather_data['list'][0]['main']['temp_max'] . "
                                         </span>
            
                                         <br>
            
                                         <b>Min-Temperature:</b>
                                         <span class='badge bg-primary float-end'>
                                         " . $weather_data['list'][0]['main']['temp_min'] . "
                                         </span>
            
                                          <br>
            
                                         <b>Humidity:</b>
                                         <span class='badge bg-primary float-end'>
                                         " . $weather_data['list'][0]['main']['humidity'] . "
                                         </span>
            
                                          <br>
                                         <b>Wind Speed:</b>
                                         <span class='badge bg-primary float-end'>
                                         " . $weather_data['list'][0]['wind']['speed'] . "
                                         </span>
                                         <br>
                                         <b>Description:</b>
                                         <span class='badge bg-primary float-end'>
                                         " . $weather_data['list'][0]['weather'][0]['description'] . "
                                         </span>

                                     </div>";
                                        }
                                      }
                                      ?>
                                    </div>

                                  </div>
                                </div>
         
                             
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="card shadow"style="background-color:#ffffff40;border-radius:80px;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <?php
                            if (array_key_exists('submit', $_GET)) {
                              //checking if input is empty
                              if ($_GET['city'] == "" or !$_GET["city"]) {
                                $error = "Sorry, Your input field is empty";
                                if ($error) {
                                  echo '<br> <div class="alert alert-danger" role="alert">' . $error . '</div>';
                                }
                              }
                              if ($_GET['city']) {

                                $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=" . $_GET['city'] . "&appid=0e379f411e447d942d155a99c76481b9");
                                $weather_data = json_decode($apiData, true);

                               echo '
                               <h2>Five Days Forecast</h2>  
                               <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                               <div class="carousel-inner">
                                <div class="carousel-item active">                                 
                                      <div class="card shadow" style="background-color:#ffffff40;">
                                      <div class="card-body">
                                      <div class="row">
                                      <div class="col-12">

                                      <div class="alert" role="alert">
                                      <b>Today:</b>
                                      <span class="badge bg-primary float-end">
                                      ' . date("d-m-y") . '
                                      </span>
                                      
                                      <span class="badge bg-success float-end">
                                      ' . date("D") . '
                                      </span>

                                      <br>

                                      <b>Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][0]["main"]["temp"] . '
                                      
                                      </span>

                                      <br>

                                      <b>Feels Like:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][0]["main"]["feels_like"] . '
                                      </span>

                                      <br>

                                      <b>Max-Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][0]["main"]["temp_max"] . '
                                      </span>

                                      <br>

                                      <b>Min-Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][0]["main"]["temp_min"] . '
                                      </span>

                                      <br>

                                      <b>Humidity:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][0]["main"]["humidity"] . '
                                      </span>

                                      <br>
                                      <b>Wind Speed:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][0]["wind"]["speed"] . '
                                      </span>

                                      

                                      <br>
                                      <b>Description:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][0]["weather"][0]["description"] . '
                                      </span>
                                      </div>

                                      </div>
                                      </div>
                                      </div>
                                      </div>
                                </div>
                                <div class="carousel-item">
                                      <div class="card shadow" style="background-color:#ffffff40;">
                                      <div class="card-body">
                                      <div class="row">
                                      <div class="col-12">

                                      <div class="alert" role="alert">
                                      <b>Day:</b>
                                      <span class="badge bg-primary float-end">
                                      ' . date("d-m-y", strtotime('+1 days')) . '
                                      </span>
                                      
                                      <span class="badge bg-success float-end">
                                      ' . date("D", strtotime('+1 days')) . '
                                      </span>

                                      <br>

                                      <b>Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][8]["main"]["temp"] . '
                                      
                                      </span>

                                      <br>

                                      <b>Feels Like:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][8]["main"]["feels_like"] . '
                                      </span>

                                      <br>

                                      <b>Max-Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][8]["main"]["temp_max"] . '
                                      </span>

                                      <br>

                                      <b>Min-Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][8]["main"]["temp_min"] . '
                                      </span>

                                      <br>

                                      <b>Humidity:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][8]["main"]["humidity"] . '
                                      </span>

                                      <br>
                                      <b>Wind Speed:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][8]["wind"]["speed"] . '
                                      </span>

                                      

                                      <br>
                                      <b>Description:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][8]["weather"][0]["description"] . '
                                      </span>
                                      </div>

                                      </div>
                                      </div>
                                      </div>
                                      </div>
                                </div>

                                <div class="carousel-item">
                                     <div class="card shadow" style="background-color:#ffffff40;">
                                      <div class="card-body">
                                      <div class="row">
                                      <div class="col-12">

                                      <div class="alert" role="alert">
                                      <b>Day:</b>
                                      <span class="badge bg-primary float-end">
                                      ' . date("d-m-y", strtotime('+2 days')) . '
                                      </span>
                                      
                                      <span class="badge bg-success float-end">
                                      ' . date("D", strtotime('+2 days')) . '
                                      </span>

                                      <br>

                                      <b>Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][16]["main"]["temp"] . '
                                      
                                      </span>

                                      <br>

                                      <b>Feels Like:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][16]["main"]["feels_like"] . '
                                      </span>

                                      <br>

                                      <b>Max-Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][16]["main"]["temp_max"] . '
                                      </span>

                                      <br>

                                      <b>Min-Temperature:</b>
                                      <span class="badge bg-secondary float-end">
                                          ' . $weather_data["list"][16]["main"]["temp_min"] . '
                                      </span>

                                      <br>

                                      <b>Humidity:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][16]["main"]["humidity"] . '
                                      </span>

                                      <br>
                                      <b>Wind Speed:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][16]["wind"]["speed"] . '
                                      </span>

                                      

                                      <br>
                                      <b>Description:</b>
                                      <span class="badge bg-secondary float-end">
                                      ' . $weather_data["list"][16]["weather"][0]["description"] . '
                                      </span>
                                      </div>

                                      </div>
                                      </div>
                                      </div>
                                      </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="card shadow" style="background-color:#ffffff40;">
                                        <div class="card-body">
                                        <div class="row">
                                        <div class="col-12">

                                        <div class="alert" role="alert">
                                        <b>Day:</b>
                                        <span class="badge bg-primary float-end">
                                        ' . date("d-m-y", strtotime('+3 days')) . '
                                        </span>
                                        
                                        <span class="badge bg-success float-end">
                                        ' . date("D", strtotime('+3 days')) . '
                                        </span>

                                        <br>

                                        <b>Temperature:</b>
                                        <span class="badge bg-secondary float-end">
                                        ' . $weather_data["list"][24]["main"]["temp"] . '
                                        
                                        </span>

                                        <br>

                                        <b>Feels Like:</b>
                                        <span class="badge bg-secondary float-end">
                                            ' . $weather_data["list"][24]["main"]["feels_like"] . '
                                        </span>

                                        <br>

                                        <b>Max-Temperature:</b>
                                        <span class="badge bg-secondary float-end">
                                            ' . $weather_data["list"][24]["main"]["temp_max"] . '
                                        </span>

                                        <br>

                                        <b>Min-Temperature:</b>
                                        <span class="badge bg-secondary float-end">
                                            ' . $weather_data["list"][24]["main"]["temp_min"] . '
                                        </span>

                                        <br>

                                        <b>Humidity:</b>
                                        <span class="badge bg-secondary float-end">
                                        ' . $weather_data["list"][24]["main"]["humidity"] . '
                                        </span>

                                        <br>
                                        <b>Wind Speed:</b>
                                        <span class="badge bg-secondary float-end">
                                        ' . $weather_data["list"][24]["wind"]["speed"] . '
                                        </span>

                                        

                                        <br>
                                        <b>Description:</b>
                                        <span class="badge bg-secondary float-end">
                                        ' . $weather_data["list"][24]["weather"][0]["description"] . '
                                        </span>
                                        </div>

                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="carousel-item">
                                <div class="card shadow" style="background-color:#ffffff40;">
                                <div class="card-body">
                                <div class="row">
                                <div class="col-12">

                                <div class="alert" role="alert">
                                <b>Day:</b>
                                <span class="badge bg-primary float-end">
                                ' . date("d-m-y", strtotime('+4 days')) . '
                                </span>
                                
                                <span class="badge bg-success float-end">
                                ' . date("D", strtotime('+4 days')) . '
                                </span>

                                <br>

                                <b>Temperature:</b>
                                <span class="badge bg-secondary float-end">
                                ' . $weather_data["list"][32]["main"]["temp"] . '
                                
                                </span>

                                <br>

                                <b>Feels Like:</b>
                                <span class="badge bg-secondary float-end">
                                    ' . $weather_data["list"][32]["main"]["feels_like"] . '
                                </span>

                                <br>

                                <b>Max-Temperature:</b>
                                <span class="badge bg-secondary float-end">
                                    ' . $weather_data["list"][32]["main"]["temp_max"] . '
                                </span>

                                <br>

                                <b>Min-Temperature:</b>
                                <span class="badge bg-secondary float-end">
                                    ' . $weather_data["list"][32]["main"]["temp_min"] . '
                                </span>

                                <br>

                                <b>Humidity:</b>
                                <span class="badge bg-secondary float-end">
                                ' . $weather_data["list"][32]["main"]["humidity"] . '
                                </span>

                                <br>
                                <b>Wind Speed:</b>
                                <span class="badge bg-secondary float-end">
                                ' . $weather_data["list"][32]["wind"]["speed"] . '
                                </span>

                                

                                <br>
                                <b>Description:</b>
                                <span class="badge bg-secondary float-end">
                                ' . $weather_data["list"][32]["weather"][0]["description"] . '
                                </span>
                                </div>

                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>';
                              }
                            }
                            ?>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>