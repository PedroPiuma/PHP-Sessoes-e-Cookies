<?php
// session_save_path(__DIR__ . '../../sessions');
session_start();

// $_SESSION['usuario'] = [
//     'nome' => 'Luis',
//     'idade' => 23,
//     'ativo' => true,
//     'rate' => 4.3
// ];


unset($_SESSION['usuario']);
