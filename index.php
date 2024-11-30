<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UOB Students Nationality Data</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">

        
    </head>
<body>
    <header>
        <h1>University of Bahrain - Student Nationalities</h1>
    </header>

    <main>
        <?php
        
        $url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

        $response = file_get_contents($url);
        if ($response === FALSE) {
            echo "<p>Error fetching data from the API.</p>";
        } else {
            // Decode JSON data
            $data = json_decode($response, true);