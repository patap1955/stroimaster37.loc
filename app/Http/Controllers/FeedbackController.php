<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(FeedbackRequest $request)
    {
        $validate = $request->validated();

        Feedback::create($validate);
        session()->flash('success', 'Ваше сообщение успешно отправленно.В ближайшее время с Вами свяжется наш Сотрудник');
        return redirect()->back();
    }
}
