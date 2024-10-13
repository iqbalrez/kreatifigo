<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interfaces\CompanyInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $company;

    public function __construct(CompanyInterface $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        return view('user.home.index', [
            'company' => $this->company->get()
        ]);
    }   
}
