<?php
function displayConnection() 
{
    ob_start()
?>

<!-- Start main content -->
<main>
    <!-- Login form -->
    <form action="" method="post">
        <article>
            <label>Email</label>
            <input type="email" name="email" required />
        </article>
        <article>
            <label>Password</label>
            <input type="password" name="mot_de_passe" required />
        </article>
        <article>
            <input type="submit" value="Login" class="btn_login" />
        </article>
        <p class="no_account">
            Don't have an account? <a href="/register">Sign up</a>
        </p>
    </form>
    <!-- End login form -->
</main>
<!-- End main content -->

<?php
    return ob_get_clean();
}
?>