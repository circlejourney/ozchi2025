<?php
  $title = "OzCHI 2025";
  $description = "OzCHI 2025 is the 37th Australian Conference on Human-Computer Interaction. This annual non-profit event is for the Computer-Human Interaction Special Interest Group (CHISIG) and serves as a premier forum for the latest advancements in HCI research and practice. This year's event will be hosted in Sydney, Australia, from 29 November to 3 December 2025.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("src.php") ?>
</head>

<body>
  <?php include("html/nav.html"); ?>


  <!-- User Overrides -->

  <div class="banner-back">
    <div class="row header p-5">
      <div class="p-1 mx-auto text-center col-md-9 col-sm-12">
        <img class="logo mw-400" src="static/images/OzCHI2025_COLOR_LOGO ONLY.svg" alt="OzCHI 2025 logo">
        <h2>
          <span class="accent-text">OzCHI 2025: Generative Intelligences, Planetary Futures</span><br>
          37th Australian Conference on Human-Computer Interaction (HCI)<br>
          29 November to 3 December 2025<br>
          Sydney, Australia
        </h2>
      </div>
    </div>
    <div class="banner-image-wrapper">
    <img class="banner-image" src="static/images/venue/skyline.png?2">
    </div>
  </div>
  
  <div class="container content">
    <main class="row">
      <div class="col-12 col-md-8 px-5 order-2 order-md-1">
        <h2>Welcome to OzCHI 2025</h2>
        <p>OzCHI 2025 is the 37th Australian Conference on Human-Computer Interaction. This annual non-profit event is for
          the Computer-Human Interaction Special Interest Group (CHISIG) and serves as a premier forum for the latest
          advancements in HCI research and practice. This year's event will be hosted in Sydney, Australia, from 29
          November to 3 December 2025.</p>
        
        <p>OzCHI is Australasia's leading forum for cutting-edge HCI research and practice. It attracts a diverse
          international community of researchers, industry practitioners, academics, and students. Participants come from
          over 25 countries and various fields, including interaction design, user experience, information architecture,
          software engineering, human factors, information systems analysis, and social sciences. We welcome and encourage
          international and industry submissions and participation.</p>
        
        <p class="text-center font-weight-bold nav-accent large">Theme: Generative Intelligences, Planetary Futures</p>
        <p>This year's conference theme, Generative Intelligences, Planetary Futures, reflects the evolving role of HCI in
          collaborating with emerging intelligent technologies to shape sustainable futures for our planet.</p>
        
        <div class="spacer"></div>
        
        <h2><i class="far fa-building"></i> Venue</h2>
        <p class="large font-weight-bold">The University of Sydney, Darlington NSW</p>
        
        <div class="spacer"></div>

        <h2><i class="far fa-file-lines"></i> Submission dates</h2>

        <p>Dates are given in Anywhere on Earth (AoE) time zone. The deadline for submission is 11:59 PM AoE on the specified date. You can check the current AoE time <a href="https://time.is/Anywhere_on_Earth">here</a>.</p>
        
        <table class="table table-striped shadow-sm rounded medium">
            <thead class="accent">
            <tr class="font-weight-bold">
              <th></th>
              <th>Submission</th>
              <th>Notification</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td><a href="papers-lbw.php">Long papers</a></td>
              <td>2 June</td>
              <td>23 July</td>
            </tr>
            <tr>
              <td><a href="provocations.php">Provocations</a></td>
              <td>4 August</td>
              <td>25 August</td>
            </tr>
            <tr>
              <td><a href="papers-lbw.php">Late-Breaking Work</a></td>
              <td>4 August</td>
              <td>24 September</td>
            </tr>
            <tr>
              <td><a href="workshops.php">Workshops</a></td>
              <td>9 July</td>
              <td>13 August</td>
            </tr>
            <tr>
              <td><a href="dc.php">Doctoral Consortium</a></td>
              <td>18 August</td>
              <td>17 September</td>
            </tr>
            <tr>
              <td><a href="demos.php">Demonstrations</a></td>
              <td>18 August</td>
              <td>17 September</td>
            </tr>
            <tr>
              <td>Student Design Competition</td>
              <td>22 September</td>
              <td>10 October</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="col text-center sidebar-wrapper order-1 order-md-2 p-0 mx-2 mx-md-0">
        <div class="sidebar-cap">
        </div>
        <div class="sidebar pb-4 pt-md-4">
          <p class="large accent-text">Tag your posts with <b>#OzCHI2025</b>!</p>
          
          <div class="spacer"></div>

        <h4>Follow us</h4>
        <ul class="link-group font-weight-bold">
					<li>
						<a href="https://www.linkedin.com/company/ozchi-australian-conference-on-computer-human-interaction/"><i class="fa-brands fa-linkedin"></i> LinkedIn</a>
					</li>
					<li>
						<a href="https://www.instagram.com/ozchi_conf/"><i class="fa-brands fa-instagram"></i> Instagram</a>
					</li>
					<li>
						<a href="https://www.threads.net/@ozchi_conf"><i class="fa-brands fa-threads"></i> Threads</a>
					</li>
					<li>
						<a href="https://bsky.app/profile/ozchi-conf.bsky.social"><i class="fa-brands fa-bluesky"></i> Bluesky</a>
					</li>
				</ul>
        <div class="spacer"></div>
        <h4>Latest updates</h4>
        <p>
          <?php include("html/latest.html") ?>
        </p>
        </div>
      </div>
    </main>
  </div>

    <!-- Footer -->
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