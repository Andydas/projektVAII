<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Domov</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="projektVAII/public/styles/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <style>

    </style>

</head>
<body>


<header>

    <nav class="navbar navbar-expand-lg navbar-light transparent">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>VFDB</strong></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?c=Home">Domov<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filmy
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?c=Movie&a=akcny">Akčné</a>
                            <a class="dropdown-item" href="?c=Movie&a=scifi">Sci-fi</a>
                            <a class="dropdown-item" href="?c=Movie&a=horror">Horrory</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seriály
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?c=Show&a=komedia">Komédie</a>
                            <a class="dropdown-item" href="?c=Show&a=fantasy">Fantasy</a>
                            <a class="dropdown-item" href="?c=Show&a=drama">Drama</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pridaj
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="?c=Movie&a=add">Film</a>
                            <a class="dropdown-item" href="?c=Show&a=add">Seriál</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=Login&a=login" >Prihlásenie</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
<main>
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</main>

</body>
</html>