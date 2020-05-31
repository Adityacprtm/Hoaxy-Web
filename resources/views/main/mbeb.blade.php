<html>

<head>
    <title>Hi mbeb!</title>

    <link rel="icon" href="{{ asset('assets/main/mbeb/image/icon.png') }}">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font: 400 15px/1.8 "Lato", sans-serif;
            color: #777;
            background-color: lightblue;
        }

        .bgimg {
            position: relative;
            opacity: 0.65;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .bgimg {
            background-image: url("{{ asset('assets/main/mbeb/image/bg.jpg') }}");
            height: 100%;
        }

        .caption {
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            text-align: center;
            color: #000;
        }

        .caption span.border {
            background-color: #111;
            color: #fff;
            padding: 18px;
            font-size: 25px;
            letter-spacing: 10px;
        }

        .float-back {
			position: fixed;
			width: 50px;
			height: 50px;
			bottom: 100px;
			right: 25px;
			background-color: rgb(0, 0, 0);
			color: #FFF;
			border-radius: 50px;
			text-align: center;
		}
    </style>
</head>

<body>
    <div class="bgimg">
        <div class="caption">
            <span class="border">Love u Mbeb <i style="color: red">&hearts;</i></span>
        </div>
    </div>

    <a href="/" class="float-back" style="text-decoration: none" title="Back"><span style="font-size: 30px">&#8629;</span></a>
</body>

</html>