<?php

namespace App\Adapter;

use App\Adapter\UploadedFileAdapterInterface;
use Symfony\Component\HttpFoundation\File\File;

class LocalFileAdapter implements UploadedFileAdapterInterface {
    public function __construct(private string $uploadDir) {}

    public function supports(string $value): bool {
        return is_file($this->uploadDir . $value);
    }

    public function create(string $value): File {
        return new File($this->uploadDir . $value);
    }
}