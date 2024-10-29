<?php
function displayHeaderColocation ()
{
    ob_start();
?>

<body>
    <!--Start Header -->
    <header>
      <section class="navbar">
        <article>
          <img
            src="/Assets/picture/logo/black_logo.png"
            alt="Black Logo"
            class="black_logo"
          />
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
    </header>
    <!-- End Header -->

    <?php
    return ob_get_clean();
}
?>