<?php

class DeleteController
{
    private $userModel;

    public function __construct($userModel)
    {
        $this->userModel = $userModel;
    }

    public function delete()
    {
        session_start();

        // Check if the user is logged in
        if (!isset($_SESSION['id'])) {
            header("Location: /connection");
            exit();
        }

        $id = $_SESSION['id'];

        // Call the model to delete the user
        try {
            $this->userModel->deleteUser($id);

            // Destroy the session and redirect to the login or home page
            session_destroy();
            header("Location: /connection");
            exit();
        } catch (Exception $e) {
            // Handle errors (add an error message to display in the view)
            $error = $e->getMessage();
            
        }
    }
}