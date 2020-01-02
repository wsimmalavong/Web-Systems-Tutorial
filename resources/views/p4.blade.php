@extends('master')

@section('title', 'PAGE1')


@section('script')
<script>
         $( document ).ready(function() {
            $('#green')
                .transition('hide')
            ;
            $('#red')
                .transition('hide')

            ;

        });
        function yah(){
          $('#red')
                .transition('hide')
          ;
          $('#green')
                .transition('hide')
                .transition('fly left')
                .transition('toggle')
                .transition('fly right')
          ;
          
        }
        function nah(){
          $('#green')
                .transition('hide')
          ;
            $('#red')
                .transition('hide')
                .transition('fly left')
                .transition('toggle')
                .transition('fly right')
            ;
        }
        
        ;
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

<div class="ui center aligned red header center">
<h1><i class="code icon"></i>Web Development Summary<i class="code icon"></i></h1>
</div>

<br><br><br>

<table class="ui very basic collapsing celled table" style="width: 100%">
  <thead>
    <tr>
        <th></th>
        <th onmouseover="hoverOver()" style="text-align: center; font-size: 40px;">Developers</th>
        <th></th>
    </tr>
</thead>
  <tbody>
    <tr>
      <td style="text-align: center;">
        <h4 class="ui image header">
            <img src="https://media.licdn.com/dms/image/C4D03AQF4hzHCMynvoQ/profile-displayphoto-shrink_800_800/0?e=1579132800&v=beta&t=b1QNgLfsQcjEULTPfYvQOhVQshM-GgQj5putH71--ps" class="ui massive circular image">
          <div class="content">
            Stephen
            <div class="sub header">Spy
          </div>
        </div>
      </h4></td>
      <td style="text-align: center;">
        <h4 class="ui image header">
         <img src="https://scontent.fyto1-2.fna.fbcdn.net/v/t1.0-1/p240x240/38205966_245855359381134_1576776833318256640_n.jpg?_nc_cat=106&_nc_oc=AQkCknwN45eO2ngECd9EQ3oVI2FCRpJAvi5LKc060QUjl3saFeyZiigtbczzNfBFxnX6HF5041vcVZM4uepyTUz1&_nc_ht=scontent.fyto1-2.fna&oh=372279d3d956d6fb6c2d7367fb50fb8a&oe=5E524ACB" class="ui massive circular image">
          <div class="content">
            William
            <div class="sub header">Fur Trader
          </div>
        </div>
      </h4></td>
      <td style="text-align: center;">
        <h4 class="ui image header">
         <img src="https://media.licdn.com/dms/image/C5603AQEH5xeyMgY13w/profile-displayphoto-shrink_200_200/0?e=1579132800&v=beta&t=K3zCwvowxTzpoJgwvvvI8HU0HVFuW9Dn5SfZY8mZ7Eo" class="ui massive circular image">
          <div class="content">
            Noah
            <div class="sub header">Rockstar
          </div>
        </div>
      </h4></td>
    </tr>
   
  </tbody>
</table>
</div>

<br><br><br>

<div class="ui attached message">
  <div class="header">
    Welcome to our RPG builder!
  </div>
  <p>Fill this out to test our button and waste time!</p>
</div>
<div class="ui form attached fluid segment">
  <div class="two fields">
    <div class="field">
      <label>Class</label>
      <input placeholder="Ex: Warrior" type="text">
    </div>
    <div class="field">
      <label>Race</label>
      <input placeholder="Ex: big chungus" type="text">
    </div>
  </div>
  <div class="field">
    <label>Username</label>
    <input placeholder="How the game will address you" type="text">
  </div>
  <div class="field">
    <label>Password</label>
    <input placeholder="try 1234. I heard that is a strong password" type="password">
  </div>
  <div class="inline field">
    <div class="ui checkbox">
      <input type="checkbox" id="terms">
      <label for="terms">I agree to the totally legit terms and conditions</label>
    </div>
  </div>
  <div class="ui buttons">
  <button class="ui positive button" onclick="yah()">Venture Forth!</button>
  <div class="or"></div>
  <button class="ui negative button" onclick="nah()">Nah??</button>
</div>


<div class="ui green message" id = "green">
  <i class="close icon"></i>
  <div class="header">
    Information has been sent to the CLOUD
  </div>
  <p>Good job traveler!</p>
</div>

