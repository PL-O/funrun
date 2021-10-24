<?php namespace App\Controllers;

use CodeIgniter\Controller;

class user extends Controller {
    public function index() {
        echo view('user');
    }
}