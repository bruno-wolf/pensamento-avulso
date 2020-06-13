<main>
  <section id="form">
    <h1 id="title"></h1>
    <form method="post" action="admin/users/add/" enctype="multipart/form-data">
      <div>
        <label for="user">Username</label>
        <input type="email" name="user" id="user" value="" required>
      </div>
      <div>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" value="" required>
      </div>
      <div>
        <label for="date_added">Criado em</label>
        <input type="date" name="date_added" id="date_added" value="<?=date('Y-m-d');?>" readonly>
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