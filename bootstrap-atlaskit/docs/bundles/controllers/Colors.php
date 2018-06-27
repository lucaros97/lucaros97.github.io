<?php
  class Colors extends Template {
    public function init() {
      parent::init();

      $this->addFiles([
        "css/colors.min.css"
      ]);

      $this->template = "bundles/views/documentation-template.twig";
      $this->tags["title"]  .= "Colors";
      $this->tags["content"] = $this->makePage();
    }
    public function makePage() {
      return jBlockFile("bundles/views/colors.twig");
    }
  }
?>
