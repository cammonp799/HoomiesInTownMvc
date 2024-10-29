<?php
class ProfileController
{
    public function index()
    {
        $title = "User Profile";
        
        // Include the view for the head
        include __DIR__ . '/../views/headProfile.php';
        // Include the view for the header
        include __DIR__ . '/../views/headerProfile.php';
        // Include the view for the profile
        include __DIR__ . '/../views/profile.php';
        // Include the view for the footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadProfile($title);
        echo displayHeaderProfile();
        echo displayProfile();
        echo displayFooter();
    }
}
?>