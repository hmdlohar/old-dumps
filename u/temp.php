<?php
//file_put_contents("Tmpfile.zip", fopen("http://emwpa.ml/u/hmdsuseragent.xpi", 'r'));


 // create curl resource 
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, "http://localhost/u/simple.php"); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$output = curl_exec($ch); 		
		$op=htmlspecialchars($output);

//echo '<div id="results" style="background-color:pink;height:200px;width:800px;position:absolate;float:right;margin-bottom:20;"></div>';
echo $output;
        curl_close($ch);  

    $html = '<html> <title>first html page</title> </html> <body> <h1>first head</h1> <p> the first para graph</p> <img src="http://localhost/wordpress/wp-content/uploads/2015/09/f4-680x510.jpg"> </body>';
    $html=$output;
$needle = "<img";
$lastPos = 0;
$positions = array();

while (($lastPos = strpos($html, $needle, $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen($needle);
}
print_r($positions);
function html_to_obj($html) {
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    return element_to_obj($dom->documentElement);
}

function element_to_obj($element) {
    $obj = array( "tag" => $element->tagName );
    foreach ($element->attributes as $attribute) {
        $obj[$attribute->name] = $attribute->value;
    }
    foreach ($element->childNodes as $subElement) {
        if ($subElement->nodeType == XML_TEXT_NODE) {
            $obj["html"] = $subElement->wholeText;
        }
        else {
            $obj["children"][] = element_to_obj($subElement);
        }
    }
    return $obj;
}
echo "<hr>";
$js=json_encode(html_to_obj($html), JSON_PRETTY_PRINT);
$jb=json_decode($js,true);
print_r($jb['children']);
?>

<script>
ss="";
img=document.getElementsByTagName("img");
results=document.getElementById("results");
function result_add(str){
	results.innerHTML+=str;
}




function ajax(){
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   document.getElementById('result').innerHTML=data;
    }
  }
xmlhttp.open("GET","result.php?all_same=do",true);
xmlhttp.send();
}
</script>