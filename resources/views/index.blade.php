<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <title>Lara Start</title>
</head>
<body>

    <!-- header  -->
    <header>
        <div class="container">
            <div class="title">
                <h1>
                    <a href=".">
                        {{ $headerTitle }}
                    </a>
                </h1>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header  -->


    <!-- main  -->
    <main>
        <div class="container">
            <div class="left">
                <h2>First Steps</h2>
                <p>This is the beginning of a new chapter, another adventure that we shall name "Laravel". An exciting yet frightening feeling animates me, we'll have to undergo many hardships and that will make the reward only sweeter.</p>
                <p>In the little time we have left, it is important to remember the end goal, to not lose ourselves in the process and to remain strong in every steps we have to make.</p>
                <p>This is a small trace we will leave behind to remind our future selves of one those many steps we made and hopefully we will look behind and realize that every choice, efforts we made had a meaning. A meaning in our growth first and foremost as humans and then as coders.</p>
                <p>On this note, i shall conclude with simple yet powerful words: Do not give up ! For only the most resilient and tough people will enjoy the fruits of their hardwork.</p>
                <small>
                    <em>
                        "Diary of a lone coder (book of laravel)""
                    </em>
                </small>
            </div>
            <div class="right">
                <img src="{{asset('assets/images/coder.jpg')}}" alt="pc">
            </div>
        </div>
    </main>
    <!-- main  -->
    
</body>
</html>
