<?php 

//https://www.youtube.com/watch?v=9lWBD5_Zmlo - Link do estudo
//comando pra testar: php ./bin/phpunit  <> php ./bin/phpunit  --testdox

namespace Code\Export;

class Export{

    function makeExport(string $exportType): string
    {

        switch ($exportType) {
            case 'PDF':
                $result = 'Export PDF';
                break;
            case 'CSV':
                $result = 'Export CSV';
                break;
            default:
                $result = 'Export HTML';
                break;
        }

        return $result;

        // return match ($exportType){
        //     'pdf' => 'Export PDF',
        //     'csv' => 'Export CSV',
        //     default => 'Export HTML',
        // };

    }

}