<?php

namespace App\Imports;

use App\Models\FAQ;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImportClass implements ToModel
{
    /**
     * @param Collection $collection
     */


    public function model(array $row)
    {
        return new FAQ([
            'question' => $row[0],
            'answer' => $row[1],
        ]);
    }
}
