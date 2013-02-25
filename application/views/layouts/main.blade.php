<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>College Cribs</title>
        {{ Asset::styles() }}
        {{ Asset::scripts() }}
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!-- header -->
        <hr class='hr-border1'>
        <hr class='hr-border2'>
        <div class='container header'>            
            <div class='row'>                
                <div class='span4'>
                    {{ HTML::image('img/college-cribs-logo.png', 'College Cribs', array('id' => 'college-cribs-logo')); }}
                </div>
                <div class='span6 ads1'>
                    <img data-src="holder.js/500x100" alt="Ads 1">
                </div>
                <div class='span2 social-media-links'>                        
                    <div class='media-link'>
                      {{ HTML::image('img/twitter-icon.png', 'College Cribs', array('id' => 'twitter-logo', 'style' => 'width:30px; height: 30px;')); }}  
                    </div>                        
                    <div class='media-link'>
                      {{ HTML::image('img/fb-icon.png', 'College Cribs', array('id' => 'twitter-logo', 'style' => 'width:30px; height: 30px;')); }}  
                    </div> 
                </div>                
            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">                                          
                        <ul class="nav">
                            @section('navigation')
                            <li class="active"><a href="home">Home</a></li>
                            @yield_section
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /header -->
        <!-- body -->
        <div class="container">
            @yield('content')
            <hr>
            <footer>
            <p>&copy; Instapics 2012</p>
            </footer>
        </div> <!-- /container -->
    </body>
</html>