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
    <div class="container-fluid header">
        <div class="container">
            {{-- logo --}}
            <h1 class="title">
                Becky ada
            </h1>
            {{-- <img src="" alt="logo Becky ada"> --}}
            {{-- end logo --}}

            {{-- menu --}}
            <div class="menu">
                <a href="#">Home </a>
                <a href="#">Articles</a>
                <a href="#">Catégories</a>
                <a href="#about">À propos</a>
                <a href="#contact">Me contactez</a>
            </div>
        </div>
        {{-- end menu --}}
    </div>
    {{-- end header --}}

    {{-- bannière 
    <div class="container-fluid banner">
        <img class="img-fluid" src="img/ban.jpg" alt="bannière du blog">
        <div class="inner-banner">
            <h1>Bienvenue sur blog de Becky Ada</h1>
        </div>
    </div>
    end bannière --}}

    <div class="container-fluid article">
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

    {{-- footer --}}
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
