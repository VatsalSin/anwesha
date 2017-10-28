<?php
        require_once 'vendor/autoload.php';
   // require_once 'library/facebook.php';
    //try{
$fbAlbums = array(
	1506508526048454
);
$images = array();
$fb = new \Facebook\Facebook([
        'app_id' => $fbAppID,
        'app_secret' => $fbAppSecret,
          'default_graph_version' => 'v2.10',
]);
foreach ($fbAlbums as $fbAlbum) {
	$GraphResponse = $fb->get("/$fbAlbum/photos?fields=images","$fbAppID|$fbAppSecret");
	$graphEdge = $GraphResponse->getGraphEdge();
	//$photos2 = $photos->getField('images');
	foreach($graphEdge as $graphNode){
	//var_dump($photo->getField('images'))
		foreach($graphNode->getField('images') as $photo){
		        $images[] = $photo->getField('source');
		}
	}
}
?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flipster Demo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=550, initial-scale=1">

    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="../dist/jquery.flipster.min.css">

    <script src="jquery.min.js"></script>
    <script src="../dist/jquery.flipster.min.js"></script>
</head>
<body>
<header class="main-header">
    <h1>jQuery Flipster</h1>
    <iframe src="https://ghbtns.com/github-btn.html?user=drien&repo=jquery-flipster&type=star&count=true" frameborder="0" scrolling="0" width="90px" height="20px"></iframe>
    <a href="http://libscore.com/#$.fn.flipster" target="_blank"><img src="http://api.libscore.com/badge/$.fn.flipster.svg"></a>

    <nav class="main-header__nav" role="navigation">
        <a href="#demo-default">Default Settings (Coverflow)</a>
        <a href="#demo-carousel">Carousel</a>
        <a href="#demo-wheel">Wheel</a>
        <a href="#demo-flat">Flat</a>
    </nav>
</header>

<article id="intro" class="intro">
    <p>jQuery Flipster is a CSS3 3D transform-based jQuery plugin built to replicate the familiar 'cover flow' effect, but also supports a variety of styles. Not only is it gorgeous to look at, Flipster is also:</p>

    <ul>
        <li><strong>Responsive</strong> Automatically centers and scales to fit the area provided.</li>
        <li><strong>Touch Friendly</strong> Swipe between items on touch devices without interrupting scroll.</li>
        <li><strong>Lightweight</strong> Javascript and CSS combined are only 5kb gzipped (13kb without gzip). Only dependency is jQuery.</li>
        <li><strong>Customizable</strong> Four built in styles (coverflow, carousel, wheel and flat) with plenty of options to configure Flipster the way you want</li>
    </ul>

    <p>But don't take our word for it. Check out the demos below, or <a href="https://github.com/drien/jquery-flipster">download from GitHub</a> to try it yourself.</p>
</article>

<article id="demo-default" class="demo">

    <h2>Default Settings (Coverflow)</h2>

    <div id="coverflow">
        <ul class="flip-items">
            <li data-flip-title="Red">
                <img src="img/text1.gif">
            </li>
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="img/text2.gif">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                <img src="img/text3.gif">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="img/text4.gif">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img/text5.gif">
            </li>
            <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                <img src="img/text6.gif">
            </li>
            <li data-flip-title="Cyan" data-flip-category="Blues">
                <img src="img/text7.gif">
            </li>
            <li data-flip-title="Robin's Egg" data-flip-category="Blues">
                <img src="img/text8.gif">
            </li>
            <li data-flip-title="Deep Sea" data-flip-category="Greens">
                <img src="img/text9.gif">
            </li>
            <li data-flip-title="Apple" data-flip-category="Greens">
                <img src="img/text10.gif">
            </li>
        </ul>
    </div>

<script>
    var coverflow = $("#coverflow").flipster();
</script>

<pre class="code">$("#coverflow").flipster();</pre>

</article>

