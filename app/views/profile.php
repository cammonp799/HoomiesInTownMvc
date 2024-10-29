<?php
function displayProfile()
{
    ob_start();

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Retrieve the user's first and last name from the session
    $userName = isset($_SESSION['nom']) ? $_SESSION['nom'] : 'Nom';
    $userPrenom = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : 'Prénom';
    ?>

    <!-- views/profile.php -->
    <main>
        <section class="dashboard_title">
            <section class="dashboard">
                <article class="profile">
                    <img src="/Assets/picture/connection/Emoji fille.png" class="emoji" alt="Profile Image">
                    <h4><?php echo htmlspecialchars($userPrenom . ' ' . $userName, ENT_QUOTES, 'UTF-8'); ?></h4>
                    <article class="dashboard_btn">
                        <a href="/updateProfile" class="btn_dashboard">Edit Profile</a>
                        <a href="/delete" class="btn_dashboard_1" onclick="return confirm('Are you sure you want to delete your profile?');">Delete Profile</a>
                    </article>
                </article>
            </section>
        </section>
    </main>

    <?php
    return ob_get_clean();
}
?>