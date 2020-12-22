<html>
<head>
<title>Your Website Title</title>
<!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
<script type="text/javascript" src="dist\js\html2canvas.min.js"></script>


</head>
<body>



<script async src="https://static.addtoany.com/menu/page.js"></script>

<img src="https://static.addtoany.com/images/dracaena-cinnabari.jpg" height="291" width="440" alt="Dracaena cinnabari">
preview


<img id='im'>
<br><br><br>

<div id="prev"></div>

<button onclick="myFunction()">Try it</button>
<button onclick="myfunction2()">Try</button>
<button onclick="setval()">Download</button>
<a href="javascript:canvas.toDataURL('image/jpeg');" download="download" >Download as jpeg</a>


<!-- Load Facebook SDK for JavaScript -->
<div id="capture" style="padding: 10px; background: #f5da55">
    <h4 style="color: #000; ">Hello world!</h4></div>
    <script type="text/javascript">
	
function myFunction(){
  html2canvas(document.querySelector("#capture")).then(canvas => {
 	 canvas.setAttribute("id", "canv");
    document.getElementById('prev').innerHTML = "";
    document.getElementById('prev').style.width = "150px";
    document.getElementById('prev').style.height = "200px";
    document.getElementById('prev').appendChild(canvas);
 
    document.getElementById('capture').innerHTML = "";


});



}


function myfunction2(){

  var canvas = document.getElementById('canv');

canvas.toBlob(function(blob) {
  var newImg = document.createElement('img'),
      url = URL.createObjectURL(blob);

  newImg.onload = function() {
    // no longer need to read the blob so it's revoked
    URL.revokeObjectURL(url);
  };

  newImg.src = url;
  document.body.appendChild(newImg);
  value = newImg.src;
  alert(value);


  var a2a_config = a2a_config || {};
a2a_config.overlays = a2a_config.overlays || [];
a2a_config.overlays.push({
    services: ['pinterest', 'facebook', 'houzz', 'tumblr'],
    size: '50',
    style: 'horizontal',
    position: 'top center'
});

});	
}





var a2a_config = a2a_config || {};
a2a_config.overlays = a2a_config.overlays || [];
a2a_config.overlays.push({
    services: ['pinterest', 'facebook', 'houzz', 'tumblr'],
    size: '50',
    style: 'horizontal',
    position: 'top center'
});

</script>

 <form method="post">
  <input type="text" name="bolb" id="variable">
<input type="submit" name="button1"
                value="Button1"/ onclick="setval()"> 
</form>

<script type="text/javascript">
 function setval(){
    var canvas = document.getElementById("canv");
    var img    = canvas.toDataURL("image/png");
    document.write('<img src="'+img+'"/>');


 } 

</script>
</body>
</html>

