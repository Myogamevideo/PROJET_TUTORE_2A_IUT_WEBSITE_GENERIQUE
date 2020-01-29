function myFunction() {
  var x = document.getElementById("ajoutDiv");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
    x.style.flexDirection = "column";
    x.style.justifyContent  = "center";
    x.style.alignItems = "center";
  }
}