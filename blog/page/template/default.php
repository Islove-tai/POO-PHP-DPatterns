<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title> <?= App\App::getTitle(); ?> </title>

        <!-- Favicon-->
        <!--<link rel="icon" type="image/x-icon" href="../../public/assets/favicon.ico" />-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />

        <!-- Custom css-->
        <!--<link href="../../public/css/styles.css" rel="stylesheet" />-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/custum-style.css" rel="stylesheet" />

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container"><a class="navbar-brand" href="index.php?p=home">Apprendre la POO</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php?p=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php?p=single">Single</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <?= $content; ?>
            </div>
        </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; PHP POO 2022</p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>

