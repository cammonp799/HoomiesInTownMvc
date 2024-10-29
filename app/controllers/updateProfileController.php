<?php
class UpdateProfileController
{
    private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

    public function displayUpdateProfile($user, $error = null) 
    {
        ob_start();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        ?>

        <!-- views/updateProfile.php -->
        <h1>Update Profile</h1>
        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>
        <form action="/updateProfile" method="post">
            <label>Last Name:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($user['nom'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>First Name:</label>
            <input type="text" name="prenom" value="<?php echo htmlspecialchars($user['prenom'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Date of Birth:</label>
            <input type="date" name="date_naissance" value="<?php echo htmlspecialchars($user['date_naissance'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Phone:</label>
            <input type="tel" name="telephone" value="<?php echo htmlspecialchars($user['telephone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>New Password (leave blank if unchanged):</label>
            <input type="password" name="mot_de_passe" />
            <input type="submit" value="Update" />
        </form>

        <?php
        return ob_get_clean();
    }

    public function index()
    {
        session_start();

        // Check if the user is logged in
        if (!isset($_SESSION['id'])) {
            header("Location: /connection");
            exit();
        }

        // Retrieve user information from the session
        $user = [
            'id' => $_SESSION['id'],
            'nom' => $_SESSION['nom'],
            'prenom' => $_SESSION['prenom'],
            'date_naissance' => $_SESSION['date_naissance'],
            'telephone' => $_SESSION['telephone'],
            'email' => $_SESSION['email'],
        ];

        include __DIR__ . '/../views/headProfile.php';
        include __DIR__ . '/../views/headerProfile.php';
        echo $this->displayUpdateProfile($user); // Use the method here
        include __DIR__ . '/../views/footer.php';
    }

    public function update()
    {
        session_start();

        // Check if the user is logged in
        if (!isset($_SESSION['id'])) {
            header("Location: /connection");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_SESSION['id'];
            $nom = $_POST['nom'] ?? '';
            $prenom = $_POST['prenom'] ?? '';
            $date_naissance = $_POST['date_naissance'] ?? '';
            $telephone = $_POST['telephone'] ?? '';
            $email = $_POST['email'] ?? '';
            $mot_de_passe = !empty($_POST['mot_de_passe']) ? $_POST['mot_de_passe'] : null;

            // Call the model to update the user
            try {
                $this->userModel->updateUser($id, $nom, $prenom, $date_naissance, $telephone, $email, $mot_de_passe);

                // Update the session
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['date_naissance'] = $date_naissance;
                $_SESSION['telephone'] = $telephone;
                $_SESSION['email'] = $email;

                header("Location: /profile");
                exit();
            } catch (Exception $e) {
                // Handle errors (add an error message to display in the view)
                $error = $e->getMessage();
            }
        }

        // If the method is not POST, display the view with user information
        $user = [
            'id' => $_SESSION['id'],
            'nom' => $_SESSION['nom'],
            'prenom' => $_SESSION['prenom'],
            'date_naissance' => $_SESSION['date_naissance'],
            'telephone' => $_SESSION['telephone'],
            'email' => $_SESSION['email'],
        ];

        // Display the page with a title and potentially an error
        $title = 'update';
        include __DIR__ . '/../views/headProfile.php';
        if (function_exists('displayheadProfile')) {
            echo displayheadProfile($title);
        }
        include __DIR__ . '/../views/headerProfile.php';
        echo $this->displayUpdateProfile($user, $error ?? null); // Pass the error if it exists
        include __DIR__ . '/../views/footer.php';
    }
}
?>