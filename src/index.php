<?php
// Obtém o caminho após /planilhas/ na URL
$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';

// Inclui o cabeçalho
include 'includes/header.php';

// Verifica o PATH_INFO e decide qual página incluir
switch ($path_info) {
    case '/AdicionarEmail':
        include 'components/AdicionarEmail/adicionarEmail.php';  // Formulário para adicionar email
        break;
        
    case '/adicionarUsuario':
        include 'components/AdicionarUsuario/adicionarUsuario.php'; // Formulário para adicionar usuário
        break;

    case '/ListagemEmail':
        include 'components/ListagemEmail/listagemEmail.php'; // Tabela de listagem de emails
        break;

    case '/ListagemUsuario':
        include 'components/ListagemUsuario/listagemUsuario.php'; // Tabela de listagem de usuários
        break;

    case '/ListagemUser_Email':
        include 'components/ListagemUsuario_Email/listagemUser_Email.php'; // Tabela de listagem de usuários e emails
        break;

    case '/vincularUsuario':
        include 'components/vincularUsuario/vincularUsuario.php'; // Formulário para vincular usuário a um email
        break;

    default:
        echo "Página não encontrada.";
        break;
}

?>
