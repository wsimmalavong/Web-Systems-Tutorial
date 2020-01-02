@extends('master')

@section('title', 'PAGE1')

@section('script')
<script>
        $( document ).ready(function() {

            $('#dab')
                .transition('tada')
            ;
            $('#steph')
                .transition('hide')
                .transition('swing left')
                .transition('toggle')
                .transition('swing right')
            ;
            $('#will')
                .transition('hide')
                .transition('swing up')
                .transition('toggle')
                .transition('swing down')
            ;
            $('#noah')
                .transition('hide')
                .transition('swing right')
                .transition('toggle')
                .transition('swing left')
            ;
        });
        function sickoMode(){
            $('#will')
                .transition('stop')
                .transition('tada')
            ;
        }
        function tolaz(){
            $('#noah')
                .transition('stop')
                .transition('tada')
            ;
            document.getElementById("noah").src = "https://media.licdn.com/dms/image/C4E03AQEktcPsIHSlmg/profile-displayphoto-shrink_200_200/0?e=1579132800&v=beta&t=QTkYXDdiuv655uhfl427j6nNmIK7hzTA-rrKz2nirFk";
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
        <span style = "font-size: 200%;">TEAM MEMBERS</span>
    </h1>
</div>
<br><br>
<div class="ui three column grid" id = "dab">
            <div class = "row">
                <div class="three row column">
                    <div class="row"></div>
                        <div class="row">
                                <div class="ui center aligned huge header">
                                    <h1 class="ui center aligned header">
                                    Stephen Berry
                                    <br>
                            
                                    </h1>
                                    
                                </div>
                                <img id = "steph" class="ui medium circular centered image" src="https://media.licdn.com/dms/image/C4D03AQF4hzHCMynvoQ/profile-displayphoto-shrink_800_800/0?e=1579132800&v=beta&t=b1QNgLfsQcjEULTPfYvQOhVQshM-GgQj5putH71--ps">
                                <div class="ui center aligned large header">
                                <h1 class="ui center aligned header">
                                <br>
                                Developed and installed front end framework. Worked with cloud based technologies to push code onto master page. Specifically created page 4 and assisted with page 5 & 6. Proofread other contributors code.
                                <br>
         
                                </h1>
                            </div>
                        </div>
                        <div class="row"></div>
                </div>
                
                <div class="three row column">
                    <div class="row"></div>
                    <div class="row">
                            
                            <div class="ui center aligned huge header">
                                <h1 class="ui center aligned header">
                                
                                William Simmalavong
                                <br>
                                
                                </h1>
                            </div>
                            <img id = "will" onclick="sickoMode()" class="ui medium circular centered image" src="https://scontent.fyto1-2.fna.fbcdn.net/v/t1.0-1/p240x240/38205966_245855359381134_1576776833318256640_n.jpg?_nc_cat=106&_nc_oc=AQkCknwN45eO2ngECd9EQ3oVI2FCRpJAvi5LKc060QUjl3saFeyZiigtbczzNfBFxnX6HF5041vcVZM4uepyTUz1&_nc_ht=scontent.fyto1-2.fna&oh=372279d3d956d6fb6c2d7367fb50fb8a&oe=5E524ACB">
                            <div class="ui center aligned large header">
                                <h1 class="ui center aligned header">
                                <br>
                                Developed and installed backend framework. Created all routes and the master page for the webpages. Implemented back end framework onto own hosting server. Specifically created the Home page, page 1, page 2, page 5 and page 6. Proofread other contributors code.
                                <br>
         
                                </h1>
                            </div>
                            
                    </div>
                    <div class="row"></div>
                </div>
                
                <div class="three row column">
                    <div class="row"></div>
                    <div class="row">
                            <div class="ui center aligned huge header">
                                <h1 class="ui center aligned header">
                                Noah Colaco
                                <br>
                                
                                </h1>
                            </div>
                            <img id = "noah"class="ui medium circular centered image" src="https://media.licdn.com/dms/image/C5603AQEH5xeyMgY13w/profile-displayphoto-shrink_200_200/0?e=1579132800&v=beta&t=K3zCwvowxTzpoJgwvvvI8HU0HVFuW9Dn5SfZY8mZ7Eo">
                            <div class="ui center aligned large header">
                                <h1 class="ui center aligned header">
                                <br>
                                Developed and installed front end framework. Worked with cloud based technologies to push code onto master page. Specifically created page 3 and assisted with page 4,5 & 6. Proofread other contributors code.
                                <br>
         
                                </h1>
                            </div>
                            
                               
                    </div>
                    <div class="row"></div>
                </div>

            </div>
    </div>
@endsection