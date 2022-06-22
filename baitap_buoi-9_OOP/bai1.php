<?php
  class Employee 
  {
    private $id, $name, $workingHoursPerDay = 8, $hourlyRate = 15, $totalLeaveTaken, $workingDays; 
    
    public function __construct($id, $name, $workingHoursPerDay, $hourlyRate, $totalLeaveTaken, $workingDays)
    {
      $this->id = $id ;
      $this->name = $name;
      $this->workingHoursPerDay = $workingHoursPerDay ;
      $this->hourlyRate = $hourlyRate ;
      $this->totalLeaveTaken = $totalLeaveTaken ;
      $this->workingDays = $workingDays ;
    }

    private function calculateSalaryAmount($totalDays)
    {
      return ($totalDays - $this->totalLeaveTaken) * $this->workingHoursPerDay * $this->hourlyRate ;
    }

    public function getSalaryAmount($totalDays)
    {
      return "{$this->name} has worked for {$this->workingDays} and taken {$this->totalLeaveTaken} leaves, {$this->name} salary is {$this->calculateSalaryAmount($totalDays)}";
    }
    


}

$thuan = new Employee("1","Thuan","20","15","20","20");
echo $thuan->getSalaryAmount("50  ");
?>