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
                                    <a href="#">Articles</a>
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
                <div class="row">
                    <img class="w-100" src="img/ban.jpg" alt="la bannière du site">
                    <div class="row">
                        <div class="inner-banner">
                            <h1>Je suis Becky ada, développeuse web.</h1>
                            <h2>Bienvenue sur mon blog!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- end main --}}
    {{-- <div class="container-fluid article">
        <div class="container">
            <section class="col-md-12">
                <div class="row">
                    <article class="col-md-10">
                        <h2>php</h2>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum deserunt odio fugiat
                        expedita assumenda nobis, rem nostrum minima reiciendis similique voluptate dolorem
                        quaerat accusantium, id unde molestias corrupti iste?
                    </article>
                </div>
                <div class="col">
                    <div class="row">
                        <aside class="col">
                            <article class="row">
                                <div class="col-lg-12">
                                    <h2>php</h2>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum deserunt odio
                                    fugiat
                                    expedita assumenda nobis, rem nostrum minima reiciendis similique voluptate dolorem
                                    quaerat accusantium, id unde molestias corrupti iste?
                                </div>
                            </article>
                            <article class="row">
                                <div class="col-lg-12">
                                    <h2>php</h2>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum deserunt odio
                                    fugiat
                                    expedita assumenda nobis, rem nostrum minima reiciendis similique voluptate dolorem
                                    quaerat accusantium, id unde molestias corrupti iste?
                                </div>
                            </article>
                        </aside>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 id="about">À propos</h2>
                    <hr>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat magni minima nihil quae dolorem
                    assumenda voluptatum! Alias rerum, voluptates aut corporis consequuntur, pariatur quas ullam, magnam
                    quasi beatae obcaecati esse.
                </div>
                <div class="col-md-4">
                    <h2 id="contact">Me contacter</h2>
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
