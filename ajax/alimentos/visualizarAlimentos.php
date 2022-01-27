<?php
session_start();
include('conexao.php');
?> 
<div class="dynamic-content">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Data</th>
        <th scope="col">Alimento</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Editar</th>
        <th scope="col">Deletar</th>
      </tr>
    </thead>
    <tbody>

    <?php
    $sql = "select * from alimento_usuario where usuario = '$_SESSION[usuario]' ORDER BY idAlimentos desc";
    $dados = mysqli_query($conexao, $sql);

    while($linha = mysqli_fetch_assoc($dados)){
        $idAlimentos = $linha['idAlimentos'];
        $alimento = $linha['alimento'];
        $quantidade = $linha['quantidade_alimento'];
        $data_alimento = $linha['data_alimento'];
        $data_alimento = date('d/m/Y',time());
    echo
        "<tr>
        <td scope='row'>$data_alimento</td>
        <td>$alimento</td>
        <td>$quantidade u</td>
        <td><a href='cadastro_alimento_edit.php?id=$idAlimentos' class='btn btn-dark btn-sm'> <i class='fas fa-sync-alt'></i> Editar</a></td>
        <td><a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma'
        onclick=" .'"' ."pegarDados($idAlimentos, '$alimento')" .'"' ."><i class='fas fa-trash-alt'></i> Deletar</a></td>
      </tr>";   
}
?>
    </tbody>
  </table>
    <!-- Modal -->
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmar exclusão</h5>
            <button type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="cadastro_alimento_drop_script.php" method="POST">
              <p>Deseja realmente excluir este registro <b id="alimento"></b><b></b>?</p>
              <div class="modal-footer">
                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="NAO">
                <input type="hidden" name="id" id="idAlimentos" value="">
                <input type="submit" class="btn btn-danger" value="Sim">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>