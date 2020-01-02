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
<div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="/" class="header item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a7" onmouseover="hover6()">
        <img  src="https://www.ryerson.ca/content/ryerson/science/programs/graduate/computerscience/our-faculty/hamelin-denis/jcr%3Acontent/center/uiwcolumns/conContainer_0_0/biography/image.img.jpg/1479758409500.jpg" width = 20px height = 35px>
        &nbsp;&nbsp; CPS530 TERM PROJECT
      </a>
      <a onmouseover="hover()"  href="/p1" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;"  id = "a1">PAGE 1</a>
      <a onmouseover="hover1()" href="/p2" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a2">PAGE 2</a>
      <a onmouseover="hover2()" href="/p3" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a3">PAGE 3</a>
      <a onmouseover="hover3()" href="/p4" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a4">PAGE 4</a>
      <a onmouseover="hover4()" href="/p5" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a5">PAGE 5</a>
      <a onmouseover="hover5()" href="/p6" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a6">PAGE 6</a>

      
    </div>
</div>


  <br>


<div class="ui center aligned huge header" id = "dab">
     <h1 class="ui center aligned huge icon header" style = "font-family: 'ZCOOL KuaiLe', cursive;">
        <span style = "font-size: 200%;">TUTORIAL<br>GOOD LOOKING PAGE</span>
    </h1>
</div>
<br>
<div class="ui segment">
  <div class="ui two column very relaxed grid" style = "background-image: url('https://www.lumin8events.com.au/wp-content/uploads/2016/08/Webpage-background-image-50-opacity.png');">
    <div class="row">
        <div class="ui left aligned container">
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">IMAGES</span>
            </div>
            <br>
            <div class="ui center aligned huge header">
                   <span>You can style your images in various ways. For example, you can make your image rounded by putting class="ui medium rounded image" in the image tag. You can see more image options <a href="https://semantic-ui.com/elements/image.html" target="blank">here</a>. Here is an example:</span><br>
            </div>
            <img class="ui centered medium rounded image" src="https://www.usinenouvelle.com/mediatheque/7/0/1/000151107_image_896x598/image.jpg">
            <br>
            <hr>
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">HEADERS</span>
            </div>
            <br>
            <div class="ui center aligned huge header">
                   <span>There are a variety of headers you can use with text. For example, there sub headers you can use by putting class="ui sub header" in the html tag. You can find out more about headers <a href="https://semantic-ui.com/elements/header.html" target="blank">here</a></span>. Here is an example: <br> <div class="ui sub header">I am a subheader</div>
            </div>
            <br><br>
            <hr>
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">TABLES</span>
            </div>
            <br>
            <div class="ui center aligned huge header">
                   <span>Tables can also be used with tables. There are many different variations such as Collapsing, Colored, Compact, Basic, Stripped and many more! You can find a full guide on how to use semantic UI with tables <a href="https://semantic-ui.com/collections/table.html" target="blank">here</a></span>. Here is an example: <br> 
                   <table class="ui very basic collapsing celled table" style="width: 100%">
                      <thead>
                        <tr><th colspan="3">Example Table</th></tr>
                    </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h4 class="ui image header">
                            
                              <div class="content">
                                Random Cell
                              </div>
                          </h4></td>
                          <td>
                            <h4 class="ui image header">
                            
                              <div class="content">
                                Another One
                              </div>
                          </h4></td>
                          <td>
                            <h4 class="ui image header">
                            
                              <div class="content">
                                AnOtHeR oNe
                              </div>
                          </h4></td>
                        </tr>

                      </tbody>
                    </table>
            </div>
            <hr>
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">ICONS</span>
            </div>
            <br>
            <div class="ui center aligned huge header">
                    <span>Semantic UI also has many different icons you can use in your website. These icons can be used for accessibility, arrrows, audio and video, business, chess, code and much more! You can find extensive information on icons <a href="https://semantic-ui.com/elements/icon.html" target="blank">here</a></span>. Here are a few examples of icons: 
                    <div class="ui three column very relaxed grid">
                        <div class = "row">
                        <div class = "column"></div>
                        <div class = "column"><br><i class="headphones icon"></i><i class="angle down icon"></i><i class="chess king icon"></i></div>
                        <div class = "column"></div>
                        </div>
                   </div>
            </div>
            <br><br>
            
    </div>
  </div>
    
</div>
@endsection