<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Welcome extends Controller{
   public function index()
   {
      echo view("search");
   }
   public function register()
   {
      echo view("register");
   }
   public function login()
   {
      echo view("login");
   }
   public function home()
   {
      echo view("home");
   }
   public function recipesearch()
   {
      echo view("recipesearch");
   }
   public function about()
   {
      echo view("about");
   }
   public function foodtrivia()
   {
      echo view("foodtrivia");
   }
   public function nutritionalsearch()
   {
      echo view("nutritionalsearch");
   }
   public function unitconversion()
   {
      echo view("unitconversion");
   }
 

}