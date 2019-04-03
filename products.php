<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Dennis Good</title>
<link rel="stylesheet" href="css/foundation.css" />
<link rel="stylesheet" href="css/styles.css" />
<script src="js/vendor/modernizr.js"></script>

<script type="text/javascript">
  (function() {
    var config = {
      kitId: 'icl5gws',
      scriptTimeout: 3000,
    };
    var h = document.getElementsByTagName('html')[0];
    h.className += ' wf-loading';
    var t = setTimeout(function() {
      h.className = h.className.replace(/(\s|^)wf-loading(\s|$)/g, ' ');
      h.className += ' wf-inactive';
    }, config.scriptTimeout);
    var d = false;
    var tk = document.createElement('script');
    tk.src = '//use.typekit.net/' + config.kitId + '.js';
    tk.type = 'text/javascript';
    tk.async = 'true';
    tk.onload = tk.onreadystatechange = function() {
      var rs = this.readyState;
      if (d || rs && rs != 'complete' && rs != 'loaded') return;
      d = true;
      clearTimeout(t);
      try { Typekit.load(config); } catch (e) {}
    };
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(tk, s);
  })();
</script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"e6b0cc1e53f4e32868fb6f870","lid":"cbffb90da8"}) })</script>

</head>
<body>
	<div class="row header-row">
		<div class="small-6 medium-2 large-2 columns"><img id="header-logo" src="img/dgood-logo.png" alt="" width="" height="" /></div>	
		<div class="small-1 medium-7 large-8 columns">
			<img class="show-for-medium-up" id="creative-graphic" src="img/creative-thinking.png" alt="" width="450" height="" />
			<p class="hide-for-small-only">Hello, I'm Dennis. I'm an Indiana based web and print designer.</p>
		</div>
	</div>
	<div>
	<div class="row">
		<div class="small-12 medium-3 columns text-center">&nbsp;</div>
		<div class="small-12 medium-6 columns text-center">
			<h1>Products</h1>		
			<a href="https://www.etsy.com/shop/DGoodDesign" target="_blank"><button class="expand">Prints and Digital Art</button></a>
			<a href="https://dennisgood.threadless.com/" target="_blank"><button class="expand">Adult and Youth T-Shirts</button></a>
			<a href="https://dennisgood.threadless.com/accessories" target="_blank"><button class="expand">Accessories</button></a>
		</div>
		<div class="small-12 medium-3 columns text-center">&nbsp;</div>
	</div>
	</div>
	<div id="footer" class="row">
		<div class="small-12 medium-3 large-3 columns">
			<img id="footer-logo" src="img/footer-logo.png" width="100" height="" alt="Dennis Good Design" />
			<p>&#169; Copyright <?php echo date("Y"); ?></p>
		</div>
		<div class="small-12 medium-3 large-3 columns">
			<h5>Pages</h5>
			<p><a href="#" data-reveal-id="infoModal">Information</a></p>
		</div>
		<div class="small-12 medium-3 large-3 columns">
			<h5>Contact Me</h5>
			<p><a href="mailto:helloATdennisgoodDOTcom"
							 onclick = "this.href=this.href
							 .replace(/AT/,'&#64;')
							 .replace(/DOT/,'&#46;')">Email</a> / 317.440.3259</p>
		</div>
		<div class="small-12 medium-3 large-3 columns">
			<h5>My Social</h5>
			<?php include_once("includes/footer.php") ?>
		</div>
	</div>
	<?php include_once("analyticstracking.php") ?>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>
</body>
</html>
