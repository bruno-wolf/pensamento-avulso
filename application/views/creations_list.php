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
    <section id="next">
      <h1><?=$this->lang->line('creations');?></h1>

      <h2><?=$this->lang->line('now_events');?></h2>
      <div class="article-container">
        <?php foreach($creations_now AS $creation):?>
          <article>
            <span class="title"><a href="criacoes/<?=$creation['slug'];?>"><?=$creation['title'];?></a></span>
            <span class="author"><a href="artista/<?=$creation['artist_slug'];?>""><?=$creation['artist'];?></a></span>
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
                <img src="assets/img/<?=$creation['image'];?>" alt="<?=$creation['title'];?>">
              </a>
              <figcaption><?=$creation['summary'];?></figcaption>
            </figure>
          </article>
        <?php endforeach;?>
      </div>

      <h2><?=$this->lang->line('next_events');?></h2>
      <div class="article-container">
        <?php foreach($creations_future AS $creation):?>
          <article>
            <span class="title"><a href="criacoes/<?=$creation['slug'];?>"><?=$creation['title'];?></a></span>
            <span class="author"><a href="artista/<?=$creation['artist_slug'];?>""><?=$creation['artist'];?></a></span>
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
                <img src="assets/img/<?=$creation['image'];?>" alt="<?=$creation['title'];?>">
              </a>
              <figcaption><?=$creation['summary'];?></figcaption>
            </figure>
          </article>
        <?php endforeach;?>
      </div>

      <h2><?=$this->lang->line('past_events');?></h2>
      <div class="article-container">
        <?php foreach($creations_passed AS $creation):?>
          <article>
            <span class="title"><a href="criacoes/<?=$creation['slug'];?>"><?=$creation['title'];?></a></span>
            <span class="author"><a href="artista/<?=$creation['artist_slug'];?>""><?=$creation['artist'];?></a></span>
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
                <img src="assets/img/<?=$creation['image'];?>" alt="<?=$creation['title'];?>">
              </a>
              <figcaption><?=$creation['summary'];?></figcaption>
            </figure>
          </article>
        <?php endforeach;?>
      </div>
    </section>
  </div>
</main>
