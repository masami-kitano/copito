<?php
/*
Template Name: top
*/
?>
<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="home-main" class="home-site-main" role="main">
		<section class="cp-main">
			<div class="cp-main-section">
				<div class="cp-main-container">
					<div class="cp-main-left">
						<div class="cp-main-left-title"><a href="https://copito-stablo.com/#news">News</a></div>
						<div class="cp-header-allow">
							<img src="<?php bloginfo('template_directory'); ?>/img/copito-header-allow-up.png" alt="Copito" class="cp-header-allow-up">
						</div>
						<div class="cp-main-left-day"><?php echo date("Y/m/d"); ?></div>
					</div>
					<div class="cp-main-img">
						<img id="view" src="<?php bloginfo('template_directory'); ?>/img/copito-top1.png" alt="Copito">
						<div id="next"></div>
					</div>
					<div class="cp-main-right">
						<div class="cp-main-right-title">Check</div>
						<div class="cp-header-allow">
							<img src="<?php bloginfo('template_directory'); ?>/img/copito-header-allow-down.png" alt="Copito" class="cp-header-allow-down">
						</div>
						<div class="cp-main-right-insta"><a href="https://www.instagram.com/copito_stablo/" target="_blank"><i class="fab fa-instagram"></i></a></div>
					</div>
				</div>
			</div>
			<a name="about"></a>
			<div class="cp-main-section effect-fade">
				<div class="cp-main-title">
					<h2>About</h2>
				</div>
				<div class="cp-about-contents">
					<div class="cp-about-gorilla">
						<img src="<?php bloginfo('template_directory'); ?>/img/copito-gorilla.png" alt="Copito" class="gorilla">
						<p>スペインの賑やかなイメージとは異なり、<br>シンプルな建物と閑静な住宅街の中にあるCopito。</p>
						<br>
						<p>でも奥まで見える厨房から出てくる伝統的な料理が、<br>一気にスペインにいるような気持ちにさせてくれます。</p>
						<br>
						<p>もっと身近にスペインを味わってみませんか。</p>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/copito-shop-art.png" alt="Copito" class="shop-art">
				</div>
			</div>

			<div class="cp-main-section">
				<div class="cp-main-title effect-fade">
					<h2>Menu</h2>
				</div>
				<div class="cp-menu-contents">

					<div class="cp-menu-item effect-fade">
						<h3>Lunch</h3>
						<a href="https://copito-stablo.com/menu/#lunch">
							<div class="cp-item-bg bg-lunch">
								<div class="cp-menu-item-time lunch-time">11:30~14:00</div>
								<div class="cp-menu-item-time-bg lunch-time-bg"></div>
								<img src="<?php bloginfo('template_directory'); ?>/img/copito-lunch.png" alt="Copito">
							</div>
						</a>
					</div>

					<div class="cp-menu-item effect-fade">
						<h3>Take Out</h3>
						<a href="https://copito-stablo.com/menu/#takeout">
							<div class="cp-item-bg bg-takeout">
								<div class="cp-menu-item-time takeout-time">11:00~23:00</div>
								<div class="cp-menu-item-time-bg takeout-time-bg"></div>
								<img src="<?php bloginfo('template_directory'); ?>/img/copito-takeout.png" alt="Copito">
							</div>
						</a>
					</div>

					<div class="cp-menu-item effect-fade">
						<h3>Dinner</h3>
						<a href="https://copito-stablo.com/menu/#dinner">
							<div class="cp-item-bg bg-dinner">
								<div class="cp-menu-item-time dinner-time">17:00~23:00</div>
								<div class="cp-menu-item-time-bg dinner-time-bg"></div>
								<img src="<?php bloginfo('template_directory'); ?>/img/copito-dinner.png" alt="Copito">
							</div>
						</a>
					</div>

				</div>
			</div>

			<a name="news"></a>
			<div class="cp-main-section effect-fade">
				<div class="cp-main-title">
					<h2>News</h2>
				</div>
				<div class="cp-news-contents">
					<div class="cp-news-sns">
						<div class="cp-news-sns-item">
							<div class="sns-item1 checkbox box1"><a href="https://www.instagram.com/copito_stablo/" target="_blank"><span class="check">✔︎</span>instagram</a></div>
							<div class="sns-item2 checkbox box2"><a href="https://tabelog.com/osaka/A2701/A270104/27114033/" target="_blank"><span class="check">✔︎</span>食べログ</a></div>
						</div>
					</div>
					<div class="cp-news-info">
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3
						);
						$st_query = new WP_Query( $args );
						?>
						<?php if ( $st_query->have_posts() ): ?>
						<?php while ( $st_query->have_posts() ) : $st_query->the_post(); ?>
							<div class="cp-news-info-item">
								<p class="post-day"><?php the_time( 'Y/m/d' ); ?></p>
								<p class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
							</div>
						<?php endwhile; ?>
						<?php else: ?>
						<p>新しい記事はありません</p>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<a name="contact"></a>
			<div class="cp-main-section effect-fade">
				<div class="cp-info-contents">
					<div class="cp-shop-img cp-info-item">
						<img src="<?php bloginfo('template_directory'); ?>/img/copito-shop.png" alt="Copito">
					</div>
					
					<div class="cp-info-wrap cp-info-item">
						<div class="cp-info-contact">
							<div class="cp-main-title contact-title">
								<h2>Contact</h2>
							</div>
							<div class="contact-item">
								<div class="cp-tel" style="text-align: center; padding-bottom: 1em;"><a href="tel:06-7222-9840">06-7222-9840</a></div>
								<!-- <div class="cp-mail checkbox"><a href="mailto:copito@gmail.com"><span>✔︎</span>copito@gmail.com</a></div> -->
							</div>
						</div>

						<div class="cp-info-access">
							<div class="cp-main-title access-title">
								<h2>Access</h2>
							</div>
							<div class="cp-address">大阪市中央区大手通2-1-7 ニュー大手ビル1階</div>
							<div class="cp-map">
								<div class="google-map">
								<iframe
									width="100%"
									height="300"
									frameborder="0" style="border:0"
									src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAw4SbYKeAq-0CNYzZBJrDfWhrfXJ7REFI
										&q=Copito" allowfullscreen>
								</iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
