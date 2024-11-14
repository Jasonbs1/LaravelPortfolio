<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Portfolio-JasonBS</title>

     <!-- CSS  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/materialize.min.css" type="text/css" media="screen,projection"/>
    <link href="/css/scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen,projection"/>
    <style>
    .modal-footer .btn-flat {
      color: white;
      background-color: #4db6ac;
    }
    .modal-footer .btn-flat:hover {
      background-color: #00796b;
    }
    </style>
  </head>

  <body>
    <header>
      <div class="container">
        <a href="#" data-activates="nav-mobile" class="button-collapse">
          <i class="fa fa-bars fa-3x fixed-navicon"></i>
        </a>
        <ul id="nav-mobile" class="side-nav fixed side-bar white-text">
          <li class="logo">
            <a id="logo-container" href="" class="brand-logo white-text">
            <img src="/images/foto2.jpg" alt="Logo" width="50">
              <h4>Jason B. Setiawan</h4>
            </a>
          </li><br><br>

          <li class="side-link"><a class="white-text" href="#introduction">Intro&nbsp;&nbsp;<i link="introduction" class="fa fa-user"></i></a></li>
          <li class="side-link"><a class="white-text" href="#" link="#projects">Projects&nbsp;&nbsp;<i link="#projects" class="fa fa-file-text"></i></a></li>
          <li class="side-link"><a class="white-text" href="#" link="#skills">Skills&nbsp;&nbsp;<i link="#skills" class="fa fa-book"></i></a></li>

          <li class="side-link-footer center">
              &nbsp;&nbsp;&nbsp;&nbsp;
              <a href="mailto:jbintang01@student.ciputra.ac.id"><i class="fa fa-envelope fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://github.com/Jasonbs1"><i class="fa fa-github fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

          </li>
        </ul>
      </div>
    </header>
    <main>
      <div id="introduction" class="section scrollspy">
        <div class="container">
          <div class="row center">
            <div class="col s12 light center header">
              <div id="about" class="sub-section">
                <h4 class="header center-on-small-only">About Me</h4>
                <p>I am a third-semester Informatics student with a keen interest in Cybersecurity and Artificial Intelligence.</p>
              </div>

              <div id="role" class="sub-section">
                <p>Current Role:</p>
                <ul class="collapsible" data-collapsible="accordion">
                  <li>
                    <div class="collapsible-header waves-effect waves-light teal lighten-2 white-text">University Student</div>
                    <div class="collapsible-body"><p>Currently pursuing a Bachelor's degree in Informatics at Universitas Ciputra Makassar.</p></div>
                  </li>
                </ul>
                <div class="float-left">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header waves-effect waves-light teal lighten-2 white-text">Organization</div>
                      <div class="collapsible-body"><p>Student Academic Coordinator at the Informatics Student Union for the 2024-2025 period.</p></div>
                    </li>
                  </ul>
                </div>
                <div class="float-right">
                  <ul class="collapsible" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header waves-effect waves-light teal lighten-2 white-text">Education</div>
                      <div class="collapsible-body"><p>Currently enrolled in Informatics Engineering, focusing on both technical skills and soft skills for career development.</p></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="divider"></div>

<!-- Projects Section -->
<div id="projects" class="section scrollspy">
  <div class="container center">
    <div class="row">
      <div class="col s12 light center header">
        <h4 class="header center-on-small-only">Projects</h4>

        <!-- Project Card 1 -->
        <div class="col s12 m6 l4">
          <div class="card teal lighten-2 hoverable">
            <div class="card-content white-text">
              <span class="card-title">Project Sutra</span>
              <p>AI-based travel planner</p>
            </div>
            <div class="card-action">
              <a href="#modal1" class="modal-trigger white-text">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Project Modal 1 -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Project Sutra</h4>
            <p>Project Sutra (Short for 'Sulawesi Trip AI') is an AI-based itinerary/trip planner web application specifically for South Sulawesi, a popular tourist destination in Indonesia. This web application will enable users to explore various attractions, accommodations, and culinary options. Additionally, it will help users create personalized itineraries using a language model AI.</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
            <a href="https://github.com/Jasonbs1/SUTRA" class="btn" target="_blank">View on GitHub</a>
          </div>
        </div>

        <!-- Project Card 2 -->
        <div class="col s12 m6 l4">
          <div class="card teal lighten-2 hoverable">
            <div class="card-content white-text">
              <span class="card-title">VisPro</span>
              <p>College Assignments</p>
            </div>
            <div class="card-action">
              <a href="#modal2" class="modal-trigger white-text">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Project Modal 2 -->
        <div id="modal2" class="modal">
          <div class="modal-content">
            <h4>Visual Programming</h4>
            <p>A collection of assignments that I made for my Visual Programming class.</p>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
            <a href="https://github.com/Jasonbs1/VisPro" class="btn" target="_blank">View on GitHub</a>
          </div>
        </div>

                <!-- Project Card 3 -->
                <div class="col s12 m6 l4">
                  <div class="card teal lighten-2 hoverable">
                    <div class="card-content white-text">
                      <span class="card-title">WebDev</span>
                      <p>College Assignments</p>
                    </div>
                    <div class="card-action">
                      <a href="#modal3" class="modal-trigger white-text">Learn More</a>
                    </div>
                  </div>
                </div>

                <!-- Project Modal 3 -->
                <div id="modal3" class="modal">
                  <div class="modal-content">
                    <h4>Web Development</h4>
                    <p>This project covers a series of assignments focusing on web development, mainly using PHP and Laravel to create dynamic, database-driven websites.</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                    <a href="https://github.com/Jasonbs1/WebDev" class="btn" target="_blank">View on GitHub</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="page-footer teal lighten-2">
      <div class="container">
        <div class="row center">
          <div class="col l12 s12">
            <h5 class="white-text">Connect with me!</h5>
            <p class="white-text">Feel free to get in touch with me through the following:</p>
            <a href="mailto:jbintang01@student.ciputra.ac.id" class="white-text"><i class="fa fa-envelope fa-lg"></i></a>
            <a href="https://github.com/Jasonbs1" class="white-text"><i class="fa fa-github fa-lg"></i></a>
          </div>
        </div>
      </div>
      <div class="center">
        <p class="white-text">Template by <a href="https://github.com/nikmahes/materialize-portfolio" class="white-text">Nikhil Maheshwari</a></p>
      </div>
    </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".button-collapse").sideNav();
      $('.modal').modal();
    });
  </script>
          <script type="text/javascript" src="/js/jquery.min.js"></script>
          <script type="text/javascript" src="/js/materialize.min.js"></script>
          <script src="/js/init.js"></script>

              <!-- Materialize JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Initialize Modals -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.modal');
                M.Modal.init(elems);
            });
        </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
