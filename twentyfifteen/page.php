<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-38076957-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-38076957-2');
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<main>
	
<?php	
$parents = get_post_ancestors( $post->ID );
$pname= apply_filters( "the_title", get_the_title($parents[0]));
$parentsplink = get_post_ancestors( $post->ID );
$link= apply_filters( "the_permalink", get_the_permalink($parentsplink[0]));
	
	
?>
<nav class="bg-success text-white breadcrumb">
	<div class="mbox">
		My KnowledgeBox
	</div>
  <a class="breadcrumb-item text-white" href="http://myknowledgebox.co.in">Home</a>
  <a class="breadcrumb-item text-white" href="<?php echo $link ; ?>"><?php echo $pname; ?></a>
  <a class="breadcrumb-item text-white" href="<?php get_permalink(); ?>"><?php echo get_the_title($post); ?></a>
</nav>

<?php while ( have_posts() ) : the_post(); ?>

		<?php
    	  global $post;
          $page_slug = $post->post_name;
			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => - 1,
				'category_name' => $page_slug
				
			);
			$q    = new WP_Query( $args );
		?>
<h3 class="center">All <?php echo $page_slug  ; ?> topics</h3>
		<div class="row">
			<?php while ( $q->have_posts() ) : $q->the_post(); ?>
	<div class="card">
  <div class="card-header"><a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a></div>
  <div class="card-body"><?php the_excerpt(); ?></div> 
</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>

	<?php endwhile; ?>
 <div class="module">
 <div class="stripe-1">
   The content of all pages of this site has been refered from <span style="color:blue;font-weight:bold"><a href="https://docs.servicenow.com/">ServiceNow offical website</a></span>. The content doesn indent to be alternative or superlative of the actual <span style="color:blue;font-weight:bold">Servicenow </span>documentation and meant for learning and development purpose only.Any individual going through the articles are requested to consult ServiceNow offcial website for enterprise requirement of SNOW implementation 
</div></div></div>	
</main>
<style>
	.breadcrumb {
    border-radius: 0;
}
.row {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-column-gap: 1rem;
  grid-row-gap: 1rem;
  margin-right: 15px;
  margin-left: 15px;
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

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fbe609;
    border-bottom: 1px solid #bba01d80;
	/*background-image: linear-gradient(to left, rgba(255,0,0,0), rgba(255, 165, 0, 0.86))*/;
}
.breadcrumb {
      background-color: #1a7b29!important;
}
	
a{
 color: #212529;
 font-weight: bold;
}
	
.card {
	box-shadow: 1px 1px 1px grey;
}

.card-header a{
 color: #212529;
 font-weight: bold;
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