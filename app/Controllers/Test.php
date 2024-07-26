<?php

namespace App\Controllers;
use CodeIgniter\Controller;


class Test extends Controller{
   public function test()
   {
    echo view("home");
   }
   public function home()
   {
    echo view("home");
   }
   public function about()
   {
    echo view("about");
   }
   public function registration()
   {
    echo view("registration");
   }
   public function login()
   {
    echo view("login");
   }
   public function comedymovies()
   {
    echo view("comedymovies");
   }
   public function comedytvshows()
   {
    echo view("comedytvshows");
   }
   public function popularmovies()
   {
    echo view("popularmovies");
   }
   public function populartvshows()
   {
    echo view("populartvshows");
   }
   public function search()
   {
    echo view("search");
   }
   public function topratedmovies()
   {
    echo view("topratedmovies");
   }
   public function topratedtvshows()
   {
    echo view("topratedtvshows");
   }
}