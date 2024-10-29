<?php

class ConnectionController
{
    private $userModel;
    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

    public function index()
    {
        session_start();

        // Check if the user is already logged in
        if (isset($_SESSION['id'])) {
            // Redirect to the user page if the user is already logged in
            header("Location: /profile");
            exit();
        }

        // Check if the form was submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = htmlentities(strip_tags(stripcslashes(trim($_POST['email']))), ENT_QUOTES, 'UTF-8');
            $password = htmlentities(strip_tags(stripcslashes(trim($_POST['mot_de_passe']))), ENT_QUOTES, 'UTF-8');

            // Find the user by email
            $user = $this->userModel->getUserByEmail($email);

            // Check if the user exists and if the password is correct
            if ($user && password_verify($password, $user['mot_de_passe'])) {
                // Successful login, start a session
                $_SESSION['id'] = $user['id'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['date_naissance'] = $user['date_naissance'];
                $_SESSION['date_inscription'] = $user['date_inscription'];
                $_SESSION['telephone'] = $user['telephone'];
                $_SESSION['email'] = $user['email'];
                
                // Redirect to the user page
                header("Location: /profile");
                exit();
            } else {
                $error = "Incorrect email or password.";
            }
        }

        $title = "";
        // Include the view for the head
        include __DIR__ . '/../views/headConnection.php';
        // Include the view for the header
        include __DIR__ . '/../views/headerConnection.php';
        // Include the view for the connection
        include __DIR__ . '/../views/connection.php';
        // Include the view for the footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadConnection($title);
        echo displayHeaderConnection();
        echo displayConnection();
        echo displayFooter();
    }
}