<?php

namespace App\Actions\Urls;

use App\Models\Urls;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CreateUrl
{
    public function create(User $user): Urls
    {
        $this->validate(request()->input());

        $url = new Urls();
        $url->user_id = $user->id;
        $url->keyword = request()->input('keyword') ?: app(Urls::class)->getKeyword(request()->input('destination'));
        $url->is_custom = request()->input('keyword') ? true : false;
        $url->destination = request()->input('destination');
        $url->title = request()->input('title') ?: app(Urls::class)->getWebTitle(request()->input('destination'));
        $url->user_sign = app(User::class)->signature();
        $url->save();

        return $url;
    }

    protected function validate(array $input)
    {
        Validator::validate($input, [
            'destination' => [
                'required'
            ],
            'keyword' => [
                'nullable',
                'unique:urls,keyword',
            ],
        ]);
    }
}
