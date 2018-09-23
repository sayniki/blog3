<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class BlogController extends Controller
{
	public function showBlogContent($id)
	{
		$PageTitle="Edit Post";
		$post3 = Post::where('id', $id)
                        ->first();
		return view('pages.blogPost')->withData(array('pagetitle'=>$PageTitle,'data'=>$post3,'success'=>$success));
	}
    public function blogEdit($id,$success='')
	{
		$PageTitle="Edit Post";
		$post3 = Post::where('id', $id)
                        ->first();
		$url='update/blog/'.$id;
		return view('pages.add_post')->withData(array('pagetitle'=>$PageTitle,'url'=>$url,'data'=>$post3,'success'=>$success));
	}
	public function blogUpdate(Request $request,$id)
	{
		$post=new post();
		 $data = $this->validate($request, [
            'header'=>'required',
            'body'=> 'required'

        ]);
		 $data['id']=$id;
		 $post->updatePost($data);

 		return redirect('/edit/blog/'.$id)->with('success', 'Blog Record has been deleted!!');

		return $this->blogEdit($id,'Successfully edited Post');
	}
	public function getBlogContent(Request $request)
	{
		$post=new post();
		 $data = $this->validate($request, [
            'header'=>'required',
            'body'=> 'required'
        ]);
		$post->savePost($data);
		return $this->showBlog();
        
	}
	public function getPost()
	{
		$PageTitle="Add Post";
		$post=new post();
		$url='addPost';
		return view('pages.add_post')->withData(array('pagetitle'=>$PageTitle,'url'=>$url,'data'=>$post));
	}
	public function showBlog()
	{
		$PageTitle="Show Post";
 		$post3 = Post::get();
        return view('pages.blog_post')->withData(array('pagetitle'=>$PageTitle,'data'=>$post3));		
	}
	public function destroy($id)
	{
		$post=new post();
		$post->deletePost($id);
        return redirect('/blog')->with('success', 'Blog Record has been deleted!!');
    }
}
