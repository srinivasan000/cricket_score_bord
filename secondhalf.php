<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondHalf</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body style="background:repeating-linear-gradient(red,green);text-align: center;">

    <audio id="srini">
        <source src="wicket.mp3" type="audio/mpeg">
    </audio>
        <!-------------------------------- title ------------------->
        <header>
            <div>
                <h1 style="text-align: center;background: radial-gradient(#ffff00,green);">Score_Bord</h1>
            </div>
        </header>
        <!---------------------- mainscorebord------------------------ -->
        <div>
           <p id="teams" style="background-color:powderblue;"></p>
            <p style="color:lightgoldenrodyellow;">Second Half:target:<span id="target"></span></p>
            <center>
                <table border="5" bgcolor="white" style="width: 100%;">
                    <tr>
                        <th style="padding: 10px;">
                            score
                        </th>
                        <th style="padding: 10px;">
                            wicket
                        </th>
                        <th style="padding: 10px;">
                            over
                        </th>
                    </tr>
                    <tr>
                        <td style="padding: 10px;">
                            <p id="bordscore"></p>
                        </td>
                        <td>
                            <p id="bordwicket"></p>

                        </td>
                        <td style="padding: 10px;">
                            <p id="bordover"></p>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <!-- --------------------scorebutton-------------------- -->
        <center>
            <table style="width: 100%;margin-top:5%;font-size: 20px;">
                <tr>
                    <th style="padding: 20px;">
                        <div>
                            <button onclick="onerun()" style="border-radius: 15px;">&nbsp;one/1&nbsp;</button>
                        </div>
                    </th>
                    <th>
                        <div>
                            <button onclick="tworun()" style="border-radius: 15px;">&nbsp;two/2&nbsp;</button>
                        </div>
                    </th>
                    <th>
                        <div>
                            <button onclick="threerun()" style="border-radius: 15px;">&nbsp;three/3&nbsp;</button>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th style="padding: 20px;">
                        <div>
                            <button onclick="fourrun()" style="border-radius: 15px;">&nbsp;four/4&nbsp;</button>
                        </div>
                    </th>
                    <th>
                        <div>
                            <button onclick="fiverun()" style="border-radius: 15px;">&nbsp;five/5&nbsp;</button>
                        </div>
                    </th>
                    <th>
                        <div>
                            <button onclick="sixrun()" style="border-radius: 15px;">&nbsp;six/6&nbsp;</button>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th style="padding: 20px;">
                        <div>
                            <button onclick="zerorun()" style="border-radius: 15px;">&nbsp;./0&nbsp;</button>
                        </div>
                    </th>
                    <th>
                        <div>
                            <button onclick="overend()" style="border-radius: 15px;">&nbsp;overend&nbsp;</button>
                        </div>
                    </th>
                    <th>
                        <div>
                            <button onclick="wicketend()" style="border-radius: 15px;">&nbsp;out&nbsp;</button>
                        </div>
                    </th>
                </tr>
            </table>
        </center>
        <!----------------------- fullscorebord-------------------- -->
        <div>
                <center>
                    <table border="5" bgcolor="white" style="width: 100%;">
                        <tr>
                            <th>
                                overs
                            </th>
                            <th>
                                runs
                            </th>
                            <th>
                                scores
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <span id="o1"></span>
                            </td>
                            <td>
                                <span id="o1run"></span>
                            </td>
                            <td>
                                <span id="o1score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o2"></span>
                            </td>
                            <td>
                                <span id="o2run"></span>
                            </td>
                            <td>
                                <span id="o2score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o3"></span>
                            </td>
                            <td>
                                <span id="o3run"></span>
                            </td>
                            <td>
                                <span id="o3score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o4"></span>
                            </td>
                            <td>
                                <span id="o4run"></span>
                            </td>
                            <td>
                                <span id="o4score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o5"></span>
                            </td>
                            <td>
                                <span id="o5run"></span>
                            </td>
                            <td>
                                <span id="o5score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o6"></span>
                            </td>
                            <td>
                                <span id="o6run"></span>
                            </td>
                            <td>
                                <span id="o6score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o7"></span>
                            </td>
                            <td>
                                <span id="o7run"></span>
                            </td>
                            <td>
                                <span id="o7score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o8"></span>
                            </td>
                            <td>
                                <span id="o8run"></span>
                            </td>
                            <td>
                                <span id="o8score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o9"></span>
                            </td>
                            <td>
                                <span id="o9run"></span>
                            </td>
                            <td>
                                <span id="o9score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o10"></span>
                            </td>
                            <td>
                                <span id="o10run"></span>
                            </td>
                            <td>
                                <span id="o10score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o11"></span>
                            </td>
                            <td>
                                <span id="o11run"></span>
                            </td>
                            <td>
                                <span id="o11score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o12"></span>
                            </td>
                            <td>
                                <span id="o12run"></span>
                            </td>
                            <td>
                                <span id="o12score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o13"></span>
                            </td>
                            <td>
                                <span id="o13run"></span>
                            </td>
                            <td>
                                <span id="o13score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o14"></span>
                            </td>
                            <td>
                                <span id="o14run"></span>
                            </td>
                            <td>
                                <span id="o14score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o15"></span>
                            </td>
                            <td>
                                <span id="o15run"></span>
                            </td>
                            <td>
                                <span id="o15score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o16"></span>
                            </td>
                            <td>
                                <span id="o16run"></span>
                            </td>
                            <td>
                                <span id="o16score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o17"></span>
                            </td>
                            <td>
                                <span id="o17run"></span>
                            </td>
                            <td>
                                <span id="o17score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o18"></span>
                            </td>
                            <td>
                                <span id="o18run"></span>
                            </td>
                            <td>
                                <span id="o18score"></span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span id="o19"></span>
                            </td>
                            <td>
                                <span id="o19run"></span>
                            </td>
                            <td>
                                <span id="o19score"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span id="o20"></span>
                            </td>
                            <td>
                                <span id="o20run"></span>
                            </td>
                            <td>
                                <span id="o20score"></span>
                            </td>
                        </tr>
                    </table>
                </center>
                </div>
        <footer style="margin-bottom: 0%;">
            srinivasan<button onclick="window.print()">print this page</button>
        </footer>
