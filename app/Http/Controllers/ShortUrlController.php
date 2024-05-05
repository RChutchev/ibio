<?php

namespace App\Http\Controllers;

use App\Actions\Links\CreateLink;
use App\Actions\Links\DeleteLink;
use App\Actions\Links\DeleteThumbnail;
use App\Actions\Urls\DeleteUrl;
use App\Actions\Links\UpdateLink;
use App\Actions\Links\UpdateSort;
use App\Actions\Links\UpdateThumbnail;
use App\Actions\Urls\CreateUrl;
use App\Http\Resources\UrlsResource;
use App\Models\Link;
use App\Models\Urls;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;
use Throwable;

class ShortUrlController extends Controller
{
    public function index(): Response
    {
        return inertia('ShortUrls/Index', [
            'title' => __('Short Urls'),
            'preview' => true,
            'urls' => UrlsResource::collection(
                $this->getUser()
                    ->urls()
                    ->orderBy('id', 'DESC')
                    ->get()
            ),
            'urlvisit' => UrlsResource::collection(
                $this->getUser()
                    ->with(['urls', 'urls.visits'])
                    ->get()
            ),
        ]);
    }

    public function store(): RedirectResponse
    {
        app(CreateUrl::class)->create();

        return redirect()->route('short-urls');
    }

    public function guestStore(): string
    {
        $url = app(CreateUrl::class)->create();
        
        $attr = $url->getAttributes();
        $longUrl = $attr['destination'];
        $shortUrl = url($attr['keyword']);
        
        $html = view('components.ShortUrls.created', compact('longUrl', 'shortUrl'))->render();

        return $html;
    }

    public function updateSort(): RedirectResponse
    {
        app(UpdateSort::class)->update($this->getUser(), request()->input());

        return redirect()->route('links');
    }

    /**
     * @throws AuthorizationException
     */
    public function update(Link $link): RedirectResponse
    {
        $this->authorize('update', $link);

        app(UpdateLink::class)->update($link, request()->input());

        return redirect()->route('links');
    }

    /**
     * @throws AuthorizationException
     */
    public function updateData(Link $link, $field): RedirectResponse
    {
        $this->authorize('update', $link);

        $link->type()->updateData(request()->input(), $field);

        return redirect()->route('links');
    }

    /**
     * @throws AuthorizationException
     */
    public function delete(Urls $url): RedirectResponse
    {
        $this->authorize('delete', $url);

        app(DeleteUrl::class)->delete($url);

        return redirect()->route('short-urls');
    }

    /**
     * @throws AuthorizationException|Throwable
     */
    public function updateThumbnail(Link $link): RedirectResponse
    {
        $this->authorize('update', $link);

        app(UpdateThumbnail::class)->update($link);

        return redirect()->route('links');
    }

    /**
     * @throws AuthorizationException|Throwable
     */
    public function deleteThumbnail(Link $link): RedirectResponse
    {
        $this->authorize('update', $link);

        app(DeleteThumbnail::class)->delete($link);

        return redirect()->route('links');
    }
}
