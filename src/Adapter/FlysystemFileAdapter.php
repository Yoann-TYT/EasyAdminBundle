<?php

namespace App\Adapter;

use App\Adapter\UploadedFileAdapterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Decorator\FlysystemFile;
use Symfony\Component\HttpFoundation\File\File;
use League\Flysystem\FilesystemOperator;

class FlysystemFileAdapter implements UploadedFileAdapterInterface {
    public function __construct(private FilesystemOperator $fs) {}

    public function supports(string $value): bool {
        return $this->fs->fileExists($value);
    }

    public function create(string $value): File {
        return new FlysystemFile($this->fs, $value);
    }
}