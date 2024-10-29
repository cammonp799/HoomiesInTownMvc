<?php
function displayColocation()
{
    ob_start();
    ?>
        <!--start main-->
        <main>
            <section class="appartement">
            <article>
                <h1>
                    Find a room <br/>
                    for co-living.
                </h1>
            
                <p>
                    Are you looking for a co-living room? Look no further! At
                    <br/>
                    Hoomies In Town, we offer co-living spaces
                <br/>, 
                    providing comfortable, fully equipped areas.
                </p>
            </article>
            </section>
        
            <section class="container-colocation">
                <!--Main article-->
                <article class="appartements-colocation">
                    <!--1-->
                    <article id="appart1">
                        <img
                        src="Assets/picture/apartement/appartement_LeHavre.jpeg"
                        alt="Apartment Bordeaux"
                        />
                        <article class="container-list">
                            <h4>From €550</h4>
                            <p class="localisation">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="30"
                                height="30"
                                fill="currentColor"
                                class="bi-lts"
                                viewBox="0 0 16 16"
                                >
                                <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"
                                />
                                <path
                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"
                                />
                            </svg>
                            Toulouse, Occitanie
                        </p>
                        
                        <p class="cercle">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="80"
                            height="80"
                            fill="currentColor"
                            class="bi-circle"
                            viewBox="0 0 16 16"
                            >
                            <path
                            fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"
                            />
                        </svg>
                    </p>
                    <p class="chambre">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="30"
                        height="30"
                        fill="currentColor"
                        class="bi-heart"
                        viewBox="0 0 16 16"
                        >
                        <path
                        d="M8 6.982C9.664 5.309 13.825 8.236 8 12 2.175 8.236 6.336 5.309 8 6.982"
                        />
                        <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"
                        />
                    </svg>
                    3 rooms
                </p>
                <p class="superficie">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    fill="currentColor"
                    class="bi-expand"
                    viewBox="0 0 16 16"
                    >
                    <path
                        fill-rule="evenodd"
                        d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707"
                    />
                    </svg>
                    65.00 m²
                </p>
            </article>
        </article>
        <!--1-->
        <!-- Continue translating other items as needed -->
        <!-- Main article-->
            </article>

            <article id="map"></article>
          </section>
        </main>
        <!--End main-->

    <?php
    return ob_get_clean();
}
?>