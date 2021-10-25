<div class="row recent-work margin-bottom-40">
    <div class="col-md-12">
    <div class="owl-carousel owl-carousel3">
        <?php foreach ($player as $p) : ?>
        <div class="recent-work-item">
        <em>
        <img src="<?php echo base_url() ?>/assets/pages/img/works/img1.jpg" alt="Amazing Project" class="img-responsive">
        <a href="<?php echo site_url('player/view/'.$p->player_id) ?>" title="Lihat Pertandingan"><i class="fa fa-link" ></i></a>
        <a href="assets/pages/img/works/img1.jpg" class="fancybox-button" title="Foto" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
        </em>
        <strong><?php echo $p->player_name ?></strong>
        </a>
        </div>
        <?php endforeach ?>
    </div>       
    </div>
</div>