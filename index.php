<?php

$apiUrl= "/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?limit=20" ;
$response= file_get_contents($apiUrl);

if($response===FALSE){
    die ('Error fetching the API data. ');

}

$data= json_decode($response, true);

if($data===NULL){
    die ('Error decoding the JSON data. ')
}
?>
 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Student Nationalities </title>
        <style> 
        body{
            font-family: Arial , sans-serif;
            margin: 20px ;
        }
        table {
            border-collapse :collapse;
            margin: 20px auto;
            width:70%;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding : 8px;
        }

        th{
            background-color : #f4f4f4;
        }

        h1 {
            text-align: center;
        }
        </style>
        </head>
        <body>
            <h1>Student Nationalities </h1> 
            <table>
                

        </table>