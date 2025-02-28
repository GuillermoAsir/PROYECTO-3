<?php
declare(strict_types=1);

namespace App;

class PersonajeDragonBall
{
    private string $name;
    private string $ki;
    private string $maxKi;
    private string $race;
    private string $gender;
    private string $description;
    private string $image;
    private string $affiliation;

    public function __construct(
        string $name,
        string $ki,
        string $maxKi,
        string $race,
        string $gender,
        string $description,
        string $image,
        string $affiliation
    ) {
        $this->name = $name;
        $this->ki = $ki;
        $this->maxKi = $maxKi;
        $this->race = $race;
        $this->gender = $gender;
        $this->description = $description;
        $this->image = $image;
        $this->affiliation = $affiliation;
    }

    // Métodos getters
    public function getName(): string { return $this->name; }
    public function getKi(): string { return $this->ki; }
    public function getMaxKi(): string { return $this->maxKi; }
    public function getRace(): string { return $this->race; }
    public function getGender(): string { return $this->gender; }
    public function getDescription(): string { return $this->description; }
    public function getImage(): string { return $this->image; }
    public function getAffiliation(): string { return $this->affiliation; }
}
?>

