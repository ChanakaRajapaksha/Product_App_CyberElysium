<?php 

namespace domain\Services; 

use App\Models\Product;
use App\Models\Image;

class ViewService
{
    protected $post;

    public function __construct() {
        $this->post = new Product();
    } 

    public function all() {
        return $this->post->all();
    } 

    public function allActive() {
        return $this->post->allActive();
    }

    public function delete($post_id) {
        $post = $this->post->find($post_id);
        $post->delete();
    } 

    public function done($post_id) {
        $post = $this->post->find($post_id);
        if($post->status == 0) {
            $post->status = 1;
            $post->update();
        } else {
            $post->status = 0;
            $post->update();
        }
    }
        
}