<?php
class PT{
    public int $a;
    public int $b;
    public int $c;
    public function setA($a) {
        $this->a = $a;
    }
    public function getA() {
        return $this->a;
    }
    public function setB($b) {
        $this->b = $b;
    }
    public function getB() {
          return $this->b;
    }
    public function setC($c) {
        $this->c=$c;
    }
    public function getC() {
        return $this->c;
    }
    public function SetDelta() {
            $delta=($this->b)^2-(4*$this->a*$this->c);
            return $delta;
    }
   
    
   public function setX1() {
        return  $r1=(- $this->b + sqrt(($this->b)^2 - (4 * $this->a * $this->c)))/(2 * $this->a);
    }       

    
    public function setX2(){
        return  $r2=(- $this->b-sqrt(($this->b)^2 - (4 * $this->a * $this->c))) / (2 * $this->a);
    }
}
$objPTb2 = new PT();
$objPTb2->setA(1);
echo "số a là " . $objPTb2->getA();
$objPTb2->setB(-5);
echo " số b là  " . $objPTb2->getB();
$objPTb2->setC(6);
echo " số c là  " . $objPTb2->getC();

echo " số delta là  " . $objPTb2->SetDelta();
echo "<br>"." nghiệm 1 là ". $objPTb2->setX1();
echo "<br>"." nghiệm 2 là ". $objPTb2->setX2();
?>