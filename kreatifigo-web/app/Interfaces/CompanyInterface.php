<?php

namespace App\Interfaces;

interface CompanyInterface
{
    public function get();
    public function store($data);
    public function update($data);
}