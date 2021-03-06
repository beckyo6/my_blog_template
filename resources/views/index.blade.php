<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Mon blog</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- end font --}}

    {{-- css --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    {{-- end css --}}

    {{-- javascripts --}}
    <script href="js/jquery-3.6.0.min.js"> </script>
    <script href="js/bootstrap.min.js"> </script>
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
    {{-- javascripts --}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    {{-- header --}}
    <header>
        <nav class="navbar navbar-expand-md bg-maincolor py-2 fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand text-uppercase fw-bold ">
                    <span class="bg-gradient p-1 rounded-3 text-light">Becky Ada</span>
                </a>
                <div class="offset-md-7">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#post">Articles</a>
                        </li>
                        <li class="nav-item dropdown">
                            <h6 class="nav-link dropdown-toggle text-white">
                                Cat??gories
                            </h6>
                            <div class="dropdown-menu">
                                @for ($i = 0; $i < 5; $i++)
                                    <a class="dropdown-item" href="#">php</a>
                                @endfor
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">?? propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- end header --}}

    {{-- main --}}
    <main>
        <section class="">
            <div class="container-fluid">
                {{-- banni??re --}}
                <div class="row">
                    <img class="img-fluid" height="140px" src="img/ban.jpeg" alt="la banni??re du site">
                    <div class="row">
                        <div class="inner-banner">
                            <h1 class="text-dark text-center fw-bold">Je suis Becky ada, d??veloppeuse web.</h1>
                            <h2 class="text-dark text-center">Bienvenue sur mon blog!</h2>
                        </div>
                    </div>
                </div>
                {{-- end banni??re --}}
            </div>
        </section>
        <section>
            {{-- session --}}
            <div class="row py-4">
                <div class="card-group">
                    {{-- liste des articles --}}
                    <div class="col-md-6 offset-md-1">
                        <h1 id="post">Articles</h1>
                        <hr>
                        <div class="row py-1">
                            <div class="col-md-12">
                                <div class="card mb-3" style="height: 9.3em">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/ban-modified.jpeg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <a href="#">
                                                    <h5 class="card-title fw-bold">Titre de l'article</h5>
                                                </a>
                                                <p class="card-text text-start">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum
                                                    fugiat nesciunt eveniet dolore quibusdam quae dolorum. Culpa
                                                    officiis ea voluptas, delectus necessitatibus dicta asperiores,
                                                    nostrum vero animi sint nihil expedita?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @for ($i = 0; $i < 10; $i++)
                                <div class="col-md-6">
                                    <div class="card text-left mb-3">
                                        <div class="card-body">
                                            <a href="#">
                                                <h5 class="card-title fw-bold">Titre de l'article</h5>
                                            </a>
                                            <p class="card-text text-start">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi neque
                                                accusamus obcaecati aliquam deserunt, eos perferendis corporis impedit
                                                nemo tempora rerum sequi, magnam facilis voluptate laborum mollitia in
                                                repudiandae totam!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    {{-- end liste des articles --}}

                    {{-- 5 derniers articles --}}
                    <div class="col-md-4 offset-md-1">
                        <h1>5 derniers articles</h1>
                        <hr>
                        @for ($i = 0; $i < 5; $i++)
                            <div class="card text-left mb-3" style="width: 18rem;">
                                <div class="card-body">
                                    <a href="#">
                                        <h5 class="card-title fw-bold">Titre de l'article {{$i}}</h5>
                                    </a>
                                    <p class="card-text text-start">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia ab obcaecati, nam
                                        repellendus illum optio vel magni, explicabo expedita tempore alias. Quae,
                                        molestiae
                                        optio iure saepe aliquid quisquam repellat vitae.
                                    </p>
                                </div>
                            </div>
                        @endfor
                    </div>
                    {{-- end 5 derniers articles --}}
                </div>
            </div>
            {{-- end session --}}
        </section>
    </main>
    {{-- end main --}}

    {{-- footer --}}
    <footer class="container-fluid footer">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-5">
                    <h2 id="about" class="text-white">?? propos</h2>
                    <hr>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni minima nihil quae dolorem
                    assumenda voluptatum! Alias rerum, voluptates aut corporis consequuntur, pariatur quas ullam, magnam
                    quasi beatae obcaecati esse.
                </div>
                <div class="col-md-3 offset-md-2">
                    <h2 id="contact" class="text-white">Me contacter</h2>
                    <hr>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque repudiandae autem labore veritatis
                    atque qui voluptas tempora, consectetur nesciunt, expedita dolor accusantium veniam nobis, quisquam
                    nemo mollitia dolore libero quidem!
                    
                    <ul class="social">
                        <li class="list-enligne-item">
                            <a href="#">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href="#">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row offset-9">
                <div class="main-footer d-flex p-2 px-3">
                    <span class="copyright ml-auto my-auto mr-2">Copyright ?? 2022, designed by
                        <a href="https://beckyada.com" rel="nofollow">Becky ada</a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    {{-- end footer --}}

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('h6').mouseover(function() {
            $(this).dropdown('toggle')
        })
    </script>
</body>

</html>
