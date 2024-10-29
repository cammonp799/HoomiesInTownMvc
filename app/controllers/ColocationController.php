<?php
class ColocationController
{
    public function index()
    {
            $title = "Colocation";
            // Include the view for the head
            include __DIR__ . '/../views/headColocation.php';
            // Include the view for the header
            include __DIR__ . '/../views/headerColocation.php';
            // Include the view for the colocation
            include __DIR__ . '/../views/colocation.php';
            // Include the view for the footer
            include __DIR__ . '/../views/footer.php';
        
            echo displayHeadColocation($title);
            echo displayHeaderColocation();
            echo displayColocation();
            echo displayFooter();
        }
    }
?>