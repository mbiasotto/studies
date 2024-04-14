<?php

namespace Code\Tests\Export;

use Code\Export\Export;
use PHPUnit\Framework\TestCase;

class ExportTest extends TestCase{

    public function testExportShouldReturnPdf(){

        $export = new Export();

        $result = $export->makeExport('PDF');

        $this->assertEquals('Export PDF',$result);

    }

    public function testExportShouldReturnCsv(){

        $export = new Export();

        $result = $export->makeExport('CSV');

        $this->assertEquals('Export CSV',$result);

    }

}