        <div class="row mix-block margin-bottom-40">
          <!-- TABS -->
          <div class="col-md-12 tab-style-1">
            <ul class="nav nav-tabs">
              
              <?php foreach ($year as $y) { ?>

                <?php $active = ($y === reset($year)) ? 'active' : '' ;  ?>
                <li class="<?php echo $active ?>"><a href="#<?php echo $y->year ?>" data-toggle="tab"><?php echo $y->year ?></a></li>
                  
              <?php }?>
            
            </ul>
            <div class="tab-content">
            
              <?php foreach ($year as $y) { ?>

                <?php $ac = ($y === reset($year)) ? 'in active' : '' ;  ?>
                <div class="tab-pane row fade <?php echo $ac ?>" id="<?php echo $y->year ?>">

                    <div class="col-md-12">
                    
                    <?php 
                        $main = $this->db->where('player_id', $player_id)
                                        ->where('year' , $y->year)
                                        ->get('v_turnament');
                     ?>
                    <?php foreach ($main->result() as $m) { ?>

                        <blockquote>
                            <p><?php echo $m->event_name ?></p>
                            <small><?php echo $m->event_date ?></small>
                        </blockquote>
                    
                    <?php } ?>
                    
                    </div>
                
                </div>
                
              <?php } ?>

            </div>
          </div>
          <!-- END TABS -->
        
        </div> 