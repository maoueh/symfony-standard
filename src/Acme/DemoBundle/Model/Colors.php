<?php
namespace Acme\DemoBundle\Model;
use Symfony\Component\Validator\Constraints as Assert;

class Colors {

    private $formulaColors;

    public function __construct() {
        $this->formulaColors = array(
            new FormulaColor(20),
            new FormulaColor(20.0),
            new FormulaColor(20),
            new FormulaColor(20.0),
            new FormulaColor(20),
        );
    }

    /**
    * @Assert\Range(
    *      min = 100,
    *      max = 100,
    *      minMessage = "Color percentages must total exactly 100",
    *      maxMessage = "Color percentages must total exactly 100"
    * )
    */
    public function getColorsTotalPercentage() {
        $sum = 0;

        foreach ($this->formulaColors as $formulaColor) {
            $sum += $formulaColor->getPercentage();
        }

        return $sum;
    }
}
