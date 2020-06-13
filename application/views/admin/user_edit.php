<main>
  <section id="form">
    <h1 id="title">Utilizador</h1>
    <form method="post" action="admin/users/update/<?=$item['id'];?>">
      <div>
        <label for="user">Username</label>
        <input type="email" name="user" id="user" value="<?=$item['username'];?>" required>
      </div>
      <div>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" value="">
      </div>
      <div>
        <label for="date_added">Criado em</label>
        <input type="date" name="date_added" id="date_added" value="<?=$item['date_added'];?>" readonly>
      </div>
      <div class="radio">
        <label>activar?</label>
         <div>
          <label for="publish">sim</label>
          <input type="radio" name="publish" id="publish" value="1" <?php if($item['publish'] == 1):?> checked <?php endif;?>>
          <label for="publish">não</label>
          <input type="radio" name="publish" id="publish" value="0" <?php if($item['publish'] == 0):?> checked <?php endif;?>>
        </div>
      </div>
      <div>
        <button class="btn-one">gravar</button>
      </div>
    </form>
  </section>
</main>