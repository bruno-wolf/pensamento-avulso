<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <base href="<?=base_url();?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>. Pensamento Avulso</title>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<!--
  Andava aqui a bater com a cabeça de como é que poderia ter uma referência da página em que estou. Assim, usando o URI na classe já posso fazer a validação por JS.
  Com a inspiração do https://stackoverflow.com/questions/12248970/codeigniter-get-current-url-relative-to-base-url e lembrando a dica que deste em aula de que é útil irmos imprimindo umas classes no body arranjei aqui uma lógica para conseguir aplicar a class '.selected' ao link correto da 'header nav'.
  Tive foi de imprimir esta classe no body tambem com o base url, uma vez que o por JS o classList.href.value estava a devolver-me o url completo em vez do url relativo que está a ser impresso por PHP
  E confesso que não tenho mais tempo para investir numa alternativa. Senão só te entrego o trabalho em Julho... pode ser? é melhor não.
 -->
<body class="<?=base_url();?><?= $this->uri->uri_string();?>">

  <?php include('svg-sprite.php');?>
  <header>
    <nav>
      <a href="<?=base_url();?>">Pensamento Avulso</a>
      <?php foreach($menu as $link):?>
        <a href="artista/<?=$link['slug'];?>"><?=$link['name'];?></a>
      <?php endforeach;?>
      <a href="criacoes"><?=$this->lang->line('creations');?></a>
    </nav>
    <div id="lang">
      <a href="creations/switch_language/pt" class="<?php if($this->session->userdata('language') == 'pt'){ echo 'selected';}?>" >PT</a>
      <a href="creations/switch_language/en" class="<?php if($this->session->userdata('language') =='en'){ echo 'selected';}?>">EN</a>
      <!-- Funciona! Mas quase que aposto que há uma forma mais elegante de aplicar a class '.selected' aqui nos btns -->
    </div>
  </header>