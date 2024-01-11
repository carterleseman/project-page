function hideNav() {
    var x = document.getElementById("links");
    var check = document.getElementById("check");
  
    if (x.style.display === "block") {
      x.style.display = "none";
      check.checked = false;
    } else {
      x.style.display = "block";
      check.checked = true;
    }
  }