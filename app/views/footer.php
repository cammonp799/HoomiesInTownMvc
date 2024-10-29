<?php
function displayFooter() 
{
    ob_start();
    ?>
    <!-- Start footer -->
    <footer>
        <section class="footer_content">
        <section class="footer_logo">
            <img src="Assets/picture/logo/white_logo.png" alt="white logo image">
            <h2>HOOMIES IN TOWN</h2>
        </section>
        
        <section class="footer_info">
            <article >
            <p class="story">
            ABOUT US
            </p>
            <p class="about_us">
            Their vision is to reinvent the concept of shared living for young students
            and individuals, by offering a living environment that promotes community,
            sharing, and mutual support.
            </p>
            
            <article class="sub_story">
                <button class="btn_footer">Learn more</button>
            </article>
        </article>
        
        <article >
            <p class="story">
                OUR CUSTOMER SERVICE
            </p>
            
            <p class="about_us">
                Monday to Saturday
                <br>
                8 AM - 7 PM
                <br>
                Sunday
                <br>
                9 AM - 6 PM
            </p>
        </article>
        
        <article>
            <p class="story">
                Follow us on social media
            </p>

            <p class="about_us">
                <span>LinkedIn</span>
                <br>
                <span>Instagram</span>
                <br>
                <span>Facebook</span>
            </p>
        </article>
        </section>
        
        <section class="footer_mentions">
            <p>Legal Notice</p>
            <p>Terms of Use</p>
            <p>Personal Data and Cookies</p>
        </section>
    
        </section>
        
        <article class="footer_container">
            <p class="end_footer">© Copyright 2024: Chimène Junior</p>
        </article>
    </footer>
    <!-- End footer -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/Assets/javascript/dropdownMenu.js"></script>
    <script src="/Assets/javascript/carrousel.js"></script>
    <script src="/Assets/javascript/colocation.js"></script>
</body>
</html>
<?php
    return ob_get_clean();
}
?>