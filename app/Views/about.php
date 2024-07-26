<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Hotel - Wazito Kitchen</title>
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

    .conversion-container {
      text-align: center;
      padding: 20px;
    }
    .conversion-container input[type=text] {
      width: 50px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    .conversion-container select {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    .conversion-container button {
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      background-color: #333;
      color: white;
      font-size: 16px;
      transition: background-color 0.4s ease-in-out;
    }
    .conversion-container button:hover {
      background-color: #555;
    }
    .conversion-result {
      margin-top: 20px;
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
    
    <div>
      <h2>Wazito Kitchen</h2>
      <p>Welcome to Wazito Kitchen where luxury meets comfort and every moment is an unforgettable experience.</p>
      <p>Located in the heart of Machakos city, our hotel offers luxurious accommodations and unparalleled service. With breathtaking views and world-class amenities, your stay with us will be nothing short of extraordinary.</p>
      <p>Experience the finest dining options curated by our award-winning chefs, indulge in rejuvenating spa treatments, or simply relax by our rooftop pool with a refreshing cocktail in hand.</p>
      <p>Beyond our doors, discover a wealth of attractions and activities waiting to be explored.</p>          
      <p>Our hotel is the perfect destination for an unforgettable experience.</p>
    </div>
  </section>
</body>
</html>
