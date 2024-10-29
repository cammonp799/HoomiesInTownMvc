<?php
function displayRegister() 
{
    ob_start();
?>
<!-- Start main content -->
<main>
    <!-- Registration form -->
    <form action="" method="post">
        <article>
            <label>Last Name</label>
            <input type="text" name="nom" required />
        </article>
        <article>
            <label>First Name</label>
            <input type="text" name="prenom" required />
        </article>
        <article>
            <label>Date of Birth</label>
            <input type="date" name="date_naissance" required />
        </article>
        <article>
            <label>Registration Date</label>
            <input type="date" name="date_inscription" required />
        </article>
        <article>
            <label>Phone</label>
            <input type="tel" name="telephone" required />
        </article>
        <article>
            <label>Email</label>
            <input type="email" name="email" required />
        </article>
        <article>
            <label>Password</label>
            <input type="password" name="mot_de_passe" required />
        </article>
        <article>
            <input
            type="submit"
            value="Register"
            name="Submit"
            class="btn_login"
            />
        </article>

        <p class="no_account">
            Already have an account? <a href="/connection">Log in</a>
        </p>
    </form>
</main>
<!-- End main content -->
<?php
    return ob_get_clean();
}
?>