<article id="demo-carousel" class="demo">

    <h2>Flipster Carousel</h2>

    <div id="carousel">
        <ul class="flip-items">
            <li data-flip-title="Red">
                <img src="img/text1.gif">
            </li>
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="img/text2.gif">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                <img src="img/text3.gif">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="img/text4.gif">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img/text5.gif">
            </li>
            <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                <img src="img/text6.gif">
            </li>
            <li data-flip-title="Cyan" data-flip-category="Blues">
                <img src="img/text7.gif">
            </li>
            <li data-flip-title="Robin's Egg" data-flip-category="Blues">
                <img src="img/text8.gif">
            </li>
            <li data-flip-title="Deep Sea" data-flip-category="Greens">
                <img src="img/text9.gif">
            </li>
            <li data-flip-title="Apple" data-flip-category="Greens">
                <img src="img/text10.gif">
            </li>
            <li data-flip-title="Pistachio" data-flip-category="Greens">
                <img src="img/text11.gif">
            </li>
            <li data-flip-title="Pear" data-flip-category="Greens">
                <img src="img/text12.gif">
            </li>
            <li data-flip-title="Bright Sun" data-flip-category="Yellows">
                <img src="img/text13.gif">
            </li>
            <li data-flip-title="Mikado" data-flip-category="Yellows">
                <img src="img/text14.gif">
            </li>
        </ul>
    </div>

<script>
    var carousel = $("#carousel").flipster({
        style: 'carousel',
        spacing: -0.5,
        nav: true,
        buttons:   true,
    });
</script>

<pre class="code">$("#carousel").flipster({
    style: 'carousel',
    spacing: -0.5,
    nav: true,
    buttons: true,
});</pre>

</article>


<article id="demo-wheel" class="demo">

    <h2>Flipster Wheel</h2>

    <div id="wheel">
        <ul>
            <li data-flip-title="Red">
                <img src="img/text1.gif">
            </li>
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="img/text2.gif">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                <img src="img/text3.gif">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="img/text4.gif">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img/text5.gif">
            </li>
            <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                <img src="img/text6.gif">
            </li>
            <li data-flip-title="Cyan" data-flip-category="Blues">
                <img src="img/text7.gif">
            </li>
            <li data-flip-title="Robin's Egg" data-flip-category="Blues">
                <img src="img/text8.gif">
            </li>
            <li data-flip-title="Deep Sea" data-flip-category="Greens">
                <img src="img/text9.gif">
            </li>
            <li data-flip-title="Apple" data-flip-category="Greens">
                <img src="img/text10.gif">
            </li>
            <li data-flip-title="Pistachio" data-flip-category="Greens">
                <img src="img/text11.gif">
            </li>
            <li data-flip-title="Pear" data-flip-category="Greens">
                <img src="img/text12.gif">
            </li>
            <li data-flip-title="Bright Sun" data-flip-category="Yellows">
                <img src="img/text13.gif">
            </li>
            <li data-flip-title="Mikado" data-flip-category="Yellows">
                <img src="img/text14.gif">
            </li>
        </ul>
    </div>

<script>
    var wheel = $("#wheel").flipster({
        style: 'wheel',
        spacing: 0
    });
</script>

<pre class="code">$("#wheel").flipster({
    style: 'wheel',
    spacing: 0
});</pre>
</article>


<article id="demo-flat" class="demo">

    <h2>Flipster Flat</h2>

    <div id="flat">
        <ul>
            <li data-flip-title="Red">
                <img src="img/text1.gif">
            </li>
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="img/text2.gif">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                <img src="img/text3.gif">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="img/text4.gif">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img/text5.gif">
            </li>
            <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                <img src="img/text6.gif">
            </li>
            <li data-flip-title="Cyan" data-flip-category="Blues">
                <img src="img/text7.gif">
            </li>
            <li data-flip-title="Robin's Egg" data-flip-category="Blues">
                <img src="img/text8.gif">
            </li>
            <li data-flip-title="Deep Sea" data-flip-category="Greens">
                <img src="img/text9.gif">
            </li>
            <li data-flip-title="Apple" data-flip-category="Greens">
                <img src="img/text10.gif">
            </li>
        </ul>
    </div>

<script>
    var flat = $("#flat").flipster({
        style: 'flat',
        spacing: -0.25
    });
</script>

<pre class="code">$("#flat").flipster({
    style: 'flat',
    spacing: -0.25
});</pre>

</article>



</body>
</html>
