<main>
  <section id="form">
    <h1 id="title"></h1>
    <form method="post" action="admin/artists/add/" enctype="multipart/form-data">
      <div>
        <label for="name">Nome</label>
        <input type="name" name="name" id="name" value="" required>
      </div>
      <div>
        <label for="text">Descrição / Português</label>
        <textarea name="pt_text" id="text" rows="20" ></textarea>
      </div>
      <div>
        <label for="text">Descrição / Inglês</label>
        <textarea name="en_text" id="text" rows="20" ></textarea>
      </div>
      <div class="file">
        <label for="image">Imagem</label>
		    <input type="file" name="image" required>
      </div>
      <div>
        <label for="date_added">Criado em</label>
        <input type="date" name="date_added" id="date_added" value="<?=date('Y-m-d');?>" readonly>
      </div>
      <div class="radio">
        <label>activar?</label>
         <div>
          <label for="publish">sim</label>
          <input type="radio" name="publish" id="publish" value="1" checked required>
          <label for="publish">não</label>
          <input type="radio" name="publish" id="publish" value="0" required>
        </div>
      </div>
      <div>
        <button class="btn-one">gravar</button>
      </div>
    </form>
  </section>
</main>
