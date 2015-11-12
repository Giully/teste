<!DOCTYPE html>
    <?php
    $nome = $this->session->userdata("_NOME");
    echo "<h1>bem vindo ".$nome."</h1>";
    
    ?>
    <a href="https://aulateste-giully.c9.io/index.php/login/logout">Logout</a>
</html>
