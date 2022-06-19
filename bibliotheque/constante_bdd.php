<?php

define("INSERTION_INSCRIPTION","INSERT INTO users(nom_user, prenom_user, adresse_user, mail_user, password_user, role) VALUES(?,?,?,?,?,?)");

define("INSERTION_CONNEXION","SELECT * FROM users WHERE mail_user = ?");

define("INSERTION_SESSION","INSERT INTO user_session(id_user) VALUES(?)");

define("RECUPERATION_SESSION","SELECT id_session FROM user_session INNER JOIN users users.id_user = user_session.id_user WHERE id_session = ?");