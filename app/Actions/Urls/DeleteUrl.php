<?php

namespace App\Actions\Urls;

use App\Models\Urls;

class DeleteUrl
{
    public function delete(Urls $url): void
    {
        $url->delete();
    }
}
