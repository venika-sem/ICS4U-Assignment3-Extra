<?php

  /* This defines the triangle stack
   * *By Venika Sem
   * *@version 1.0
   * *@since Feb-2024
   * */
  
  class Triangle {
      private $sideA;
      private $sideB;
      private $sideC;
  
      public function __construct($side1, $side2, $side3) {
          $this->sideA = $side1;
          $this->sideB = $side2;
          $this->sideC = $side3;
      }
  
      public function isValid() {
          $isValid = true;
          if (($this->sideA + $this->sideB) < $this->sideC) {
              $isValid = false;
          } else if (($this->sideB + $this->sideC) < $this->sideA) {
              $isValid = false;
          } else if (($this->sideC + $this->sideA) < $this->sideB) {
              $isValid = false;
          }
          return $isValid;
      }
  
      public function area() {
          if (!$this->isValid()) {
              return -1;
          } else {
              return sqrt($this->semiPerimeter()
                  * ($this->semiPerimeter() - $this->sideA)
                  * ($this->semiPerimeter() - $this->sideB)
                  * ($this->semiPerimeter() - $this->sideC)
              );
          }
      }
  
      public function getType() {
          if (!$this->isValid()) {
              return -1;
          } else {
              $triangleType = "";
              if (
                  $this->sideA === $this->sideB &&
                  $this->sideB === $this->sideC &&
                  $this->sideC === $this->sideA
              ) {
                  $triangleType = "Equilateral triangle";
              } else if (
                  $this->angle(1) === (pi() / 2) ||
                  $this->angle(2) === (pi() / 2) ||
                  $this->angle(3) === (pi() / 2)
              ) {
                  $triangleType = "Right angle triangle";
              } else if (
                  $this->sideA === $this->sideB ||
                  $this->sideB === $this->sideC ||
                  $this->sideC === $this->sideA
              ) {
                  $triangleType = "Isosceles triangle";
              } else if ($this->sideA != $this->sideB && $this->sideB != $this->sideC && $this->sideC != $this->sideA) {
                  $triangleType = "Scalene triangle";
              }
              return $triangleType;
          }
      }
  
      public function semiPerimeter() {
          if (!$this->isValid()) {
              return -1;
          } else {
              return ($this->sideA + $this->sideB + $this->sideC) / 2;
          }
      }
  
      public function angle($angleNumber) {
          if (!$this->isValid()) {
              return -1;
          } else {
              $angle = 0;
              if ($angleNumber === 1) {
                  $angle = acos(
                      (($this->sideB ** 2) + ($this->sideC ** 2) - ($this->sideA ** 2))
                      / (2 * $this->sideB * $this->sideC)
                  );
              } else if ($angleNumber === 2) {
                  $angle = acos(
                      (($this->sideC ** 2) + ($this->sideA ** 2) - ($this->sideB ** 2))
                      / (2 * $this->sideC * $this->sideA)
                  );
              } else if ($angleNumber === 3) {
                  $angle = acos(
                      (($this->sideA ** 2) + ($this->sideB ** 2) - ($this->sideC ** 2))
                      / (2 * $this->sideA * $this->sideB)
                  );
              }
              return $angle;
          }
      }
  
      public function height($sideNumber) {
          if (!$this->isValid()) {
              return -1;
          } else {
              $height = 0;
              if ($sideNumber === 1) {
                  $height = 2 * $this->area() / $this->sideA;
              } else if ($sideNumber === 2) {
                  $height = 2 * $this->area() / $this->sideB;
              } else if ($sideNumber === 3) {
                  $height = 2 * $this->area() / $this->sideC;
              }
              return $height;
          }
      }
  
      public function innerCircleRadius() {
          if (!$this->isValid()) {
              return -1;
          } else {
              return $this->area() / $this->semiPerimeter();
          }
      }
  
      public function circumsicleRadius() {
          if (!$this->isValid()) {
              return -1;
          } else {
              return ($this->sideA * $this->sideB * $this->sideC) / (4 * $this->area());
          }
      }
  }

?>
