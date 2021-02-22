<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;


class NewController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function review()
    {
        //return view('review');

        $reviews = new contact();
        //dd($reviews->all());

        // Ключ 'all' передаём в review.blade.php и перебираем записи в foreach
        return view('Review', ['all' => $reviews->all()]);
    }

    public function review_check(Request $request) // В Request передаются все данные из формы
    {
        //dd($request); // Функция dd выводит дамп переменных и завершает выполнение скрипта
        // сделаем валидацию
        $valid = $request->validate([
            // required - обязательно для заполнения. min:4 - не меньше 4 символов. max:100 - не более 100 символов
            'email' => 'required|min:4|max:100|email',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);
        $review = new contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('Review');
        // redirect() - перенаправление.
    }
}

