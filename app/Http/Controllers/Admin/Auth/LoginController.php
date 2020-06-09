<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $redirectTo = '/painel';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        echo "TELA DE LOGIN";
    }
}
