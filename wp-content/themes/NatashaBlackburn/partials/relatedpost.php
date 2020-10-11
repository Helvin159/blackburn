<?php $relatedPost = get_field('related_page');
          if($relatedPost){
            foreach($relatedPost as $post ){
              ?>
              <div class="col-md-3">
                    <a href="<?php the_permalink()?>"><img class="img-fluid imgthumbs" src="<?php the_post_thumbnail_url($post)?>"></a>
                    </div>
                <?php  
                }
              }else {
                echo '<h3 class="text-center p-5">No posts at this time.</h3>';
              }
        ?>