<?php
/**
 * Created by PhpStorm.
 * User: zhangmingkai
 * Date: 14/11/24
 * Time: 上午8:36
 */
class CommentController extends \BaseController {

    public function listComment()
    {
        $comments = Comment::orderBy('id', 'desc')->paginate(20);
        $this->layout->title = 'Comment Listings';
        $this->layout->main = View::make('dash')->nest('content', 'comments.list', compact('comments'));
    }

    public function newComment()
    {

        $post=Post::find(\Illuminate\Support\Facades\Input::get('post_id'));
        $count=($post->comment_count)+1;
        $comment = [
            'commenter' => Auth::user()->username,

            'comment' => Input::get('comment'),
            'comment_count' =>$count
        ];
        $rules = [
            'commenter' => 'required',

            'comment' => 'required',
        ];
        $valid = Validator::make($comment, $rules);
        if ($valid->passes()) {
            $comment = new Comment($comment);
            $comment->approved = 'yes';
            $post->increment('comment_count');
            $post->comments()->save($comment);


            return Redirect::to(URL::previous() . '#reply')
                ->with('success', '您的评论已经提交成功');
        } else {
            return Redirect::to(URL::previous() . '#reply')->withErrors($valid)->withInput();
        }
    }

    public function showComment(Comment $comment)
    {
        if (Request::ajax())
            return View::make('comments.show', compact('comment'));
        // handle non-ajax calls here
        //else{}
    }

    public function deleteComment(Comment $comment)
    {
        $post = $comment->post;
        $status = $comment->approved;
        $comment->delete();
        ($status === 'yes') ? $post->decrement('comment_count') : '';
        return Redirect::back()->with('success', 'Comment deleted!');
    }

    /* post functions */

    public function updateComment(Comment $comment)
    {
        $comment->approved = Input::get('status');
        $comment->save();
        $comment->post->comment_count = Comment::where('post_id', '=', $comment->post->id)
            ->where('approved', '=', 1)->count();
        $comment->post->save();
        return Redirect::back()->with('success', 'Comment ' . (($comment->approved === 'yes') ? 'Approved' : 'Disapproved'));
    }




}