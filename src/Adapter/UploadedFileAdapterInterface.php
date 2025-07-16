<?php

namespace App\Adapter;

use Symfony\Component\HttpFoundation\File\File;

interface UploadedFileAdapterInterface {
    public function supports(string $value): bool;
    public function create(string $value): File;
}