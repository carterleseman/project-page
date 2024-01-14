// for use on nav bar elements
function enableArticleDisplay(element) {
    var article = document.getElementById(element);
  
    if (article.style.display === "block") {
      article.style.display = "none";
    } else {
      article.style.display = "block";
    }
}

// for use on article elements
function disableArticleDisplay(button) {
  var article = button.closest('article');

  if (article) {
      if (article.style.display === "block" || article.style.display === "") {
          article.style.display = "none";
      } else {
          article.style.display = "block";
      }
  }
}