<html>
<body>
<div class="hover">hover
    <div class="tooltip">asdadasd
    </div>
</div>

<?php
$to = "r.bansal@neu.edu";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?> 

</body>
<style>
.hover {
    position:relative;
   
}

.tooltip { /* hide and position tooltip */
  top:+20px;
  background-color:black;
  color:white;
  border-radius:5px;
  opacity:0;
  position:absolute;
  -webkit-transition: opacity 0.5s;
  -moz-transition: opacity 0.5s;
  -ms-transition: opacity 0.5s;
  -o-transition: opacity 0.5s;
  transition: opacity 0.5s;
}

.hover:hover .tooltip { /* display tooltip on hover */
    opacity:1;
}
</style>
</html>