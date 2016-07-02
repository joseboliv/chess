<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8">
    <meta name="Autor" content="Jose Bolivar">
    <meta name="description" content="Primer proyecto de PHP en MVC">
    <meta name="viweport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x.icon" href="/damas/image/Logo.ico">
    <link rel="stylesheet" type="text/css" href="/damas/Css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/damas/Css/Site.css" media="screen, projection, print">   
    <script type="text/javascript" src="/damas/js/jquery-1.10.2.js"></script>   
    <script type="text/javascript" src="/damas/Js/bootstrap.js"></script>
	<title>Juego de Damas</title>              
</head>
<body>
	<div class="container">
		<header id="header">
			<nav class="navbar navbar-default">
	  			<div class="container-fluid">
	    			<!-- Brand and toggle get grouped for better mobile display -->
	    			<div class="navbar-header">
		      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
				      	</button>
		      			<a class="navbar-brand" href="../">Inicio</a>
	    			</div>
	    			<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      	<ul class="nav navbar-nav">
				        	<li class="active"><a href="/damas/juego/damas.html">Juego<span class="sr-only">(current)</span></a></li>	
				        	<li class="active"><a href="/damas/archivo/archivo.php">Archivo<span class="sr-only">(current)</span></a></li>            	
				      	</ul>				      	
				    </div><!-- /.navbar-collapse -->
				 </div><!-- /.container-fluid -->
			</nav>
		</header>
		<body>
            <center>
                <div class="page">    
                    <h1>Damas</h1>
                    <div class="content">
                        
                    </div>
                </div>            
                <div id="counterwrap" onclick="misc_toggleTimer()" title="Pause timer">
                <div id="counterbar">&nbsp;</div>
            </center>
        </body>
	</div>
</body>
</html>