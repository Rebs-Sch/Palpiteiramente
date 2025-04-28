<?php

require_once("modelo/Palpite.php");

$palpites = array(
    new Palpite(1, "sources/Jinhsi.png", "Jinshi", "Spectro", "espada", "ataque", "atacante"),
    new Palpite(2, "sources/Roccia.png", "Roccia", "Havoc", "manopla", "ataque", "suporte"),
    new Palpite(3, "sources/Lingyang.png", "Lingyang", "Glacio", "manopla", "ataque", "atacante"),
    new Palpite(4, "sources/Shorekeeper.png", "Shorekeeper", "Spectro", "catalisador", "cura", "suporte"),
    new Palpite(5, "sources/Baizhi.png", "Baizhi", "Glacio", "catalisador", "cura", "curandeira")
);
