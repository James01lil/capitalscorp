
  
async function fetchNews() {
  const response = await fetch('news-proxy.php'); // PHP script handles CORS
  const data = await response.json();

  const container = document.getElementById('news-container');
  container.innerHTML = ''; // Clear before adding
  data.articles.forEach(article => {
    const newsItem = `
      <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <img src="${article.urlToImage}" alt="news image" style="max-width:100%; height:auto;" />
        <h3>${article.title}</h3>
        <p>${article.description}</p>
        <a href="${article.url}" target="_blank">Read more</a>
      </div>
    `;
    container.innerHTML += newsItem;
  });
}

fetchNews();

