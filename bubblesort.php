<?php
$mainClass= new MainClass([12, 7, 3, 9, 5, 1, 15,18,20]);  //pls change the value of the array for testing
return $mainClass->index();

class MainClass {
    public $data;
	
    public function __construct($data) {
		$this->data = $data;
    }

    public function index() {
        $bubbleSortMedianLargest= new BubbleSortMedianLargest($this->data);
		
		return $bubbleSortMedianLargest;
    }
}

class BubbleSortMedianLargest {
    public $arry;
	
    public function __construct($arry) {
		$this->arry = $arry;
        $n = count($this->arry);
		$this->bubbleSort();
		
		$median = 0.0;
		if ($n % 2 == 0) {
			$median = ($this->arry[$n / 2 - 1] + $this->arry[$n / 2]) / 2;
		} else {
			$median = $this->arry[(int)($n /2)];
		}
		
		$largest = $this->arry[$n - 1];
		
		echo "Median: $median, Largest: $largest";
    }

    public function bubbleSort() {
        $n = count($this->arry);

		for ($i = 0; $i < $n; $i++) {
			for ($j = 0; $j < $n - $i - 1; $j++) {
				if ($this->arry[$j] > $this->arry[$j + 1]) {
					$temp = $this->arry[$j];
					$this->arry[$j] = $this->arry[$j + 1];
					$this->arry[$j + 1] = $temp;
				}
			}
		}
    }
}

?>