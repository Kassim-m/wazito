<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function processregistration()
    {
        // Get form data
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Load the UserModel
        $userModel = new UserModel();

        // Check if username already exists
        $existingUser = $userModel->where('username', $username)->first();
        if ($existingUser) {
            // Username already exists, return an error
            return view('register', ['error' => 'Username already taken!']);
        }

        // Prepare data array
        $data = [
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];

        // Insert user data into database
        $userId = $userModel->insertUser($data);

        // Redirect to login page or show success message
        return view('login', ['message' => 'Registration successful. Login Here.']);
    }

    // Other controller methods...
    public function processlogin()
    {
        // Get form data
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Verify user credentials
        $userModel = new UserModel();
        if ($userModel->verifyCredentials($username, $password)) {
            // Store user data in session
            $user = $userModel->where('username', $username)->first();
            $session = session();
            $session->set('isLoggedIn', true);
            $session->set('username', $username);

            // Redirect to dashboard or some other page
            return view('home');
        } else {
            // Display error message or redirect to login page
            return view('login', ['error' => 'Invalid credentials!']);
        }
    }

    public function logout()
    {
        // Destroy session
        $session = session();
        $session->destroy();

        // Redirect to login page or some other page
        return view('login');
    }
}

