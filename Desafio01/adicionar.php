<?php
include 'parcial/header.php';
require 'users.php';

$user = [
    'id' => '',
    'nome' => '',
    'genero' => '',
    'idade' => '',
    'email' => '',
    'telefone' => '',
    'cep' => '',
    'endereco' => '',
    'cidade' => '',
    'estado' => '',
    'sigla' => '',
    'pais' => '',
    'numero-do-cartao' => ''
];

$valido = true;

$errors = [
    'nome' => '',
    'genero' => '',
    'idade' => '',
    'email' => '',
    'telefone' => '',
    'cep' => '',
    'endereco' => '',
    'cidade' => '',
    'estado' => '',
    'sigla' => '',
    'pais' => '',
    'numero-do-cartao' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $user = array_merge($user, $_POST);

    if (!$user['nome']){
        $valido = false;
        $errors['nome'] = 'Nome é obrigatório';
    }

    if(!$user['genero']){
        $valido = false;
        $errors['genero'] = 'Gênero é obrigatório';
    }

    if(!filter_var($user['idade'], FILTER_VALIDATE_INT)){
        $valido = false;
        $errors['idade'] = 'Idade é obrigatório';
    }
    
    if(!$user['email'] || !filter_var($user['email'], FILTER_VALIDATE_EMAIL)){
        $valido = false;
        $errors['email'] = 'Email é obrigatório e deve ser válido';
    }
    
    if(!filter_var($user['telefone'], FILTER_VALIDATE_INT) || strlen($user['telefone']) < 10 || strlen($user['telefone']) > 10){
        $valido = false;
        $errors['telefone'] = 'Telefone é obrigatório e deve ser válido';
    }
    
    if(!filter_var($user['cep'], FILTER_VALIDATE_INT) || strlen($user['cep']) < 8 || strlen($user['cep']) > 8){
        $valido = false;
        $errors['cep'] = 'CEP é obrigatório e deve ser válido';
    }
    
    if(!$user['endereco']){
        $valido = false;
        $errors['endereco'] = 'Endereço é obrigatório';
    }
    
    if(!$user['cidade']){
        $valido = false;
        $errors['cidade'] = 'Cidade é obrigatório';
    }

    if(!$user['estado']){
        $valido = false;
        $errors['estado'] = 'Estado é obrigatório';
    }

    if (!$user['sigla'] || strlen($user['sigla']) < 2 || strlen($user['sigla']) > 2){
        $valido = false;
        $errors['sigla'] = 'Sigla é obrigatório e deve conter apenas 2 letras';
    }
    
    if(!$user['pais']){
        $valido = false;
        $errors['pais'] = 'País é obrigatório';
    }
    
    if(!filter_var($user['numero-do-cartao'], FILTER_VALIDATE_INT) || strlen($user['numero-do-cartao']) < 16 || strlen($user['numero-do-cartao']) > 16){
        $valido = false;
        $errors['numero-do-cartao'] = 'Número do Cartão é obrigatório e deve ser válido';
    }

    if($valido){

        $user = createUser($_POST);

        header("Location: index.php");
    }
}

?>

<?php include 'parcial/formulario.php'; ?>

<?php include 'parcial/footer.php' ?>