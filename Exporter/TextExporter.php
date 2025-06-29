<?php

namespace Exporter;

use Exporter\Contracts\BaseModel;
class TextExporter extends BaseModel
{
    protected $format = ".txt";
    public function export()
    {
        $fileName = "json-file" . rand(9,999999999) . $this->format;
        if (!is_dir(__DIR__ . "/files"))
            mkdir(__DIR__."/files");
        $filePath = __DIR__ . "/files/$fileName";
        file_put_contents($filePath, "{$this->data["title"]}\n{$this->data["content"]}");
        echo "Created";

    }
}