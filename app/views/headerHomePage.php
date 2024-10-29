<?php
function displayHeaderHomePage()
{
    ob_start();
    ?>

    <!--Start Header -->
<body>
    <header>
        <section class="navbar">
            <video autoplay muted loop class="header_video">
                <source src="Assets/video/video-accueil.MP4" type="video/mp4" alt="Header Video">
            </video>
            <article>
            <img src="Assets/picture/logo/black_logo.png" alt="Black Logo" class="black_logo">
            </article>
            <ul class="links">
                <li><a href="/">Accueil</a></li>
                <li><a href="#Apropos">A propos</a></li>
                <li><a href="/colocation">Colocations</a></li>
                <li><a href="/connection">Se connecter</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <article class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
            </article>
        </section>
        
        <!-- Start Dropdown Menu -->
        <section class="dropdown_menu">
            <li><a href="/">Accueil</a></li>
            <li><a href="#Apropos">A propos</a></li>
            <li><a href="/colocation">Colocations</a></li>
            <li><a href="/connection">Se connecter</a></li>
            <li><a href="#Contact">Contact</a></li>
        </section>
        <!-- End Dropdown Menu -->

        <section class="contanier_welcome">
            <h1>BIENVENUE</h1>
            <p>Hoomies In Town <br>Les spécialistes de la colocation</p>
        </section>

    </header>
    <!-- End Header -->
<?php
return ob_get_clean();
}