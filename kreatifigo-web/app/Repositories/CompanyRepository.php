<?php

namespace App\Repositories;

use App\Interfaces\CompanyInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Company;

class CompanyRepository implements CompanyInterface
{
    private $company;
    public function __construct(Company $company) {
        $this->company = $company;
    }
    public function get(){
        return $this->company->first();
    }
    public function store($data)
    {
        DB::beginTransaction();
        try{
            $this->company->create($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    public function update($data)
    {
        $company = $this->company->first();

        DB::beginTransaction();
        try{
            $company->update($data);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}