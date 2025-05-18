<?php
require 'post.php';
require 'featured_post.php';
class FeaturePost extends Post
{
    private $featuredPosts=[];

    public function markAsFeatured($id){
        $post=$this->read($id);
        $this->featuredPosts[$id]=$post;
        echo "Öne Çıkarıldı.";
    }

    public function getFeaturedPosts(){
        return $this->featuredPosts;
    }

    //polimorfizm
    public function read($id)
    {
        $post = parent::read($id);
        $post['content']="Öne Çıkan".$post['content'];
        return $post;

    }


}
