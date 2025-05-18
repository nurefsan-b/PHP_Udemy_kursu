<?php
 class Post{
    private $posts=[];

    public function create($title,$content)
    {
        $id = count($this->posts)+1;
        $this->post['id']=[
            'id'=>$id,
            'title'=>$title,
            'content'=>$content
        ];
        echo "İçerik oluşturuldu.";
    }

    public function readAll(){
        return $this->posts;
    }

    public function read($id){
        return $this->posts[$id]??"İçerik yok";
    }

    public function update($id,$title,$content)
    {
        $id = count($this->posts)+1;
        $this->post['id']=[
            'id'=>$id,
            'title'=>$title,
            'content'=>$content
        ];
        echo "İçerik Düzenlendi";
    }

    public function delete(){
        unset($this->posts[$id]);
        echo "İçerik silindi";
    }
 }