<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Lista de usuários</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <p>Lista de usuários</p>
            <button type="button" class="btn btn-success" onclick="changeModalView('createUserModal')" >Adicionar</button>
        </div>
        <div class="content">
            <table class="table table-dark table-hover table-striped">
                <thead>
                    <td>#</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Ações</td>
                </thead>
                <?php foreach ($users as $user): ?>
                <tr>
                  
                    <td><?= $user->id ?></td>
                    <td><?= $user->nome ?></td>
                    <td><?= $user->email ?></td>
                    <td>
                      
                        <button type="button" class="btn btn-light" onclick="changeModalView('readUserModal<?= $user->id?>')">visualizar</button>
                        <button type="button" class="btn btn-warning" onclick="changeModalView('updateUserModal<?= $user->id?>')">Editar</button>
                        <button type="button" class="btn btn-danger" onclick="changeModalView('deleteUserModal<?= $user->id ?>')">Excluir</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <div class="logout-div">
              <form action="#" method="POST">
                <button type="submit" class="btn btn-danger">Logout</button>
              </form>
            </div>
        </div>
    </div>

<!-- Modal Create User -->
<div id="createUserModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="changeModalView('createUserModal')">&times;</span>
      <h2>Criar usuário</h2>
      <form id="createUserForm" action="/users/create" method="POST">
        <label for="userName">Nome:</label>
        <input type="text" id="userName" name="userName" required autocomplete="off">
        
        <label for="userEmail">E-mail:</label>
        <input type="email" id="userEmail" name="userEmail" required autocomplete="off">
        
        <label for="userPassword">Senha:</label>
        <input type="password" id="userPassword" name="userPassword" required autocomplete="off">
        
        <button type="submit">Criar usuário</button>
      </form>
    </div>
  </div>
  
  <?php foreach($users as $user): ?>
  <!-- Modal Read User -->
  <div id="readUserModal<?= $user->id?>" class="modal">
    <div class="modal-content">
      <span class="close" onclick="changeModalView('readUserModal<?= $user->id?>')">&times;</span>
      <h2>User Details</h2>
      <p><strong>Name: <?= $user->nome ?></strong> <span id="displayUserName"></span></p>
      <p><strong>Email: <?= $user->email?> </strong> <span id="displayUserEmail"></span></p>
    </div>
  </div>
  
  <!-- Modal Update User -->
  <div id="updateUserModal<?= $user->id?>" class="modal">
    <div class="modal-content">
      <span class="close" onclick="changeModalView('updateUserModal<?= $user->id?>')">&times;</span>
      <h2>Atualizar usuário</h2>
      <form id="updateUserForm" action="/users/edit" method="POST">
        <input type="hidden" value="<?= $user->id?>" name="id">
        <label for="updateUserName">Nome:</label>
        <input type="text" id="updateUserName" value="<?= $user->nome?>" name="updateUserName" autocomplete="off" required>
        
        <label for="updateUserEmail">E-mail:</label>
        <input type="email" id="updateUserEmail" value="<?= $user->email ?>"name="updateUserEmail" autocomplete="off" required >
        
        <label for="updateUserPassword">Senha:</label>
        <input type="password" id="updateUserPassword" name="updateUserPassword" autocomplete="off">
        
        <button type="submit">Atualizar usuário</button>
      </form>
    </div>
  </div>
  
  <!-- Modal Delete User -->
  <div id="deleteUserModal<?= $user->id ?>" class="modal">
    <form action="/users/delete" method="POST">
    <div class="modal-content">
      <input type="hidden" value="<?= $user->id?>" name="iddelete">
      <span class="close" onclick="changeModalView('deleteUserModal<?= $user->id?>')">&times;</span>
      <h2>Deletar usuário</h2>
      <p>Tem certeza que deseja deletar esse usuário?</p>
      <button type="submit" id="confirmDeleteUser">Sim, deletar</button>
    </div>
    </form>
  </div>
<?php endforeach; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function changeModalView (modalId) {
            var modal = document.getElementById(modalId);
            modal.classList.toggle('modal-show');
        }
    </script>
</body>
</html>