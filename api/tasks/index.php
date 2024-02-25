<?php
// Dico che volgio rispondere in liguaggio json
header('Content-Type: application/json');

// Individuo il path del json
$source_path = __DIR__ . '/../../database/tasks.json';

// Prendo i contenuti del json (stringa json)
$json_data = file_get_contents($source_path);

// questi sono i miei tasks
$tasks = $json_data;

// controllo se ho un nuovo task
$task_text = $_POST['task'] ?? '';

// se ce l'ho
if($task_text){
    // Converto in array php
    $tasks = json_decode($tasks, true);

    $new_task = [
        'done' => false,
        'text' => $task_text,
        'id' => uniqid(),
        ];

    // aggiungo il task
    $tasks[] = $new_task;

    // riconverto in json
    $tasks = json_encode($tasks);

    file_put_contents($source_path, $tasks);
} 
    


// Stampo i task, riconvertendoli in json
echo $tasks;