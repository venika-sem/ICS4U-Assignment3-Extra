<?php
  /* This program is a triangle class
   * *By Venika Sem
   * *@version 1.0
   * *@since Feb-2024
   * */
  
  require_once 'Triangle.php';
  
  $testTriangle1 = new Triangle(3, 4, 5);
  echo "Created a 3 mm by 4 mm by 5 mm triangle.\n";
  echo " → Is the triangle valid: " . ($testTriangle1->isValid() ? 'true' : 'false') . "\n";
  echo " → Semiperimeter: " . number_format($testTriangle1->semiPerimeter(), 4) . " mm\n";
  echo " → Area: " . number_format($testTriangle1->area(), 4) . " mm²\n";
  echo " → Type: " . $testTriangle1->getType() . "\n";
  echo " → Angle 1: " . number_format($testTriangle1->angle(1), 4) . " rad\n";
  echo " → Angle 2: " . number_format($testTriangle1->angle(2), 4) . " rad\n";
  echo " → Angle 3: " . number_format($testTriangle1->angle(3), 4) . " rad\n";
  echo " → Height 1: " . number_format($testTriangle1->height(1), 4) . " mm\n";
  echo " → Height 2: " . number_format($testTriangle1->height(2), 4) . " mm\n";
  echo " → Height 3: " . number_format($testTriangle1->height(3), 4) . " mm\n";
  echo " → Inner circle radius: " . number_format($testTriangle1->innerCircleRadius(), 4) . " mm\n";
  echo " → Circumcircle radius: " . number_format($testTriangle1->circumsicleRadius(), 4) . " mm\n\n";
  
  $testTriangle2 = new Triangle(3, 3, 3);
  echo "Created a 3 mm by 3 mm by 3 mm triangle.\n";
  echo " → Is the triangle valid: " . ($testTriangle2->isValid() ? 'true' : 'false') . "\n";
  echo " → Semiperimeter: " . number_format($testTriangle2->semiPerimeter(), 4) . " mm\n";
  echo " → Area: " . number_format($testTriangle2->area(), 4) . " mm²\n";
  echo " → Type: " . $testTriangle2->getType() . "\n";
  echo " → Angle 1: " . number_format($testTriangle2->angle(1), 4) . " rad\n";
  echo " → Angle 2: " . number_format($testTriangle2->angle(2), 4) . " rad\n";
  echo " → Angle 3: " . number_format($testTriangle2->angle(3), 4) . " rad\n";
  echo " → Height 1: " . number_format($testTriangle2->height(1), 4) . " mm\n";
  echo " → Height 2: " . number_format($testTriangle2->height(2), 4) . " mm\n";
  echo " → Height 3: " . number_format($testTriangle2->height(3), 4) . " mm\n";
  echo " → Inner circle radius: " . number_format($testTriangle2->innerCircleRadius(), 4) . " mm\n";
  echo " → Circumcircle radius: " . number_format($testTriangle2->circumsicleRadius(), 4) . " mm\n\n";
  
  $testTriangle3 = new Triangle(3, 4, 4);
  echo "Created a 3 mm by 4 mm by 4 mm triangle.\n";
  echo " → Is the triangle valid: " . ($testTriangle3->isValid() ? 'true' : 'false') . "\n";
  echo " → Semiperimeter: " . number_format($testTriangle3->semiPerimeter(), 4) . " mm\n";
  echo " → Area: " . number_format($testTriangle3->area(), 4) . " mm²\n";
  echo " → Type: " . $testTriangle3->getType() . "\n";
  echo " → Angle 1: " . number_format($testTriangle3->angle(1), 4) . " rad\n";
  echo " → Angle 2: " . number_format($testTriangle3->angle(2), 4) . " rad\n";
  echo " → Angle 3: " . number_format($testTriangle3->angle(3), 4) . " rad\n";
  echo " → Height 1: " . number_format($testTriangle3->height(1), 4) . " mm\n";
  echo " → Height 2: " . number_format($testTriangle3->height(2), 4) . " mm\n";
  echo " → Height 3: " . number_format($testTriangle3->height(3), 4) . " mm\n";
  echo " → Inner circle radius: " . number_format($testTriangle3->innerCircleRadius(), 4) . " mm\n";
  echo " → Circumcircle radius: " . number_format($testTriangle3->circumsicleRadius(), 4) . " mm\n\n";
  
  $testTriangle4 = new Triangle(2, 3, 4);
  echo "Created a 2 mm by 3 mm by 4 mm triangle.\n";
  echo " → Is the triangle valid: " . ($testTriangle4->isValid() ? 'true' : 'false') . "\n";
  echo " → Semiperimeter: " . number_format($testTriangle4->semiPerimeter(), 4) . " mm\n";
  echo " → Area: " . number_format($testTriangle4->area(), 4) . " mm²\n";
  echo " → Type: " . $testTriangle4->getType() . "\n";
  echo " → Angle 1: " . number_format($testTriangle4->angle(1), 4) . " rad\n";
  echo " → Angle 2: " . number_format($testTriangle4->angle(2), 4) . " rad\n";
  echo " → Angle 3: " . number_format($testTriangle4->angle(3), 4) . " rad\n";
  echo " → Height 1: " . number_format($testTriangle4->height(1), 4) . " mm\n";
  echo " → Height 2: " . number_format($testTriangle4->height(2), 4) . " mm\n";
  echo " → Height 3: " . number_format($testTriangle4->height(3), 4) . " mm\n";
  echo " → Inner circle radius: " . number_format($testTriangle4->innerCircleRadius(), 4) . " mm\n";
  echo " → Circumcircle radius: " . number_format($testTriangle4->circumsicleRadius(), 4) . " mm\n\n";
  
  $testTriangle5 = new Triangle(23, 4, 6);
  echo "Created a 23 mm by 3 mm by 4 mm triangle.\n";
  echo " → Is the triangle valid: " . ($testTriangle5->isValid() ? 'true' : 'false') . "\n";
  echo " → Semiperimeter: " . number_format($testTriangle5->semiPerimeter(), 4) . " mm\n";
  echo " → Area: " . number_format($testTriangle5->area(), 4) . " mm²\n";
  echo " → Type: " . $testTriangle5->getType() . "\n";
  echo " → Angle 1: " . number_format($testTriangle5->angle(1), 4) . " rad\n";
  echo " → Angle 2: " . number_format($testTriangle5->angle(2), 4) . " rad\n";
  echo " → Angle 3: " . number_format($testTriangle5->angle(3), 4) . " rad\n";
  echo " → Height 1: " . number_format($testTriangle5->height(1), 4) . " mm\n";
  echo " → Height 2: " . number_format($testTriangle5->height(2), 4) . " mm\n";
  echo " → Height 3: " . number_format($testTriangle5->height(3), 4) . " mm\n";
  echo " → Inner circle radius: " . number_format($testTriangle5->innerCircleRadius(), 4) . " mm\n";
  echo " → Circumcircle radius: " . number_format($testTriangle5->circumsicleRadius(), 4) . " mm\n\n";
  
  echo "\nDone.\n";
?>
