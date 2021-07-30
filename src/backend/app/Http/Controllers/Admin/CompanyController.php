<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function store(Request $request)
    {
        $data = $request->all();
        $data['url_company'] = Str::kebab($request->name_company);
        $this->repository->create($data);
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

}
