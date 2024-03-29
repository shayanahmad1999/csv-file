<?php 

require_once ('./connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="wrap">
        <div class="container">
            <div class="row">

                <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Form Name</legend>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

                <div>
                    <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel" />
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <?php
            function get_all_records()
            {
                $conn = getdb();
                $Sql = "SELECT * FROM locations";
                $result = mysqli_query($conn, $Sql);


                if (mysqli_num_rows($result) > 0) {
                    echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
                         <thead><tr>
                                      <th>Level</th>
                                      <th>County</th>
                                      <th>Town</th>
                                      <th>Postal Code</th>
                                    </tr></thead><tbody>";


                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                               <td>" . $row['lo_level'] . "</td>
                               <td>" . $row['lo_county'] . "</td>
                               <td>" . $row['lo_town'] . "</td>
                               <td>" . $row['lo_postcode'] . "</td></tr>";
                    }

                    echo "</tbody></table></div>";
                } else {
                    echo "you have no records";
                }
            }
            echo get_all_records();
            ?>
        </div>
    </div>
</body>

</html>