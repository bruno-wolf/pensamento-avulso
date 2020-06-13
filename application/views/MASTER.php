<!--

Na página criações é possível ver todas as criações, com a informação da data de início e de fim do espectáculo e a que artista correspondem.
Ao clicar num espectáculo surge a informação do mesmo – foto, título, nome do artista, datas, texto e texto secundário.

Na página do artista surge uma foto e um texto descritivo. Em baixo do texto surgem todas as criações que na base de dados estiverem associadas a esse artista.

Na homepage, além da foto e de um pequeno texto, devem aparecer duas criações futuras – ou seja, cujas datas de início sejam maiores que a data actual.

O tipo de letra é o Montserrat, está disponível no Google Fonts.

Estou a fornecer apenas o XD deste exercício. Deverão criar o HTML / CSS e estruturar a base de dados conforme acharem melhor.

-->

<main>
  <section id="cover">
    <svg>
      <use xlink:href="#down-arrow" /></svg>
  </section>
  <div class="container">
    <section id="text">
      <div class="title">
        <h1>H(u)rmano</h1>
        <span class="author">Marco da Silva Ferreira</span>
        <span class="date">12 Jan 2020 - 14 Jan 2020</span>
      </div>
      <p>Pensamento Avulso é uma associação fundada em 2013 por <a href="#"> Marco da Silva Ferreira</a> e <a
          href="#">Mara Andrade</a>. Tem como fim
        a
        desenvolvimento de actividades artísticas relacionadas com dança através da produção de espectáculos e outros
        eventos relacionados.
      </p>
    </section>
    <section id="next">
      <h2>Próximas datas</h2>
      <div class="article-container">
        <article>
          <span class="title"><a href="#">Lonely dinner</a> </span>
          <span class="author">Marco da Silva Ferreira</span>
          <span class="dates">04 Abr 2020 - 16 Abr 2020</span>
          <figure>
            <a href="#">
              <img src="assets/img/articles/1/1.jpg" alt="cena da peça de teatro Lonely dinner">
            </a>
            <figcaption>Esta é uma busca constante do significado da dança enquanto produto abstrato, mutável e
              efémero, que se gera intuitivamente nos universos contemporâneos.</figcaption>
          </figure>
        </article>
        <article>
          <span class="title"><a href="#">Lonely dinner</a> </span>
          <span class="author">Marco da Silva Ferreira</span>
          <span class="dates">04 Abr 2020 - 16 Abr 2020</span>
          <figure>
            <a href="#">
              <img src="assets/img/articles/1/1.jpg" alt="cena da peça de teatro Lonely dinner">
            </a>
            <figcaption>Esta é uma busca constante do significado da dança enquanto produto abstrato, mutável e
              efémero, que se gera intuitivamente nos universos contemporâneos.</figcaption>
          </figure>
        </article>
      </div>
    </section>
    <section id="credits">
      <p><b>direcção e coreografia</b> Marco da Silva Ferreira</p>
      <p><b>assistência de direcção</b> Mara Andrade</p>
      <p>interpretação Anaísa Lopes, Duarte Valadares, Marco da Silva Ferreira, Vítor Fontes; (André Cabral e Gonçalo
        Cabral)</p>
      <p><b>direcção técnica e desenho de luz</b> Wilma Moutinho</p>
      <p><b>música</b> Rui Lima e Sérgio Martins</p>
      <p><b>produção executiva</b> Célia Machado</p>
      <p><b>produção</b> Pensamento avulso, associação de artes performativas</p>
      <p><b>coprodução</b> Teatro Municipal do Porto-Rivoli e Campo Alegre; Materiais Diversos</p>
      <p><b>parceiros</b> Jazzy Dance Studio; Feira Viva; o espaço do tempo, Teatro Virgínia e Quinta do Rio</p>
      <p><b>financiado por</b> Governo de Portugal/ Secretário de Estado da Cultura/ DGArtesDireção Geral</p>
      <p><b>apoio</b> Aerowaves Priority Companies 2015</p>
    </section>
  </div>
</main>
