<?php

require_once("modelo/Palpite.php");

$palpites = array(
    "1" => new Palpite("sources/Jinhsi.png", "Jinshi", "Spectro", "espada", "ataque", "atacante"),
    "2" => new Palpite("sources/Roccia.png", "Roccia", "Havoc", "manopla", "ataque", "suporte"),
    "3" => new Palpite("sources/Lingyang.png", "Lingyang", "Glacio", "manopla", "ataque", "atacante"),
    "4" => new Palpite("sources/Shorekeeper.png", "Shorekeeper", "Spectro", "catalisador", "cura", "suporte"),
    "5" => new Palpite("sources/Baizhi.png", "Baizhi", "Glacio", "catalisador", "cura", "curandeira")
);