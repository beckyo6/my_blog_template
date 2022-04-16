<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Mon blog</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    {{-- end font --}}

    {{-- css --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    {{-- end css --}}

    {{-- javascripts --}}
    <script href="js/bootstrap.min.js"> </script>
    {{-- javascripts --}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    {{-- header --}}
    <header>
        <nav class="bg-light">
            <div class="conatiner">
                <div class="container-fluid">
                    <div class="bg-maincolor py-2 px-1 text-white">
                        <div class="row">
                            <div class="col-2">
                                <h2 class="logo">Becky Ada</h2>
                            </div>
                            <div class="col-6 offset-md-4">
                                <div class="menu text-center">
                                    <a href="#">Home </a>
                                    <a href="#post">Articles</a>
                                    <a href="#">Catégories</a>
                                    <a href="#about">À propos</a>
                                    <a href="#contact">Me contactez</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    {{-- end header --}}

    {{-- main --}}
    <main>
        <section class="">
            <div class="container-fluid">
                {{-- bannière --}}
                <div class="row">
                    <img class="img-fluid" height="140px" src="img/ban-modified-2.jpeg" alt="la bannière du site">
                    <div class="row">
                        <div class="inner-banner">
                            <h1 class="text-white">Je suis Becky ada, développeuse web.</h1>
                            <h2 class="text-white">Bienvenue sur mon blog!</h2>
                        </div>
                    </div>
                </div>
                {{-- end bannière --}}
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
                                <div class="card mb-3" style="height: 13.4em">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/ban-modified.jpeg" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum fugiat nesciunt eveniet dolore quibusdam quae dolorum. Culpa officiis ea voluptas, delectus necessitatibus dicta asperiores, nostrum vero animi sint nihil expedita?
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
                                            <h5 class="card-title">Special title treatment</h5>
                                            <p class="card-text">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi neque accusamus obcaecati aliquam deserunt, eos perferendis corporis impedit nemo tempora rerum sequi, magnam facilis voluptate laborum mollitia in repudiandae totam!
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
                        <div class="card text-left mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia ab obcaecati, nam repellendus illum optio vel magni, explicabo expedita tempore alias. Quae, molestiae optio iure saepe aliquid quisquam repellat vitae.
                                </p>
                            </div>
                        </div>

                        <div class="card text-left mb-2" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae rem voluptatem, delectus ab culpa perferendis, ad expedita cumque reprehenderit nostrum, et saepe animi blanditiis aliquid quos! Atque molestiae delectus modi.
                                </p>
                            </div>
                        </div>
                        <div class="card text-left mb-2" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam consectetur et quas corrupti, velit rem accusantium aliquam ad itaque minus, modi corporis tempore ea. Explicabo iusto consequuntur obcaecati amet nobis!
                                </p>
                            </div>
                        </div>
                        <div class="card text-left mb-2" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title mb-2">Special title treatment</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident neque voluptatum rerum dolore quis illum consequatur accusamus modi eaque pariatur corrupti ipsam beatae cupiditate totam, deserunt, perferendis tempore alias tenetur.
                                </p>
                            </div>
                        </div>
                        <div class="card text-left" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda maiores placeat nobis eum alias. Debitis delectus fuga corporis adipisci, nesciunt, maiores incidunt ad fugiat quae quis reprehenderit rerum at ab?
                                </p>
                            </div>
                        </div>
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
                    <h2 id="about" class="text-white">À propos</h2>
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
                </div>
            </div>
        </div>
    </footer>
    {{-- end footer --}}
</body>

</html>
