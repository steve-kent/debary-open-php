<?php

require('csv-exception.php');

class CSVTableMaker
{
    private $startRow = 0;
    private $endRow = 0;
    private $startCol = 0;
    private $endCol = 0;
    private $caption;
    private $fileName;
    private $title = "";
    private $linkColumn;
    private $baseLink = "";
    public $returnContent = "";

    // Setter for private variables
    public function __set($name, $val)
    {
        $this->$name = $val;
    }

    // Create the start of the HTML table
    private function StartTable()
    {
        $this->returnContent = "<h2 class='text-center w-100'>$this->title</h2>";
        $this->returnContent .= "<table class='table table-sm table-striped table-hover'>";
        $this->returnContent .= "<caption>$this->caption</caption>";
    }

    private function CloseTable()
    {
        $this->returnContent .= "</table>";
    }

    // Read the data from the file and make call to create the table
    private function MakeTable()
    {
        try
        {
            if(!($tableData = file($this->fileName)))
            {
                throw new CsvExceptoin();
            }   
            $this->WriteTable($tableData); 
        }
        catch(CsvExceptoin $e)
        {
            echo "<p>There was an error opening the csvFile</p>";
        }

    }

    // Read each row from the csv file and call the apropriate function
    private function WriteTable($tableData)
    {
        // $totalRows = count($tableData);
        for($row = 0; $row < $this->endRow; $row++)
        {
            if ($row > $this->startRow)
            {
                $this->WriteRow(explode(",",$tableData[$row]), $row);
            }
            else if ($row == $this->startRow)
            {
                $this->WriteTableHeader(explode(",",$tableData[$row]));
            }
        }
    }

    // Write the row of the table that is passed in
    private function WriteRow($row, $rowNumber)
    {
        //$link = $this->baseLink . strval($row[$this->linkColumn]) . '.jpg';
        //$this->returnContent .= "<tr class='clickable-row' data-href='$link'>";
/******************************************UPDATE TO THE ABOVE WHEN IMAGES ARE READY ************************************/
        $this->returnContent .= "<tr>";

        for($col = $this->startCol; $col < $this->endCol; $col++)
        {
            $colData = htmlspecialchars($row[$col]);
            $this->returnContent .= "<td>$colData</td>";
        }
        $this->returnContent .= "</tr>";
    }

        // Write the row of the table that is passed in as the table header
        private function WriteTableHeader($row)
        {
            $this->returnContent .= "<thead><tr>";
            for($col = $this->startCol; $col < $this->endCol; $col++)
            {
                $colData = htmlspecialchars($row[$col]);
                $this->returnContent .= "<th>$colData</th>";
            }
            $this->returnContent .= "</tr></thead>";
        }

    // Create the table and return the html to the caller
    public function GetTable()
    {
        $this->StartTable();
        $this->MakeTable();
        $this->CloseTable();
        return $this->returnContent;
    }
}
?>