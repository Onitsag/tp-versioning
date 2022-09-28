<?php
namespace controllers;

use controllers\base\Web;
use utils\Template;
use utils\SessionHelpers;

class LoginController extends Web
{
    function login($login = "", $password = ""): void
    {
        if (SessionHelpers::isLogin()) {
            $this->redirect("/");
        }

        $erreur = "";
        if (!empty($login) && !empty($password)) {
            $equipeM = new \models\LoginModel();

            $lequipe = $equipeM->login($login, $password);
            if ($lequipe != null) {
                SessionHelpers::login($lequipe);
                $this->redirect("/");
            } else {
                SessionHelpers::logout();
                $erreur = "Connexion impossible avec vos identifiants";
            }
        }

        Template::render("views/global/home.php", array("erreur" => $erreur));
    }
}