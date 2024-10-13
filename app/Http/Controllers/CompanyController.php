<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Interfaces\CompanyInterface;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $company;

    public function __construct(CompanyInterface $company) {
        $this->company = $company;
    }

    /**
     * Display a listing of the resource.
     */
    public function company()
    {
        $company = $this->company->get();
    }
}
