<!doctype html>
<html class="no-js" lang="en">
<?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/header.php";
  include_once($path);
	?>
<body>
  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/nav-list.php";
  include_once($path);
  ?> 
  <section class="content">
    <div class="row">
      <div class="small-12 columns text-center">
        <h1>Thoughts</h1>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
      <a class="blog-post-feature" href="/2018/11/holding-yourself-accountable.php/">
          <h2>Embracing accountability</h2>
          <p>November 16th, 2018</p>
        </a>
        <a class="blog-post-feature" href="/2018/11/ui-design-thoughts.php">
          <h2>Thoughts on UI Design</h2>
          <p>October 22nd, 2018</p>
        </a>
        <a class="blog-post-feature" href="/2018/11/investing-in-your-logo.php/">
          <h2>Investing in a logo</h2>
          <p>October 2nd, 2018</p>
        </a>
      </div>
    </div>
  </section>
  <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/footer.php";
  include_once($path);
  ?>
   <?php $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/analyticstracking.php";
  include_once($path);
  ?>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
</body>
</html>
