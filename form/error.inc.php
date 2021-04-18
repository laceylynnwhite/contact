<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  .container {
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
  }

  header {
    text-align: center;
    padding: 20px 0;
  }

  header nav a {
    color: #9f6953;
    text-decoration: none;
  }

  header nav a:hover {
    color: rgb(255, 204, 204);
    border-radius: 30px;
  }

  footer {
    background: #9f9696;
    color: rgb(255, 204, 204);
    text-align: center;
    padding: 30px 0;
  }
</style>

<header>
  <nav>
      <a href="index.html">Contact Me</a>
  </nav>
</header>

<div class="container"
	<h1>Looks like you missed something!</h1>
	<p>Sorry about that, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>

<footer>
  <p>Website by Lacey White</p>
</footer>
