<main>
  <section id="form">
    <h1 id="title"><?=$artist['name'];?></h1>
    <form method="post" action="admin/artists/update/<?=$artist['id'];?>" enctype="multipart/form-data">
      <div>
        <label for="name">Nome</label>
        <input type="name" name="name" id="name" value="<?=$artist['name'];?>" >
      </div>
      <div>
        <label for="text">Descrição / Português</label>
        <textarea name="pt_text" id="text" rows="20" ><?=$artist['pt_text'];?></textarea>
      </div>
      <div>
        <label for="text">Descrição / Inglês</label>
        <textarea name="en_text" id="text" rows="20" ><?=$artist['en_text'];?></textarea>
      </div>
      <div class="file">
        <label for="image">Imagem</label>
        <input type="hidden" value="<?=$artist['image'];?>" name="hidden_image">
		    <input type="file" name="image">
        <?php if(isset($artist['image']) && !empty($artist['image'])):?>
          <img src="assets/img/<?=$artist['image'];?>" alt="<?=$artist['slug'];?>" class="preview">
        <?php endif;?>
      </div>
      <div>
        <label for="date_added">Criado em</label>
        <input type="date" name="date_added" id="date_added" value="<?=date('Y-m-d', strtotime($artist['date_added']));?>" readonly>
      </div>
      <div class="radio">
        <label>activar?</label>
         <div>
          <label for="publish">sim</label>
          <input type="radio" name="publish" id="publish" value="1" <?php if($artist['publish'] == 1):?> checked <?php endif;?>>
          <label for="publish">não</label>
          <input type="radio" name="publish" id="publish" value="0" <?php if($artist['publish'] == 0):?> checked <?php endif;?>>
        </div>
      </div>
      <div>
        <button class="btn-one">gravar</button>
      </div>
    </form>
  </section>
</main>
