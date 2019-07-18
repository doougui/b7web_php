<?php
$passwordHash = password_hash('secret-password', PASSWORD_DEFAULT);

if (password_verify('secret-password', $passwordHash)) {
    echo $passwordHash;
} else {
    echo "Senha incorreta.";
}