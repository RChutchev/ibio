<?php

namespace App\Actions\Urls;

use App\Models\Urls;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CreateUrl
{
    public function create(): Urls
    {
        $this->validate(request()->input());

        $url = Urls::create([
            "user_id" => auth()->id(),
            "keyword" => request()->input('keyword') ?: app(Urls::class)->getKeyword(request()->input('destination')),
            "is_custom" => request()->input('keyword') ? true : false,
            "destination" => request()->input('destination'),
            "title" => request()->input('title') ?: app(Urls::class)->getWebTitle(request()->input('destination')),
            "user_sign" => app(User::class)->signature(),
        ]);

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
