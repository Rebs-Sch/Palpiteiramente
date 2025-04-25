<?php 

require_once('modelo/Palpite.php');
require_once('palpites.php');

echo "<link rel='stylesheet' href='eStyle.css'>";
echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>";

$certo = rand(1,5);
$palpite = $_GET['palpite'];

if ($palpite == $palpiteCorreto) {
    /*echo "<h1>Correto!!!!</h1>"; 
    echo "<img src='" . $palpites[$palpite - 1]->getImg(). "'>";
    echo "<a href='http://localhost/trabalho-lpw2/link.php'> ➜ Sinta-se a vontade para jogar mais vezes!</a>";*/

    echo "
        <header>
            <h1>Jogo Palpiteiro</h1>
            <h2>Parabéns, você acertou!</h2>
        </header>
        
        <div class='mensagem'>
        <h3>O personagem sorteado era:</h3>
        
        <div class='personagem'>
            <img src='".$palpites[$certo-1]->getImg()."'>
            <h4>".$palpites[$certo-1]->getNome()."</h4>
        </div>
        
        <p>Ótima escolha!</p>
        <p>Que prossiga com a mesma sorte!</p>

        <a class='botao' href='http://localhost/trabalho-lpw2/link.php'>jogar novamente <i class='bi bi-arrow-counterclockwise'></i></a>
        </div>
        ";

} else {
    /*echo "<h1>Errado..</h1>";
    echo "<a href='http://localhost/trabalho-lpw2/link.php'> ➜ Tente novamente!! Na próxima você consegue. </a>";
    echo "<h5>Shh!! Nao conta pra ninguem que eu te ajudei!!</h5> ";
    echo "<p>dica: A habilidade do pokémon correto é " . $palpites[$palpite - 1]->getHabilidade() . " 🥰 </p>";*/

    echo "
    <header>
        <h1>Jogo Palpiteiro</h1>
        <h2>Que pena, você errou...</h2>
    </header>
    
    <div class='mensagem'>
    <h3>Na verdade, o personagem sorteado era:</h3>
    
    <div class='personagem'>
        <img src='".$palpites[$certo-1]->getImg()."'>
        <h4>".$palpites[$certo-1]->getNome()."</h4>
    </div>
    
    <p>Boa tentativa, mas infelizmente essa não era a alternativa correta.</p>
    <p>Boa sorte na próxima vez...</p>

    <a class='botao' href='http://localhost/trabalho-lpw2/link.php'>jogar novamente <i class='bi bi-arrow-counterclockwise'></i></a>
    </div>
    ";
}