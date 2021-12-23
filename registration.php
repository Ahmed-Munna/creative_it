<?php
  if(isset($_POST["submit"])){
    // fast name
    if(isset($_POST["fName"])){
      $regex = preg_match('/[A-Z]/i',$_POST["fName"]);
      if($regex){
        $fname = $_POST["fName"];
      }else{
        echo "Unvalid name";
      }
    }else{
      echo "Requred fild";
    }
    // last name
    if(isset($_POST["lName"])){
      $regex = preg_match('/[A-Z]/i',$_POST["lName"]);
      if($regex){
        echo "Your Name: ".$_POST["fName"]." ".$_POST["lName"]."<br/>";
      }else{
        echo "fast name and last name not match";
      }
    }else{
      $requered = "Requred fild";
    }
    // email
    if(isset($_POST["email"])){
      $regex = filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL);
      if($regex){
        echo "Your Email: ".$_POST["email"]."<br/>";
      }
    }else{
      echo "Requred fild";
    }
    // Date of birth
    if(isset($_POST["date"])){
      echo "Your Birthday: ".$_POST["date"]."<br/>";
    }else{
      echo "Requred fild";
    }
    // password 
    if(isset($_POST["password"])){
      $pass = $_POST["password"];
    }else{
      echo "Requred fild";
    }
    // con password
    if($_POST["password"]==$_POST["cpassword"]){
      $regex = preg_match("/^[a-z0-9-' ]+$/i",$_POST["cpassword"]);
      if($regex){
        echo "Your Password: ".$_POST["cpassword"]."<br/>";
      }else{
        echo "Please type valid password";
      }
      $pass = $_POST["cpassword"];
    }else{
      $requered = "password not match";
    }
    // select menu
    if(isset($_POST["select"])){
      echo "Menu: ".$_POST["select"]."<br/>";
    }else{
      echo "password not match";
    }
    if(isset($_POST["flexRadioDefault"])){
      echo "Gender: ".$_POST["flexRadioDefault"]."<br/>";
    }else{
      echo "password not match";
    }

  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>PHP Class 08</title>
    <style>
        body{
            background: #ddd;
            padding: 30px;
        }
        #form1 form select,
       #form1 form input{
            border: 1px solid #ee2e24;
        }
       #form1 form input:focus,
       #form1 form select{
            border: 1px solid #ee2e24;
            box-shadow: none;
        }
        .form_btn{
            text-align: center;
        }
        .form_btn button{
            padding: 10px 30px;
            background: #ee2e24;
            border: none;
            font-size: 25px;
        }
        .form_btn button:focus{
            box-shadow: none;
        }
        .form-check-input:checked {
          background-color: #ee2e24;
          border-color: #ee2e24;
        }
        h1{
          text-align: center;
          background: #000;
          color: #fff;
          font-size: 30px;
          line-height: 55px;
          padding: 0;
          margin-bottom: 15px;
        }
    </style>
  </head>
  <body>
    <section id="form1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="">
                        <h1>Registration</h1>
                        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="fName" class="form-label">Fast Name</label>
                                        <input name="fName" type="text" class="form-control" id="fName" aria-describedby="emailHelp">
                                      </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lName" class="form-label">Last Name</label>
                                        <input name="lName" type="text" class="form-control" id="lName" aria-describedby="emailHelp">
                                      </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                              </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Date of brith</label>
                                <input name="date" type="date" class="form-control" id="date" aria-describedby="emailHelp">
                              </div>

                              <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="password">
                              </div>

                              <div class="mb-4">
                                <label for="cpassword" class="form-label">Confirm Password</label>
                                <input name="cpassword" type="password" class="form-control" id="cpassword">
                              </div>

                              <select name="select" class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="One">One</option>
                                <option value="Two">Two</option>
                                <option value="Three">Three</option>
                              </select>

                              <div class="radio_btn d-flex mb-3 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Male">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Male
                                    </label>
                                  </div>
                                  <div class="form-check ps-5">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Female">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Female
                                    </label>
                                  </div>
                              </div>

                              <div class="form_btn">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
