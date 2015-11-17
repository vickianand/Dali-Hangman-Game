<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hangman</title>

  <!--[if IE]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
  <![endif]-->

<!--   <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">
 -->  
 <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <img alt="Hangman logo" width="110" height="110" src="img/arts/have_fun.jpg">
    <h1>Dali-Hangman</h1>
    <p>Have fun trying to figure out words describing my art!! :)</p>
  </header>

  <section class="hangman">
    <img id="leg-l" data-img-id="6" width="75" height="75" src="img/leg-l.png">
    <img id="leg-r" data-img-id="5" width="75" height="75" src="img/leg-r.png">
    <img id="arm-l" data-img-id="4" width="75" height="75" src="img/arm-l.png">
    <img id="arm-r" data-img-id="3" width="75" height="75" src="img/arm-r.png">
    <img id="head" data-img-id="1" width="75" height="75" src="img/head.png">
    <img id="body" data-img-id="2" width="75" height="75" src="img/body.png">
    <img id="gallows" width="200" height="400" src="img/gallows.png">
  </section>

  <section class="artwork">
    <img id="dali-1" data-img-id="1" width="294" height="400" src="img/arts/1.jpg">
    <img id="dali-2" data-img-id="2" width="294" height="400" src="img/arts/2.jpg">
    <img id="dali-3" data-img-id="3" width="294" height="400" src="img/arts/3.jpg">
    <img id="dali-4" data-img-id="4" width="294" height="400" src="img/arts/4.jpg">
    <img id="dali-5" data-img-id="5" width="294" height="400" src="img/arts/5.jpg">
    <img id="dali-6" data-img-id="6" width="294" height="400" src="img/arts/6.jpg">
    <!-- <img id="dali-7" data-img-id="7" width="294" height="400" src="img/arts/7.jpg"> -->
    <!-- <img id="transp"                 width="294" height="400" src="img/img/arts/transparent.jpg"> -->
  </section>

  <section id="area-hint">
    <!-- <h2>Image, Hint : </h2> -->
    <p></p>
  </section>


  <section id="area-word">
    <h2></h2>
    <p></p>
  </section>

  <section id="area-message">
    <p></p>
  </section>

  <form>
    <label><input type="text" id="guess" name="guess" autocomplete="off" maxlength="1"></label>
    <label><input type="submit" id="submit" name="submit" value="Guess!"></label>
  </form>


  <footer>
    <div>Modified 2015 <a target="_blank" href="https://twitter.com/vicki_anand">Vicki Anand</a> <span class="breaker"></span> ART&nbsp;406A&nbsp;-&nbsp;Art Criticism Theory and Practice
    <span class="breaker"></span> <a target="_blank" href="http://www.iitk.ac.in">IIT&nbsp;Kanpur</a> <span class="breaker"></span> Adapted from <a target="_blank" href="https://github.com/vickianand/PHP-Hangman/">PHP-Hangman</a> </div>
  </footer>

  <script async src="js/microajax.js"></script>
  <script async src="js/hangman.js"></script>
</body>
</html>
