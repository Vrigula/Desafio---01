<?php
include 'parcial/header.php';
require 'users.php';

$users = getUsers();

?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>Idade</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Sigla</th>
                <th>País</th>
                <th>Número do Cartão</th>
             <th><p><a href="adicionar.php" class="btn btn-sm btn-success">Adicionar Usuário</a></p></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['nome'] ?></td>
                <td><?php echo $user['genero'] ?></td>
                <td><?php echo $user['idade'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['telefone'] ?></td>
                <td><?php echo $user['cep'] ?></td>
                <td><?php echo $user['endereco'] ?></td>
                <td><?php echo $user['cidade'] ?></td>
                <td><?php echo $user['estado'] ?></td>
                <td><?php echo $user['sigla'] ?></td>
                <td><?php echo $user['pais'] ?></td>
                <td><?php echo $user['numero-do-cartao'] ?></td>
                <td>
                    <a href="detalhes.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">Detalhes</a>
                    <a href="editar.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Editar</a>
                    <form method="POST" action="deletar.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ; ?>
        </tbody>

    </table>
</div>

<?php include 'parcial/footer.php' ?>
