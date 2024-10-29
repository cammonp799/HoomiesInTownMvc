<?php
class RegisterController
{

    private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }
    
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check if all required fields are filled
            if (isset($_POST['nom'], $_POST['prenom'], $_POST['date_naissance'], $_POST['date_inscription'], $_POST['telephone'], $_POST['email'], $_POST['mot_de_passe'])) {
                
                // Sanitize form data
                $nom = htmlspecialchars(trim($_POST['nom']), ENT_QUOTES, 'UTF-8');
                $prenom = htmlspecialchars(trim($_POST['prenom']), ENT_QUOTES, 'UTF-8');
                $date_naissance = htmlspecialchars(trim($_POST['date_naissance']), ENT_QUOTES, 'UTF-8');
                $date_inscription = htmlspecialchars(trim($_POST['date_inscription']), ENT_QUOTES, 'UTF-8');
                $telephone = htmlspecialchars(trim($_POST['telephone']), ENT_QUOTES, 'UTF-8');
                
                // Validate email
                $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
                if ($email === false) {
                    // Redirect or display an error message if the email is invalid
                    echo "The email is not valid.";
                    return;
                }
    
                // Hash the password
                $mot_de_passe = password_hash(trim($_POST['mot_de_passe']), PASSWORD_BCRYPT);
                
                // Insert data into the database
                $this->userModel->addUser($nom, $prenom, $date_naissance, $date_inscription, $telephone, $email, $mot_de_passe);
                header('Location: /connection');
                exit(); 
            } else {
                echo "All required fields must be filled.";
            }
        }

        $title = "Register";
        // Include the view for the head
        include __DIR__ . '/../views/headConnection.php';
        // Include the view for the header
        include __DIR__ . '/../views/headerRegister.php';
        // Include the view for the register
        include __DIR__ . '/../views/register.php';
        // Include the view for the footer
        include __DIR__ . '/../views/footer.php';

        echo displayHeadConnection($title);
        echo displayHeaderRegister();
        echo displayRegister();
        echo displayFooter();
    }
}
?>