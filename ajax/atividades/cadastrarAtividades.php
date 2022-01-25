<div class="dynamic-content">
  <form id="atividade-form"  action="cadastro_atividade.php" method="POST">
    <div class="mb-3">
      <label for="name" class="form-label">Nome da Atividade</label>
      <input type="text" name="nome" class="form-control" id="name" placeholder="Informe o nome de sua atividade" >
    </div>
    <div class="mb-3">
      <label for="time" class="form-label">Tempo de atividade</label>
      <input type="text" name="tempo" class="form-control" id="activity-duration" placeholder="Informe a duração de sua atividade">
    </div>
    <div class="mb-3">
      <label for="date" class="form-label">Data</label>
      <input type="text" name="data" class="form-control" id="activity-date" placeholder="Informe o dia em que praticou sua atividade">
    </div>
    <button type="submit" class="btn">Cadastrar</button>
  </form>
</div>