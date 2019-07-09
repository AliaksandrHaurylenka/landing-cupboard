<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;

class MessageController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function message(Request $request)
    {
      // dd($request->all());

      if ($request->isMethod('post')) {
        //if($request->isAjax()){

        $messages = [
          'required' => 'Поле :attribute обязательно к заполнению',
          'email' => 'Поле :attribute должно быть email адресом',
          'captcha' => 'Поле :attribute введено не верно',
        ];

        $this->validate($request, [
          'email' => 'required|email',
          'name' => 'required|max:255',
          'message' => 'required|max:1000',
          'captcha' => 'required|captcha',
        ], $messages);

        $data = $request->all();

        // dd(response()->json($data);)

        //return response()->json($data);

        Mail::send(new MessageMail($data));

        //return Response::json('msg' => 'success', 200);

        return redirect()->back()->with('status', 'Ваше сообщение отправлено!');
        //return with('status', 'Ваше сообщение отправлено!');
      }
    }
}
