<?php
class HomePageController
{
    public function index()
    {
        $title = "Accueil";
        // Include the view for the head
        include __DIR__ . '/../views/headHomePage.php';
        // Include the view for the header
        include __DIR__ . '/../views/headerHomePage.php';
        // Include the view for the homepage
        include __DIR__ . '/../views/HomePage.php';
        // Include the view for the footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadHomePage($title);
        echo displayHeaderHomePage();
        echo displayHomePage();
        echo displayFooter();
    }
}