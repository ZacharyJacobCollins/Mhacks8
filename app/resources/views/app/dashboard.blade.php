<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="/css/mapstyle.css">

    <title>Internodes</title>

    <!-- Stylesheets -->
    <link href="/css/css.css" rel="stylesheet">
    <link href="/css/toolkit-inverse.css" rel="stylesheet" />
    <link href="/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>
  </head>

  <body>
    <div class="bw">
      <div class="fu">
        <div class="ge aom">
          <nav class="aot">

            <!-- Nav wrapper -->
            <div class="aon">
              <!-- Toggle nav -->
              <button class="amy amz aoo" type="button" data-toggle="collapse" data-target="#nav-toggleable-sm">
                <span class="ct">Toggle nav</span>
              </button>
              <a class="aop cn" href="https://bootstrap-themes.github.io/dashboard/index.html"></a>
            </div>

            <div class="collapse and" id="nav-toggleable-sm">
              <ul class="nav of nav-stacked">
                  <li class="tq">Dashboards</li>
                  <li class="active">
                    <a href="https://bootstrap-themes.github.io/dashboard/index.html">Overview</a>
                  </li>
                  <li>
                    <a href="https://bootstrap-themes.github.io/dashboard/order-history/index.html">Order history</a>
                  </li>
                  <li>
                    <a href="https://bootstrap-themes.github.io/dashboard/fluid/index.html">Fluid layout</a>
                  </li>
                  <li>
                    <a href="https://bootstrap-themes.github.io/dashboard/icon-nav/index.html">Icon nav</a>
                  </li>
                  <li class="tq">More</li>
                  <li>
                    <a href="https://bootstrap-themes.github.io/dashboard/docs/index.html">
                      Toolkit docs
                    </a>
                  </li>
                  <li>
                    <a href="http://getbootstrap.com/" target="blank">
                      Bootstrap docs
                    </a>
                  </li>
                  <li>
                    <a href="https://bootstrap-themes.github.io/dashboard/light/index.html">Light UI</a>
                  </li>
                  <li>
                    <a href="https://bootstrap-themes.github.io/dashboard/#docsModal" data-toggle="modal">
                      Example modal
                    </a>
                  </li>
              </ul>
              <hr class="rw aky">
            </div>
          </nav>
        </div>
        <div class="hc aps">
          <div class="apa">

              <!-- Title and subtitle -->
              <div class="apb">
                <h6 class="apd" style="color:grey">Mhacks8</h6>
                <h2 class="apc" style="color: #1997c6; font-weight: 300;">Internodes</h2>
              </div>

              <!-- Empty -->
              <div class="ob ape">
                <div class="tn aol">
                  <!-- Something goes here probably -->
                </div>
              </div>

          </div>

          <hr class="aky">

        <div class="by">

        <!-- Internodes Arrow logo -->
  	    <div id="arrowContainer" style="margin-left:10px; margin-top:10px;position:absolute;z-index:2;"></div>

        <!-- The map -->
  	    <img src="./images/detroit.png" style="width: 100%; padding-bottom : 10px;position:relative;">

  	    <br>

  	    <h4 class="ty">Active Nodes</h4>

        <div style="width:100%">
        	<button id='button' style="width:100%; font-size: 16px; font-family:Roboto;">Hacks8 Closing Ceremony</button>
        	<div id="newpost" style="padding-left: 2.5em; font-size: 15px;">
        		From where you are:<br>
        		<ol><li> Head southwest</li>
        		<li> Turn left toward Cass Ave</li>
        		<li> Turn left onto Cass Ave</li>
        		<li> Turn right onto Temple St</li></ol>
        		Then you'll be at the <b>Detroit Masonic Temple</b><br>
        	</div>
        </div>

        <!-- Events -->
        <template v-for="n in 5">
          <h1>  @{{  n }} </h1>
            <a class="ph" id="node" href="https://bootstrap-themes.github.io/dashboard/#">
              <b>Pretend event here</b><br>
        	  Description of pretend event here
            </a>
        </template>

        </div>
          <a href="https://bootstrap-themes.github.io/dashboard/#" class="ce apn ame" style="margin: auto; left: 50%;">View all devices</a>

          </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="docsModal" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="ri">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Example modal</h4>
          </div>
          <div class="modal-body">
            <p>You're looking at an example modal in the dashboard theme.</p>
          </div>
          <div class="rj">
            <button type="button" class="ce fh" data-dismiss="modal">Cool, got it!</button>
          </div>
        </div>
      </div>
    </div>

  </body>

  <footer-component>
      <!-- Libraries -->
    	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script src="/js/jquery.min.js"></script>
      <script src="/js/three.min.js"></script>
      <script src="/js/tablesorter.min.js"></script>
      <script src="/js/toolkit.js"></script>
      <script src="/js/application.js"></script>

      <!-- Custom Javascript -->
      <script src="/js/collapse.js"></script>
      <script src="/js/arrow.js" type="text/javascript"></script>

      <!-- Execute/clear BS loaders for docs -->
      <script>
        $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
      </script>

      <!-- Vue js -->
      <script src="/js/vue/vue.min.js"></script>

      <!-- Google Maps -->
      <script src="/js/vue/vue-map.js"></script>

      <!-- callback, LAST google maps script
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmDjLF1JlR93gIzz4vfVw7JCNYHY0HuTk&callback=map.init"></script> -->

  </footer-component>

</html>
