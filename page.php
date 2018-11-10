<?php
get_header();
?>

    <section id="content">
        <div id="outercontent"><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
            <div id="innercontentsingle">
                <div id="postboxsingle"><?php
					if (has_post_thumbnail() ) { echo "<div id=\"pictureboxsingle\"><img id=\"thumbsingle\" src=\""; the_post_thumbnail_url(); echo "\" /></div>";
					}
					?>
					
                    <div id="textbox2single">
                        <div id="titlebox">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div id="textboxsingle">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div><?php endwhile; endif; ?>
			
        </div>
    </section>
<?php get_footer(); ?>