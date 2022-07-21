<?php 

namespace domain\Services; 

use App\Models\Product;

class ProductService 
{
    protected $task;

    public function __construct() {
        $this->task = new Product();
    }  

    public function store($data) {
        $this->task->create($data);
    } 
    
}