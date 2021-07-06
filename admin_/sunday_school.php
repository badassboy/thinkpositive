<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sidestyle.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <style type="text/css">
        .classes {
            background-color: rgb(255, 255, 255);
            height: 350px;
            padding-top: 3%;
            display: none;
        }

        .group {

            background-color: rgb(255, 255, 255);
            height: 400px;
            padding-top: 2%;
            display: none;
        }

        .attendance{

            background-color: rgb(255, 255, 255);
            height: 500px;
            padding-top: 3%;
            display: none;
        }

        .show{
          display: block;
        }

        .form-check-input {
          margin-left: 4%;
        }

        #exampleFormControlSelect1{
          width: 20%;
        }


    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">

                <li>
                    <a id="create_class" class="test" data-target="one">Create Class</a>
                </li>

                
                <li>
                    <a id="add_member" class="test" data-target="two">Add member to class</a>
                </li>
              

              <li>
                  <a id="roll_call" class="test" data-target="three">Attendance</a>
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

            <h2>Sunday School</h2>
            <div class="container classes show" id="one">
              <div id="msg"></div>
                    <header>Create Class</header>
                <form method="post" action="" id="sunday_school">

                  <div class="form-group">
                    <label>Class Name</label>
                    <input type="text" class="form-control" name="class_name" placeholder="class">
                  </div>


                  <div class="form-group">
                    <label>Teacher</label>
                    <input type="text" class="form-control" name="teacher" placeholder="teacher">
                  </div>

                  <button type="submit" class="btn btn-primary">Create Class</button>
                </form>
                
            </div>

            <div class="container group" id="two">
              <div id="response"></div>
                    <header>Add member to class</header>
                <form method="post" id="sunday_classes">

                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first" placeholder="First Name">
                  </div>

                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last" placeholder="Last Name">
                  </div>

                  <div class="form-group">
                     <label>Classes</label>
                     <select class="form-control" id="class_select" name="selected_class">
                       <option>Select</option>
                     </select>
                   </div>

                  <button type="submit" class="btn btn-primary">Member Added</button>
                </form>
                
            </div>



            <div class="container attendance" id="three">
              <div id="response"></div>
              <header>Attendance Records</header>

               <form>
                 <div class="form-group">
                    <label>Classes</label>
                    <select class="form-control" id="my_select" name="select_tag">
                      <option>Select</option>
                     
                    </select>
                  </div>
               </form>

                <table class="table table-bordered">

                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">FirstName</th>
                      <th scope="col">LastName</th>
                      <th scope="col">Date<span><input class="form-control" name="preach_date" type="date" id="example-date-input" required="required"></span></th>
                      <th scope="col">Present</th>
                      <th scope="col">Absent</th>
                    </tr>
                  </thead>

                  <tbody>
                    <!-- <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td></td>
                      <td> <input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                      <td> <input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td></td>
                      <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                      <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td >Larry the Bird</td>
                      <td>@twitter</td>
                      <td></td>
                      <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                      <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    </tr> -->
                  </tbody>
                </table>

                
                
            </div>




        </div>
        <!-- end of  content -->
           
    </div>
    <!-- end of wrapper -->
                     


           

          

    <!-- jQuery CDN  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <!-- Bootstrap JS -->
   <script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });


        // hiding and showing div based on link cliked
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

        // ajax for creating sunday school
        $(document).ready(function(){

            $("#sunday_school").submit(function(e){
              e.preventDefault();
              $.ajax({
                type:"post",
                url:"sunday_processing.php",
                data:$("#sunday_school").serialize()
              })

              .done(function(data){
                $("#msg").html(data);
                console.log("hello");
              })

              .fail(function(data){
                $("#msg").html(data);
                console.log("hi");
              });

             $("#sunday_school").find('input').val(" ");
                
            });

        });


        // ajax for adding member to class
        $(document).ready(function(){

            $("#sunday_classes").submit(function(e){
              e.preventDefault();
              $.ajax({
                type:"post",
                url:"sunday_class.php",
                data:$("#sunday_classes").serialize()
              })

              .done(function(data){
                $("#response").html(data);
                console.log("hello");
              })

              .fail(function(data){
                $("#response").html(data);
                console.log("hi");
              });

             $("#sunday_classes").find('input').val(" ");
                
            });

        });

        //display names according to class selected.
        $(document).ready(function(){

          var selected = document.getElementById("my_select");
          // console.log(selected);
          selected.addEventListener("change",function(){

            var select = document.getElementById("my_select");
            var selected_value = select.value;
            // console.log(selected_value); 



            $.ajax({
              url:"sunday_class_ajax.php",
              data:{"my_class":selected_value},
              type:"get",
              dataType:"JSON",
              success:function(response){
                  var len = response.length;
                  for (var i = 0; i < len; i++) {


                      var checkbox = '<input type="checkbox" class="form-check-input" id="exampleCheck1">';
                      var id = response[i]["one"];
                      var first_name = response[i]["two"];
                      var last_name = response[i]["three"];

                        var table_str = "<tr>" +
                                     "<td>" + id + "</td>" +
                                     "<td>" + first_name + "</td>" +
                                     "<td>" + last_name + "</td>" +
                                     "<td>" +  + "</td>" +
                                     "<td>" + checkbox + "</td>" +
                                     "<td>" + checkbox + "</td>" +
                                     "</tr>";


                             $(".table tbody").append(table_str);
                     
                  }
              },
              error:function(response){
                  console.log("Error in: "+ response);
              }
            });

          });

        });
          

           


        // ajax for  displaying class in select form
        $(document).ready(function(){

              $.ajax({
                url:"sunday_ajax.php",
                type:"get",
                dataType:"JSON",
                success:function(response){
                    var len = response.length;
                    for (var i = 0; i < len; i++) {


                        var class_name = response[i]["class"];

                            var option_string = "<option value='test'>" + class_name + "</option>";

                             $("form select").append(option_string);

                       
                    }
                },
                error:function(response){
                    console.log("Error: "+ response);
                }
              });

        });

    </script>
</body>

</html>
                             

                            

             

                
