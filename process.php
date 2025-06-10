<?php

include "./loader.php";
if ($_SERVER["REQUEST_METHOD"] !== "POST")
    return;

[$title, $content, $format] = [$_POST["title"], $_POST["content"], $_POST["format"]];
$correctFormats = ["Text", "Json", "Csv"];
if (!in_array($format, $correctFormats))
    return "Invalid Format";

$className = "Exporter\\{$format}Exporter";

if (class_exists($className)) {
    $classModel = new $className(["title" => $title, "content" => $content]);
    $classModel->export();
}

header("Location:index.php");