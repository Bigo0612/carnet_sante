<?php
include('assets/front/inc/functions.php');
include('assets/front/inc/pdo.php');
include "assets/front/inc/Form.php";
include "assets/front/inc/FormVerif.php";

session_start();

$form = new Form;
$formVerif = new FormVerif;

$error = array();
$user = array();


if (isset($_POST['submited'])) {
    $email = trim(strip_tags($_POST['email']));
    $password = trim(strip_tags($_POST['password']));

    $error['email'] = $formVerif->errorEmail($email, 'email', 10, 100);
    $error['password'] = $formVerif->errorText($password, 'Mot de passe', 5, 255);

    if (!empty($error)) {
        $sql = "SELECT *
              FROM `users`
              WHERE email= :email";

        $query = $pdo->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();

        if (!empty($user)) {
            if (password_verify($password, $user['password']) && $email == $user['email']) {
                session_start();
                $_SESSION = array(
                    'id' => $user['id'],
                    'nom' => $user['nom'],
                    'role' => $user['role'],
                    'email' => $user['email'],
                    'ip' => $_SERVER['REMOTE_ADDR'],
                );
                header('Location: dashboard_header.php');
            } else {
                $error['password'] = "Veuillez renseigner un identifiant valide.";
            }
        } else {
            $error['password'] = "Veuillez renseigner un identifiant valide.";
        }
    }
}

include "header.php";

$form->init("", "post", "form-connexion");
$form->inputText("email", "Email: ", "michel.michel@hotmail.fr");
if (!empty($error['email'])) {
    $formVerif->printError($error['email']);
};
$form->inputPassword("password", "Mot de passe: ", "");
if (!empty($error['password'])) {
    $formVerif->printError($error['password']);
};
$form->inputSubmit("submited");
$form->end();


include('footer.php');
