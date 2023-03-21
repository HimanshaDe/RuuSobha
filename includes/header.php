

<html>
    <head>

    <link rel="stylesheet" href="header.css">
    </head>

    <body>
    <section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
   
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="" style="display:flex">
    
    </div>  
    <img src="assets/images/logo.png" style="width:75px; margin-right: 30px;" alt="product" class="img-responsive ">
        <h1><a class="navbar-brand" href="index.php"> <!--<span class="fa fa-line-chart" aria-hidden="true"></span> -->
               Salon RuuSobha
            </a></h1>
            <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa icon-expand fa-bars"></span>
        <span class="fa icon-close fa-times"></span>
            </button>
      
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                     
                     <?php if (strlen($_SESSION['bpmsuid']==0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="signup.php">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li><?php }?>
                    <?php if (strlen($_SESSION['bpmsuid']>0)) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="book-appointment.php">Book Salon</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="booking-history.php">Booking History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="invoice-history.php">Invoice History</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="change-password.php">Setting</a>
                    </li>

                    <li class="nav-item">
                        
                        <button type="button" class="nav-link" style="    text-decoration: none;border: none;outline: inherit;border: none; color:white;" data-toggle="modal" data-target="#myModal">chatbox</button>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>



                    
    
                  <?php }?>
                </ul>
                
            </div>
        </div>

        </nav>
    </div>


    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      
        <h4 class="modal-title">Chatbox</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="height: 690px;">
      <iframe src="./chatbot/mainbot.php" height="750px" width="700px" title="Iframe Example"></iframe>
      </div>
      
    </div>

  </div>
</div>
      </header>
</section>
    </body>
</html>
