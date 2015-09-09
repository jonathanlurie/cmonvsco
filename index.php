<!--
Author      : Jonathan Lurie
Email       : lurie.jo@gmail.com
Version     : 0.1
Licence     : MIT
description : VSCO CAM is a photography social network. It is great but does not
              allow rightclick on it's website to get image url, so you cannot
              re-use the already online version of an image even if you took it.

              C'MON VSCO just display the fullsier image from the URL taken from
              VSCO GRID. The URL usually has this format:
              http://USERNAME.vsco.co/media/ID_WITH_NUMBERS_AND_LETTERS
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>C'MON VSCO</title>
  </head>

  <body>
    <script type='text/javascript'>

      // some random background image from my own VSCO
      bgImgs = [
        "https://im.vsco.co/1/52cacb4939dc8257393/55e66dbe49331e7d728b456e/634dba59-60d5-4110-a7b2-f15b31d641fa.jpg",
        "https://im.vsco.co/1/52cacb4939dc8257393/55ecdb4326331e967e8b4575/36d82e6a-cf99-4c1a-83eb-a2235dfc79d6.jpg",
        "https://im.vsco.co/1/52cacb4939dc8257393/55e66c8248331eed198b4567/1603cb02-e3ba-46de-9c28-dc11f0aebb45.jpg",
        "https://im.vsco.co/1/52cacb4939dc8257393/55e51b796d331e7f748b456f/62af1ee2-31f8-4604-a359-7fa3041fe0be.jpg",
        "https://im.vsco.co/1/52cacb4939dc8257393/552278c0295615386b8b456b/42e1ba9a-4521-4172-88f6-aca10bded99d.jpg",
        "https://im.vsco.co/1/52cacb4939dc8257393/5521bc00e75515c54e8b4589/86f05de0-3dd6-4bd8-a190-90fc18af6e5f.jpg",
        "https://im.vsco.co/1/52cacb4939dc8257393/54fe15b0255615221d8b456b/a789312f-db4d-4f06-b85c-11cd9cffabe7.jpg",
      ];

      var bgImg = bgImgs[Math.floor(Math.random()*bgImgs.length)];

      $("body").css({
        "background" : "url(" + bgImg + ")  no-repeat center center fixed",
        'background-size': 'cover'
      });

    </script>

    <div id="formDiv">
      <img class="vscologo" src="http://assets.vsco.co/assets/images/assets/Grid_black_48.png" alt="VSCO Grid" />
      <form action="display.php" method="post">
        <input class="inputTxt" type="text" name="url" onClick="this.select();" placeholder="VSCO Grid page URL + ENTER"><br>
      </form>
    </div>

    <div id="credits">
      Photo by <a href="http://jonathanlurie.fr" >Jonathan Lurie</a> - Fork <i>C'MON VSCO</i> on <a href="">Github</a>
    </div>

  </body>
</html>
