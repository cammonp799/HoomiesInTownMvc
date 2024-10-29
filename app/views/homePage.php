<?php
function displayHomePage()
{
    ob_start();
    ?>
        <!--Start main-->
        <main>
        <!--first main section-->
        <section class="Primary_Feature">
            <article>
                <h3 class="Primary_Feature_title" data-aos="fade-center"> TROUVEZ VOTRE <br>COLOCATION IDEALE </h3>
            <article class="Primary_Feature_description" data-aos="fade-left">
                <p> 
                    Découvrez la nouvelle façon de partager un logement avec Hoomies In Town. 
                    Notre plateforme révolutionnaire met en relation les propriétaires de  
                    logements avec des colocataires en quête de liberté et de flexibilité. 
                    Que vous ayez besoin d’une chambre pour une courte durée ou d’un appartement spacieux pour un séjour prolongé, 
                    Hoomies In Town a la solution qui vous convient. 
                    Profitez d’un espace confortable et d’un environnement convivial, 
                    que ce soit pour un séjour professionnel ou pour vivre une nouvelle aventure en communauté.
                </p>
            </article>
            
            <p class="read_more">
                Découvrez la nouvelle façon de partager un logement avec Hoomies In Town. 
                Notre plateforme révolutionnaire met en relation les propriétaires de  
                logements avec des colocataires en quête de liberté et de flexibilité. 
            </p>
        </article>
    </section>
    <!--End first main section-->

    <!-- About us section-->
    <section class="about_section" id="Apropos">
        <article class="about_container">
            <article class="about_title">
                <h2>
                    EXPLOREZ LA VILLE  <br> EN TOUTE LIBERTE <br>
                    AVEC HOOMIES IN TOWN ! 
                </h2>
                
                <p>
                    Trouvez la colocation de vos rêves en un clin d’œil avec Hoomies in Town. 
                Découvrez pourquoi notre plateforme est le meilleur choix pour tous vos besoins en colocation :
                </p>
            </article>
            
            <!-- About us section-->
            
            <article class="about_description">
                <!--1-->
                <h3 class="about_discover">DECOUVREZ HOOMIES IN TOWN</h3>
                <article class="about_description_item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" >
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                    <p>Trouvez une colocation en quelques clics grâce à notre plateforme simple et rapide.</p>
                </article>
                <!--1-->

                <!--2-->
            <article class="about_description_item">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" >
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <p>
                    Découvrez notre sélection variée de logements, allant des studios modernes aux appartements spacieux en colocation.
                </p>
            </article>
            <!--2-->

            <!--3-->
            <article class="about_description_item" id="about_discover_none">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" >
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <p>Profitez de colocations abordables qui s'adaptent à votre budget.</p>
            </article>
            <!--3-->

            </article>
    <!-- About us section-->
            </article>
    </section>
    <!-- About us section-->

    <!-- Carousel section-->
    <section class="Carousel_section ">
        <article class="Carousel_title">
            <h4> Ne cherchez plus! </h4>
            <p>
                Votre projet d'investissement ou votre futur logement est chez nous .
            </p>
            
            <button class="btn-style">En savoir plus</button>
        </article>
    <!-- Slider main container -->
    <section class="swiper">
    <!-- Additional required wrapper -->
    <article class="swiper-wrapper">
    <!-- Slides -->
    <article class="swiper-slide" style="background-image: url(Assets/picture/apartement/appartement_marseille.jpg);" > MARSEILLE</article>
    <article class="swiper-slide" style="background-image: url(Assets/picture/apartement/appartement_montpellier.jpg);">MONTPELLIER</article>
    <article class="swiper-slide" style="background-image: url(Assets/picture/apartement/appartement_paris.jpeg);">PARIS</article>
    </article>
    <!-- If we need navigation buttons -->
    <article class="swiper-button-prev"></article>
    <article class="swiper-button-next"></article>
    </section>
    </section>

    <!-- Carousel section-->

    <!--Start second main section-->
    <section class="Secondary_Feature" id="contact">
        <article class="Secondary_Feature_container">
        <article class="Secondary_Feature_title">
            <h3>CONTACTEZ-NOUS</h3>
            <p class="Secondary_Feature_description">
                N’hésitez pas à nous contacter, notre équipe est disponible pour vous 
                accompagner à chaque étape de votre recherche de colocation. Nous sommes 
                là pour vous aider !
            </p>
        </article>

        <article class="contact_phone">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="50"
            height="50"
            fill="currentColor"
            class="bi bi-telephone"
            viewbox="0 0 16 16">
            <path
            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
            </svg>
            <p>
                07 00 00 00 00
            </p>
        </article>
        
        <article  class="contact_mail">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="50 "
            fill="currentColor"
            class="bi bi-chat-square-text"
            viewbox="0 0 16 16">
            <path
            d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path
            d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
            </svg>
            <p>hommiesInTown@gmail.com</p>
        </article>
    </article>
    
    <article>
        <h3 class="form_h3">NOUS CONTACTER</h3>
        <form action="">
        <input type="text" class="input-field" placeholder=" Nom">
        <input type="text" class="input-field" placeholder="Prénom">
        <input type="text" class="input-field" placeholder=" Télephone">
        <input type="email" class="input-field" placeholder="E-mail" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" >
        <select name="liste" id="liste" class="input-field">
            <option value="option 1">Le sujet </option>
            <option value="option 2">--</option>
            <option value="option 3">Je souhaite devenir locataire</option>
            <option value="option 4">Je souhaite devenir propriétaire</option>
            <option value="option 5">Autre demande</option>
        </select>
    <textarea name="message" id="" placeholder="Message" class="input-field"></textarea> 
    <button>Envoyer</button>
    </form>
    </article>
</section>
<!--End second main section-->
</main>
<!--End main-->
<?php
    return ob_get_clean();
}
?>
