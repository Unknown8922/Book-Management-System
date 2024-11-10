<?php include("header.php");?>


<script>
function showUser(spid) {
    if (spid == "") {
        document.getElementById("txtwsdl").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            reqst = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            reqst = new ActiveXObject("Microsoft.XMLHTTP");
        }

        reqst.open("GET","ajaxdb.php?q="+spid,true);
        reqst.send();
        reqst.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtwsdl").innerHTML = this.responseText;
            }
        };

    }
}
</script>


<form>
<div>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select Supplier:</option>
  <option value="1">Banbury</option>
  <option value="2">Cerebro</option>

  </select>
</div>
</form>
<br>
<div id="txtwsdl"><b>Info will be listed here...</b></div>

<?php include("footer.php");?>
