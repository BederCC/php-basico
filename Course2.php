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

    public function __get(string $name) {
        // Método mágico para acceder a las propiedades protegidas
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __toString() {
        $html = "<h1>Bienvenido al {$this->title}</h1>";
        $html .= "<h2>{$this->subtitle}</h2>";
        $html .= "<p>{$this->description}</p>";
        $html .= "<p>El estado del curso es: {$this->status}.</p>";
        $html .= "<p>Tags: </p>";
        $html .= "<ul>";
        foreach ($this->tags as $tag) {
            $html .= "<li>{$tag}</li>";
        }
        $html .= "</ul>";
        return $html;
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