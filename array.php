<?php 
// $points = [2000, 5000, 10000, 20000];

// echo $points[0];

// $studentScores = [
//     "student1" => 80,
//     "student2" => 90,
//     "student3" => 75
// ];


// echo $studentScores["student1"];
$students = [
    "student1" => [
        "name" => "messi",
        "age" => 90,
        "score" => 65
    ],
    "student2" => [
        "name" => "ronaldo",
        "age" => 200,
        "score" => 60
    ],
];

// echo $students[1]["name"];
echo "nama = ".$students["student1"]['name'].", umur = ".$students["student1"]['age'].", skor = ".$students["student1"]['score'];

?>