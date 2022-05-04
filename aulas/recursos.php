<?php // recursos.php
const ESCOLA = "Senac";
$curso = "Programador web";
$tecnologias = ["HTML", "CSS", "Javascript", "PHP"];

function verificaIdade(int $valor):string {
    if ($valor >=10) {
        return "Maior";
    } else {
        return "Menor";
    }
};