<html>
<head>
<title>Example of HTML Menu</title>
<style type="text/css" media="screen">
#horizontalmenu ul {
	padding: 1;
	margin: 1;
	list-style: none;
}
#horizontalmenu li {
	float: left;
	position: relative;
	padding-right: 100;
	display: block;
	border: 4px solid #CC55FF;
	border-style: inset;
}
#horizontalmenu li ul {
	display: none;
	position: absolute;
}
#horizontalmenu li:hover ul {
	display: block;
	background: red;
	height: auto;
	width: 8em;
}
#horizontalmenu li ul li {
	clear: both;
	border-style: none;
}
</style>
</head>
<body>
<div id="horizontalmenu">
  <ul>
    <li><a href="#">News</a>
      <ul>
        <li><a href="#">National</a></li>
        <li><a href="#">International</a></li>
        <li><a href="#">Sport</a></li>
        <li><a href="#">Hollybood</a></li>
      </ul>
    </li>
    <li> <a href="#">Technology</a>
      <ul>
        <li><a href="#">IT/Software</a></li>
        <li><a href="#">Hardware</a></li>
        <li><a href="#">Iphone</a></li>
        <li><a href="#">Neuro-Science</a></li>
      </ul>
    </li>
    <li> <a href="#">Sports</a>
      <ul>
        <li><a href="#">Cricket</a></li>
        <li><a href="#">Tenis</a></li>
        <li><a href="#">Badminton</a></li>
        <li><a href="#">Hockey</a></li>
      </ul>
    </li>
    <li> <a href="#">Country</a>
      <ul>
        <li><a href="#">India</a></li>
        <li><a href="#">America</a></li>
        <li><a href="#">France</a></li>
        <li><a href="#">Pakistaan</a></li>
      </ul>
    </li>
  </ul>
</div>
</body>
</html>
