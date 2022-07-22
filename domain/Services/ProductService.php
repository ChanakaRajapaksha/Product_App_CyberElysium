<?php 

namespace domain\Services; 

use App\Models\Product;
use infrastructure\Facades\ImagesFacade;

class ProductService 
{
    protected $task;

    public function __construct() {
        $this->task = new Product();
    }  

    public function store($data) {
        
        if (isset($data['images'])) {
            $image = ImagesFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }

        $this->task->create($data);
    } 
    
}