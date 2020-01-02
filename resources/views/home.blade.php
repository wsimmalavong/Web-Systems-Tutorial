@extends('master')

@section('title', 'HOME')

@section('script')
<script>
        $( document ).ready(function() {
            $('#dab')
                .transition('hide')
                .transition('fly left')
                .transition('toggle')
                .transition('fly right')
                transDone()
            ;
        });
        function transDone(){
          $('#flip')
              .transition('stop')
              .transition('bounce')
          ;
        }
</script>
@endsection

@section('content')
<!--
    <h1>Content</h1>
    <button class="ui button">Follow</button>
    <form action="/create" method ="post">
        <input type = "text" name ="title">
        <button type = "submit">Submit</button>
    </form>
-->
<br><br><br><br>

       
    
    <div class="ui three column grid" id = "dab">
            <div class = "row">
            <div class="column">
            </div>
            
            <div class="three row column">
                <div class="row"></div>
                <div class="row">
                        <div class="ui center aligned huge header">
                            <h1 class="ui center aligned icon header">
                            <i id = "flip" class="circular users icon"></i><br>
                            Welcome To Our CPS530 Term Project.
                            <br><br>
                            Access pages using navigation bar at the top.
                            </h1>
                        </div>
                        <div class = "ui center aligned small header">
                            <br>
                            <span style = "color: blue">Students</span> <br>William Simmalavong<br> Stephen Berry<br> Noah Colaco
                        </div>
                </div>
                <div class="row"></div>
            </div>
            
            <div class="column">
            </div>
            </div>
    </div>


@endsection