<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCompany;
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
        $companies = $this->repository->latest()->paginate();

        return view('admin.pages.companies.index', [
            'companies' => $companies,
        ]);
    }

    public function create()
    {
        return view('admin.pages.companies.create');
    }

    public function store(StoreUpdateCompany $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('companies.index');
    }

    public function show($url_company)
    {
        $company = $this->repository->where('url_company', $url_company)->first();

        if (!$company) {
            return redirect()->back();
        }

        return view('admin.pages.companies.show', [
            'company' => $company
        ]);
    }

    public function destroy($url_company)
    {
        $company = $this->repository->where('url_company', $url_company)->first();

        if (!$company) {
            return redirect()->back();
        }

        $company->delete();

        return redirect()->route('companies.index');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');
        $companies = $this->repository->search($request->filter);

        return view('admin.pages.companies.index', [
            'companies' => $companies,
            'filters'   => $filters,
        ]);
    }

    public function edit($url_company)
    {
        $company = $this->repository->where('url_company', $url_company)->first();

        if (!$company) {
            return redirect()->back();
        }

        return view('admin.pages.companies.edit', [
            'company' => $company
        ]);
    }

    public function update(StoreUpdateCompany $request, $url_company)
    {
        $company = $this->repository->where('url_company', $url_company)->first();

        if (!$company) {
            return redirect()->back();
        }

        $company->update($request->all());

        return redirect()->route('companies.index');
    }

}
