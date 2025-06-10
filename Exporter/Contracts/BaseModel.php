<?php

namespace Exporter\Contracts;
abstract class BaseModel implements ExporterInterface
{
    protected $format;
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
        if (!$this->isValid())
            die("Format Is Not Valid");
    }
    public function isValid()
    {
        foreach ($this->data as $item) {
            if (empty($item))
                return false;
        }
        return true;
    }
}