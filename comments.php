<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <hr>

        <h3 class="comments-title">
            <?php
                printf( _nx( 'Un comentario para "%2$s"', '%1$s comentarios para "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h3>

        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->


        <?php if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>

        <?php endif; // have_comments() ?>


        <div class="pagination">
            <?php paginate_comments_links(); ?>
        </div>
 
 <?php comment_form(); ?>

 <br><br>

</div><!-- #comments -->