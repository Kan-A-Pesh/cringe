<!DOCTYPE html>
<html>
    <head>
        <title>Suis-je ravagé ?</title>

        <meta name="description" content="Testez si vous êtes ravagé sur SuisJeRavagé.ml !">
        <meta name="keywords" content="Ravagé, Ravageomètre, Suis-je, Suis, Je, Cringe, Cringeomètre, Cringeometer, Ravageometer, Am I, Question, Existantielle">
        <meta name="authors" content="Kan-à-Pesh, Shadooow">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="css/colors.css?_cO=<?php echo time();?>">
        <link rel="stylesheet" type="text/css" href="css/background.css?_cO=<?php echo time();?>">
        <link rel="stylesheet" type="text/css" href="css/index.css?_cO=<?php echo time();?>">
        
        <script src="js/index.js?_cO=<?php echo time();?>"></script>
    </head>
    <body class="bg-blue">
        <div class="foreground">
            <div class="center">
                <input type="text" id="input">
                <div class="btn" id="button">
                    <h1>Suis-je ravagé?</h1>
                    <div>
                        <div>
                            <h1>Am I cringe?</h1>
                        </div>
                    </div>
                    <div>
                        <div>
                            <h1>Maybe ...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background">
            <div class="text">
                <div></div>
                <div></div>
            </div>
            <div class="left">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="stripes">
                <div></div>
            </div>
        </div>
        <div class="result" id="result">
            <div id="exitbtn">
                <div></div>
                <img src="img/x.png">
            </div>
            <div class="center">
                <h3 id="scoretext">0%</h3>
                <h1 id="titletext">You're so ravagé!</h1>
                <h5 id="desctext">But that's not grave you know</h5>
            </div>
        </div>
        <div class="bg-light bg-white"></div>
        <div class="bg-light bg-grey"></div>
        <div class="bg-light bg-black" id="background"></div>
    </body>
</html>