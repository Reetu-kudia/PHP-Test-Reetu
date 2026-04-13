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
           <div class="container">
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="#">Hello</a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                         
                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Add Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update Book</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete Book</a>
                            </li>
                            
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="pdf.php"
                            >
                                Generate PDF
                            </button>
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
           </div>
           
        </header>
        <main>
            <div class="container">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="First slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="1"
                            aria-label="Second slide"
                        ></li>
                        <li
                            data-bs-target="#carouselId"
                            data-bs-slide-to="2"
                            aria-label="Third slide"
                        ></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img
                                src="https://png.pngtree.com/thumb_back/fh260/background/20240913/pngtree-stack-of-books-in-a-library-with-blurred-bookshelves-background-image_16181415.jpg"
                                class="w-100 d-block"
                                alt="First slide"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://media.istockphoto.com/id/1460007178/photo/library-books-on-table-and-background-for-studying-learning-and-research-in-education-school.jpg?s=612x612&w=0&k=20&c=OV_sdclWUExHy0VKPeZwyen2mO6g1NwAIBbLPT_Hd30="
                                class="w-100 d-block"
                                alt="Second slide"
                            />
                        </div>
                        <div class="carousel-item">
                            <img
                                src="https://inspaceschoolfurniture.com/wp-content/uploads/2022/11/Shelving-in-School-Libraries.jpg"
                                class="w-100 d-block"
                                alt="Third slide"
                            />
                        </div>
                    </div>
                    <button
                        class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="prev"
                    >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                        class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselId"
                        data-bs-slide="next"
                    >
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
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
