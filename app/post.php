<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'post_file';
	protected $fillable = ['id','head', 'body','author'];
   
	public function savePost($data)
	{
		$this->author="Niki";
		$this->body=$data['body'];
		$this->head=$data['header'];
		$this->save();
        return 1;
	}
	public function updatePost($data)
	{
		$post = $this->find($data['id']);
		$post->body=$data['body'];
		$post->head=$data['header'];
		$post->save();
		return 1;
	}
	public function deletePost($id)
	{
		$post = $this::find($id);
		$post->delete();
		return 1;
	}
}
