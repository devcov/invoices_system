<?php

namespace App\Exports;

use App\Models\Invoices;
use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

// class InvoicesExport implements FromCollection
// {

//     use Exportable;
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {

//        // return Invoices::all();
//       // return (new InvoicesExport)->download('invoices.xlsx');
//      // return (new InvoicesExport)->download('invoices.csv', Excel::CSV, ['Content-Type' => 'text/csv']);
//      private $fileName = 'invoices.xlsx';

//      /**
//      * Optional Writer Type
//      */
//      private $writerType = Excel::XLSX;

//      /**
//      * Optional headers
//      */
//      private $headers = [
//          'Content-Type' => 'text/csv',
//      ];

//      public function collection()
//      {
//          return Invoice::all();
//      }
//     }
// }
class InvoicesExport implements FromCollection, Responsable
{
    use Exportable;

    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'invoices.xlsx';

    /**
    * Optional Writer Type
    */
    private $writerType = Excel::XLSX;

    /**
    * Optional headers
    */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    public function collection()
    {
        return Invoices::all();
    }
}
