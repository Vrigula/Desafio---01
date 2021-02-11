<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                Editar Usuário: <b><?php echo $user['nome'] ?></b>
                <?php else: ?>
                Criar Novo Usuário: 
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart" action="">
                <div class="form-group">
                    <label>Nome: </label>
                    <input name="nome" value="<?php echo $user['nome'] ?>" class="form-control <?php echo $errors['nome'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['nome'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Gênero: </label>
                    <input name="genero" value="<?php echo $user['genero'] ?>" class="form-control <?php echo $errors['genero'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['genero'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Idade: </label>
                    <input name="idade" value="<?php echo $user['idade'] ?>" class="form-control <?php echo $errors['idade'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['idade'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Email: </label>
                    <input name="email" value="<?php echo $user['email'] ?>" class="form-control <?php echo $errors['email'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['email'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Telefone: </label>
                    <input name="telefone" value="<?php echo $user['telefone'] ?>" class="form-control <?php echo $errors['telefone'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['telefone'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>CEP: </label>
                    <input name="cep" value="<?php echo $user['cep'] ?>" class="form-control <?php echo $errors['cep'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['cep'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Endereço: </label>
                    <input name="endereco" value="<?php echo $user['endereco'] ?>" class="form-control <?php echo $errors['endereco'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['endereco'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Cidade: </label>
                    <input name="cidade" value="<?php echo $user['cidade'] ?>" class="form-control <?php echo $errors['cidade'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['cidade'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Estado: </label>
                    <input name="estado" value="<?php echo $user['estado'] ?>" class="form-control <?php echo $errors['estado'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['estado'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Sigla: </label>
                    <input name="sigla" value="<?php echo $user['sigla'] ?>" class="form-control <?php echo $errors['sigla'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['sigla'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>País: </label>
                    <input name="pais" value="<?php echo $user['pais'] ?>" class="form-control <?php echo $errors['pais'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['pais'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Número do Cartão: </label>
                    <input name="numero-do-cartao" value="<?php echo $user['numero-do-cartao'] ?>" class="form-control <?php echo $errors['numero-do-cartao'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo $errors['numero-do-cartao'] ?>
                    </div>
                </div>
                <button class="btn btn-success">Finalizar</button>
            </form>

        </div>
    </div>
</div>