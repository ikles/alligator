<div class="footer">
	<div class="contain">
		<div class="footer__top">
			<div class="footer__col-1">
				<div class="footer__mnu">
					<div class="footer__mnu-tittle"><?php echo get_field('footer__mnu-tittle_1'); ?></div>					
					<?php wp_nav_menu('menu=top_menu'); ?>						
				</div>
			</div>      
			<div class="footer__col-2">
				<div class="footer__mnu">
					<div class="footer__mnu-tittle"><?php echo get_field('footer__mnu-tittle_2'); ?></div>
					<?php wp_nav_menu('menu=Footer_menu_1'); ?>				
				</div>
			</div>
			<div class="footer__col-3">
				<div class="footer__mnu">
					<div class="footer__mnu-tittle _empty">..</div>
					<ul>
						<?php wp_nav_menu('menu=top_menu'); ?>						
					</ul>
				</div>
			</div>
		</div>
		<div class="footer__bot">
			<div class="footer__bot-col-1">
				<?php echo get_field('footer__bot_col_1'); ?>
			</div>
			<div class="footer__col-soc">
				<div class="footer__col-soc-txt"><?php echo get_field('soc_title'); ?></div>
				<div class="footer__col-soc-row">
					<a href="<?php echo get_field('footer_soc_1'); ?>" class="footer__col-soc-item"><img src="<? bloginfo('template_url') ?>/img/soc-3.png" /></a>
					<a href="<?php echo get_field('footer_soc_2'); ?>" class="footer__col-soc-item"><img src="<? bloginfo('template_url') ?>/img/soc-2.png" /></a>
					<a href="<?php echo get_field('footer_soc_3'); ?>" class="footer__col-soc-item"><img src="<? bloginfo('template_url') ?>/img/soc-1.png" /></a>
				</div>
			</div>
			<div class="bot__inf">
				<?php echo get_field('foot_links'); ?>
				<div class="copy"><?php echo get_field('copy'); ?></div>
			</div>
		</div>
	</div>
</div><!--footer-->
</div><!--wrapper-->
<div class="overlay"></div>
<? wp_footer(); ?>
<script src="<? bloginfo('template_url') ?>/js/jquery-3.4.1.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/jquery.fancybox.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/slick.js"></script>
<script src="<? bloginfo('template_url') ?>/js/common.js"></script>
</body>
</html>