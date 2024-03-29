<?php

require_once ('./connection.php');

$conn = getdb();

if (isset($_POST["Import"])) {
    $filename = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($filename, "r");
        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
            $data = ucfirst(strtolower($getData[0]));
            $sql = "INSERT INTO locations (lo_level, lo_county) VALUES ('1', '" . $data . "')";
            //    values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "<script type=\"text/javascript\">
                    alert(\"Invalid File: Please Upload CSV File.\");
                    window.location = \"index.php\";
                </script>";
            } else {
                echo "<script type=\"text/javascript\">
                    alert(\"CSV File has been successfully Imported.\");
                    window.location = \"index.php\";
                </script>";
            }
        }
        fclose($file);
    }
}

if (isset($_POST["Export"])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('id', 'lo_level', 'lo_county', 'lo_town', 'lo_postcode'));
    $query = "SELECT * FROM locations ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);
}

?>
