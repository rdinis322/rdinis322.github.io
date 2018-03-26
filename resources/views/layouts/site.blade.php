<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Blog</title>
    <meta name="description" content=" Free theme by TechAndAll.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="/css/webflow.css">
    <link rel="stylesheet" type="text/css" href="/css/techandallthemes.webflow.css">
    <link rel="icon" type="image/ico" href="/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    
   
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/defult.css" media="screen" type="text/css" />
<link rel="stylesheet" type="text/css" href="/css/navcss.css" />

<script src="/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/js/webflow.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          families: ["Montserrat:400,700"]
        }
      });
    </script>
</head>
<body>
  
	<nav id="bt-menu" class="bt-menu">
				<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
				<ul>
					<li><a href="/">Блог</a></li>
					<li><a href="/page/add">Добавити запис</a></li>
					
				</ul>
			<ul>				
            <li class="icon-facebook-sign" style="font-size:24px;"></li>  
            <li class="icon-twitter-sign" style="font-size:24px;"></li> 
            <li class="icon-google-plus-sign" style="font-size:24px;"></li>  
            <li class="icon-skype" style="font-size:24px;"></li> 
            <li class="icon-youtube" style="font-size:24px;"></li>
            </ul>
			</nav>

  <div class="hero-image">
    <div class="header-wrapper">
      
	  

    </div>
    
  </div>
  
  @if(count($errors) > 0)
  
  <div class="alert alert-danger">
    	
    		<ul>
    			
    			@foreach($errors->all() as $error) 
    				<li>{{ $error }}</li>
    			@endforeach
    		
    		</ul>
    	
    	</div>
  
  
  
  @endif
  
  @yield('content')
  
  
</body>
</html>