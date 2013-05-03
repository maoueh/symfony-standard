<?php
namespace Acme\DemoBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class FormulaColor {
    private $percentage;

    public function __construct($percentage) {
        $this->percentage = $percentage;
    }

    public function getPercentage() {
        return $this->percentage;
    }
}
