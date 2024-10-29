<?php
class UserModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //Add a new user
    public function addUser($nom, $prenom, $date_naissance, $date_inscription, $telephone, $email, $mot_de_passe)
    {
        $sql = "INSERT INTO utilisateurs (nom, prenom, date_naissance, date_inscription, telephone, email, mot_de_passe) VALUES (:nom, :prenom, :date_naissance, :date_inscription, :telephone, :email, :mot_de_passe)";
        try {
            $statement = $this->db->prepare($sql);
            $statement->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':date_naissance' => $date_naissance,
                ':date_inscription' => $date_inscription,
                ':telephone' => $telephone,
                ':email' => $email,
                ':mot_de_passe' => $mot_de_passe
            ]);
        } catch (PDOException $e) {
            // Gestion des erreurs
            throw new Exception("Erreur lors de la requête : " . $e->getMessage());
        }
    }

    // Find user by email
    public function getUserByEmail($email)
    {
        $statement = $this->db->prepare("SELECT * FROM utilisateurs WHERE Email = :email");
        $statement->bindParam(':email', $email);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    
    // Verify password
    // public function verifyPassword($password, $hashedPassword)
    // {
    //     return password_verify($password, $hashedPassword);
    // }

    public function updateUser($id, $nom, $prenom, $date_naissance, $telephone, $email, $mot_de_passe = null)
    {
        $query = "UPDATE utilisateurs SET nom = ?, prenom = ?, date_naissance = ?, telephone = ?, email = ?";
        $params = [$nom, $prenom, $date_naissance, $telephone, $email];

        if ($mot_de_passe) {
            // Ne pas utiliser password_hash ici
            $query .= ", mot_de_passe = ?";
            $params[] = $mot_de_passe;
        }

        $query .= " WHERE id = ?";
        $params[] = $id;

        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
    }

    public function getUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM utilisateurs WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id)
{
    $stmt = $this->db->prepare("DELETE FROM utilisateurs WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}
}
?>