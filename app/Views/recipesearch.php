<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipe Search - Wazito Kitchen</title>
</head>
  <style>
   
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      text-align: center;
    }
    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      text-align: center;
    }
    nav ul li {
      display: inline;
      margin-right: 20px;
    }
    nav ul li a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    nav ul li a:hover {
      color: #ffd700;
    }
   
    .features{
       width: 50%;
       margin-left: 25;
       justify-content: centre;
     }
    
    .search-container {
      text-align: center;
      padding: 20px;
    }
    .search-container input[type=text] {
      width: 60%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
      transition: width 0.4s ease-in-out;
    }
    .search-container input[type=text]:focus {
      width: 80%;
    }
    .search-container button {
      padding: 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      background-color: #333;
      color: white;
      font-size: 16px;
      transition: background-color 0.4s ease-in-out;
    }
    .search-container button:hover {
      background-color: #555;
    }

    
    section {
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .recipe {
      margin: 20px;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      width: 300px;
      cursor: pointer;
      transition: transform 0.3s ease;
    }
    .recipe:hover {
      transform: translateY(-5px);
    }
    .recipe img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 15px;
    }
    .recipe p {
      color: #555;
    }
    .recipe .video-container {
      position: relative;
      width: 100%;
      padding-bottom: 56.25%;
      height: 0;
    }
    .recipe .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 8px;
    }
    .recipe h3 {
      color: #333;
    }
    .recipe ul {
      margin-top: 10px;
      padding-left: 20px;
    }
    .recipe ul li {
      color: #777;
    }

   
    .modal {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
    }
    .modal-content {
      background-color: #fefefe;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      border-radius: 10px;
    }
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

    
    @media (max-width: 768px) {
      .recipe {
        width: calc(50% - 40px);
      }
      .search-container input[type=text] {
        width: 80%;
      }
    }

    @media (max-width: 480px) {
      .recipe {
        width: calc(100% - 40px);
      }
      .search-container input[type=text] {
        width: 100%;
      }
    }
  </style>
<body>
<header>
    <h1>Wazito Kitchen</h1>
    <nav>
      <ul>
        <li><a href="home">Home</a></li>
        <li><a href="recipesearch">Recipe Search</a></li>
        <li><a href="nutritionalsearch">Search Recipes by Nutritional Info</a></li>
        <li><a href="foodtrivia">Food Trivia</a></li>
        <li><a href="unitconversion">Unit Conversion</a></li>
        <li><a href="about">About Us</a></li>
        <li><a href="logout">Logout</a></li>
      </ul>
    </nav>
  </header>

  <section id="content">
    
    <div class="search-container">
      <input type="text" id="recipeSearchInput" placeholder="Search for recipes...">
      <button onclick="searchRecipes()">Search</button>
    </div>
  </section>

 
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div id="modalContent"></div>
    </div>
  </div>
  <script>

    document.getElementById('recipeSearch').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('content').innerHTML = `
        <div class="search-container">
          <input type="text" id="recipeSearchInput" placeholder="Search for recipes...">
          <button onclick="searchRecipes()">Search</button>
        </div>
      `;
    });

    function searchRecipes() {
      const query = document.getElementById('recipeSearchInput').value;
      fetch(`https://api.spoonacular.com/recipes/complexSearch?query=${query}&apiKey=f7da9345087242f2980c0e0bec71c97f`)
        .then(response => response.json())
        .then(data => {
          const recipes = data.results;
          let html = '';
          recipes.forEach(recipe => {
            fetch(`https://api.spoonacular.com/recipes/${recipe.id}/information?apiKey=f7da9345087242f2980c0e0bec71c97f`)
              .then(response => response.json())
              .then(detailedData => {
                const detailedRecipe = detailedData;
                html += `
                  <div class="recipe" onclick="showRecipeDetails(${recipe.id})">
                    <h3>${detailedRecipe.title}</h3>
                    <img src="${detailedRecipe.image}" alt="${detailedRecipe.title}">
                    <p>${detailedRecipe.summary}</p>
                    ${recipe.hasOwnProperty('video') && recipe.video ?
                      `<div class="video-container">
                        <iframe src="${recipe.video}" frameborder="0" allowfullscreen></iframe>
                      </div>` :
                      `<p>Video not available</p>`
                    }
                  </div>`;
                document.getElementById('content').innerHTML = html;
              })
              .catch(error => console.log('Error:', error));
          });
        })
        .catch(error => console.log('Error:', error));
    }

    function showRecipeDetails(recipeId) {
      fetch(`https://api.spoonacular.com/recipes/${recipeId}/information?apiKey=f7da9345087242f2980c0e0bec71c97f`)
        .then(response => response.json())
        .then(data => {
          const detailedRecipe = data;
          let html = `
            <h2>${detailedRecipe.title}</h2>
            <img src="${detailedRecipe.image}" alt="${detailedRecipe.title}" style="max-width: 100%;">
            <p>${detailedRecipe.summary}</p>
            <h3>Ingredients:</h3>
            <ul>
              ${detailedRecipe.extendedIngredients.map(ingredient => `<li>${ingredient.original}</li>`).join('')}
            </ul>
            <h3>Instructions:</h3>
            <p>${detailedRecipe.instructions}</p>
          `;
          document.getElementById('content').innerHTML = html;
        })
        .catch(error => console.log('Error:', error));
    }

    function closeModal() {
      document.getElementById('myModal').style.display = 'none';
    }
  </script>
</body>
</html>
