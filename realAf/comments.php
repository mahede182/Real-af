<?php
     
    wp_list_comments(array(
        'callback'  =>  'realaf_comment',
        'avatar_size'   => 32,
        'per_page' =>8
    ));
    comment_form( array(
            'labe_submit'	=>	'submit',
            'submit_button'	=>	'<button type="submit" class="btn btn-4 btn-block">Send</button>',
            'comment_field'	=>	'<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
            placeholder="Message"></textarea>',
            'class_form'	=>	'col-md-6',
            'title_reply'   =>  'Leave a comment As your wish',
            'comment_notes_before'=> ' ',
            'comment_notes_after'=> ' ',
) );



?>
