<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $fullname=$_POST["fullname"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $pass=password_hash($_POST["pass"],PASSWORD_DEFAULT);

    $sql=$conn->prepare("insert into user values(?,?,?,?,?)");
    $sql->bind_param('sssss',$fullname,$username,$email,$phone,$pass);
    if($sql->execute()){
        header("Location:login.php");
    }else{
        echo "User Not Register";
    }
}
?>


<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        <div class="container shadow rounded mt-4 col-4 p-4">
          <center><h4>Register</h4></center>
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="fullname"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Full Name</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    name="username"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">User Name</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    type="phone"
                    class="form-control"
                    name="phone"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Phone</label>
            </div>
            <div class="form-floating mb-3">
                <input
                    type="password"
                    class="form-control"
                    name="pass"
                    id="formId1"
                    placeholder=""
                />
                <label for="formId1">Password</label>
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
            
        </form>
        </div>
        

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
