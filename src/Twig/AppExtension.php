<?php


namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Twig\TwigFilter;

/**
 * Class AppExtension
 * @package App\Twig
 */
class AppExtension extends AbstractExtension implements GlobalsInterface
{
    private $locale;

    public function __construct($locale)
    {
        $this->locale = $locale;
    }

    public function getGlobals()
    {
        return [
          "locale" => $this->locale
        ];
    }

    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, "priceFilter"]),
            new TwigFilter('str_rand', [$this, "str_rand"])
        ];
    }

    public function priceFilter($number)
    {
        return '$'. number_format($number, 2, '.', ',');
    }

    public function str_rand($length)
    {
        $chars = "zretrfhgjhZRDGJK@&KJKJ?NB;/,JGHKnlm6789785643";
        /* Uncomment below to include symbols */
        /* $include_chars .= "[{(!@#$%^/&*_+;?\:)}]"; */
        $chars_length = strlen($chars);
        $randomStr = '';

        for ($i=0; $i < $length; $i++) {
            $randomStr .= $chars[rand(0, $chars_length - 1)];
        }

        return $randomStr;
    }
}
