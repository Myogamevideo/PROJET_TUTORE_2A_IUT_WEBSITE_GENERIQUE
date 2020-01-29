function myFunction() {
    var x = document.getElementById("ajoutDiv");
    if (x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
      x.style.flexDirection = "column";
    }
  }

  function listCom() {
    var x = document.getElementById("listCom");
    if (x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
      x.style.flexDirection = "column";
    }
  }
  