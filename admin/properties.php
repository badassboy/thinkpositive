<?php

include("../functions.php");
$ch = new Business();

if(isset($_POST['property'])){
    $title = $ch->testInput($_POST['title']);
    $district = $ch->testInput($_POST['district']);
    $price = $ch->testInput($_POST['price']);
    $location = $ch->testInput($_POST['location']);
    $size = $ch->testInput($_POST['size']);
    $property_type = $ch->testInput($_POST['use_type']);
    $picture = $_FILES['photo']['name'];
    $feature1 = $ch->testInput($_POST['feature1']);
    $feature2 = $ch->testInput($_POST['feature2']);
    $feature3 = $ch->testInput($_POST['feature3']);
    $feature4 = $ch->testInput($_POST['feature4']);
    $description = $ch->testInput($_POST['description']);
    // var_dump($_POST);
  
  
    $laliga = $ch->uploadProperty($title,$district,$price,$location,$size,$property_type,$picture,$feature1,$feature2,$feature3,$feature4,$description);
    if($laliga){
      $msg = '<div class="alert alert-success" role="alert">Properties uploaded</div>';
    }else {
      $msg = '<div class="alert alert-danger" role="alert">Failed in uploading properties</div>';
    }
  

}
// end of laliga news



?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">

    

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sidestyle.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">

    <style type="text/css">

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .appointment{
                background-color:rgb(255, 255, 255);
                height: 500px;
                padding-top: 3%;
                display: none;
            }

        .event{
                background-color:rgb(255, 255, 255);
                height: 500px;
                padding-top: 3%;
                display: none;
            }

        .counselling{

            background-color:rgb(255, 255, 255);
            height: 350px;
            padding-top: 3%;
            display: none;
        }

        .show {
          display: block;
        }


    </style>
    

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ATSPO</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Advertisement</p>


            <li>
                <a href="#" id="appointment" data-target="one" class="test">Upload Advert</a>
            </li>

            <li>
                <a href="#" id="event" data-target="two" class="test">All Advert</a>
            </li>

         
           
           


            </ul>

           

        </nav>
        <!-- end of sidebar -->

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                    
                </div>
            </nav>

            <h2>Properties</h2>

            <div class="container appointment show" id="one">
              <!-- <div id="message"></div> -->
              <?php
                if(isset($msg)){
                  echo $msg;
                }
              ?>
               <form method="post" id="appoint" enctype="multipart/form-data">

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                <label for="exampleFormControlInput1">Title</label>
    <input type="text" name="title" class="form-control"  placeholder="Title" required>
                        </div>
                        

                        <div class="col">
                    <label for="exampleFormControlInput1">District</label>
<input type="text" name="district" class="form-control"  placeholder="District" required>
                        </div>
                    </div>
                   
                  </div>



                  <div class="form-group">
                    <div class="row">

                        <div class="col">
                            <label for="exampleFormControlInput1">Price</label>
          <input type="number" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price" required> 
                        </div>
                        

                         <div class="col">
                            <label for="exampleFormControlInput1">Location</label>
          <input type="text" name="location" class="form-control" id="exampleFormControlInput1" placeholder="Location" required> 
                        </div>

                         <div class="col">
                            <label for="exampleFormControlInput1">Size</label>
          <input type="text" name="size" class="form-control" id="exampleFormControlInput1" placeholder="Price" required> 
                        </div>

                         <div class="col">
                            <label for="exampleFormControlInput1">Property use type</label>
          
                          <select class="form-control" name="use_type" required>
                      <option value="Commercial">Commercial</option>
                      <option value="Farm Land">Farm Land</option>
                      <option value="Residential">Residential</option>
                      <option value="Mixed use">Mixed use</option>
                    </select>
                        </div>

                    </div>
                     
                    </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Picture</label>
                    <input type="file" class="form-control-file" name="photo" required>
       
                  </div>

                  <div class="form-group">
                    <div class="row">

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Feature 1" name="feature1"
                      required>
                    </div>

                    <div class="col">
                      <input type="text" class="form-control" placeholder="Feature 2" name="feature2"
                      required>
                    </div>

                     <div class="col">
                      <input type="text" class="form-control" placeholder="Feature 3" name="feature3"
                      required>
                    </div>

                     <div class="col">
                      <input type="text" class="form-control" placeholder="Feature 4" name="feature4"
                      required>
                    </div>

                  </div>  
                  </div>

                   

                  <div class="form-group">
                     <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="description"  rows="3" placeholder="Description"></textarea>
                      
                  </div>


<button type="submit" class="btn btn-primary" name="property">Submit</button>
               </form> 
            </div>

    <div class="container event" id="two">

               <table class="table">

            <thead>
              <tr>
                
                <th scope="col">Title</th>
                <th scope="col">Venue</th>
                <th scope="col">Amount</th>
                <th scope="col">Days</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody></tbody>

            </table>
              
            </div>
               
             

            <!-- end of div -->

        </div>
        <!-- end of  content -->
           
    </div>
    <!-- end of wrapper -->

                


           

          

    <!-- jQuery CDN  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <!-- Bootstrap JS -->
   <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        // creating an array-like based of child nodes on a specified class name
        var links = document.getElementsByClassName("test");

     //attach click handler to each
        for (var i = 0; i < links.length; i++) {
            links[i].onclick = toggleVisible;
        }

        function toggleVisible(){
                //hide currently shown item
               document.getElementsByClassName('show')[0].classList.remove('show');
               // getting info from custom data-target  set on the element
               var id = this.dataset.target;
               // showing div
               document.getElementById(id).classList.add('show');
        }

        // display all featured news
        $(document).ready(function(){

$.ajax({
 url:"advert_ajax.php",
 type:"get",
 dataType:"JSON",
 success:function(response){
   console.log(response);
     var len = response.length;
     for (var i = 0; i < len; i++) {

           var edit = response[i]['edit'];
         var my_delete  = response[i]["delete"];

         var action = edit.concat(" ", my_delete);

         var title = response[i]["title"];

         var venue = response[i]["venue"];
       
         var  amount = response[i]["amount"];
         var  days = response[i]["days"];

         var table_str = "<tr>" +
                      
                      
                      "<td>" + title + "</td>" +
                      "<td>" + venue + "</td>" +
                    
                      "<td>" + amount + "</td>" +
                      "<td>" + days + "</td>" +
                      "<td>" + action + "</td>" +
                      "</tr>";


              $(".table tbody").append(table_str);

            }
             
          },
          error:function(response){
            console.log("Error: "+ response);
          }
      
          });  

      });

    var button = document.getElementById("upload");
    button.addEventListener("click", function(){

        online = window.navigator.onLine;


        if (navigator.onLine) {
          // console("onLine");
        } else {
          alert("offline");
        }


    });

  
              


        

           






        


    </script>
</body>

</html>