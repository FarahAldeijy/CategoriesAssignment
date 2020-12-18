function showCategory2(level1) {
  var xhttp;    
  if (level1 == "") {
    document.getElementById("level2").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("level2").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcategory2.php?q="+level1, true);
  xhttp.send();
}


function showCategory3(level2) {
  var xhttp;    
  if (level2 == "") {
    document.getElementById("level3").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("level3").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcategory3.php?q="+level2, true);
  xhttp.send();
}