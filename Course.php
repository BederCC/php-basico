<?php

class Course {
    
    public function __construct(
        protected string $title,
        protected string $subtitle,
        protected string $status, // Estado del curso
        protected string $description,
        protected array $tags
    ) {
        // Constructor para inicializar las propiedades del curso
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getSubtitle(): string {
        return $this->subtitle;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getTags(): array {
        return $this->tags;
    }

    public function addTag(string $tag): void {
        
        if (in_array($tag, $this->tags)) {
            return;
        }

        if (empty($tag)) {
            return;
        }

        if (count($this->tags) >= 5) {
            return;
        }

        $this->tags[] = $tag;

    }
}