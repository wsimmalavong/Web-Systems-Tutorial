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
        <span style = "font-size: 200%;">CONCLUSION<br></span>
    </h1>
</div>
<br>
<div class="ui segment">
  <div class="ui two column very relaxed grid" style = "background-image: url('https://www.lumin8events.com.au/wp-content/uploads/2016/08/Webpage-background-image-50-opacity.png');">
    <div class="row">
        <div class="ui left aligned container">
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">EXPECTATIONS</span>
            </div>
            <br>
            <div class="ui left aligned huge header">
                   <span>The frameworks met the expectations that we had as we reserached some of them beforehand. We found that the front end framework had many capabilities that were very beneficial to us. The backend framework however had some suprises in terms of expectations as it had many aspects that we did not expect when trying to deploy our website. Overall as I group we would say that the frameworks we used were very good to accomplish the task of completeting this term project. Just for simplicity, using HTML/CSS for the 5 pages (discluding the demo page) would have made te process faster overall. This also makes it so only the
person/people working on the page would have to go into detail with how to use frameworks and actually apply them, whereas the rest of the people
would only have to understand the installation and very basics of them. Overall though, things were done according to plan and as efficiently as expected. Also,
although it was more work, everyone on the team applied the front end framework, giving everyone hands on experience.</span><br>
            </div>
          
            <br>
            <hr>
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">DIFFICULTY</span>
            </div>
            <br>
            <div class="ui left aligned huge header">
                   <span style = "color:blue">Semantic UI:</span> <span> The difficulty of utilizing and installing the front end framework Semantic UI was extremley easy. Using the classes inside of html tags was very intuitive and the class names were plain english which made it very easyto implement. Also for creating pages there were many differnet customization options which gave us freedom to do alot of differnet things. The learning curve for using Semantic UI comapred to HTML/CSS/JAVASCRIPT was quite small considering Semantic UI was just an extension of CSS which used classes very similar to CSS.</span>
                   <br><br><span style = "color:red">Laravel: </span><span>The difficulty of installing the backend framework of Laravel was quite difficult. Since the individual who installed the backend had no expreince prior to utilising backend frameworks, it required him lots of time in order research and understand all the components of Laravel. Understanding all the differnet controllers, routes, events etc. was said to be quite difficult and time consuming but once the fundamentals were understood it became easier to utilise the backend to our required needs. The learning curve was very large as it was very different from using regular PHP or other serverside programs. </span>
            </div>
            <br><br>
            <hr>
            <br>
            <div class="ui center aligned huge header" id = "ani1">
                <span style = "font-family: 'ZCOOL KuaiLe', cursive; font-size: 200%;">DO DIFFERENTLY</span>
            </div>
            <br>
            <div class="ui left aligned huge header">
                   <span> In retrospect it is hard to determine if we would do anything differently as we enjoyed utilizing both frameworks. However, if we were to do anything differently in terms of just collaboration in general, we would probably devise an outline of all the work beforehand so it would be easier to understand and distinguish differenet tasks. However, the back end framework gave some issues,
as it was more difficult to install and implement for the portions of the project that used it. Also, it was one of the few back end frameworks that involved
PHP, which (for our team anyways) made the process more difficult then it had to be. Perhaps using a back end framework like NodeJS may have been better for
the long run.</span> <br> 
                  
            </div>
            <hr>
            <br>
            <br>
            <br><br>
            
    </div>
  </div>
    
</div>
@endsection