<!doctype html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
    <title>DeBary Open | Course Info</title>
</head>
<?php

require('lib/csv_tablemaker.php');

//Generate 1st table content
$courseA = new CSVTableMaker();
$courseA->startRow = 1;
$courseA->endRow = 21;
$courseA->startCol = 0;
$courseA->endCol = 4;
// $courseA->baseLink = "images/courses/2021/alpha/hole";
$courseA->title = "Alpha Short to Red";
$courseA->fileName = "course/2022DOpenAMAlphashortred.csv";
//$courseA->linkColumn = 0;

//Generate 2nd table content
$courseB = new CSVTableMaker();
$courseB->startRow = 23;
$courseB->endRow = 43;
$courseB->startCol = 0;
$courseB->endCol = 4;
//$courseB->baseLink = "images/courses/2021/alpha/hole";
$courseB->title = "Alpha Short to Gold";
$courseB->fileName = "course/2022DOpenAMAlphashortred.csv";
//$courseB->linkColumn = 0;

//Generate table content
$courseC = new CSVTableMaker();
$courseC->startRow = 45;
$courseC->endRow = 65;
$courseC->startCol = 0;
$courseC->endCol = 4;
//$courseC->baseLink = "images/courses/2021/barwick/hole";
$courseC->title = "Alpha Long to Gold";
$courseC->fileName = "course/2022DOpenAMAlphashortred.csv";
//$courseC->linkColumn = 0;

//Generate table content
$courseD = new CSVTableMaker();
$courseD->startRow = 67;
$courseD->endRow = 87;
$courseD->startCol = 0;
$courseD->endCol = 4;
//$courseD->baseLink = "images/courses/2021/barwick/hole";
$courseD->title = "Barwick Red";
$courseD->fileName = "course/2022DOpenAMAlphashortred.csv";
//$courseD->linkColumn = 0;

//Generate table content
$courseE = new CSVTableMaker();
$courseE->startRow = 89;
$courseE->endRow = 109;
$courseE->startCol = 0;
$courseE->endCol = 4;
//$courseE->baseLink = "images/courses/2021/barwick/hole";
$courseE->title = "Barwick Yellow";
$courseE->fileName = "course/2022DOpenAMAlphashortred.csv";
//$courseE->linkColumn = 0;

/************** WEEKEND 2 COURSES **************************************************************/
//Generate 1st table content
$course2A = new CSVTableMaker();
$course2A->startRow = 1;
$course2A->endRow = 21;
$course2A->startCol = 0;
$course2A->endCol = 4;
// $courseA->baseLink = "images/courses/2021/alpha/hole";
$course2A->title = "Alpha Short to Gold";
$course2A->fileName = "course/2022DOpenProlayout.csv";
//$courseA->linkColumn = 0;

//Generate table content
$course2B = new CSVTableMaker();
$course2B->startRow = 23;
$course2B->endRow = 43;
$course2B->startCol = 0;
$course2B->endCol = 4;
//$courseE->baseLink = "images/courses/2021/barwick/hole";
$course2B->title = "Alpha Long to Gold";
$course2B->fileName = "course/2022DOpenProlayout.csv";
//$courseE->linkColumn = 0;

//Generate table content
$course2C = new CSVTableMaker();
$course2C->startRow = 45;
$course2C->endRow = 65;
$course2C->startCol = 0;
$course2C->endCol = 4;
//$courseE->baseLink = "images/courses/2021/barwick/hole";
$course2C->title = "Barwick Red";
$course2C->fileName = "course/2022DOpenProlayout.csv";
//$courseE->linkColumn = 0;

//Generate table content
$course2D = new CSVTableMaker();
$course2D->startRow = 67;
$course2D->endRow = 87;
$course2D->startCol = 0;
$course2D->endCol = 4;
//$courseE->baseLink = "images/courses/2021/barwick/hole";
$course2D->title = "Barwick Yellow";
$course2D->fileName = "course/2022DOpenProlayout.csv";
//$courseE->linkColumn = 0;

?>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <ul class="nav nav-pills my-3 justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#weekend1" type="button">Weekend 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#weekend2" type="button">Weekend 2</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="weekend1">
                <h1 class="text-center">Am Weekend</h1>
                <h2 class="text-center">Weekend 1 Course Info</h2>
                <hr>
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $courseA->GetTable();
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $courseB->GetTable();
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $courseC->GetTable();
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $courseD->GetTable();
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $courseE->GetTable();
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="weekend2">
                <h1 class="text-center">Pro Weekend</h1>
                <h2 class="text-center">Weekend 2 Course Info</h2>
                <hr>
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $course2A->GetTable();
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $course2B->GetTable();
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $course2C->GetTable();
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-xl-10">
                        <?php
                        echo $course2D->GetTable();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Script to link table rows to images -->
    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });
    </script>
</body>

</html>