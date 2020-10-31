<!doctype html>
<html lang="en">

<head>
    <?php include 'header.php'; ?>
    <title>DeBary Open | Schedule of Events</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <h1 id="title">Schedule of Events</h1>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">Tee Times (both days)</div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            7:30am - First Tee Time
                        </li>
                        <li class="list-group-item">
                            12PM - Last Tee Time
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row pad_me row">

            <h1 class="col-12 text-center">Tee Assignments Schedule</h1>
            <br />
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Division</th>
                        <th scope="col">Tee Pad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">All Pro Divisions</td>
                        <td>Long Pads</td>
                    </tr>
                    <tr>
                        <td scope="row">MA1</td>
                        <td>Long Pads</td>
                    </tr>
                    <tr>
                        <td scope="row">MA40</td>
                        <td>Long Pads</td>
                    </tr>
                    <tr>
                        <td scope="row">All Other Divisions</td>
                        <td>Short Pads</td>
                    </tr>
                </tbody>
            </table>
        </div>
            <?php include 'footer.php'; ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>