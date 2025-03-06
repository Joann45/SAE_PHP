<?php 
namespace Provider;

class JsonProvider {
    private string $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function getData() {
        if (!file_exists($this->filePath)) {
            throw new \Exception("Le fichier $this->filePath n'existe pas.");
        }
        $data = file_get_contents($this->filePath);
        return json_decode($data, true);
    }

    public function setData(array $data) {
        $json = json_encode($data, JSON_PRETTY_PRINT);
        return file_put_contents($this->filePath, $json)!==false;
    }
}

?>