<!doctype html>
<html lang="no">
<head>
	<meta charset="UTF-8">
	<title>Check</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/app.css" />

	<script src="js/modernizr/modernizr.js"></script>
</head>
<body>

<div class="off-canvas-wrap docs-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="right tab-bar-section">
        <h1 class="title">Check!</h1>
      </section>

    </nav>

    <aside class="left-off-canvas-menu">
      <ul class="off-canvas-list">
        <li><label>Foundation</label></li>
        <li><a href="#">The Psychohistorians</a></li>
        <li><a href="#">The Encyclopedists</a></li>
        <li><a href="#">The Mayors</a></li>
        <li><a href="#">The Traders</a></li>
        <li><a href="#">The Merchant Princes</a></li>
        <li><label>Foundation and Empire</label></li>
        <li><a href="#">The General</a></li>
        <li><a href="#">The Mule</a></li>
        <li><label>Second Foundation</label></li>
        <li><a href="#">Search by the Mule</a></li>
        <li><a href="#">Search by the Foundation</a></li>
      </ul>
    </aside>

    <section class="main-section">
      <div class="row">
        <div class="large-12 columns">
          <br/>



          <h4>The Psychohistorians</h4>
          <p>Set in the year 0 F.E. (&quot;Foundation Era&quot;), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying in ways that parallel the decline of the Western Roman Empire. Hari Seldon, a mathematician and psychologist, has developed psychohistory, a new field of science and psychology that equates all possibilities in large societies to mathematics, allowing for the prediction of future events.</p>

          <p>Using psychohistory, Seldon has discovered the declining nature of the Empire, angering the aristocratic members of the Committee of Public Safety, the de facto rulers of the Empire. The Committee considers Seldon&#39;s views and statements treasonous, and he is arrested along with young mathematician Gaal Dornick, who has arrived on Trantor to meet Seldon. Seldon is tried by the Committee and defends his beliefs, explaining his theories and predictions, including his belief that the Empire will collapse in 500 years and enter a 30,000-year dark age, to the Committee&#39;s members. </p>


					<p>Bespoke plaid flexitarian ugh deep v.  Squid Vice beard gentrify.  Biodiesel tousled swag locavore, whatever roof party wayfarers.  Slow-carb whatever yr, direct trade  McSweeney's wolf chia Marfa.  Brunch ugh salvia, viral mlkshk chia next level McSweeney's 90's Truffaut.  XOXO Etsy Austin, Vice ethical pork belly hoodie slow-carb.  Organic quinoa tousled PBR.</p>
					<p>Kogi umami fanny pack quinoa sriracha mixtape food truck, dreamcatcher Etsy iPhone ethnic flexitarian Echo Park.  Skateboard Bushwick paleo American Apparel butcher YOLO.  Wes Anderson flannel mlkshk freegan Thundercats, shabby chic 8-bit banjo post-ironic paleo lomo Vice Blue Bottle direct trade.  Ethnic ethical letterpress, authentic occupy four loko 8-bit gluten-free pug mixtape Cosby sweater ugh.  Paleo selvage banh mi polaroid skateboard, Thundercats photo booth cliche biodiesel try-hard.  Tonx whatever master cleanse, flannel literally crucifix occupy you probably haven't heard of them messenger bag post-ironic cornhole four loko 90's irony organic.  Bitters DIY yr, 90's narwhal try-hard mixtape.</p>


        </div>
      </div>
    </section>

		<section id="taskbar">
			{{ Form::open(array('url' => 'tasks')) }}
				<div class="row">
					<div class="large-12 columns">
				{{ Form::text('taskDescription', '',array('placeholder'=>'Hva vil du?')) }}
					<div>
				</div>
			{{ Form::close() }}
		</section>

  <a class="exit-off-canvas"></a>

  </div>
</div>





	<script src="js/fastclick/lib/fastclick.js"></script>
	<script src="js/jquery/dist/jquery.js"></script>
  <script src="js/foundation/js/foundation/foundation.js"></script>
  <script src="js/foundation/js/foundation/foundation.offcanvas.js"></script>
  <!-- Other JS plugins can be included here -->

  <script>
    $(document).foundation();
  </script>
</body>
</html>
