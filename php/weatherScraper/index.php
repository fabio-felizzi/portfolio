<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>What's the weather like today?</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		<div class="row">
      <div class="col-md-6 col-md-offset-3 center">
        <h1 class="center bold">What's the weather like in your area?</h1>
        <p class="lead center">Enter your city below to get a forecast for the weather.</p>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="E.g London, Paris, San Francisco...">
          </div>
          <button id="findMyWeather"class="btn btn-success btn-lg">Find My Weather</button>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div id="success" class="alert alert-success">Success!</div>
        <div id="failure" class="alert alert-danger">Could not find weather data for that city. Please try again!</div>
        <div id="noCity" class="alert alert-danger">Please enter a city.</div>
      </div>
    </div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>