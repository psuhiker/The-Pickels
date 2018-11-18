<?php
    $arrX = array(
        "start writing", 
        "let's hear it",
        "tell us what you think", 
        "share your thoughts"
    );
    $randIndex = array_rand($arrX);
?>

<a name="comments"></a>

<?php $comment_count = get_comment_count($post->ID); ?>
<?php if ($comment_count['approved'] > 4) { ?>
	<div class="col-xs-12 text-center comments-button">
	
	    <p>
	    	<a type="button" class="btn btn-default activateComments" role="button" data-tracking="activateComments" data-label="above comments">
	    	    <span class="glyphicon glyphicon-comment xs-margin--right" aria-hidden="true"></span> Add a Comment
	    	</a>
	    </p>
	
	</div>
<?php } ?>

<div class="comments">
    
    <div class="comments-form lg-padding--all panelSlide--bottom">
        <div class="col-xs-12">
        
            <div class="float--right lg-margin--top">
            	<a class="hideComments" role="button">
            		<span class="glyphicon glyphicon-remove font-size--md" aria-hidden="true"></span>
            	</a>
            </div>
        
            <?php 
                $commenter = wp_get_current_commenter();
                $req = get_option( 'require_name_email' );
                $aria_req = ( $req ? " aria-required='true'" : '' );
                $fields =  array(
                    'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                    
                );
                $title = get_the_title();
                $author = get_the_author();
                $comments_args = array(
                    'fields' =>  $fields,
                    'title_reply'=>'<div class="font-size--sm sm-padding--bottom">Comment on:</div> <div class="headline">' . $title . '</div>',
                    'class_submit' => 'btn btn-default',
                    'label_submit' => 'Send My Comment',
                    'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="' . $arrX[$randIndex] . '" aria-required="true"></textarea></p>'
                );
                 
                comment_form($comments_args);
            ?>
    
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <div class="comments-replies">
    
    	<?php
    		$id = get_the_ID();
    		$comments = get_comments(array(
    			'post_id' => $id,
    			'status' => 'approve'
    		));
    		wp_list_comments(array(
    			'reverse_top_level' => true,
    			'callback' => 'mytheme_comment'
    		), $comments);
    	?>
    
    </div>
    
</div>

<div class="col-xs-12 text-center comments-button">

    <p>
    	<a type="button" class="btn btn-default activateComments" role="button" data-tracking="activateComments" data-label="below comments">
    	    <span class="glyphicon glyphicon-comment xs-margin--right" aria-hidden="true"></span> Add a Comment
    	</a>
    </p>

</div>