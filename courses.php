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
$courseA->endCol = 3;
$courseA->baseLink = "images/courses/2021/alpha/hole";
$courseA->title = "Alpha Short to Yellow";
$courseA->fileName = "course/2021ayout.csv";
$courseA->linkColumn = 0;

//Generate 2nd table content
$courseB = new CSVTableMaker();
$courseB->startRow = 23;
$courseB->endRow = 43;
$courseB->startCol = 0;
$courseB->endCol = 3;
$courseB->baseLink = "images/courses/2021/alpha/hole";
$courseB->title = "Alpha Long to Yellow";
$courseB->fileName = "course/2021ayout.csv";
$courseB->linkColumn = 0;

//Generate 1st table content
$courseC = new CSVTableMaker();
$courseC->startRow = 45;
$courseC->endRow = 65;
$courseC->startCol = 0;
$courseC->endCol = 3;
$courseC->baseLink = "images/courses/2021/barwick/hole";
$courseC->title = "Barwick Red";
$courseC->fileName = "course/2021ayout.csv";
$courseC->linkColumn = 0;

//Generate 1st table content
$courseD = new CSVTableMaker();
$courseD->startRow = 67;
$courseD->endRow = 87;
$courseD->startCol = 0;
$courseD->endCol = 3;
$courseD->baseLink = "images/courses/2021/barwick/hole";
$courseD->title = "Barwick Yellow";
$courseD->fileName = "course/2021ayout.csv";
$courseD->linkColumn = 0;

?>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <h1 class="text-center">DeBary Open 2021 Courses</h1>
        <hr>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card mb-3 alert-danger">
                    <div class="card-header">General Out of Bounds Info</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">All water is casual, unless marked OB</li>
                        <li class="list-group-item">Over fence OB and on/across entry road OB</li>
                        <li class="list-group-item">Any strung areas OB</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="alert alert-primary blockquote text-center"><strong>Click on holes below to see an overhead of the hole</strong></div>
            </div>
        </div>
        <hr>
        <br />
        <div class="row">
            <div class="col-lg-6 col-md-12">
        <?php
         echo $courseA->GetTable();
        ?>
        </div>
        <div class="col-lg-6 col-md-12">
        <?php
         echo $courseB->GetTable();
        ?>
</div>
        <div class="col-lg-6 col-md-12">
        <?php
         echo $courseC->GetTable();
        ?>
</div>
        <div class="col-lg-6 col-md-12">
        <?php
         echo $courseD->GetTable();
        ?>
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