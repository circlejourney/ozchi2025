<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("src.php") ?>
</head>

<body>
  <?php include("html/nav.html"); ?>


  <!-- User Overrides -->

  <style>

    .committee {
      justify-content: center;
    }

    .chair-row {
      /* background: #eee; */
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      padding: 0.3rem 0.6rem 0.3rem 0.3rem;
    }

    .chair-header {
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
      text-align: center;
      margin-top: 1rem;
    }

    .chair-header h3 {
      width: 100%;
      border: none;;
      background-color: var(--nav-col);
      color: var(--accent-text-col);
      padding: 0.25rem;
      font-size: 105%;
      margin: 0 auto;
      clip-path: var(--clip);
      padding-right: 25px;
    }

    .chair-header h3::after {
      display: inline;
      content: " ▼";
    }

    .chair-email {
      font-size: 90%;
      opacity: 0.8;
    }

    .chair-col {
        margin-top: 1rem;
    }

    @media only screen and (max-width: 768px) {
      .chair-row{
        flex-wrap: wrap;
      }
      .chair-header {
        flex-basis: 100%;
        max-width: none;
        text-align: center;
      }
    }

    .chair-right {
      flex-grow: 1;
    }

    .chair-image {
      width: 180px;
      height: 180px;
      border-radius: 100%;
      object-fit: cover;
      object-position: top;
    }

    .chair-institution {
      font-size: 80%;
      opacity: 0.9;
      line-height: 1.2em;
      text-align: center;
    }

    .chair-name {
      text-align: center;
      font-size: 120%;
      border: none;
    }
    
  </style>
  
  <main class="container">
    <div class="content">
      <?php if(isset($breadcrumbs)): ?>
      <div class="breadcrumbs">
        <a href="./">Home</a> >
        <?php foreach($breadcrumbs as $name => $url): ?>
            <a <?php if(isset($url)): ?>href="<?php echo $url; ?>"<?php endif; ?>>
              <?php echo $name; ?>
            </a>
            <?php if($name !== array_key_last($breadcrumbs)): ?>><?php endif;?>
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
      });
    </script>
    <!--    <script src="static/js/modules/lazyLoad.js"></script>-->

</body>

</html>