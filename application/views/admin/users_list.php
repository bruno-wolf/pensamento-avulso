<main>
  <section id="list">
    <div id="head">
      <h1>Utilizadores</h1>
      <a href="admin/utilizador" class="btn-two">Adicionar</a>
    </div>
    <div class="row table-head">
      <span class="title">nome</span>
      <span class="artist"></span>
      <span class="date-start">adicionado</span>
      <span class="status">status</span>
      <span class="date-end"></span>
      <span class="actions"></span>
    </div>
    <?php foreach($users AS $user):?>
      <div class="row">
        <span class="title"><b><?=$user['username'];?></b></span>
        <span class="artist"></span>
        <span class="date-start"><?=date('j M Y', strtotime($user['date_added']));?></span>
        <span class="status">
          <?php if($user['publish'] == 1):?>
            <span class="publish yes"></span>
          <?php else:?>
            <span class="publish no"></span>
          <?php endif;?>
        </span>
        <span class="date-end"></span>
        <span class="actions">
          <a href="admin/utilizador/<?=$user['id'];?>">editar</a>
          <a href="admin/users/delete/<?=$user['id'];?>">eliminar</a>
        </span>
      </div>
    <?php endforeach;?>
  </section>
</main>
<?php if(!empty($this->session->flashdata('msg'))):?>
  <div class="feedback"><?= $this->session->flashdata('msg');?></div>
<?php endif;?>