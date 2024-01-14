function clearArticles() {
    // Get all articles on the page
    var articles = document.querySelectorAll('.main-content article');

    // Hide each article
    articles.forEach(function(article) {
        article.style.display = 'none';
    });
}