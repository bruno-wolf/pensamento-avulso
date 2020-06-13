<main>
  <section id="cover">
    <img src="assets/img/<?=$artist['image'];?>" alt="<?=$artist['slug'];?>">
    <button id="go-down">
      <svg><use xlink:href="#down-arrow" /></svg>
    </button>
  </section>
  <div class="container">
    <section id="text">
      <div class="title">
        <h1><?=$artist['name'];?></h1>
      </div>
      <p><?=$artist['text'];?>
      </p>
    </section>
    <section id="next">
      <?php if(!empty($creations)):?>
      <h2><?=$this->lang->line('next_dates');?></h2>
      <?php endif;?>
      <div class="article-container">
        <?php foreach($creations AS $creation):?>
        <article>
          <span class="title"><a href="criacoes/<?=$creation['slug'];?>"><?=$creation['title'];?></a> </span>
          <span class="dates"><?=date('j M Y', strtotime($creation['date_start']));?> - <?=date('j M Y', strtotime($creation['date_end']));?></span>
          <figure>
            <a href="criacoes/<?=$creation['slug'];?>">
              <img src="assets/img/<?=$creation['image'];?>" alt="<?=$creation['slug'];?>">
            </a>
            <figcaption><?=$creation['summary'];?></figcaption>
          </figure>
        </article>
        <?php endforeach;?>
      </div>
    </section>
  </div>
</main>
