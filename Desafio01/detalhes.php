<?php
include 'parcial/header.php';
require 'users.php';

if (!isset($_GET['id'])){
    include 'parcial/nao_econtrado.php';
    exit;
}
$userId = $_GET['id'];
$user = getUsersById($userId);
if (!$user){
    include 'parcial/nao_encontrado.php';
    exit;
}

?>

<div class="container">
    <div class="card">
        <div class="card-hearder">
            <h3>Detalhes de Usuário: <b><?php echo $user['nome'] ?></b></h3>
        </div>
        <div class="card-body">
            <a href="editar.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-secondary">Editar</a>
            <form method="POST" action="deletar.php" style="display: inline-block">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-sm btn-danger">Apagar</button>
            </form>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <th>Nome: </th>
                    <td><?php echo $user['nome'] ?></td>
                </tr>
                <tr>
                    <th>Gênero: </th>
                    <td><?php echo $user['genero'] ?></td>
                </tr>
                <tr>
                    <th>Idade: </th>
                    <td><?php echo $user['idade'] ?></td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td><?php echo $user['email'] ?></td>
                </tr>
                <tr>
                    <th>Telefone: </th>
                    <td><?php echo $user['telefone'] ?></td>
                </tr>
                <tr>
                    <th>CEP: </th>
                    <td><?php echo $user['cep'] ?></td>
                </tr>
                <tr>
                    <th>Endereço: </th>
                    <td><?php echo $user['endereco'] ?></td>
                </tr>
                <tr>
                    <th>Cidade: </th>
                    <td><?php echo $user['cidade'] ?></td>
                </tr>
                <tr>
                    <th>Estado: </th>
                    <td><?php echo $user['estado'] ?></td>
                </tr>
                <tr>
                    <th>Sigla: </th>
                    <td><?php echo $user['sigla'] ?></td>
                </tr>
                <tr>
                    <th>País: </th>
                    <td><?php echo $user['pais'] ?></td>
                </tr>
                <tr>
                    <th>Número do Cartão: </th>
                    <td><?php echo $user['numero-do-cartao'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'parcial/footer.php' ?>
