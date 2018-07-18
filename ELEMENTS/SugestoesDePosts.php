<section id="SugestoesDePosts" class="bg-white container shadow-sm">
  <h3 class="font-weight-bold">Sugestões de Postagens</h3>
  <h5 class="text-muted subtitulo font-weight-normal">As montanhas te dizem que há algo relacionado.</h5>
  <div class="row container-fluid">
    <?php for ($i=0; $i < 4; $i++) { ?>
     <article class="col-3">
      <a href="#">
        <div class="thumbpost" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/ASSETS/IMG/Anime2.jpg');"></div>
        <h4 align="left">Postagem sobre tal assunto</h4>
      </a>
    </article>
    <?php } ?>
  </div>
</section>
