<?php

class AuthController extends BaseController {

	public function getIndex()
	{
		$data['title'] = 'Sign In';
		return View::make('auth.login',$data);
	}

	public function postLogin()
	{
		$rules = array(
					'email'    => 'required|email', 
					'password' => 'required'
				);
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) 
        {
           	return Redirect::back()->withInput()->withErrors(array('notif'=>$validator->messages()->all()));
        }

		$token       = Input::get('_token');
		$email       = Input::get('email');
		$password    = Input::get('password');
		$remember_me = Input::get('remember_me');
		if($token)
		{
			$check 		= Modeluser::where('email',$email)->where('is_active','Yes')->first();
	        if(empty($check)){
	        	return Redirect::back()->withInput()->withErrors(array('notif'=>"Account doesn't exist. Enter a different email address or contact administrator."));
	        }else{
	        	$group  = Modelgroup::find($check->group_id);
	            $user_data = array(
							'id'        => $check->id,
							'fullname'  => $check->fullname,
							'email'     => $check->email,
							'image'     => $check->image,
							'group_id'  => $check->group_id,
							'group_name'=> $group->group_name,
							'is_active' => $check->is_active
	                    );
	            if (Hash::check($password, $check->password))
	            {
		            Session::put('panel_session', $user_data);
		            if ($remember_me) {
                        setcookie("email", $email, time() + 60 * 5);
                        setcookie("password", $password, time() + 60 * 5);
                    }
                    if($check->group_id==1){

		            	return Redirect::to('/dashboard')->with('notif','Welcome to Admin Area');
                    }else{
                    	return Redirect::to('/home')->with('notif','Selamat datang di System Politik Pemetaan');
                    }
		        }else{
		            return Redirect::back()->withInput()->withErrors(array('notif'=>'That password is incorrect.'));
		        } 

			}
		}else{
			return Redirect::to('/');
		}

		
	}


	public function getForgot()
	{	
		$data['title'] = 'Forgot Password';
		return View::make('auth.forgot_password',$data);
	}

	public function postForgot()
	{
		$msg = array('exists'=>"Account doesn't exist. Enter a different email address or contact administrator.");
		$rules = array('email'=>'required|email|exists:users,email');
		$email = Input::get('email');

		$validator=Validator::make(Input::all(),$rules,$msg);
		if($validator->fails())
		{
			return Redirect::back()->withInput()->withErrors(array('notif'=>$validator->messages()->all()));
		}else{
			$check = Modeluser::where('email',$email)->first();
			$users = Modeluser::find($check->id);

			$users->token           = hash("sha1", $email . uniqid());
			$users->created_expired = date('Y-m-d ').date('H:i:s');
			$nextDay                = time()+(1*24*60*60);
			$users->end_expired    = date('Y-m-d ',$nextDay).date('H:i:s');
			$users->save();
			$data = array(
					'name'  => $check->fullname,
					'token' => $users->token
				);
			Mail::send('emails.mail', $data, function($message) use ($email)
			{
			    $message->to($email, '-noreply-[Admin System]')->subject('Request new password');
			});
			$msg_success = 'Success! The instructions has been send to your email Account';
			return Redirect::to('/')->with('notif',$msg_success);
		}
	}

	public function getPassword($reset, $token = '')
	{
		if($token=='')
		{
			return Redirect::to('/forgot')->withErrors(array('notif'=>'Sorry! Your token not found. Please retry'));
		}

		$user        = Modeluser::where('token',$token)->first();
        if (!$token || (!$user)) 
        {
            return Redirect::to('/forgot')->withErrors(array('notif'=>'Sorry! Your token not valid. Please retry'));
        }
        $expire = Modeluser::where('end_expired','>=',date('Y-m-d H:i:s'))->first();
        if(!$expire)
        {
        	return Redirect::to('/forgot')->withErrors(array('notif'=>'Sorry! Your token has expired. Please retry'));
        }

		$data['title']  = 'Reset Password';
		return View::make('auth.reset_password',$data)->with('token',$token);
	}

	public function postReset()
	{
		$rules = array('password' => 'required|min:5','password_confirm'=>'required|min:5');
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) 
        {
           	return Redirect::back()->withInput()->withErrors(array('notif'=>$validator->messages()->all()));
        }

        $pass1 = Input::get('password');
        $pass2 = Input::get('password_confirm');
        if($pass1 != $pass2)
        {
        	$msg = 'The password confirmation does not match.';
        	return Redirect::back()->withInput()->withErrors(array('notif'=>$msg));
        }

		$token          = Input::get('token');
		$user           = Modeluser::where('token',$token)->first();
		$user->password = Hash::make(Input::get('password'));
		$user->token    = null;
		$user->update();

		return Redirect::to('/')->with('notif','Success! Your password has reset.');
	}


	// public function getRegister()
	// {	
	// 	$data['page'] = 'register';
	// 	return View::make('backend.auth',$data);
	// }

	// public function postRegister()
	// {
	// 	return Redirect::to('/');
	// }

	
	public function getLogout()
	{
		Session::forget('panel_session');
        return Redirect::to('/')->with('notif','Success logout system');
	}







}
