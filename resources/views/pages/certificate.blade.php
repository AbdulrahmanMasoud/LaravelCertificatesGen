<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$name}} Certificate</title>
    <style>

body, html {
            margin: 0;
            padding: 0;
        }
        body {
            color: black;
            /* display: table; */
            font-family: Georgia, serif;
            font-size: 24px;
            text-align: center;
        }
        .certificat .container {
            border: 20px solid tan;
            width: 100%;
            height: 713.5px;
            /* display: table-cell; */
            vertical-align: middle;
            padding: 20px;
            margin: auto;
        }
        .certificat .container .content{
             padding-top: 25%; 
        }
        .certificat .container .logo {
            color: tan;
        }
        
        .certificat .container .marquee {
            color: tan;
            font-size: 48px;
            margin: 20px;
        }
        .certificat .container .assignment {
            margin: 20px;
        }
        .person {
            border-bottom: 2px solid black;
            font-size: 32px;
            font-style: italic;
            margin: 20px auto;
            width: 400px;
        }
        .certificat .container .reason {
            margin: 20px;
        }
        </style>
</head>
<body>

<section class="certificat">
<div class="container">
    <div class="content">
    <div class="logo">
        An Organization
    </div>

    <div class="marquee">
        Certificate of Completion
    </div>

    <div class="assignment">
        This certificate is presented to
    </div>

    <div class="person">
        {{$name}}
    </div>

    <div class="reason">
        For deftly defying the laws of gravity<br/>
        and flying high
    </div>
</div>
</div>
</section>



</body>
</html>