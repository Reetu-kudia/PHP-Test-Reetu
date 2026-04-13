<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $title = $_POST["title"];
    $aname = $_POST["aname"];
    $gen = $_POST["gen"];
    $totalcopy = $_POST["totalcopy"];
    $availcopy = $_POST["availcopy"];

    $sql = $conn->prepare("INSERT INTO book (title, aname, gen, totalcopy, availcopy) VALUES (?,?,?,?,?)");
    $sql->bind_param("sssii", $title, $aname, $gen, $totalcopy, $availcopy);

    if($sql->execute()){
        echo "Book Data Inserted";
    } else {
        echo "Book Data Not Inserted";
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
            
            <div class="container rounded shadow mt-4 col-4 p-5">
               <form action="" method="post">
                <center><h4>Insert Book Details</h4></center>
                
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Book Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="aname"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Author Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="gen"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Book Genre</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="totalcopy"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Total Copy</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="availcopy"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Available Copy</label>
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
