<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>. Pensamento Avulso | administração</title>
  <base href="<?=base_url();?>">
  <link rel="stylesheet" href="assets/admin/css/style.css">
</head>

<body id="login">
  <?php if(!empty($this->session->flashdata('msg'))):?>
    <div class="feedback"><?=$this->session->flashdata('msg');?></div>
  <?php endif;?>
  <header>
    <h1>. Pensamento Avulso</h1>
  </header>
  <main>
    <section>
      <form action="admin/users/gologin" method="post">
        <div>
          <label for="username">Username</label>
          <input type="email" name="user" id="username">
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="pass" id="password">
        </div>
        <button class="btn-one">entrar</button>
      </form>
    </section>
  </main>
  <footer>
    ©<?= date('Y');?> . Pensamento Avulso
  </footer>
</body>

</html>