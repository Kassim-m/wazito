<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spoonacular Kitchen</title>
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
</head>
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
   
   <h1 style="text-align: centre;">Features:</h1>
   <ul>
   <li>Search recipe by name or ingredient.</li>
   <li>Search recipe by nutritional information.</li>
   <li>Cooking unit conversion.</li>
   <li>Get recipe details.</li>
   <li>Get cooking instructions.</li>
   <li>Get food fun facts and trivia.</li>
   </ul>
  </section>
 
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div id="modalContent"></div>
    </div>
  </div>
</body>
</html>
