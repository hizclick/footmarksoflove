<html> 
  
<head> 
    <title></title> 
    <link rel="stylesheet" href= 
"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> 
    </script> 
    <script src= 
"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> 
    </script> 
    <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"> 
    </script> 
    <style> 
        .top { 
            margin-top: 20px; 
        } 
          
        h1 { 
            color: green; 
        } 
          
        input { 
            background-color: transparent; 
            border: 0px solid; 
            width: 300; 
        } 
          
        body { 
            text-align: center; 
        } 
    </style> 
</head> 
  
<body> 
  
    <div class="col-md-offset-4 col-md-4 col--md-offset-4 top"> 
        <div id="createImg" style="border:1px solid;"> 
            <h1>GeeksforGeeks</h1> 
            <h4>How to save an HTML5 Canvas as an  
                           image on a server?</h4> 
            <input type="text" value=""
    placeholder="Enter wahtaever you want" class="form-control" /> 
            <br/> 
        </div> 
        <button id="geeks" type="button" 
                                      class="btn btn-primary top"> 
            Create Image</button> 
        <div id="img" style="display:none;"> 
            <img src="" id="newimg" class="top" /> 
        </div> 
    </div> 
    <script> 
        $(function() { 
            $("#geeks").click(function() { 
                html2canvas($("#createImg"), { 
                    onrendered: function(canvas) { 
                        var imgsrc = canvas.toDataURL("image/jpg"); 

                        var dataURL = canvas.toDataURL(); 
                        $.ajax({ 
                            type: "POST", 
                            url: "script.php", 
                            data: { 
                                imgBase64: dataURL 
                            },
                            success: function(data) {
                                            yes(data);
                             } 
                        }).done(function(o) { 
                            console.log('saved'); 
                        }); 
                    } 
                }); 
            }); 
       


       }); 
    </script> 
<script type="text/javascript">
    
    function yes(data){
         var x = document.createElement("IMG");
         x.setAttribute("src", data);
        document.body.appendChild(x);


var a2a_config = a2a_config || {};
a2a_config.overlays = a2a_config.overlays || [];
a2a_config.overlays.push({
    services: ['pinterest', 'facebook', 'houzz', 'tumblr'],
    size: '50',
    style: 'horizontal',
    position: 'top center'
});

    }
</script>

<script>
var a2a_config = a2a_config || {};
a2a_config.overlays = a2a_config.overlays || [];
a2a_config.overlays.push({
    services: ['pinterest', 'facebook', 'houzz', 'tumblr'],
    size: '50',
    style: 'horizontal',
    position: 'top center'
});
</script>

<script async src="https://static.addtoany.com/menu/page.js"></script>

<img style = "margin-top: 25%" src="images/5fdc9fdc42dbf.jpg" height="291" width="440" alt="Dracaena cinnabari">


</html> 


