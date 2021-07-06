<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.min.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sidestyle.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">

    <style type="text/css">
        .sermon{
            background-color:rgb(255, 255, 255);
            height: 700px; 
            padding-top: 3%;
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
                <p>Dummy Heading</p>
                
                <li>
                    <a href="#">Create Sermon</a>
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

            <h2>Sermon Page</h2>
            <div class="container sermon">
              <div id="msg"></div>
                <h5>Please fill below fields to create a sermon</h5>
                <form method="post" id="sermon">

                  <div class="form-group">
                    <label>Preacher Name</label>
                    <input type="text" name="preacher" class="form-control" placeholder="Preacher Name" required="required">
                  </div>

                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" required="required">
                  </div>

                 <div class="form-group">
                    <label>Type of event</label>
                    <select class="form-control" name="schedule" required="required">
                      <option>Select</option>
                      <option>Sunday Preaching</option>
                      <option>Midweek</option>
                      <option>All Night</option>
                    </select>
                  </div>

               
                    <div class="form-group">
                      <label>Key Scriptures</label>
                      <textarea class="form-control" name="scripture" rows="3"
                      placeholder="Key Scriptures" required="required"></textarea>
                    </div>

                      <div class="form-group">
                        <label>Extra Notes</label>
                        <textarea class="form-control" name="note" rows="3"
                        placeholder="Notes"></textarea>
                      </div>

                  <button type="submit" class="btn btn-primary">Create</button>
                </form>
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

        // ajax form submission

          $(document).ready(function(){

            $("#sermon").submit(function(e){

              e.preventDefault();
              $.ajax({
                       url: 'create_sermon.php',
                       dataType: 'text',
                       type: 'post',
                       data: $("#sermon").serialize(),
                       success: function( data, textStatus, jQxhr ){
                           $('#msg').html( data );
                           console.log("hello");
                       },
                       error: function( jqXhr, textStatus, errorThrown ){
                           console.log( errorThrown );
                       }
                   });
        // $.ajax({
              //   type:"post",
              //   url:"create_sermon.php",
              //   dataType:"text",
              //   data:$("#sermon").serialize(),
              // success:function(data)
              // {
              //     $("#msg").html(data);
              //     // console.log(typeof response);
              //     console.log("hello");
              // },
              // error:function(data)
              // {
              //   $("#msg").html(data);
              //   console.log("hi");
              // }


              // });
          // end of ajax
            $("#sermon").find('input,textarea,select').val(" ");

            });
            // end of form submission

          });
          // end of ready function


            
                

           



          
       

    </script>
</body>

</html>