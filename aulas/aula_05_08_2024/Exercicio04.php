<?php

$frase = 'Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços.';
// tratar caracteres especiais: ã, ç
echo 'a) Transformar letras maiúsculas: ' . mb_strtoupper($frase);
echo '<br>';
echo 'b) Transformar letras minusculas: ' . strtolower($frase);
echo '<br>';
echo 'c) Transformar letras minusculas: ' .  ucfirst(strtolower($frase));
