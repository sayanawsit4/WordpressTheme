<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel='stylesheet' id='spacexchimp_p010-frontend-css-css' href='http://myknowledgebox.co.in/wp-content/plugins/my-syntax-highlighter/inc/css/frontend.css?ver=2.36' type='text/css' media='all'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/a11y-dark.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38076957-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-38076957-2');
</script>

<style>
.row {
  display: grid;
  grid-template-columns: repeat(0, 1fr);
  grid-column-gap: 1rem;
  grid-row-gap: 1rem;
  margin-right: 15px;
  margin-left: 15px;
}
	.breadcrumb { 
		border-radius:0
 	}

@for $i from 1 through 12 {
  .col-#{$i} {
    grid-column: span $i;
  }
}
	
	

body {
 /*padding-right:23px;
  #padding-right:213px;
  background-image: url('<?php echo background_image();?>');*/
  background-image:url('https://www.myknowledgebox.co.in/wp-content/uploads/2019/02/images.jpg');
  background-color: #cccccc;	  

}	
 
	
.center {
  margin: auto;
  width: 35%;
  border-bottom: 3px solid #73AD21;
  padding: 5px;
  text-align: center;
  margin-bottom:15px
}	
	
.breadcrumb >.active {
   color: white;
}
	
a{
 color: #212529;
 font-weight: bold;
}	

 .breadcrumb {
      background-color: #1a7b29!important;
}
	
.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    color: #fcfffcfa;
    content: "/";
}	
	
.mbox {
    color: #ff0;
    text-shadow: -1px 0 black, 0 2px black, 1px 0 black, 0 -1px black;
    margin-right: 2em;
	font-weight: bold;
}	
	
 .module {
 position: relative;
  bottom: 10px;
  width: 100%;
  background: white;
  border: 1px solid #ccc;
   /*animation: widen 10s linear alternate infinite;*/
}

.stripe-1 {
  color: black;
   background: repeating-linear-gradient(
    45deg,
    #e0e6dd,
    #e0e6dd 10px,
    #cae4e3 10px,
    #cae4e3 20px
  );
}
 
span.thick {
  font-weight: bold;
}
	

	
}
	
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<head>
	
 

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php	
$category_detail=get_the_category($post->ID);//$post->ID

foreach($category_detail as $cd){
$page_title= $cd->cat_name;
//echo $page_title;
//$page_name = get_page_by_title('admin');
//echo $page_name->ID
}
$page = get_page_by_title( $page_title);
$pname = get_the_title($page);//$page->ID
$link =  get_the_permalink($page);

$parentpname=get_the_title($page->post_parent);
$parentlink=get_the_permalink($page->post_parent);	

?>
 
	
	<nav class="bg-success breadcrumb">
		<div class="mbox">
		My KnowledgeBox
	</div>
  <a class="breadcrumb-item text-white" href="http://myknowledgebox.co.in">Home</a>
  <a class="breadcrumb-item text-white" href="<?php echo $parentlink ; ?>"><?php echo $parentpname; ?></a>
  <a class="breadcrumb-item text-white" href="<?php echo $link ; ?>"><?php echo $pname; ?></a>
  <span class="breadcrumb-item active"><?php echo get_the_title($post); ?></span>
</nav>

<h2 class="center"><?php the_title(); ?></h2>
<?php while ( have_posts() ) : the_post(); 	?>
	<div class="row">		
 		<div class="card">
           <div class="card-body">
    		<?php get_template_part( 'content', get_post_format() );
   			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			// Previous/next post navigation.
			/*the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );*/

		// End the loop.
		endwhile;
		?>	
  </div> 
</div>
</div>
	   	<div >
 <div class="module">
 <div class="stripe-1">
   The content of all pages of this site has been refered from <span style="color:blue;font-weight:bold"><a href="https://docs.servicenow.com/">ServiceNow offical website</a></span>. The content doesn indent to be alternative or superlative of the actual <span style="color:blue;font-weight:bold">Servicenow </span>documentation and meant for learning and development purpose only.Any individual going through the articles are requested to consult ServiceNow offcial website for enterprise requirement of SNOW implementation 
</div></div></div>
 