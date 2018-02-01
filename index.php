<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<?php
  include "header.php";
?>

<!-- JSCOLOR PICKER -->
<input type="button" class="jscolor" id="picker" value="EFFFC9">

<!-- FORM -->
<form>
	<input type="text" id="color">
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

<script type="text/javascript" src="index.js"></script>
</body>
</html>
