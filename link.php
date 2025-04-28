<?php 

require_once('modelo/Palpite.php');
require_once('palpites.php');

echo "<link rel='stylesheet' href='lStyle.css'>";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>";

echo"<header>
        <h1>Jogo Palpiteiro</h1>
        <h2>Adivinhe o personagem escolhido!</h2>
    </header>";

echo "<main class='cartaos'>";

foreach ($palpites as $i => $pa) {
    desenhaLinha($pa, $i);
}

echo "</main>";

function desenhaLinha($palpite, $id) {
    echo"
        <div class='cartao'>
                <img src='".$palpite->getImg()."'>
                <h3>".$palpite->getNome()."</h3>
                <p>".$palpite."</p>
                <a class='botao' href='http://localhost/trabalho-lpw2/trabalho/execucao.php?palpite='".$id."'><i class='bi bi-ticket-detailed'></i> Apostar</a>
        </div>";
    
}


