<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function getIndex() {
        return View::make('index');
    }

    public function getAboutBhdi() {
        return View::make('about_bhdi');
    }

    public function getWhyBhdi() {
        return View::make('why_bhdi');
    }

    public function getBigData() {
        return View::make('bigdata');
    }

    public function getHealthCare() {
        return View::make('healthcare');
    }

    public function getChallenges() {
        return View::make('challenges');
    }

    public function getOpporunities() {
        return View::make('opportunities');
    }

    public function getDonate() {
        return View::make('donate');
    }

    public function getResearch() {
        return View::make('research');
    }

    public function getContactUs() {
        return View::make('contact');
    }

    public function postContactUs() {
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'question' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('home/contact-us#content')
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            Mail::send('email.email', array('body' => Input::get('question')), function($message) {
                $message->to(Config::get('constants.ADMIN_EMAIL'), Config::get('constants.ADMIN_NAME'))->subject('You got a question from user!');
            });
            Session::flash('message', 'Successfully!');
            return View::make('contact');
        }
    }

    public function postSignUp() {
        $rules = array(
            'nameSignup' => 'required',
            'emailSignup' => 'required|email|unique:users,email',
            'passwordSignup' => 'required',
            'rePasswordSignup' => 'required|same:passwordSignup',
            'recoverQuestion' => 'required',
            'answerSignup' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            Session::flash('flashMessage', 'Sign up failed! Please check message below for errors');
            return Redirect::action(Input::get('currentUrl'))
                            ->withErrors($validator)
                            ->withInput(Input::except(array('passwordSignup', 'rePasswordSignup')));
        } else {
            $user = new User;
            $user->email = Input::get('emailSignup');
            $user->password = Hash::make(Input::get('passwordSignup'));
            $user->name = Input::get('nameSignup');
            $user->question_id = Input::get('recoverQuestion');
            $user->question_answer = Input::get('answerSignup');
            $user->save();

            Session::flash('flashMessage', 'Signed up successfully!');
            return Redirect::action(Input::get('currentUrl'));
        }
    }

    public function postSignIn() {
        $rules = array(
            'emailSignin' => 'required',
            'passwordSignin' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        $currentUrl = Input::get('currentUrl');
        if (empty($currentUrl)) {
            $currentUrl = 'HomeController@getIndex';
        }

        if ($validator->fails()) {
            Session::flash('flashMessage', 'Sign in failed! please check message below for errors');
            return Redirect::action()
                            ->withErrors($validator)
                            ->withInput(Input::except('passwordSignin'));
        } else {
            $userdata = array(
                'email' => Input::get('emailSignin'),
                'password' => Input::get('passwordSignin')
            );

            if (Auth::attempt($userdata)) {
                Session::flash('flashMessage', 'Signed in successfully!');
                return Redirect::action(Input::get('currentUrl'));
            } else {
                Session::flash('flashMessage', 'Failed, Email or Password wrong!');
                return Redirect::action(Input::get('currentUrl'));
            }
        }
    }

    public function getSignOut() {
        Auth::logout();
        return Redirect::action('HomeController@getIndex');
    }

    public function getComment() {
        $contents = Content::all();

        return View::make('comment')->with('contents', $contents);
    }

    public function postComment() {
        $rules = array(
            'comment' => 'required|max:500'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            Session::flash('flashMessage', 'Post comment failed!');
            return Redirect::action()
                            ->withErrors($validator)
                            ->withInput(Input::all());
        } else {
            $user = User::find(Auth::id());
            $content = Content::find(Input::get('content'));
            $comment = new Comment();
            $comment->user_id = $user->id;
            $comment->user_name = $user->name;
            $comment->content_id = $content->id;
            $comment->content_title = $content->title;
            $comment->comment = Input::get('comment');
            $comment->save();

            Session::flash('flashMessage', 'Post comments successfully!');
            return Redirect::action('HomeController@getComment');
        }
    }

    public function getShowComment() {
        $contents = Content::all();

        if (!empty(Request::get('c'))) {
            $content_id = Input::get('c');
            $comments = Comment::where('content_id', '=', $content_id)->paginate(5);

            return View::make('show_comments')->with(['comments' => $comments, 'contents' => $contents]);
        } else {
            return View::make('show_comments')->with(['contents' => $contents]);
        }
    }

    public function getManageComment() {
        $comments = Comment::findBy('user_id', Auth::id());

        return View::make('manage_comment')
                        ->with([
                            'comments' => $comments
        ]);
    }

    public function deleteManageComment() {
        $delete_id = Input::get('deleteId');

        $comment = Comment::find($delete_id);
        $comment->delete();

        Session::flash('flashMessage', 'Deleted comment successfully!');
        return Redirect::action('HomeController@getManageComment');
    }

    public function putManageComment() {
        $update_id = Input::get('updateId');
        
        $comment = Comment::find($update_id);
    }
}
