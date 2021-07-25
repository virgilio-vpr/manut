<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $repository;

    public function __construct(Company $company)
    {
        $this->repository = $company;
    }

    public function index()
    {
        $companies = $this->repository->all();

        return view('admin.pages.companies.index', [
            'companies' => $companies,
        ]);
    }
}
