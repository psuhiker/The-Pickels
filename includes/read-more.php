<?php $comment_count = get_comment_count($post->ID); ?>
<?php if ($comment_count['approved'] > 0) { ?>
    <a class="button--flip" href="<?php the_permalink(); ?>">
        <span class="text">Read More</span>
        <span class="flip">
            <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?>
            <span class="glyphicon glyphicon-comment xs-margin--left" aria-hidden="true"></span>
        </span>
    </a>
<?php } else { ?>
    <a class="button--flip" href="<?php the_permalink(); ?>">
        <span class="text">Read More</span>
        <span class="flip">
            Let's Go
            <span class="glyphicon glyphicon-arrow-right xs-margin--left" aria-hidden="true"></span>
        </span>
    </a>
<?php } ?>