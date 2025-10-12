<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("src.php") ?>
</head>

<body>
  <?php include("html/nav.html"); ?>


  <!-- User Overrides -->
  
  <main class="container">
    <div class="content">
      <?php if(isset($breadcrumbs)): ?>
      <div class="breadcrumb screen-only">
        <div class="breadcrumb-item">
          <a href="./">Home</a>
        </div>
        <?php foreach($breadcrumbs as $name => $url): ?>
          <div class="breadcrumb-item">
            <a <?php if(isset($url)): ?>href="<?php echo $url; ?>"<?php endif; ?>>
              <?php echo $name; ?>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      
      <?php echo $content ?>
  </div>
</main>
    
  <?php include("html/footer.html")?>

    <!-- Code for hash tags -->
    <script type="text/javascript">
      $(document).ready(function () {
        if (window.location.hash !== "") {
          $(`a[href="${window.location.hash}"]`).tab("show");
        }

        $("a[data-toggle='tab']").on("shown.bs.tab", function (e) {
          const hash = $(e.target).attr("href");
          if (hash.substr(0, 1) === "#") {
            const position = $(window).scrollTop();
            window.location.replace(`#${hash.substr(1)}`);
            $(window).scrollTop(position);
          }
        });
		$(".scroll-link").on("click", function(e) {
			e.preventDefault();
            const {top} = $($(this).attr("href")).position();
            scrollTo({
				"top": top - 60,
				"left": 0,
				"behavior": "smooth"
			});
		})
      });
    </script>
    <!--    <script src="static/js/modules/lazyLoad.js"></script>-->

</body>

</html>