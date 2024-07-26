<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food Trivia - Wazito Kitchen</title>
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

    .trivia-container {
      text-align: center;
      padding: 20px;
    }
    .trivia-container p {
      font-size: 18px;
      color: #555;
      margin-bottom: 20px;
    }
    .button-container {
      text-align: center;
    }
    .button-container button {
      padding: 12px 24px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      background-color: #333;
      color: white;
      font-size: 16px;
      transition: background-color 0.4s ease-in-out;
      margin: 0 10px;
    }
    .button-container button:hover {
      background-color: #555;
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

    <div class="trivia-container">
      <p></p>
      <div class="button-container">
        <button onclick="getPreviousTrivia()">Previous Fact</button>
        <button onclick="getNextTrivia()">Next Fact</button>
      </div>
    </div>
  </section>
  <script>
    function closeModal() {
      document.getElementById('myModal').style.display = 'none';
    }


    let triviaIndex = 0; // Track trivia index
    let triviaFacts = []; // Array to store trivia facts

    document.getElementById('foodTrivia').addEventListener('click', function(event) {
      event.preventDefault();
      fetch("https://api.spoonacular.com/food/trivia/random?apiKey=f7da9345087242f2980c0e0bec71c97f")
        .then(response => response.json())
        .then(data => {
          triviaFacts.push(data.text); 
          triviaIndex = triviaFacts.length - 1; 
          displayTrivia(triviaIndex); 
        })
        .catch(error => console.log('Error:', error));
    });

    function displayTrivia(index) {
      document.getElementById('content').innerHTML = `
        <div class="trivia-container">
          <p>${triviaFacts[index]}</p>
          <div class="button-container">
            <button onclick="getPreviousTrivia()">Previous Fact</button>
            <button onclick="getNextTrivia()">Next Fact</button>
          </div>
        </div>
      `;
    }

    function getPreviousTrivia() {
      if (triviaIndex > 0) {
        triviaIndex--;
        displayTrivia(triviaIndex);
      }
    }

    function getNextTrivia() {
      if (triviaIndex < triviaFacts.length - 1) {
        triviaIndex++;
        displayTrivia(triviaIndex);
      } else {
        fetch("https://api.spoonacular.com/food/trivia/random?apiKey=f7da9345087242f2980c0e0bec71c97f")
          .then(response => response.json())
          .then(data => {
            triviaFacts.push(data.text); 
            triviaIndex = triviaFacts.length - 1; 
            displayTrivia(triviaIndex); 
          })
          .catch(error => console.log('Error:', error));
      }
    }

  </script>
</body>
</html>
