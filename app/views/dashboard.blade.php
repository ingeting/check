<!doctype html>
<html lang="no">
<head>
	<meta charset="UTF-8">
	<title>Bernard</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/app.css" />

	<script src="js/modernizr/modernizr.js"></script>
</head>
<body class="good">

<div class="off-canvas-wrap docs-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">
      <section class="left-small">
        <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
      </section>

      <section class="right tab-bar-section">
        <h1 class="title">Bernard</h1>
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

					<h4>Nå</h4>
					<ul class="tasks">
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>

					</ul>

          <h4>Neste</h4>
					<ul class="tasks">
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>

					</ul>

					<h4>Senere</h4>
					<ul class="tasks">
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>

					</ul>

					<h4>Venter</h4>
					<ul class="tasks">
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>
						<li>Sende e-post til Berit</li>

					</ul>




        </div>
      </div>
    </section>

		<section id="taskbar">
			{{ Form::open(array('url' => 'tasks')) }}
				<div class="row">
					<div class="large-12 columns">
				{{ Form::text('taskDescription', '',array('placeholder'=>'Hva kan jeg gjøre for deg?')) }}
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
