<?php

class StrUtils {

    private String $str ;
    public $bold ;
    public $italic ;
    public $underline ;
    public $capitalize;

    public function __construct ($str, $bold, $italic, $underline, $capitalize) {
        $this->setStr($str);
        $this->setBold($bold);
        $this->setItalic($italic);
        $this->setUnderline($underline);
        $this->setCapitalize($capitalize);
    }

    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * @return string
     */
    public function getBold(): string
    {
        return $this->bold;
    }

    /**
     * @param string $bold
     */
    public function setBold(string $bold): void
    {
        $this->bold = $bold;
    }

    /**
     * @return string
     */
    public function getItalic(): string
    {
        return $this->italic;
    }

    /**
     * @param string $italic
     */
    public function setItalic(string $italic): void
    {
        $this->italic = $italic;
    }

    /**
     * @return string
     */
    public function getUnderline(): string
    {
        return $this->underline;
    }

    /**
     * @param string $underline
     */
    public function setUnderline(string $underline): void
    {
        $this->underline = $underline;
    }

    /**
     * @return string
     */
    public function getCapitalize(): string
    {
        return $this->capitalize;
    }

    /**
     * @param string $capitalize
     */
    public function setCapitalize(string $capitalize): void
    {
        $this->capitalize = $capitalize;
    }

    public function uglify () {
        return "<span style='text-decoration: underline; text-transform: capitalize'><bold><i>$this->str</i></bold></span>";
    }

}

