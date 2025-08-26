<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Simples validação
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Obrigado por se inscrever, $email!</h2>";
    } else {
        echo "<h2>Email inválido. Tente novamente.</h2>";
    }
} else {
    echo "<h2>Formulário não enviado corretamente.</h2>";
}
?>
