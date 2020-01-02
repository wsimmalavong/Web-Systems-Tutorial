@extends('master')

@section('title', 'PAGE1')

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
</script>
@endsection
@section('background')
<body style = "background-image: url('https://www.lumin8events.com.au/wp-content/uploads/2016/08/Webpage-background-image-50-opacity.png');">
@endsection
@section('content')
<!--
    <h1>P1</h1>
    <form action="/create" method ="post">
        <input type = "text" name ="title">
        <button type = "submit">Submit</button>
    </form>
-->
<br>
<div class="ui center aligned huge header" id = "dab">
     <h1 class="ui center aligned huge icon header" style = "font-family: 'ZCOOL KuaiLe', cursive;">
        <span style = "font-size: 200%;">FRAMEWORKS</span>
    </h1>
</div>
<br>
<div class="ui segment">
  <div class="ui two column very relaxed grid" style = "background-image: url('https://www.lumin8events.com.au/wp-content/uploads/2016/08/Webpage-background-image-50-opacity.png');">
    <div class="column">
        <div class="ui center aligned container">
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "color: blue;font-size: 200%;" id = "dab">Semantic UI </span><span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">&nbsp;|&nbsp;FRONT END</span>
            </div>
            <br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Popularity</span>   <hr><span>Semantic UI is a relatively new front end framework (was released 2013) that remains popular amognst beginners behind Bootstrap. </span>
            </div>
            <br><br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Strengths</span>   <hr>
                <div class="ui middle aligned list">
                    <div class="item">
                        <img class="ui avatar image" src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/04/I-3-English.-760x400.jpg">
                        <div class="content">
                            <div class="header" style = "color: green">|&nbsp;&nbsp;Simple Language</div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="https://www.proqsolutions.com/wp-content/uploads/2015/01/Responsive-Design1.jpg">
                        <div class="content">
                            <div class="header" style = "color: green">|&nbsp;&nbsp;Responsive Design</div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="http://developers.backbee.com/images/9e4/ae79b3e2baa71b28f1c6c0e050981.png">
                        <div class="content">
                            <div class="header" style = "color: green">|&nbsp;&nbsp;Excellent Documentation</div>
                        </div>
                    </div>
            
                </div>
            </div>
            <br><br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Weaknesses</span>    <hr>
                <div class="ui middle aligned list">
                    <div class="item">
                        <img class="ui avatar image" src="https://images-na.ssl-images-amazon.com/images/I/31-NFVtKwWL.jpg">
                        <div class="content">
                            <div class="header" style = "color: #b30000">|&nbsp;&nbsp;Very large library (file size)</div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="http://www.djsoutsourcing.com/wp-content/uploads/2015/10/javascript-Djs-Outsourcing.png">
                        <div class="content">
                            <div class="header" style = "color: #b30000">|&nbsp;&nbsp;Not friendly for Javascript beginners</div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="https://www.dynamicbusiness.com.au/wp-content/uploads/2012/12/big-and-little.jpg">
                        <div class="content">
                            <div class="header" style = "color: #b30000">|&nbsp;&nbsp;Small amount of classes compared to other frameworks</div>
                        </div>
                    </div>
            
                </div>
            </div>
            <br><br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Uses</span>   <hr><span>Semantic UI is most useful for individuals who are looking to build a nice and responsive website quickly. The vast amount of customizable installation options also allows for it to be effective for users who want a framework that is easily changeable to their needs.</span>
            </div>
            <br>  
        </div>
    </div>
    
    <div class="column">
        <div class="ui center aligned container">
            <br>
            <div class="ui center aligned huge header" id = "ani2">
                <span style = "color: red;font-size: 200%;">Laravel</span>   <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">&nbsp;|&nbsp;BACK END</span>
            </div>
            <br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Popularity</span>    <hr><span>Laravel is one of the most popular php frameworks as it is very simple and quick to use for PHP programmers. </span>
            </div>
            <br><br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Strengths</span>   <hr>
                <div class="ui middle aligned list">
                    <div class="item">
                        <img class="ui avatar image" src="http://elearninguncovered.com/wp-content/uploads/2015/04/Articulate-Storyline-Its-not-that-hard-to-learn-hero-image-01.png">
                        <div class="content">
                            <div class="header" style = "color: green">|&nbsp;&nbsp;Easy to learn</div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="http://www.knowyourpayments.com/wp-content/uploads/2017/08/routing-basics-icon@2x-1.png">
                        <div class="content">
                            <div class="header" style = "color: green">|&nbsp;&nbsp;Very Simple Routing </div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="https://www.lifewire.com/thmb/ziAvCbAufGRWptP95uXW0c4G1aA=/768x0/filters:no_upscale():max_bytes(150000):strip_icc()/illuminated-server-room-panel-660495303-5a24933d4e46ba001a771cd1.jpg">
                        <div class="content">
                            <div class="header" style = "color: green">|&nbsp;&nbsp;Artisan gives easy insertion of command line apps</div>
                        </div>
                    </div>
            
                </div>
            </div>
            <br><br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Weaknesses</span>   <hr>
                <div class="ui middle aligned list">
                    <div class="item">
                        <img class="ui avatar image" src="https://images-na.ssl-images-amazon.com/images/I/31-NFVtKwWL.jpg">
                        <div class="content">
                            <div class="header" style = "color: #b30000">|&nbsp;&nbsp;Less built in support compared to other frameworks</div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="https://upload.wikimedia.org/wikipedia/commons/4/42/Shrug.jpg">
                        <div class="content">
                            <div class="header" style = "color: #b30000">|&nbsp;&nbsp;Utilises Composer which is not as good as npm</div>
                        </div>
                    </div>
                    <br>
                    <div class="item">
                        <img class="ui avatar image" src="https://i1.sndcdn.com/artworks-000131828151-lcr36w-t500x500.jpg">
                        <div class="content">
                            <div class="header" style = "color: #b30000">|&nbsp;&nbsp;Does not have payment options</div>
                        </div>
                    </div>
            
                </div>
            </div>
            <br><br>
            <div class="ui left aligned huge header">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 150%;">Uses</span>    <hr><span>Laravel is benefical for those who have a strong understanding for PHP. Laravel has very intuitive documentation which allows for ease of use. The use of ORM is designed for very simple SQL queries. This would make Laravel very appealing for those wishing to make applications with performance demanding APIs</span>
            </div>
            <br>  
        </div>
    </div>
  </div>
  <div class="ui vertical divider">
    and
  </div>
</div>
@endsection