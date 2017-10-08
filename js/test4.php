<script type="text/javascript">
	
winRef="";
function openwin(){
winRef = window.open("test4.php", "wind", "width=600,height=400,scrollbars=yes left=200 >top=150");
}


<iframe src="http://a.JavaScript.info/files/tutorial/window/receive.html" id="iframe" style="height:60px"></iframe>
02
 
03
<form name="form">
04
  <input type="text" name="msg" value="Your message"/>
05
  <input type="submit"/>
06
</form>
07
 
08
<script>
09
 
10
  var win = document.getElementById("iframe").contentWindow
11
 
12
  document.forms.form.onsubmit = function() {
13
    win.postMessage(
14
      this.elements.msg.value,
15
      "http://a.JavaScript.info"
16
    )
17
    return false
18
  }


</script>



