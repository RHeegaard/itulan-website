<?php
get_header();
?>

    <section id="content">
        <div id="outercontent"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
            <div id="innercontent">
                <div id="postbox"><?php
					if (has_post_thumbnail() ) {
						echo "<div id=\"picturebox\"><a href=\"";
						echo get_permalink();
						echo "\"><img id=\"thumb\" src=\"";
						the_post_thumbnail_url();
						echo "\" /></a></div>";
					}
					?>
					
                    <div id="textbox2">
                        <div id="titlebox">
                            <h1><a href="<?php echo get_permalink(); ?>" id="title"><?php the_title(); ?></a><p id="date">Posted on <?php the_time("M j, Y"); ?></p></h1>
                        </div>
                        <div id="textbox">
                            <p><?php the_excerpt(); ?>&nbsp;<a id="readmore" href="<?php echo get_permalink(); ?>">Read more...</a></p>
                        </div>
                    </div>
                </div>
            </div><?php endwhile; endif; ?>
			
        </div>
    </section>
<?php get_footer(); ?>