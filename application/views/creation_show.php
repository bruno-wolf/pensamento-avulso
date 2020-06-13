<main>
  <section id="cover">
    <img src="assets/img/<?=$creation['image'];?>" alt="<?=$creation['slug'];?>">
      <button id="go-down">
      <svg><use xlink:href="#down-arrow" /></svg>
    </button>
  </section>
  <div class="container">
    <section id="text">
      <div class="title">
        <h1><?=$creation['title'];?></h1>
        <span class="author"><?=$creation['artist'];?></span>
        <span class="date"><?=date('j M Y', strtotime($creation['date_start']));?> - <?=date('j M Y', strtotime($creation['date_end']));?></span>
      </div>
      <p><?=$creation['text'];?>
      </p>
    </section>
    <section id="credits">
      <?=$creation['credits'];?>
    </section>


  </div>
</main>