</body>
<script>

var song=document.getElementById("srini");
    //teams......................
   var qwer=prompt("enter target score");
   document.getElementById("target").innerHTML=qwer;
   
   
    var bordscore = Number(document.getElementById("bordscore").value = 0);
    var bordwicket = Number(document.getElementById("bordwicket").value = 0);
    var bordover = Number(document.getElementById("bordover").value = 0);

    var o1 = Number(document.getElementById("o1").value = 0);
    var o2 = Number(document.getElementById("o2").value = 0);
    var o3 = Number(document.getElementById("o3").value = 0);
    var o4 = Number(document.getElementById("o4").value = 0);
    var o5 = Number(document.getElementById("o5").value = 0);
    var o6 = Number(document.getElementById("o6").value = 0);
    var o7 = Number(document.getElementById("o7").value = 0);
    var o8 = Number(document.getElementById("o8").value = 0);
    var o9 = Number(document.getElementById("o9").value = 0);
    var o10 = Number(document.getElementById("o10").value = 0);
    var o11 = Number(document.getElementById("o11").value = 0);
    var o12 = Number(document.getElementById("o12").value = 0);
    var o13 = Number(document.getElementById("o13").value = 0);
    var o14 = Number(document.getElementById("o14").value = 0);
    var o15 = Number(document.getElementById("o15").value = 0);
    var o16 = Number(document.getElementById("o16").value = 0);
    var o17 = Number(document.getElementById("o17").value = 0);
    var o18 = Number(document.getElementById("o18").value = 0);
    var o19 = Number(document.getElementById("o19").value = 0);
    var o20 = Number(document.getElementById("o20").value = 0);

    var o1run = Number(document.getElementById("o1run").value = 0);
    var o2run = Number(document.getElementById("o2run").value = 0);
    var o3run = Number(document.getElementById("o3run").value = 0);
    var o4run = Number(document.getElementById("o4run").value = 0);
    var o5run = Number(document.getElementById("o5run").value = 0);
    var o6run = Number(document.getElementById("o6run").value = 0);
    var o7run = Number(document.getElementById("o7run").value = 0);
    var o8run = Number(document.getElementById("o8run").value = 0);
    var o9run = Number(document.getElementById("o9run").value = 0);
    var o10run = Number(document.getElementById("o10run").value = 0);
    var o11run = Number(document.getElementById("o11run").value = 0);
    var o12run = Number(document.getElementById("o12run").value = 0);
    var o13run = Number(document.getElementById("o13run").value = 0);
    var o14run = Number(document.getElementById("o14run").value = 0);
    var o15run = Number(document.getElementById("o15run").value = 0);
    var o16run = Number(document.getElementById("o16run").value = 0);
    var o17run = Number(document.getElementById("o17run").value = 0);
    var o18run = Number(document.getElementById("o18run").value = 0);
    var o19run = Number(document.getElementById("o19run").value = 0);
    var o20run = Number(document.getElementById("o20run").value = 0);

    var o1score = Number(document.getElementById("o1score").value = 0);
    var o2score = Number(document.getElementById("o2score").value = 0);
    var o3score = Number(document.getElementById("o3score").value = 0);
    var o4score = Number(document.getElementById("o4score").value = 0);
    var o5score = Number(document.getElementById("o5score").value = 0);
    var o6score = Number(document.getElementById("o6score").value = 0);
    var o7score = Number(document.getElementById("o7score").value = 0);
    var o8score = Number(document.getElementById("o8score").value = 0);
    var o9score = Number(document.getElementById("o9score").value = 0);
    var o10score = Number(document.getElementById("o10score").value = 0);
    var o11score = Number(document.getElementById("o11score").value = 0);
    var o12score = Number(document.getElementById("o12score").value = 0);
    var o13score = Number(document.getElementById("o13score").value = 0);
    var o14score = Number(document.getElementById("o14score").value = 0);
    var o15score = Number(document.getElementById("o15score").value = 0);
    var o16score = Number(document.getElementById("o16score").value = 0);
    var o17score = Number(document.getElementById("o17score").value = 0);
    var o18score = Number(document.getElementById("o18score").value = 0);
    var o19score = Number(document.getElementById("o19score").value = 0);
    var o20score = Number(document.getElementById("o20score").value = 0);
    //wickets
    function wicketend() {
        song.play();
        bordwicket = document.getElementById("bordwicket").innerHTML = Number(bordwicket + 1);
        if (bordwicket == 11) {
            alert(" all players out  ");
        }
    }
    //overs........................
    function overend() {
song.play();


        if (o1 == 0) {
            o1 = document.getElementById("o1").innerHTML = 1;
            bordover = document.getElementById("bordover").innerHTML = 1;

        }
        else if (o1 == 1) {
            o1 = document.getElementById("o2").innerHTML = 2;
            bordover = document.getElementById("bordover").innerHTML = 2;
        }
        else if (o1 == 2) {
            o1 = document.getElementById("o3").innerHTML = 3;
            bordover = document.getElementById("bordover").innerHTML = 3;
        }
        else if (o1 == 3) {
            o1 = document.getElementById("o4").innerHTML = 4;
            bordover = document.getElementById("bordover").innerHTML = 4;
        }
        else if (o1 == 4) {
            o1 = document.getElementById("o5").innerHTML = 5;
            bordover = document.getElementById("bordover").innerHTML = 5;
        }
        else if (o1 == 5) {
            o1 = document.getElementById("o6").innerHTML = 6;
            bordover = document.getElementById("bordover").innerHTML = 6;
        }
        else if (o1 == 6) {
            o1 = document.getElementById("o7").innerHTML = 7;
            bordover = document.getElementById("bordover").innerHTML = 7;
        }
        else if (o1 == 7) {
            o1 = document.getElementById("o8").innerHTML = 8;
            bordover = document.getElementById("bordover").innerHTML = 8;
        }
        else if (o1 == 8) {
            o1 = document.getElementById("o9").innerHTML = 9;
            bordover = document.getElementById("bordover").innerHTML = 9;
        }
        else if (o1 == 9) {
            o1 = document.getElementById("o10").innerHTML = 10;
            bordover = document.getElementById("bordover").innerHTML = 10;
        }
        else if (o1 == 10) {
            o1 = document.getElementById("o11").innerHTML = 11;
            bordover = document.getElementById("bordover").innerHTML = 11;
        }
        else if (o1 == 11) {
            o1 = document.getElementById("o12").innerHTML = 12;
            bordover = document.getElementById("bordover").innerHTML = 12;
        }
        else if (o1 == 12) {
            o1 = document.getElementById("o13").innerHTML = 13;
            bordover = document.getElementById("bordover").innerHTML = 12;
        }
        else if (o1 == 13) {
            o1 = document.getElementById("o14").innerHTML = 14;
            bordover = document.getElementById("bordover").innerHTML = 14;
        }
        else if (o1 == 14) {
            o1 = document.getElementById("o15").innerHTML = 15;
            bordover = document.getElementById("bordover").innerHTML = 15;
        }
        else if (o1 == 15) {
            o1 = document.getElementById("o16").innerHTML = 16;
            bordover = document.getElementById("bordover").innerHTML = 16;
        }
        else if (o1 == 16) {
            o1 = document.getElementById("o17").innerHTML = 17;
            bordover = document.getElementById("bordover").innerHTML = 17;
        }
        else if (o1 == 17) {
            o1 = document.getElementById("o18").innerHTML = 18;
            bordover = document.getElementById("bordover").innerHTML = 18;
        }
        else if (o1 == 18) {
            o1 = document.getElementById("o19").innerHTML = 19;
            bordover = document.getElementById("bordover").innerHTML = 19;
        }
        else if (o1 == 19) {
            o1 = document.getElementById("o20").innerHTML = 20;
            bordover = document.getElementById("bordover").innerHTML = 20;
            alert("all over end");
        }
        else {
            alert("error");
        }
    }
    //runs.........................
    function zerorun() {        
        song.play();
        if (o1 == 0) {
            o1score = document.getElementById("o1score").innerHTML = Number(o1score + 0);
            o1run = document.getElementById("o1run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score;
        }
        else if (o1 == 1) {
            o2score = document.getElementById("o2score").innerHTML = Number(o2score + 0);
            o2run = document.getElementById("o2run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score;
        }
        else if (o1 == 2) {
            o3score = document.getElementById("o3score").innerHTML = Number(o3score + 0);
            o3run = document.getElementById("o3run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score;
        }
        else if (o1 == 3) {
            o4score = document.getElementById("o4score").innerHTML = Number(o4score + 0);
            o4run = document.getElementById("o4run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score;
        }
        else if (o1 == 4) {
            o5score = document.getElementById("o5score").innerHTML = Number(o5score + 0);
            o5run = document.getElementById("o5run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score;
        }
        else if (o1 == 5) {
            o6score = document.getElementById("o6score").innerHTML = Number(o6score + 0);
            o6run = document.getElementById("o6run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score;
        }
        else if (o1 == 6) {
            o7score = document.getElementById("o7score").innerHTML = Number(o7score + 0);
            o7run = document.getElementById("o7run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score;
        }
        else if (o1 == 7) {
            o8score = document.getElementById("o8score").innerHTML = Number(o8score + 0);
            o8run = document.getElementById("o8run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score;
        }
        else if (o1 == 8) {
            o9score = document.getElementById("o9score").innerHTML = Number(o9score + 0);
            o9run = document.getElementById("o9run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score;
        }
        else if (o1 == 9) {
            o10score = document.getElementById("o10score").innerHTML = Number(o10score + 0);
            o10run = document.getElementById("o10run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score;
        }
        else if (o1 == 10) {
            o11score = document.getElementById("o11score").innerHTML = Number(o11score + 0);
            o11run = document.getElementById("o11run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score;
        }
        else if (o1 == 11) {
            o12score = document.getElementById("o12score").innerHTML = Number(o12score + 0);
            o2run = document.getElementById("o12run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score;
        }
        else if (o1 == 12) {
            o13score = document.getElementById("o13score").innerHTML = Number(o13score + 0);
            o13run = document.getElementById("o13run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score;
        }
        else if (o1 == 13) {
            o14score = document.getElementById("o14score").innerHTML = Number(o14score + 0);
            o14run = document.getElementById("o14run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score;
        }
        else if (o1 == 14) {
            o15score = document.getElementById("o15score").innerHTML = Number(o15score + 0);
            o15run = document.getElementById("o15run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score;
        }
        else if (o1 == 15) {
            o16score = document.getElementById("o16score").innerHTML = Number(o16score + 0);
            o16run = document.getElementById("o16run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score;
        }
        else if (o1 == 16) {
            o17score = document.getElementById("o17score").innerHTML = Number(o17score + 0);
            o17run = document.getElementById("o17run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score;
        }
        else if (o1 == 17) {
            o18score = document.getElementById("o18score").innerHTML = Number(o18score + 0);
            o18run = document.getElementById("o18run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score;
        }
        else if (o1 == 18) {
            o19score = document.getElementById("o19score").innerHTML = Number(o19score + 0);
            o19run = document.getElementById("o19run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score;
        }
        else if (o1 == 19) {
            o20score = document.getElementById("o20score").innerHTML = Number(o20score + 0);
            o20run = document.getElementById("o20run").innerHTML += "+0";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score + o20score;
        }

    }



    function onerun() {
        song.play();
        if (o1 == 0) {
            o1score = document.getElementById("o1score").innerHTML = Number(o1score + 1);
            o1run = document.getElementById("o1run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score;
        }
        else if (o1 == 1) {
            o2score = document.getElementById("o2score").innerHTML = Number(o2score + 1);
            o2run = document.getElementById("o2run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score;
        }
        else if (o1 == 2) {
            o3score = document.getElementById("o3score").innerHTML = Number(o3score + 1);
            o3run = document.getElementById("o3run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score;
        }
        else if (o1 == 3) {
            o4score = document.getElementById("o4score").innerHTML = Number(o4score + 1);
            o4run = document.getElementById("o4run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score;
        }
        else if (o1 == 4) {
            o5score = document.getElementById("o5score").innerHTML = Number(o5score + 1);
            o5run = document.getElementById("o5run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score;
        }
        else if (o1 == 5) {
            o6score = document.getElementById("o6score").innerHTML = Number(o6score + 1);
            o6run = document.getElementById("o6run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score;
        }
        else if (o1 == 6) {
            o7score = document.getElementById("o7score").innerHTML = Number(o7score + 1);
            o7run = document.getElementById("o7run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score;
        }
        else if (o1 == 7) {
            o8score = document.getElementById("o8score").innerHTML = Number(o8score + 1);
            o8run = document.getElementById("o8run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score;
        }
        else if (o1 == 8) {
            o9score = document.getElementById("o9score").innerHTML = Number(o9score + 1);
            o9run = document.getElementById("o9run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score;
        }
        else if (o1 == 9) {
            o10score = document.getElementById("o10score").innerHTML = Number(o10score + 1);
            o10run = document.getElementById("o10run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score;
        }
        else if (o1 == 10) {
            o11score = document.getElementById("o11score").innerHTML = Number(o11score + 1);
            o11run = document.getElementById("o11run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score;
        }
        else if (o1 == 11) {
            o12score = document.getElementById("o12score").innerHTML = Number(o12score + 1);
            o2run = document.getElementById("o12run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score;
        }
        else if (o1 == 12) {
            o13score = document.getElementById("o13score").innerHTML = Number(o13score + 1);
            o13run = document.getElementById("o13run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score;
        }
        else if (o1 == 13) {
            o14score = document.getElementById("o14score").innerHTML = Number(o14score + 1);
            o14run = document.getElementById("o14run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score;
        }
        else if (o1 == 14) {
            o15score = document.getElementById("o15score").innerHTML = Number(o15score + 1);
            o15run = document.getElementById("o15run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score;
        }
        else if (o1 == 15) {
            o16score = document.getElementById("o16score").innerHTML = Number(o16score + 1);
            o16run = document.getElementById("o16run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score;
        }
        else if (o1 == 16) {
            o17score = document.getElementById("o17score").innerHTML = Number(o17score + 1);
            o17run = document.getElementById("o17run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score;
        }
        else if (o1 == 17) {
            o18score = document.getElementById("o18score").innerHTML = Number(o18score + 1);
            o18run = document.getElementById("o18run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score;
        }
        else if (o1 == 18) {
            o19score = document.getElementById("o19score").innerHTML = Number(o19score + 1);
            o19run = document.getElementById("o19run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score;
        }
        else if (o1 == 19) {
            o20score = document.getElementById("o20score").innerHTML = Number(o20score + 1);
            o20run = document.getElementById("o20run").innerHTML += "+1";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score + o20score;
        }

    }
    function tworun() {        
        song.play();
        if (o1 == 0) {
            o1score = document.getElementById("o1score").innerHTML = Number(o1score + 2);
            o1run = document.getElementById("o1run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score;
        }
        else if (o1 == 1) {
            o2score = document.getElementById("o2score").innerHTML = Number(o2score + 2);
            o2run = document.getElementById("o2run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score;
        }
        else if (o1 == 2) {
            o3score = document.getElementById("o3score").innerHTML = Number(o3score + 2);
            o3run = document.getElementById("o3run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score;
        }
        else if (o1 == 3) {
            o4score = document.getElementById("o4score").innerHTML = Number(o4score + 2);
            o4run = document.getElementById("o4run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score;
        }
        else if (o1 == 4) {
            o5score = document.getElementById("o5score").innerHTML = Number(o5score + 2);
            o5run = document.getElementById("o5run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score;
        }
        else if (o1 == 5) {
            o6score = document.getElementById("o6score").innerHTML = Number(o6score + 2);
            o6run = document.getElementById("o6run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score;
        }
        else if (o1 == 6) {
            o7score = document.getElementById("o7score").innerHTML = Number(o7score + 2);
            o7run = document.getElementById("o7run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score;
        }
        else if (o1 == 7) {
            o8score = document.getElementById("o8score").innerHTML = Number(o8score + 2);
            o8run = document.getElementById("o8run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score;
        }
        else if (o1 == 8) {
            o9score = document.getElementById("o9score").innerHTML = Number(o9score + 2);
            o9run = document.getElementById("o9run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score;
        }
        else if (o1 == 9) {
            o10score = document.getElementById("o10score").innerHTML = Number(o10score + 2);
            o10run = document.getElementById("o10run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score;
        }
        else if (o1 == 10) {
            o11score = document.getElementById("o11score").innerHTML = Number(o11score + 2);
            o11run = document.getElementById("o11run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score;
        }
        else if (o1 == 11) {
            o12score = document.getElementById("o12score").innerHTML = Number(o12score + 2);
            o2run = document.getElementById("o12run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score;
        }
        else if (o1 == 12) {
            o13score = document.getElementById("o13score").innerHTML = Number(o13score + 2);
            o13run = document.getElementById("o13run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score;
        }
        else if (o1 == 13) {
            o14score = document.getElementById("o14score").innerHTML = Number(o14score + 2);
            o14run = document.getElementById("o14run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score;
        }
        else if (o1 == 14) {
            o15score = document.getElementById("o15score").innerHTML = Number(o15score + 2);
            o15run = document.getElementById("o15run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score;
        }
        else if (o1 == 15) {
            o16score = document.getElementById("o16score").innerHTML = Number(o16score + 2);
            o16run = document.getElementById("o16run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score;
        }
        else if (o1 == 16) {
            o17score = document.getElementById("o17score").innerHTML = Number(o17score + 2);
            o17run = document.getElementById("o17run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score;
        }
        else if (o1 == 17) {
            o18score = document.getElementById("o18score").innerHTML = Number(o18score + 2);
            o18run = document.getElementById("o18run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score;
        }
        else if (o1 == 18) {
            o19score = document.getElementById("o19score").innerHTML = Number(o19score + 2);
            o19run = document.getElementById("o19run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score;
        }
        else if (o1 == 19) {
            o20score = document.getElementById("o20score").innerHTML = Number(o20score + 2);
            o20run = document.getElementById("o20run").innerHTML += "+2";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score + o20score;
        }

    }
    function threerun() {        
        song.play();        
        if (o1 == 0) {
            o1score = document.getElementById("o1score").innerHTML = Number(o1score + 3);
            o1run = document.getElementById("o1run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score;
        }
        else if (o1 == 1) {
            o2score = document.getElementById("o2score").innerHTML = Number(o2score + 3);
            o2run = document.getElementById("o2run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score;
        }
        else if (o1 == 2) {
            o3score = document.getElementById("o3score").innerHTML = Number(o3score + 3);
            o3run = document.getElementById("o3run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score;
        }
        else if (o1 == 3) {
            o4score = document.getElementById("o4score").innerHTML = Number(o4score + 3);
            o4run = document.getElementById("o4run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score;
        }
        else if (o1 == 4) {
            o5score = document.getElementById("o5score").innerHTML = Number(o5score + 3);
            o5run = document.getElementById("o5run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score;
        }
        else if (o1 == 5) {
            o6score = document.getElementById("o6score").innerHTML = Number(o6score + 3);
            o6run = document.getElementById("o6run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score;
        }
        else if (o1 == 6) {
            o7score = document.getElementById("o7score").innerHTML = Number(o7score + 3);
            o7run = document.getElementById("o7run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score;
        }
        else if (o1 == 7) {
            o8score = document.getElementById("o8score").innerHTML = Number(o8score + 3);
            o8run = document.getElementById("o8run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score;
        }
        else if (o1 == 8) {
            o9score = document.getElementById("o9score").innerHTML = Number(o9score + 3);
            o9run = document.getElementById("o9run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score;
        }
        else if (o1 == 9) {
            o10score = document.getElementById("o10score").innerHTML = Number(o10score + 3);
            o10run = document.getElementById("o10run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score;
        }
        else if (o1 == 10) {
            o11score = document.getElementById("o11score").innerHTML = Number(o11score + 3);
            o11run = document.getElementById("o11run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score;
        }
        else if (o1 == 11) {
            o12score = document.getElementById("o12score").innerHTML = Number(o12score + 3);
            o2run = document.getElementById("o12run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score;
        }
        else if (o1 == 12) {
            o13score = document.getElementById("o13score").innerHTML = Number(o13score + 3);
            o13run = document.getElementById("o13run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score;
        }
        else if (o1 == 13) {
            o14score = document.getElementById("o14score").innerHTML = Number(o14score + 3);
            o14run = document.getElementById("o14run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score;
        }
        else if (o1 == 14) {
            o15score = document.getElementById("o15score").innerHTML = Number(o15score + 3);
            o15run = document.getElementById("o15run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score;
        }
        else if (o1 == 15) {
            o16score = document.getElementById("o16score").innerHTML = Number(o16score + 3);
            o16run = document.getElementById("o16run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score;
        }
        else if (o1 == 16) {
            o17score = document.getElementById("o17score").innerHTML = Number(o17score + 3);
            o17run = document.getElementById("o17run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score;
        }
        else if (o1 == 17) {
            o18score = document.getElementById("o18score").innerHTML = Number(o18score + 3);
            o18run = document.getElementById("o18run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score;
        }
        else if (o1 == 18) {
            o19score = document.getElementById("o19score").innerHTML = Number(o19score + 3);
            o19run = document.getElementById("o19run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score;
        }
        else if (o1 == 19) {
            o20score = document.getElementById("o20score").innerHTML = Number(o20score + 3);
            o20run = document.getElementById("o20run").innerHTML += "+3";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score + o20score;
        }

    }
    function fourrun() {        
        song.play();
        if (o1 == 0) {
            o1score = document.getElementById("o1score").innerHTML = Number(o1score + 4);
            o1run = document.getElementById("o1run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score;
        }
        else if (o1 == 1) {
            o2score = document.getElementById("o2score").innerHTML = Number(o2score + 4);
            o2run = document.getElementById("o2run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score;
        }
        else if (o1 == 2) {
            o3score = document.getElementById("o3score").innerHTML = Number(o3score + 4);
            o3run = document.getElementById("o3run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score;
        }
        else if (o1 == 3) {
            o4score = document.getElementById("o4score").innerHTML = Number(o4score + 4);
            o4run = document.getElementById("o4run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score;
        }
        else if (o1 == 4) {
            o5score = document.getElementById("o5score").innerHTML = Number(o5score + 4);
            o5run = document.getElementById("o5run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score;
        }
        else if (o1 == 5) {
            o6score = document.getElementById("o6score").innerHTML = Number(o6score + 4);
            o6run = document.getElementById("o6run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score;
        }
        else if (o1 == 6) {
            o7score = document.getElementById("o7score").innerHTML = Number(o7score + 4);
            o7run = document.getElementById("o7run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score;
        }
        else if (o1 == 7) {
            o8score = document.getElementById("o8score").innerHTML = Number(o8score + 4);
            o8run = document.getElementById("o8run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score;
        }
        else if (o1 == 8) {
            o9score = document.getElementById("o9score").innerHTML = Number(o9score + 4);
            o9run = document.getElementById("o9run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score;
        }
        else if (o1 == 9) {
            o10score = document.getElementById("o10score").innerHTML = Number(o10score + 4);
            o10run = document.getElementById("o10run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score;
        }
        else if (o1 == 10) {
            o11score = document.getElementById("o11score").innerHTML = Number(o11score + 4);
            o11run = document.getElementById("o11run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score;
        }
        else if (o1 == 11) {
            o12score = document.getElementById("o12score").innerHTML = Number(o12score + 4);
            o2run = document.getElementById("o12run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score;
        }
        else if (o1 == 12) {
            o13score = document.getElementById("o13score").innerHTML = Number(o13score + 4);
            o13run = document.getElementById("o13run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score;
        }
        else if (o1 == 13) {
            o14score = document.getElementById("o14score").innerHTML = Number(o14score + 4);
            o14run = document.getElementById("o14run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score;
        }
        else if (o1 == 14) {
            o15score = document.getElementById("o15score").innerHTML = Number(o15score + 4);
            o15run = document.getElementById("o15run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score;
        }
        else if (o1 == 15) {
            o16score = document.getElementById("o16score").innerHTML = Number(o16score + 4);
            o16run = document.getElementById("o16run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score;
        }
        else if (o1 == 16) {
            o17score = document.getElementById("o17score").innerHTML = Number(o17score + 4);
            o17run = document.getElementById("o17run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score;
        }
        else if (o1 == 17) {
            o18score = document.getElementById("o18score").innerHTML = Number(o18score + 4);
            o18run = document.getElementById("o18run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score;
        }
        else if (o1 == 18) {
            o19score = document.getElementById("o19score").innerHTML = Number(o19score + 4);
            o19run = document.getElementById("o19run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score;
        }
        else if (o1 == 19) {
            o20score = document.getElementById("o20score").innerHTML = Number(o20score + 4);
            o20run = document.getElementById("o20run").innerHTML += "+4";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score + o20score;
        }

    }
    function fiverun() {        
        song.play();
        if (o1 == 0) {
            o1score = document.getElementById("o1score").innerHTML = Number(o1score + 5);
            o1run = document.getElementById("o1run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score;
        }
        else if (o1 == 1) {
            o2score = document.getElementById("o2score").innerHTML = Number(o2score + 5);
            o2run = document.getElementById("o2run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score;
        }
        else if (o1 == 2) {
            o3score = document.getElementById("o3score").innerHTML = Number(o3score + 5);
            o3run = document.getElementById("o3run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score;
        }
        else if (o1 == 3) {
            o4score = document.getElementById("o4score").innerHTML = Number(o4score + 5);
            o4run = document.getElementById("o4run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score;
        }
        else if (o1 == 4) {
            o5score = document.getElementById("o5score").innerHTML = Number(o5score + 5);
            o5run = document.getElementById("o5run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score;
        }
        else if (o1 == 5) {
            o6score = document.getElementById("o6score").innerHTML = Number(o6score + 5);
            o6run = document.getElementById("o6run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score;
        }
        else if (o1 == 6) {
            o7score = document.getElementById("o7score").innerHTML = Number(o7score + 5);
            o7run = document.getElementById("o7run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score;
        }
        else if (o1 == 7) {
            o8score = document.getElementById("o8score").innerHTML = Number(o8score + 5);
            o8run = document.getElementById("o8run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score;
        }
        else if (o1 == 8) {
            o9score = document.getElementById("o9score").innerHTML = Number(o9score + 5);
            o9run = document.getElementById("o9run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score;
        }
        else if (o1 == 9) {
            o10score = document.getElementById("o10score").innerHTML = Number(o10score + 5);
            o10run = document.getElementById("o10run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score;
        }
        else if (o1 == 10) {
            o11score = document.getElementById("o11score").innerHTML = Number(o11score + 5);
            o11run = document.getElementById("o11run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score;
        }
        else if (o1 == 11) {
            o12score = document.getElementById("o12score").innerHTML = Number(o12score + 5);
            o2run = document.getElementById("o12run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score;
        }
        else if (o1 == 12) {
            o13score = document.getElementById("o13score").innerHTML = Number(o13score + 5);
            o13run = document.getElementById("o13run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score;
        }
        else if (o1 == 13) {
            o14score = document.getElementById("o14score").innerHTML = Number(o14score + 5);
            o14run = document.getElementById("o14run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score;
        }
        else if (o1 == 14) {
            o15score = document.getElementById("o15score").innerHTML = Number(o15score + 5);
            o15run = document.getElementById("o15run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score;
        }
        else if (o1 == 15) {
            o16score = document.getElementById("o16score").innerHTML = Number(o16score + 5);
            o16run = document.getElementById("o16run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score;
        }
        else if (o1 == 16) {
            o17score = document.getElementById("o17score").innerHTML = Number(o17score + 5);
            o17run = document.getElementById("o17run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score;
        }
        else if (o1 == 17) {
            o18score = document.getElementById("o18score").innerHTML = Number(o18score + 5);
            o18run = document.getElementById("o18run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score;
        }
        else if (o1 == 18) {
            o19score = document.getElementById("o19score").innerHTML = Number(o19score + 5);
            o19run = document.getElementById("o19run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score;
        }
        else if (o1 == 19) {
            o20score = document.getElementById("o20score").innerHTML = Number(o20score + 5);
            o20run = document.getElementById("o20run").innerHTML += "+5";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score + o20score;
        }

    }
    function sixrun() {        
        song.play();
        if (o1 == 0) {
            o1score = document.getElementById("o1score").innerHTML = Number(o1score + 6);
            o1run = document.getElementById("o1run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score;
        }
        else if (o1 == 1) {
            o2score = document.getElementById("o2score").innerHTML = Number(o2score + 6);
            o2run = document.getElementById("o2run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score;
        }
        else if (o1 == 2) {
            o3score = document.getElementById("o3score").innerHTML = Number(o3score + 6);
            o3run = document.getElementById("o3run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score;
        }
        else if (o1 == 3) {
            o4score = document.getElementById("o4score").innerHTML = Number(o4score + 6);
            o4run = document.getElementById("o4run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score;
        }
        else if (o1 == 4) {
            o5score = document.getElementById("o5score").innerHTML = Number(o5score + 6);
            o5run = document.getElementById("o5run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score;
        }
        else if (o1 == 5) {
            o6score = document.getElementById("o6score").innerHTML = Number(o6score + 6);
            o6run = document.getElementById("o6run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score;
        }
        else if (o1 == 6) {
            o7score = document.getElementById("o7score").innerHTML = Number(o7score + 6);
            o7run = document.getElementById("o7run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score;
        }
        else if (o1 == 7) {
            o8score = document.getElementById("o8score").innerHTML = Number(o8score + 6);
            o8run = document.getElementById("o8run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score;
        }
        else if (o1 == 8) {
            o9score = document.getElementById("o9score").innerHTML = Number(o9score + 6);
            o9run = document.getElementById("o9run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score;
        }
        else if (o1 == 9) {
            o10score = document.getElementById("o10score").innerHTML = Number(o10score + 6);
            o10run = document.getElementById("o10run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score;
        }
        else if (o1 == 10) {
            o11score = document.getElementById("o11score").innerHTML = Number(o11score + 6);
            o11run = document.getElementById("o11run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score;
        }
        else if (o1 == 11) {
            o12score = document.getElementById("o12score").innerHTML = Number(o12score + 6);
            o2run = document.getElementById("o12run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score;
        }
        else if (o1 == 12) {
            o13score = document.getElementById("o13score").innerHTML = Number(o13score + 6);
            o13run = document.getElementById("o13run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score;
        }
        else if (o1 == 13) {
            o14score = document.getElementById("o14score").innerHTML = Number(o14score + 6);
            o14run = document.getElementById("o14run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score;
        }
        else if (o1 == 14) {
            o15score = document.getElementById("o15score").innerHTML = Number(o15score + 6);
            o15run = document.getElementById("o15run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score;
        }
        else if (o1 == 15) {
            o16score = document.getElementById("o16score").innerHTML = Number(o16score + 6);
            o16run = document.getElementById("o16run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score;
        }
        else if (o1 == 16) {
            o17score = document.getElementById("o17score").innerHTML = Number(o17score + 6);
            o17run = document.getElementById("o17run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score;
        }
        else if (o1 == 17) {
            o18score = document.getElementById("o18score").innerHTML = Number(o18score + 6);
            o18run = document.getElementById("o18run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score;
        }
        else if (o1 == 18) {
            o19score = document.getElementById("o19score").innerHTML = Number(o19score + 6);
            o19run = document.getElementById("o19run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score;
        }
        else if (o1 == 19) {
            o20score = document.getElementById("o20score").innerHTML = Number(o20score + 6);
            o20run = document.getElementById("o20run").innerHTML += "+6";
            bordscore = document.getElementById("bordscore").innerHTML = o1score + o2score + o3score + o4score + o5score + o6score + o7score + o8score + o9score + o10score + o11score + o12score + o13score + o14score + o15score + o16score + o17score + o18score + o19score + o20score;
        }

    }
</script>


</html>