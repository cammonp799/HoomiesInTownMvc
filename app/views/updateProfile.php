<?php
function displayUpdateProfile($user, $error = null) 
{
    ob_start();

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<!-- views/updateProfile.php -->
<h1>Modifier le profil</h1>
<?php if ($error): ?>
    <div class="error"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
<?php endif; ?>
<form action="/updateProfile" method="post">
    <label>Nom:</label>
    <input type="text" name="nom" value="<?php echo htmlspecialchars($user['nom'], ENT_QUOTES, 'UTF-8'); ?>" required />
    <label>Prénom:</label>
    <input type="text" name="prenom" value="<?php echo htmlspecialchars($user['prenom'], ENT_QUOTES, 'UTF-8'); ?>" required />
    <label>Date de naissance:</label>
    <input type="date" name="date_naissance" value="<?php echo htmlspecialchars($user['date_naissance'], ENT_QUOTES, 'UTF-8'); ?>" required />
    <label>Téléphone:</label>
    <input type="tel" name="telephone" value="<?php echo htmlspecialchars($user['telephone'], ENT_QUOTES, 'UTF-8'); ?>" required />
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?>" required />
    <label>Nouveau mot de passe (laisser vide si inchangé):</label>
    <input type="password" name="mot_de_passe" />
    <input type="submit" value="Mettre à jour" />
</form>

<?php
    return ob_get_clean();
}
?>