<?php

class SignOutController
{
    public function index()
    {
        // Sign out
        session_start();
        // Remove session variables
        session_unset();  
        // Destroy the session
        session_destroy();  

        // Redirect to the login page
        header("Location: /connection");
        exit();
    }
}  