<div class="ui red message" id = "red">
  <i class="close icon"></i>
  <div class="header">
    You don't want to save your info???
  </div>
  <p>:(</p>
</div>

<br><br><br>

 <div class="row">
    <div class="column">
      <div class="ui two column grid">
        
        <div class="sixteen wide column">
          <table class="ui celled structured table">
            <thead>
              <tr>
                <th rowspan="2">Course</th>
                <th rowspan="2">Lab</th>
                <th colspan="12">Languages Used</th>
              </tr>
              <tr>
                <th>HTML</th>
                <th>CSS</th>
                <th>ASP</th>
                <th>XML/JSON</th>
                <th>Ruby</th>
                <th>Perl</th>
                <th>JavaScript</th>
                <th>Bootstrap</th>
                <th>JQuery</th>
                <th>MySQL</th>
                <th>Python</th>
                <th>PHP</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <!-- <i class="large green checkmark icon"></i> -->
                <td rowspan="11">Web Development</td>
                <td>1</td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>2</td>
                <td><i class="large green checkmark icon"></i></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>3</td>
                <td><i class="large green checkmark icon"></i></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>4</td>
                <td><i class="large green checkmark icon"></i></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>5</td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>6</td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
              </tr>
              <tr>
                <td>7</td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>8</td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td><i class="large green checkmark icon"></i></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <br><br><br>

  <div class="ui icon message">
  <i class="notched circle loading icon"></i>
  <div class="content">
    <div class="header">
      Hold your horses.
    </div>
    <p>We are running out of ideas for this epic webpage!</p>
  </div>
</div>

<br><br><br>
  
   <div class="column">
    <table class="ui inverted blue selectable celled right aligned table">
      <thead>
        <th class="left aligned">Food</th>
        <th>Rating</th>
        <th>Ingredients</th>
        <th>Recommendation</th>
      </thead>
      <tbody>
        <tr>
          <td class="left aligned">Papa Johns</td>
          <td>11/10</td>
          <td>spaghetti and meatballs</td>
          <td>ery time</td>
        </tr>
        <tr>
          <td class="left aligned">Lasagna</td>
          <td>8.89/10</td>
          <td>lasagna</td>
          <td>recommend to family and friends</td>
        </tr>
        <tr>
          <td class="left aligned">Fruits</td>
          <td>0/1000</td>
          <td>Chemicals</td>
          <td>I don't trust them</td>
        </tr>
        
      </tbody>
    </table>
  </div>

  <br><br><br>

  <div class="ui segment">
<h3>Short story! John goes to the <img class="ui mini spaced image" src="https://cdn0.iconfinder.com/data/icons/restaurant-53/64/Food-junk-pizza-fast_food-512.png"> place to get a slice of pepperon.
Then he runs into the big bad <img class="ui mini spaced image rounded" src="https://scontent.fyto1-2.fna.fbcdn.net/v/t1.0-1/p240x240/38205966_245855359381134_1576776833318256640_n.jpg?_nc_cat=106&_nc_oc=AQkCknwN45eO2ngECd9EQ3oVI2FCRpJAvi5LKc060QUjl3saFeyZiigtbczzNfBFxnX6HF5041vcVZM4uepyTUz1&_nc_ht=scontent.fyto1-2.fna&oh=372279d3d956d6fb6c2d7367fb50fb8a&oe=5E524ACB"> who is trying to rob John of his slice! Good thing <img class="ui mini spaced image rounded" src="https://media.licdn.com/dms/image/C4D03AQF4hzHCMynvoQ/profile-displayphoto-shrink_800_800/0?e=1579132800&v=beta&t=b1QNgLfsQcjEULTPfYvQOhVQshM-GgQj5putH71--ps"> is here to save the day :) <i class="bell icon"></i></h3>

</div>
  
<br><br><br>



<div class="ui medium images grid">

<div class="ui circular rotate reveal image">
  <img src="https://www.earnthenecklace.com/wp-content/uploads/2018/02/ugandan-knuckles-300x300.jpg" class="visible content">
  <img src="https://media.licdn.com/dms/image/C4D03AQF4hzHCMynvoQ/profile-displayphoto-shrink_800_800/0?e=1579132800&v=beta&t=b1QNgLfsQcjEULTPfYvQOhVQshM-GgQj5putH71--ps" class="hidden content">
</div>

<div class="ui circular rotate reveal image">
  <img src="https://i.kym-cdn.com/photos/images/newsfeed/001/471/194/958.jpg" class="visible content">
  <img src="https://scontent.fyto1-2.fna.fbcdn.net/v/t1.0-1/p240x240/38205966_245855359381134_1576776833318256640_n.jpg?_nc_cat=106&_nc_oc=AQkCknwN45eO2ngECd9EQ3oVI2FCRpJAvi5LKc060QUjl3saFeyZiigtbczzNfBFxnX6HF5041vcVZM4uepyTUz1&_nc_ht=scontent.fyto1-2.fna&oh=372279d3d956d6fb6c2d7367fb50fb8a&oe=5E524ACB" class="hidden content">
</div>

<div class="ui circular rotate reveal image">
  <img src="https://wallpapercave.com/wp/wp3917636.jpg" class="visible content">
  <img src="https://media.licdn.com/dms/image/C5603AQEH5xeyMgY13w/profile-displayphoto-shrink_200_200/0?e=1579132800&v=beta&t=K3zCwvowxTzpoJgwvvvI8HU0HVFuW9Dn5SfZY8mZ7Eo" class="hidden content">
</div>

<br><br><br>

@endsection