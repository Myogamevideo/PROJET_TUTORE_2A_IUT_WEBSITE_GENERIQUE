function apparaitreArticle() {
    var x = document.getElementById("articleAModifier");
    if (x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
      x.style.flexDirection = "column";
      x.style.justifyContent  = "center";
      x.style.alignItems = "center";
    }
  }


  function apparaitreArticleSupprision() {
    var x = document.getElementById("articleASupprimer");
    if (x.style.display === "flex") {
      x.style.display = "none";
    } else {
      x.style.display = "flex";
      x.style.flexDirection = "column";
      x.style.justifyContent  = "center";
      x.style.alignItems = "center";
    }
  }