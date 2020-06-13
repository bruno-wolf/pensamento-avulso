
<main>
  <!-- <div id="fade"></div> -->
  <section id="list" class="creations">
    <div id="head">
      <h1>Criações</h1>
      
      <a href="admin/creations/new" class="btn-two">Adicionar</a>
    </div>
    <div class="row table-head">
      <span class="title">título</span>
      <span class="artist">artista</span>
      <span class="date-start">início</span>
      <span class="date-end">fim</span>
      <span class="status">status</span>
      <span class="actions"></span>
    </div>
    <?php foreach($creations AS $creation):?>
      <div class="row">
        <span class="title"><b><?=$creation['title'];?></b></span>
        <?php if(!empty($creation['artist'])):?>
          <span class="artist"><?=$creation['artist'];?></span>
        <?php endif;?>
        <span class="date-start">de <?=date('j M Y', strtotime($creation['date_start']));?></span>
        <span class="date-end">até <?=date('j M Y', strtotime($creation['date_end']));?></span>
        <span class="status">
          <?php if($creation['publish'] == 1):?>
            <?php if(strtotime($creation['date_end']) < strtotime(date("Y/m/d"))):?>
              <span class="publish passed"></span>
            <?php else:?>
              <span class="publish yes"></span>
            <?php endif;?>
          <?php else:?>
            <span class="publish no"></span>
          <?php endif;?>
        </span>
        <span class="actions">
          <a href="admin/criacao/<?=$creation['id'];?>">editar</a>
          <a href="admin/creations/delete/<?=$creation['id'];?>">eliminar</a>
        </span>
      </div>
    <?php endforeach;?>
    <div class="note">
      <span>
        <span class="publish yes"></span>
        publicado
      </span>
      <span>
        <span class="publish no"></span>
        não publicado
      </span>
      <span>
        <span class="publish passed"></span>
        evento passado
      </span>
    </div>
  </section>
</main>
<?php if(!empty($this->session->flashdata('msg'))):?>
  <div class="feedback"><?=$this->session->flashdata('msg');?></div>
<?php endif;?>