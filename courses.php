<!doctype html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
    <title>DeBary Open | Course Info</title>
</head>
<?php

require('lib/csv_tablemaker.php');

/************** WEEKEND 1 COURSES **************************************************************/
//Generate 1st table content
$alphaWeekend1 = new CSVTableMaker();
$alphaWeekend1->startRow = 2;
$alphaWeekend1->endRow = 21;
$alphaWeekend1->startCol = 0;
$alphaWeekend1->endCol = 6;
$alphaWeekend1->title = "Alpha Red Baskets";
$alphaWeekend1->fileName = "course/2023/Layout info - Wk1 _ Alpha.csv";

$barwickWeekend1 = new CSVTableMaker();
$barwickWeekend1->startRow = 2;
$barwickWeekend1->endRow = 21;
$barwickWeekend1->startCol = 0;
$barwickWeekend1->endCol = 6;
$barwickWeekend1->title = "Barwick Red Baskets";
$barwickWeekend1->fileName = "course/2023/Layout info - Wk1 _ Barwick.csv";

/************** WEEKEND 2 COURSES **************************************************************/
$alphaWeekend2 = new CSVTableMaker();
$alphaWeekend2->startRow = 2;
$alphaWeekend2->endRow = 21;
$alphaWeekend2->startCol = 0;
$alphaWeekend2->endCol = 6;
$alphaWeekend2->title = "Alpha Gold Baskets";
$alphaWeekend2->fileName = "course/2023/Layout info - Wk2 _ Alpha.csv";

$barwickWeekend2 = new CSVTableMaker();
$barwickWeekend2->startRow = 2;
$barwickWeekend2->endRow = 21;
$barwickWeekend2->startCol = 0;
$barwickWeekend2->endCol = 6;
$barwickWeekend2->title = "Barwick Gold Baskets";
$barwickWeekend2->fileName = "course/2023/Layout info - Wk 2 _ Barwick.csv";

?>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <ul class="nav nav-pills my-3 justify-content-center">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#weekend1" type="button">Weekend 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#weekend2" type="button">Weekend 2</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="weekend1">
                <h2 class="text-center">Weekend 1 Course Info</h2>
                <div class="text-center">
                    <div class="alert alert-danger p-2">Over chain link fences OB. Water casual unless noted otherwise.</div>
                </div>
                <div class="text-center">
                    <div class="alert alert-danger p-2 mt-2">All Red Baskets</d>
                    </div>
                    <hr>
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 col-xl-10">
                            <?php
                            echo $alphaWeekend1->GetTable();
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-12 col-xl-10">
                            <?php
                            echo $barwickWeekend1->GetTable();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show active" id="weekend2">
                <h1 class="text-center">Pro Weekend</h1>
                <h2 class="text-center">Weekend 2 Course Info</h2>
                <div class="text-center">
                    <div class="alert alert-danger p-2">Over chain link fences OB. Water casual unless noted otherwise.</div>
                    <div class="text-center">
                        <div class="alert alert-warning p-2 mt-2">All Gold Baskets</div>
                    </div>
                    <hr>
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 col-xl-10">
                            <?php
                            echo $alphaWeekend2->GetTable();
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <div class="col-12 col-xl-10">
                            <?php
                            echo $barwickWeekend2->GetTable();
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