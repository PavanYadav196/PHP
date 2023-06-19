function text(x) {
  if (x == 0) {
    document.getElementById("code").style.display = "none";
    document.getElementById("code1").style.display = "block";
  } else if (x == 1) {
    document.getElementById("code1").style.display = "none";
    document.getElementById("code").style.display = "block";
  }
  else {
    document.getElementById("code1").style.display = "none";
  }
}
