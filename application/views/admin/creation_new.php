<main>
  <section id="form">
    <h1 id="title"></h1>
    <form method="post" action="admin/creations/add/" enctype="multipart/form-data">
      <div>
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="" required>
      </div>
      <div>
        <label for="artist">Artista</label>
        <select name="artist" id="artist">
          <option value="">selecione um artista</option>
          <?php foreach($artists as $artist):?>
            <option value="<?=$artist['id'];?>"><?=$artist['name'];?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div>
        <label for="date_start">Início</label>
        <input type="date" name="date_start" id="date_start" value="" required>
      </div>
      <div>
        <label for="date_end">Fim</label>
        <input type="date" name="date_end" id="date_end" value="" required>
      </div>
      <div>
        <label for="pt_summary">Resumo / Português</label>
        <textarea name="pt_summary" id="pt_summary" rows="3" ></textarea>
      </div>
      <div>
        <label for="en_summary">Resumo / Inglês</label>
        <textarea name="en_summary" id="en_summary" rows="3" ></textarea>
      </div>
      <div>
        <label for="pt_text">Descrição / Português</label>
         <textarea name="pt_text" id="pt_text" rows="20" ></textarea>
      </div>
      <div>
        <label for="en_text">Descrição / Inglês</label>
         <textarea name="en_text" id="en_text" rows="20" ></textarea>
      </div>
      <div>
        <label for="pt_credits">Ficha Técnica / Português</label>
        <textarea name="pt_credits" id="pt_credits" rows="20" ></textarea>
      </div>
      <div>
        <label for="en_credits">Ficha Técnica / Inglês</label>
        <textarea name="en_credits" id="en_credits" rows="20" ></textarea>
      </div>
      <div class="file">
        <label for="image">Imagem</label>
		    <input type="file" name="image" required>
      </div>
      <div class="radio">
        <label>activar?</label>
        <div>
          <label for="publish">sim</label>
          <input type="radio" name="publish" id="publish" value="1" checked>
          <label for="publish">não</label>
          <input type="radio" name="publish" id="publish" value="0" >
        </div>
      </div>
      <div>
        <button class="btn-one">gravar</button>
      </div>
    </form>
  </section>
</main>