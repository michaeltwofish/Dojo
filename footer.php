</div> <!-- end content -->

<?php $theme->display('sidebar'); ?>

</div> <!-- end wrapper -->

<hr />

<div id="footer">
	<p class="poweredby"><small>
		<?php Options::out('title'); ?> is powered by 
		<a href="<?php echo $theme->info->url; ?>">Dojo</a> 
		and <a href="habariproject.org/">Habari</a>.
	</small></p>
</div> <!-- end footer -->

</div> <!-- end page -->

	<?php $theme->footer(); ?>
</body>
</html>

