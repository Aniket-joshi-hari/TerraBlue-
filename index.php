<!DOCTYPE html>
<html>
    <head>
        <title>
            TerraBlue
        </title>
        <script src="script.js"></script>
        <link href="style.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
         
    </head>
    <body >
           
        <div class="main">
                <header class="navbar">
                        <h3 class="nav-heading "> TerraBlue</h3> 
                  </header>
                  <div class="Container">
                    <div class="body-heading">
                          TerraBlue XT Health Report
                    </div>
                    <div class="for-time" id="time">
                      <script>
                      var date=new Date();
                          var fullDate= date.getDate() + "/"+(date.getMonth()+1)+"/"+date.getFullYear();
                          document.getElementById('time').innerHTML="Today :"+fullDate;
                      </script>
                    </div>
                    <div class="middle-container">
                       <div class="text-center">
                          Heart Rate Variability Analysis Report
                       </div>
                    </div>
                    </div>
       <div class="row" >
        <div class="col-sm-12 col-md-6 mt-2"> 
            <div style="border:1px solid #ccc;height:200px;margin-top:10px;background-image:url('./resources/heart_rate.png');background-size: contain;background-repeat: no-repeat;"></div>
        </div>
        <div class=" col-xs-12 col-md-6 " >
                <div style="border:1px solid #ccc;height:200px;margin-top:10px;">
                 <div class="row">
                  <div class="col-sm-4">
                        <div class="row">
                         <div class="col-sm-6">
                    <ul class="Patient-info">
                        <li>Patient Name:</li>
                        <li>Index Number:</li>
                        <li>Age:</li>
                        <li>Sex:</li>
                    </ul>
                    </div>
                    <div class="col-sm-6">
                            <ul class="Patient-info">
                                <li id="uname">Patient Name</li>
                                <li>Index Number</li>
                                <li>Patient Information</li>
                                <li>Age	</li>
                            </ul>
                            </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                        <ul class="Patient-info">
                                <li ></li>
                                <li>Index Number</li>
                                <li>Patient Information</li>
                                <li>Age	</li>
                            </ul>
                </div>
                <div class="col-sm-4">
                    hello this is aniket
                </div>
              </div>
                
                </div>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-md-12">
                <div style="border:1px solid #ccc;height:300px;background-image:url('./resources/heart_rate1.png');background-size:100% 100%; background-repeat: no-repeat;"></div>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
            <div class="col-sm-7">
                    <div style="border:1px solid #ccc;height:200px;background-image:url('./resources/lfhf-hf.png');background-size:100% 100%; background-repeat: no-repeat;"></div>
            </div>
            <div class="col-sm-5">
                    <div style="border:1px solid #ccc;height:200px;background-image:url('./resources/Poincare.png');background-size:100% 100%; background-repeat: no-repeat;"></div>
            </div>
        </div>

         <div class="row" style="margin-top:10px;">
            <div class="col-sm-7">
                    <div style="border:1px solid #ccc;height:200px;background-image:url('./resources/PSD.png');background-size:100% 100%; background-repeat: no-repeat;"></div>
            </div>
            <div class="col-sm-5">
                    <div style="border:1px solid #ccc;height:200px;background-image:url('./resources/RR_INTERVAL.png');background-size:100% 100%; background-repeat: no-repeat;"></div>
            </div>
        </div>
        
        </div>
       </div>
        </div>
        
    </body>
</html>