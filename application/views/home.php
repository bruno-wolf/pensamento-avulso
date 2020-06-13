<main>
  <section id="cover">
    <div class="carousel"
    data-flickity='{ "wrapAround": true, "autoPlay": true }'>
      <?php foreach($slides AS $slide):?>
      <div class="carousel-cell">
        <img src="assets/img/<?=$slide['image'];?>" alt="">
      </div>
      <?php endforeach;?>
    </div>
      <button id="go-down">
      <svg><use xlink:href="#down-arrow" /></svg>
    </button>
  </section>
  <div class="container">
    <section id="text">
      <p>Pensamento Avulso é uma associação fundada em 2013 por 
        <?php foreach($menu as $key => $item):?>
          <?php
            // Lá estou eu a inventar
            // Andei para aqui a tentar colocar esta listagem dinâmica, caso adicionemos mais artistas à $db
            // encontrei esta opção https://dev-notes.eu/2016/09/target-the-last-item-in-a-php-foreach-loop/
            // mas não dava para fazer com um operador ternário, uma vez que há 3 casos, virgulas, 'e', e ponto final
            // passeei um pouco pelo https://www.php.net/manual/en/control-structures.elseif.php para tentar peceber se conseguia ter multimos 'elseif' (não perguntes, ainda me perco na organização da estrutura lógica do que quero fazer) e apercebi-me que é uma forma simplifcada de escrever a validação sem chavetas e a lembrar um pouco o esquema de tags com que vamos introduzindo PHP pelo meio do HTML. Testei e funcionou.
            // Aposto que se fosses tu fazias de forma diferente e não colocavas esta validação aqui no meio de uma view.
            // mau hábito meu de complicar           
            if ($key == count( $menu ) -1 ):
              $punctuation = ".";
            elseif ($key == count( $menu ) -2 ):
              $punctuation = " e ";
            else:
              $punctuation = ", ";
            endif;
          ?>
          <a href="artista/<?=$item['slug'];?>"><?=$item['name'];?></a><?=$punctuation;?>
        <?php endforeach;?> Tem como fim
        o
        desenvolvimento de actividades artísticas relacionadas com dança através da produção de espectáculos e outros
        eventos relacionados.
      </p>
    </section>
    <section id="next">
      <h2>Próximas datas</h2>
      <div class="article-container">
        <?php foreach($creations AS $creation):?>
          <article>
            <span class="title"><a href="criacoes/<?=$creation['slug'];?>"><?=$creation['title'];?></a></span>
            <span class="author"><a href="artista/<?=$creation['artist_slug'];?>"><?=$creation['artist'];?></a></span>
            <span class="dates">
              <?=date('j', strtotime($creation['date_start']));?>
              <?=$this->lang->line(date('M', strtotime($creation['date_start'])));?>
              <?=date('Y', strtotime($creation['date_start']));?>
               - 
              <?=date('j', strtotime($creation['date_end']));?>
              <?=$this->lang->line(date('M', strtotime($creation['date_end'])));?>
              <?=date('Y', strtotime($creation['date_end']));?>
            </span>
            <figure>
              <a href="criacoes/<?=$creation['slug'];?>">
                <img src="assets/img/<?=$creation['image'];?>" alt="cena da peça de teatro Lonely dinner">
              </a>
              <figcaption><?=$creation['summary'];?></figcaption>
            </figure>
          </article>
        <?php endforeach;?>
      </div>
    </section>
  </div>
</main>
