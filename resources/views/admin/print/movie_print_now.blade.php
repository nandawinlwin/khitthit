<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Khit Thit Movie Store</title>
    <style>
        #text {
            -moz-hyphens: auto;
            -ms-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    @if($type == 4)
    @foreach($movies as $movie)
    <div style="float:left;padding:12px;">
        <img src="{{$movie->poster}}" alt="" style="width:358px;height:400px;border:solid;">
        <div style="height:95px;width:358px;text-align:center;">
            <?php


            $txt1 = $movie->ktid . " - " . $movie->title . " - " . $movie->year . "- ( " . $movie->country . ") (" . $movie->genre . ")";
            $txt2 = $movie->ktid . " - " . $movie->title . " - " . $movie->year . "- ( " . $movie->country . ")";

            $c = strlen($txt1);
            ?>
            <p id="text">
                @if($c <= 160) 
                    {{$txt1}} 
                @elseif($c> 160)
                    {{$txt2}} {{$c}}
                @endif
            </p>
        </div>
    </div>
    @endforeach
    @elseif($type == 9)
    @foreach($movies as $movie)
    <div style="float:left;padding:14px;">
        <img src="{{$movie->poster}}" alt="" style="width:225px;height:270px;border:solid;">
        <div style="height:40px;width:225px;text-align:center;">
            <?php


            $txt1 = $movie->ktid . " - " . $movie->title . " - " . $movie->year . "- ( " . $movie->country . ") (" . $movie->genre . ")";
            $txt2 = $movie->ktid . " - " . $movie->title . " - " . $movie->year . "- ( " . $movie->country . ")";

            $c = strlen($txt1);
            ?>
            <p id="text">
                @if($c <= 90) 
                    {{$txt1}} 
                @elseif($c > 90)
                    {{$txt2}}
                @endif
            </p>
        </div>
    </div>
    @endforeach
    @elseif($type == 16)
    @foreach($movies as $movie)
    <div style="float:left;padding:8px;">
        <img src="{{$movie->poster}}" alt="" style="width:170px;height:200px;border:solid;">
        <div style="height:30px;width:170px;text-align:center;">
            <?php


            $txt1 = $movie->ktid . " - " . mb_strimwidth($movie->title, 0, 20,'...');

            ?>
            <p id="text">
                {{$txt1}}
            </p>
        </div>
    </div>
    @endforeach
    @endif
</body>

</html>