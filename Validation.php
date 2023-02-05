<!doctype html>
<html>
  <head>
    <title>Form Validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
         .error{
            color: red;
            font-size: 14.5px;
            margin-top: 5px;
        }
    </style>
  </head>
  <body>

    <div class="container bg-info">
   
        <form class="row g-3 mt-5 p-5 shadow" id="form">
        <center><h3>Form Validation</h3></center>
            <div class="col-md-6">
                <label>Username</label>
                <input type="email" class="form-control" id="username">
                <div class="error"></div>
            </div>
            <div class="col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" id="email">
                <div class="error"></div>
            </div>
            <div class="col-6">
                <label>Password</label>
                <input type="password" class="form-control" id="password">
                <div class="error"></div>
            </div>
            <div class="col-6">
                <label>Confirm Password</label>
                <input type="password" class="form-control" id="cpassword">
                <div class="error"></div>
            </div>
            <div class="col-12">
                <button type="submit" id="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>

    <script>
        let id = (id) => document.getElementById(id);
        let classes = (classes) => document.getElementsByClassName(classes);
        let username = id("username"), email = id("email"), password = id("password"), cpassword = id("cpassword"), form = id("form"), errorMsg = classes("error");

        form.addEventListener("submit", (e) => {
        e.preventDefault();
        engine(username, 0, "Username cannot be blank");
        engine(email, 1, "Email cannot be blank");
        engine(password, 2, "Password cannot be blank");
        engine(cpassword, 3, "Confirm Password cannot be blank");
        });

        let engine = (id, serial, message) => {
        if (id.value.trim() === "") {
            errorMsg[serial].innerHTML = message;
            id.style.border = "2px solid red";

        } else {
            errorMsg[serial].innerHTML = "";
            id.style.border = "2px solid green";
        }
        };
    </script>

  </body>
</html>