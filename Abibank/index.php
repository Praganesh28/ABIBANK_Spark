<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
      body{
        background-color: white;
      }
      .navbar{
        background-color: black;
      }
      .app-form-control,.nav-link,.navbar-brand{
        color: white;
      }
      button{
			border:none;
            color:black;
			background: #d9d9d9;
		}
	    button:hover{
        color:white;
			background-color:#777E8B;
			transform: scale(1.1);
			
		}
    </style>

    <title>Basic Banking System</title>
  </head>

  <body>
  <!-- navbar --> 
  <nav class="navbar navbar-expand-md" id="nav">
      <a class="navbar-brand" href="index.php">Abi BANK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createuser.php">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php">Transaction History</a>
              </li>
          </div>
       </nav>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>Abi BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.svg" width="250px" height="250px" class="img-fluid pt-2">
              </div>
            </div><br><br><br>

      <!-- Activity section -->
            <div class="row activity text-center"><br>
                  <div class="col-md act">
                    <img src="img/user.svg" width="200px" height="200px" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div><br>
                  <div class="col-md act">
                    <img src="img/transfer.svg" width="200px" height="200px" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div><br>
                  <div class="col-md act">
                    <img src="img/history.svg" width="200px" height="200px" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Developed by <b>Praganesh K</b> <br> Internship at Sparks Foundation </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>