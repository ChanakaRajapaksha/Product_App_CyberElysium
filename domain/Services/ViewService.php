<?php 

namespace domain\Services; 

use App\Models\Product;

class ViewService
{
    protected $post;

    public function __construct() {
        $this->post = new Product();
    } 

    public function all() {
        return $this->post->all();
    } 

    public function delete($post_id) {
        $post = $this->post->find($post_id);
        $post->delete();
    } 

    public function done($post_id) {
        $post = $this->post->find($post_id);
        $post->status = 1;
        $post->update();
    }
}