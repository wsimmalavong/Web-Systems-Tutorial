<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.css">
    <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao|Sunshiney|Yeon+Sung|ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/transition.min.js"></script>
    <script>
        function hover() {
            $('#a1')
                .transition('stop')
                .transition('jiggle')
            ;
        }
        function hover1() {
            $('#a2')
                .transition('stop')
                .transition('jiggle')
            ;
        }
        function hover2() {
            $('#a3')
                .transition('stop')
                .transition('jiggle')
            ;
        }
        function hover3() {
            $('#a4')
                .transition('stop')
                .transition('jiggle')
            ;
        }
        function hover4() {
            $('#a5')
                .transition('stop')
                .transition('jiggle')
            ;
        }
        function hover5() {
            $('#a6')
                .transition('stop')
                .transition('jiggle')
            ;
        }
        function hover6() {
            $('#a7')
                .transition('stop')
                .transition('jiggle')
            ;
        }
    </script>
    @yield('script')
</head>
<body style = "background-image: url('https://www.lumin8events.com.au/wp-content/uploads/2016/08/Webpage-background-image-50-opacity.png');">

<div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="/" class="header item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a7" onmouseover="hover6()">
        <img  src="https://www.ryerson.ca/content/ryerson/science/programs/graduate/computerscience/our-faculty/hamelin-denis/jcr%3Acontent/center/uiwcolumns/conContainer_0_0/biography/image.img.jpg/1479758409500.jpg" width = 20px height = 35px>
        &nbsp;&nbsp; CPS530 TERM PROJECT
      </a>
      <a onmouseover="hover()" href="/p1" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;"  id = "a1">PAGE 1</a>
      <a onmouseover="hover1()" href="/p2" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a2">PAGE 2</a>
      <a onmouseover="hover2()" href="/p3" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a3">PAGE 3</a>
      <a onmouseover="hover3()" href="/p4" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a4">PAGE 4</a>
      <a onmouseover="hover4()" href="/p5" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a5">PAGE 5</a>
      <a onmouseover="hover5()" href="/p6" class="item" style = "font-family: 'ZCOOL KuaiLe', cursive;" id = "a6">PAGE 6</a>

      
    </div>
</div>


  <br>
  <br>
  <br>
  
  
   @yield('content')
</body>
</html>