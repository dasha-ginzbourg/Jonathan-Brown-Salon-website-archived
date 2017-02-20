<?php require_once('template_resources.php'); //js css ?>	

<?php require_once('header.php'); //header ?>	
	
		<script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: false,
					useReMooz: true,
					embedLinks: false
				});
			}
			window.addEvent('domready',startGallery);
		</script>
		<div class="content">
			<div id="myGallery">
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="jonathan/images/samples2/1.jpg" title="open image" class="open"></a>
					<img src="jonathan/images/samples2/1-gallery.jpg" class="full" />
					<img src="jonathan/images/samples2/1-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="jonathan/images/samples2/2.jpg" title="open image" class="open"></a>
					<img src="jonathan/images/samples2/2-gallery.jpg" class="full" />
					<img src="jonathan/images/samples2/2-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="jonathan/images/samples2/3.jpg" title="open image" class="open"></a>
					<img src="jonathan/images/samples2/3-gallery.jpg" class="full" />
					<img src="jonathan/images/samples2/3-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="jonathan/images/samples2/4.jpg" title="open image" class="open"></a>
					<img src="jonathan/images/samples2/4-gallery.jpg" class="full" />
					<img src="jonathan/images/samples2/4-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="jonathan/images/samples2/5.jpg" title="open image" class="open"></a>
					<img src="jonathan/images/samples2/5-gallery.jpg" class="full" />
					<img src="jonathan/images/samples2/5-mini.jpg" class="thumbnail" />
				</div>
				<div class="imageElement">
					<h3></h3>
					<p></p>
					<a href="jonathan/images/samples2/6.jpg" title="open image" class="open"></a>
					<img src="jonathan/images/samples2/6-gallery.jpg" class="full" />
					<img src="jonathan/images/samples2/6-mini.jpg" class="thumbnail" />
				</div>
			</div>
		</div>
	</body>
</html>
