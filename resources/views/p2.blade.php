@extends('master')

@section('title', 'PAGE2')

@section('script')
<script>
        $( document ).ready(function() {
            $('#dab')
                .transition('tada')
            ;
            $('#ani1')
                .transition('hide')
                .transition('fly left')
                .transition('toggle')
                .transition('fly right')
            ;
            $('#ani2')
                .transition('hide')
                .transition('fly right')
                .transition('toggle')
                .transition('fly left')
            ;
        });

        function sickoMode(){
            $('#guy')
                .transition('tada')
            ;
        }
</script>
@endsection
@section('background')
<body style = "background-image: url('https://www.lumin8events.com.au/wp-content/uploads/2016/08/Webpage-background-image-50-opacity.png');">
@endsection
@section('content')

<br>
<div class="ui center aligned huge header" id = "dab">
     <h1 class="ui center aligned huge icon header" style = "font-family: 'ZCOOL KuaiLe', cursive;">
        <span style = "font-size: 200%;">HOW TO INSTALL</span>
    </h1>
</div>
<br>
<div class="ui segment">
  <div class="ui two column very relaxed grid">
    <div class="column">
        <div class="ui center aligned container">
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "color: blue;font-size: 200%;" id = "dab">Semantic UI </span><span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">&nbsp;|&nbsp;FRONT END</span>
            </div>
            <br><br>
            <div class="ui left aligned huge header" id = "ani1">
                <span style = "font-size: 150%;" >Installing Semantic UI on Windows</span><hr>
            </div>
            
        </div>
        <br>
        <div class="ui divided animated list">
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">1</span>. Install Node Js online using Node JS website
            </div>
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">2</span>. Install Gulp <br>	&nbsp;&nbsp;
                        <span style = "font-size: 80%;">- run following in shell</span><br>&nbsp;&nbsp;
                        <span style = "font-size: 80%;"><i>npm install -g gulp</i></span>
            </div>
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">3</span>. Navigate to project folder <br> &nbsp;&nbsp;
                        <span style = "font-size: 80%;">- run following in shell</span><br>&nbsp;&nbsp;
                        <span style = "font-size: 80%;"><i>npm install semantic-ui --save</i></span><br>&nbsp;&nbsp;
                        <span style = "font-size: 80%;"><i>cd semantic/</i></span><br>&nbsp;&nbsp;
                        <span style = "font-size: 80%;"><i>gulp build</i></span>
            </div>
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">4</span>. Link inside html 
            </div>
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">5</span>. Enjoy as you are now done <br>
            </div>
            <br><br>
            <div class="ui center aligned container">
                <div class="ui move reveal">
                    <div class="visible content">
                        <img src="http://theethicsguy.com/wp-content/uploads/2012/08/BRUCE-WEINSTEIN-THE-ETHICS-GUY-NEW-HEAD-SHOT-reduced1.jpg" class="ui fluid image">
                    </div>
                    <div class="hidden content">
                        <img id = "guy" onclick="sickoMode()" src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/VGqRaYUogil0szy2p/thumbs-up-by-black-man_rygatzipdg_thumbnail-full02.png" class="ui fluid image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="column">
        <div class="ui center aligned container">
            <br>
            <div class="ui center aligned huge header" id = "ani2">
                <span style = "color: red;font-size: 200%;">Laravel</span>   <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">&nbsp;|&nbsp;BACK END</span>
            </div>
            <br><br>
            <div class="ui left aligned huge header" id = "ani1">
                <span style = "font-size: 150%;" >Installing Laravel on Windows</span><hr>
            </div>
        </div>
        <br>
        <div class="ui divided animated list">
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">1</span>. Install Composer via the Composer website.
                        <span style = "font-size: 80%;">- run the composer installer</span>
            </div>
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">2</span>. Once Composer is installed run the following command in shell<br>	&nbsp;&nbsp;
                        <span style = "font-size: 80%;"><i>composer global require "laravel/installer=~1.1"</i></span>
            </div>
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">3</span>. Once the command is complete run the following command in shell to create a project<br> &nbsp;&nbsp;
                        <span style = "font-size: 80%;"><i>laravel new blog</i></span>
            </div>
            <div class = "ui left aligned large header item">
            <span style = "font-size: 120%;">4</span>. Enjoy as you are now done <br>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <div class="ui three column very relaxed grid">
                        <div class = "row">
                        <div class = "column"></div>
                        
                        <div class = "column">
                            <div class="ui move reveal">
                                <div class="visible content">
                                    <img src="https://i.pinimg.com/originals/fe/61/db/fe61dba545c0b8b87a722cad8408d37d.jpg" class = "ui fluid image" >
                                </div>
                                <div class="hidden content">
                                    <img id = "guy" onclick="sickoMode()" src="https://pbs.twimg.com/media/CU7xVYYWUAAFCNG.jpg" class = "ui fluid image">
                                </div>
                            </div>
                        </div>
                        <div class = "column"></div>
            </div>
           </div>
                

    </div>
  </div>
  <div class="ui vertical divider">
    and
  </div>
</div>
@endsection