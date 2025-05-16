<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO Scholar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .form{
            text-align:center;
            color: black;
            
        }
        body{
            background-color:#f3f8fe;
        }
        .select{
            text-align:center;
            color: black;
            margin-bottom: 2%;
        }
    </style>

</head>
<body>
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="index.html" class="pull-left visible-md visible-lg">
                        <img  src="images/logo_Scholarship.png"   >
                    </a> 

                    <div class="navbar-brand">
                        <a href="index.html"><h1>GO Scholar</h1></a>
                
                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
  
                </div>

                <div id="collapsable-nav" class="collapse navbar-collapse">
                    <ul id="nav-list" class="nav navbar-nav navbar-right">
                     <li>
                       <a href="index.html">
                         <span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Home</a>
                     </li>
                     <li>
                       <a href="about.html">
                         <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
                     </li>
                     
                    </ul>
                </div>

            </div>

        </nav>
      
           

    </header>
    <div id="main-content">
        <div class="jumbotron">
            <img src="images/STEM-Header-AdobeStock_203363202.jpg"alt="Picture of restaurant" class="img-responsive visible-lg visible-md visible-sm visible-xs">
        </div>
        <div class="select">
        <h2>SELECT YOUR CATEGORY</h2>
        </div>  
        <div class = "form">
        <form action="connection.php" method="post" target="_top">
        <select name="Color">
        <option value="high school">High School</option>
        <option value="graduate">Graduation</option>
        <option value="post">Post Graduation</option>
        
        </select>
        <input type="submit" name="submit" value="Submit" />
        </form>
</div>
    </div>
    <?php
        class Test{
            public function sendVariable(){
                if(isset($_POST['submit'])){
                    $selected_val = $_POST['Color'];
                    return $selected_val;
                }
            }
            
            
        }
        // Storing Selected Value In Variable
        // Displaying Selected Value

        ?>

    
    <!-- <footer class="panel-footer">
        <div class="container">
            <div class="row">
                <section id="hours" class="col-sm-4">
                    <span>Scholarships:</span><br>
                    <a href="menu-categories.html">For High School</a><br>
                    <a href="specials.html">For Graduation</a><br>
                    <a href="post.html">For PostGraduation</a>
                    <hr class="visible-xs">
                </section>
                <section id="address" class="col-sm-4">
                    <span>Follow Us:</span><br>
                    <div class="social-links">
                        <a href="#"><i class = "fab fa-facebook-f"></i></a>
                        <a href="#"><i class = "fab fa-twitter"></i></a>
                        <a href="#"><i class = "fab fa-instagram"></i></a>
                        <a href="#"><i class = "fab fa-youtube"></i></a>
                    </div>
                    
                    <hr class="visible-xs">
                </section>
                <section id="contacts" class="col-sm-4">
                    <span>Contacts:</span><br>
                    +91-1400350130<br>
                    goscholar@gmail.com
                    <div id="rating">
                        <a href="Review.html">Rate Us </a><br>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </div>
                    
                     

                </section>
            </div>
            <div class="text-center">&copy; Copyright GO Scholar 2022</div>
        </div>
                
                
            
    </footer> -->

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>


