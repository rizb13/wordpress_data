<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">
            <h4 class="comment-reply-title">
                <?php
                if(!have_comments()){
	                echo "Leave a Comment";
                }
                else{
                   echo get_comments_number()." Comments";
                }
                ?>
            </h4><!-- .comments-title -->
        </div><!-- .comments-header -->
        <div class="comments-inner">
            <?php
                wp_list_comments(
                        array(
                              'avatar_size' => 50,
                              'style' => 'div',
                        ))
            ?>
        </div><!-- .comments-inner -->
    </div><!-- comments -->
    <?php
        if(comments_open()){
            comment_form(
                    array(
                            'class_form'=>'',
                            'title_reply_before'=>'<h7 id="reply-title" class="comment-reply-title">',
                            'title-reply-after'=>'</h7>'

                    ) );
        }
    ?>

</div><!-- #respond -->
