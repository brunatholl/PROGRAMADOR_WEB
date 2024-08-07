<?php

echo '<br>$_SERVER: <br>';
echo '<br> 2.a <br>';
echo '<pre>' . print_r($_SERVER, true) . '</pre>';

echo '<br> 2.b <br>';
echo '<br> HTTP_HOST: ' . $_SERVER["HTTP_HOST"] . '<br>';

echo '<br> 2.c <br>';
echo '<br> SCRIPT_NAME: ' . $_SERVER["SCRIPT_NAME"] . '<br>';

echo '<br> 2.d <br>';
echo '<br> HTTP_HOST + SCRIPT_NAME: ' . $_SERVER["HTTP_HOST"] .= $_SERVER["SCRIPT_NAME"] . '<br>';




