<?php

namespace App\Entity;

use App\Repository\TestUploadRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=TestUploadRepository::class)
 * @Gedmo\Uploadable(appendNumber=true,filenameGenerator="SHA1")
 */
class TestUpload
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Gedmo\UploadableFileName
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Gedmo\UploadableFileSize
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $size;

    /**
     * @Gedmo\UploadableFilePath
     * @ORM\Column(type="string", length=255)
     */
    private $path;

    /**
     * @Gedmo\UploadableFileMimeType
     * @ORM\Column(type="string", length=255)
     */
    private $mime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getMime(): ?string
    {
        return $this->mime;
    }

    public function setMime(string $mime): self
    {
        $this->mime = $mime;

        return $this;
    }
}
