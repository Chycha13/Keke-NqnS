<?php

define("INSERTION_INSCRIPTION","INSERT INTO users(nom_user, prenom_user, mail_user, password_user, role) VALUES(?,?,?,?,?)");

define("INSERTION_CONNEXION","SELECT * FROM users WHERE mail_user = ?");

