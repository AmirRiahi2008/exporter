<?php
namespace Exporter;

use Exporter\Contracts\BaseModel;
class JsonExporter extends BaseModel
{
    protected $format = ".json";
    public function export()
    {
        $fileName = "json-file" . rand(9,999999999) . $this->format;
        if (!is_dir(__DIR__ . "/files"))
            mkdir(__DIR__."/files");
        $filePath = __DIR__ . "/files/$fileName";
        file_put_contents($filePath, json_encode($this->data));
        echo "Created";
    }
}