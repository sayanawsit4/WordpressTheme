<style>
.card {
	box-shadow: 1px 1px 1px grey;
	margin-bottom: 2em;
}

.card-header a{
 color: #212529;
 font-weight: bold;	
}	

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #ffc107bf;
    border-bottom: 1px solid #bba01d80;
	font-weight: bold;
	/*background-image: linear-gradient(to left, rgba(255,0,0,0), rgba(255, 165, 0, 0.86))*/;
}
</style>	
<?php
//Get only the approved comments 

$post_ID = $post->ID;

$args = array(
    'status' => 'approve',
	'post_id'=>$post_ID
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) {
    foreach ( $comments as $comment ) { ?>
	<div class="card">	
	   <div class="card-header"><?php echo $comment->comment_author  ; ?></div>
	   <div class="card-body"><?php echo $comment->comment_content ; ?></div>
   </div>	
   <?php  } 
} else {
    echo 'No comments found.';
}
?>
<div class="card">	
	<div class="card-body"><?php comment_form(); ?></div>
</div>