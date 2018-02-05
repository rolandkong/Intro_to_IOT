if (isset($_POST['set_default'])) {
  $color_data->insert($_POST['color']);
}
/* BEGIN LED CODE */
/******************************************************** 
* Use the LED schematic in Challenge 2, LED Circuit
* to complete these constructor lines. ********************************************************/
$red = new GPIO(22, "out",4); 
$green = new GPIO(27, "out",3); 
$blue = new GPIO(17, "out",1); 
$colorArray = $color.str_split();
/********************************************************* 
* Our colors are in hexadecimal - that is, come in the
* form #------ where each dash is a character in the set 
* {0 1 2 3 4 5 6 7 8 9 a b c d e f}, which is the number 
* system in base 16. The RGB LED accepts values 0-255 for 
* each of the three colors. Conveniently, 255 is the
* largest decimal value of two hexademical digits. That
* is, #FF = (15 * 16^1) + (15 * 16^0) = 255. Thus, in a
* hex color such as #BAD94D, the red PWM value is
* respresented by #BA, green by #D9, and blue by #4D.
* The str_split() function above turns our color string
* into an array of characters (e.g. [B, A, D, 9, 4, D])
* and we pwm_write() red with the decimal value of #BA in 
* the line below. Follow this reasoning to complete the
* pwm_write()inputs for green and blue. ********************************************************/

$red->pwm_write(hexdec($colorArray[0].$colorArray[1]));
$green->pwm_write(hexdec($colorArray[2].$colorArray[3]));
$blue->pwm_write(hexdec($colorArray[4].$colorArray[5]));
/* END LED CODE */

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <script src="jscolor.js"></script>
</head>
<body>

<?php
  include "GPIO.php";
  include "header.php";

  $color = "EFFFC9";
  if (isset($_POST['set_color'])) {
    $color = $_POST['color'];
  }
?>

<!-- JSCOLOR PICKER -->
<input type="button" class="jscolor" id="picker" onchange="update(this.jscolor)" onfocusout="apply()" value=<?php echo "'" . $color . "'"; ?>>

<!-- FORM -->
<form method="POST">
	<input type="text" id="color" name="color">
  <input type="submit" id="smt" name="set_color" hidden>
	<input type="submit" value="Set as Default" id="set_default">
</form>

<!-- CHARTs -->
<div id="charts-container">
	<canvas id="temp-chart" class="chart" height="350" width="550"></canvas>
	<canvas id="sound-chart" class="chart" height="350" width="550"></canvas>
</div>

<!-- ABOUT-->
<div id="about">
<h1> About </h1>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sollicitudin sem ligula, eget euismod ante laoreet at. In sit amet leo eget ipsum placerat convallis at non eros. Vestibulum libero erat, efficitur a felis nec, tincidunt sodales justo. Nulla hendrerit lobortis erat nec iaculis. Maecenas enim lacus, finibus at nibh ac, rutrum lobortis velit. In nec sapien ex. Duis vel porta lorem, ut consequat diam. Cras rutrum feugiat dolor, lobortis sagittis mauris tincidunt sit amet. Duis ornare porta fermentum. Nulla at diam neque. Etiam at odio ut justo scelerisque elementum lacinia sed eros. Pellentesque malesuada, ligula vel mollis condimentum, ex libero dictum nisi, eget mollis massa augue et nulla. Maecenas dapibus metus ante, eu interdum diam imperdiet et. Proin imperdiet posuere arcu ac cursus.</p>

<p>Aenean varius ante vel risus tristique, et egestas ligula ornare. Donec rhoncus sit amet erat et fringilla. Morbi malesuada enim et tempor pellentesque. Quisque commodo ante id velit euismod, quis porttitor metus pulvinar. Etiam non tellus nec justo egestas interdum. Nam in laoreet mauris. Duis vulputate risus in nibh tempus congue. Nam gravida elit at vestibulum aliquam. Nullam ac arcu mollis, dignissim libero sagittis, tempor dolor. Integer sed enim dignissim, venenatis massa vel, pulvinar lectus. Pellentesque lacus nisi, condimentum ut turpis eu, posuere aliquet diam. Nam neque purus, accumsan at libero vel, tempor euismod eros. Praesent rhoncus condimentum massa sed pretium. Vivamus ac ex sed magna ornare cursus sed eu lectus.</p>

<p>In est massa, posuere id velit blandit, blandit bibendum lectus. Vestibulum vel nibh tincidunt, vestibulum lacus eget, posuere lorem. Duis egestas, ex eget porttitor sagittis, urna ligula varius metus, sit amet cursus eros diam fermentum felis. Sed nunc ligula, lacinia quis felis et, varius efficitur dolor. Aenean imperdiet enim quis dui tincidunt egestas volutpat quis urna. Aliquam tempus consequat massa nec eleifend. Ut id congue tortor, vel consectetur felis.</p>

<p>Sed rhoncus nulla nec eros sollicitudin, at pulvinar elit faucibus. Nam sem velit, mollis a sollicitudin quis, ultrices vel lectus. Pellentesque in vulputate ante. In euismod erat et urna scelerisque, vel convallis augue malesuada. Phasellus mollis ex ac consectetur posuere. Aenean accumsan pellentesque libero vel consectetur. Sed ullamcorper, purus eu mattis finibus, ligula neque pellentesque ante, sit amet luctus sapien ipsum ut leo. Aliquam vitae odio a elit bibendum convallis sit amet id felis. Aliquam erat volutpat. Donec bibendum congue volutpat.</p>

<p>Ut pulvinar augue eu viverra condimentum. Cras sed pellentesque ex, vel malesuada nisl. Sed eu hendrerit dui, et luctus odio. Suspendisse a viverra nisl, id blandit metus. Vestibulum viverra iaculis leo sed rhoncus. Quisque ut viverra ipsum. Nullam ultricies quis leo sit amet efficitur. Sed nec mauris pellentesque, fringilla massa eu, laoreet ligula. Sed ut fringilla nibh, in euismod eros.</p>

</div>

<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>
