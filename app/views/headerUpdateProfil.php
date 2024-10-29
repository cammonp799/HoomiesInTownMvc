<?php
function displayHeaderUpdateProfil()
{
    ob_start();
    ?>
    
    <!--Start Header -->
<body>
    <header>
        <section class="navbar">
            <article>
            <img src="Assets/picture/logo/black_logo.png" alt="Black Logo" class="black_logo">
            </article>
            <ul class="links">
                <li><a href="/">Accueil</a></li>
                <li><a href="/colocation">Colocations</a></li>
                <li><a href="/signout">Se déconnecter</a></li>
            </ul>
            <article class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
            </article>
        </section>
        
        <!-- Start Dropdown Menu -->
        <section class="dropdown_menu">
            <li><a href="./index.html">Accueil</a></li>
            <li><a href="/colocation">Colocations</a></li>
            <li><a href="/connection">Se déconnecter</a></li>
        </section>
        <!-- End Dropdown Menu -->

        <section class="contanier_welcome">
            <h1>Modifier votre profil</h1>
        </section>
    </header>
    <!-- End Header -->
<?php
return ob_get_clean();
}