<?php
    $title = "Organising Committee | OzCHI 2025";
    $description = "Information and contact details for OzCHI 2025's organising committee members.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("src.php") ?>
</head>

<body>
  <?php include("nav.html"); ?>


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
        <h1>Organising Committee</h1>

        <div class="committee row">
        
        <div class="chair-superrow row col-12 col-md-8">
            <div class="chair-header col-12">
              <h3>General Chairs</h3>
              <!-- <div class="chair-email">
                example@example.com
              </div> -->
            </div>

            <div class="chair-col col">
              <div class="chair-row">
                <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Soojeong Yoo.jpg?2"></div>
                <div class="chair-right">
                  <h3 class="chair-name">Soojeong Yoo</h3>
                  <div class="chair-institution">The University of Sydney</div>
                  
                </div>
              </div>
            </div>

            <div class="chair-col col">
              <div class="chair-row">
                <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Joel Fredericks.jpg"></div>
                <div class="chair-right">
                  <h3 class="chair-name">Joel Fredericks</h3>
                  <div class="chair-institution">The University of Sydney</div>
                  
                </div>
              </div>
            </div>
      </div>

      <div class="chair-superrow row col-12 col-md-4">
          <div class="chair-header col-12">
            <h3>Program Chair</h3>
          </div>
          

        <div class="chair-col col-12">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Tram Tran.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Tram Tran</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12">
          <div class="chair-header col-12">
            <h3>Long Paper Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Marius Hoggenmueller.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Marius Hoggenmueller</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Thuong Hoang.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Thuong Hoang</h3>
              <div class="chair-institution">Deakin University</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Nadia Pantidi.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Nadia Pantidi</h3>
              <div class="chair-institution">Victoria University of Wellington</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12">
          <div class="chair-header col-12">
            <h3>Late-Breaking Work Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Glenda Caldwell.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Glenda Caldwell</h3>
              <div class="chair-institution">Queensland University of Technology</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Benjamin Tag.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Benjamin Tag</h3>
              <div class="chair-institution">The University of New South Wales</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Josh Andres.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Josh Andres</h3>
              <div class="chair-institution">Australian National University</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12">
          <div class="chair-header col-12">
            <h3>Workshop Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Hilary Davis.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Hilary Davis</h3>
              <div class="chair-institution">Swinburne University of Technology</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Marie Boden.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Marie Boden</h3>
              <div class="chair-institution">The University of Queensland</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Howe Zhu.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Howe Zhu</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12">
          <div class="chair-header col-12">
            <h3>Student Design Competition Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Moe Qashlan.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Moe Qashlan</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Pete Worthy.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Pete Worthy</h3>
              <div class="chair-institution">The University of Queensland</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Yiyuan Wang.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Yiyuan Wang</h3>
              <div class="chair-institution">The University of Technology Sydney</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12">
          <div class="chair-header col-12">
            <h3>Demonstration Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Adelaide Genay.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Adelaide Genay</h3>
              <div class="chair-institution">The University of Melbourne</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Carlos Tirado.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Carlos Tirado</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Joshua Newn.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Joshua Newn</h3>
              <div class="chair-institution">RMIT University</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Doctoral Consortium Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Marcus Foth.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Marcus Foth</h3>
              <div class="chair-institution">Queensland University of Technology</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Kaisa Väänänen.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Kaisa Väänänen</h3>
              <div class="chair-institution">Tampere University</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Provocations Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Eduardo Velloso.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Eduardo Velloso</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Jarrod Knibbe.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Jarrod Knibbe</h3>
              <div class="chair-institution">The University of Queensland</div>
              
            </div>
          </div>
        </div>
        </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Web & Social Media Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Amari Low.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Amari Low</h3>
              <div class="chair-institution">Queensland University of Technology</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Julia Spyrou.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Julia Spyrou</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Student Volunteer Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Xinyan Yu.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Xinyan Yu</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Erika Wood.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Erika Wood</h3>
              <div class="chair-institution">Australian National University</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Diversity, Equity, Inclusion, & Accessibility Chair</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Callum Parker.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Callum Parker</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Happiness / Local Arrangements Chair</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Adrian Wong.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Adrian Wong</h3>
              <div class="chair-institution">The University of Sydney</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Industry / Sponsorship Chair</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Oliver Weidlich.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Oliver Weidlich</h3>
              <div class="chair-institution">contxtu.al</div>
              
            </div>
          </div>
        </div>
      </div>
      
      <div class="chair-superrow row col-12 col-md-6">
          <div class="chair-header col-12">
            <h3>Publication Chairs</h3>
          </div>

        <div class="chair-col col">
          <div class="chair-row">
            <div class="chair-image-wrapper"><img class="chair-image" src="static/images/people/Joel Harman.jpg"></div>
            <div class="chair-right">
              <h3 class="chair-name">Joel Harman</h3>
              <div class="chair-institution">Queensland University of Technology</div>
              
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
</main>
    
  <?php include("footer.html")?>

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