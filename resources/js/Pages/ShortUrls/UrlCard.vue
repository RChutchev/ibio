<template>
    <div>
        <div class="link-card">
            <div class="link-card__container">
                <div class="link-card-icon-information">
                    <label class="orb-checkbox small" for="bit.ly/3SyFoAI">
                        <input id="bit.ly/3SyFoAI" type="checkbox">
                        <span class="checkmark-icon"></span>
                    </label>
                    <div class="link-card__icon-container">
                        <img alt="Favicon for nhatmagiamgia.com" src="https://www.google.com/s2/favicons?domain=nhatmagiamgia.com&amp;sz=32">
                    </div>
                    <div class="link-card__info-container">
                        <h3 class="orb-typography h3">
                            <a href="/Blak4b6U54W/links/bit.ly/3SyFoAI/details">{{ url.title }}</a>
                        </h3>
                        <div class="link-card__info-container__body">
                            <div class="link-card__info-container__body__stats links-page-card">
                                <a :class="`orb-typography link-card__info-container__short-url`" :href="url.keyword" :target="`_blank`" :rel="`noopener noreferrer`">{{ app_url + url.keyword }}</a>
                                <a :class="`orb-typography link-card__info-container__long-url`" :href="url.destination" :target="`_blank`" :rel="`noopener noreferrer`">{{ url.destination }}</a>
                                <div class="orb-typography link-card__stats-container links-page-card" data-testid="stats-container">
                                    <div class="link-card__stats-container__clicks-info highlight">
                                        <span class="orb-icon">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" role="graphics-document" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <title>Total Clicks</title>
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path d="M4 9h4v11H4zM16 13h4v7h-4zM10 4h4v16h-4z"></path>
                                            </svg>
                                        </span>
                                        <div tabindex="0" class="orb-tooltip bottom-center">
                                            <div class="anchor">
                                                <span class="clicks">18 engagements</span>
                                                <div class="content">
                                                    <p>
                                                        <span>Includes short link clicks, QR Code scans, and Link-in-Bio link clicks</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="link-card__stats-container__created-at-info">
                                        <span class="orb-icon">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" role="graphics-document" height="14" width="14" xmlns="http://www.w3.org/2000/svg">
                                                <title>Created Info</title>
                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z"></path>
                                            </svg>
                                        </span>
                                        <span>Nov 09, 2023</span>
                                    </div>
                                    <div class="link-card__stats-container__tags-info">
                                        <div class="bottom-button">
                                            <span class="orb-icon">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" role="graphics-document" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Tags</title>
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58s1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM13 20.01L4 11V4h7v-.01l9 9-7 7.02z"></path>
                                                    <circle cx="6.5" cy="6.5" r="1.5"></circle>
                                                </svg>
                                            </span>
                                            <span class="no-tags">No tags</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="orb-divider">
                <div class="link-card__button-container">
                    <button class="orb-button neutral-primary link-card-button link-card-button__copy" tabindex="0" type="button">
                        <span class="orb-button-icon">
                            <span class="orb-icon">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" role="graphics-document" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title>copy</title>
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"></path>
                                </svg>
                            </span>
                        </span>Copy </button>
                    <button class="orb-button neutral-secondary btn-link-edit link-card-button" tabindex="0" type="button" aria-label="Edit link">
                        <span class="">
                            <span class="orb-icon">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" role="graphics-document" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <title>edit</title>
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 000-1.41l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path>
                                </svg>
                            </span>
                        </span>
                    </button>
                    <div class="link-more-menu">
                        <div class="orb-dropdown">
                            <div class="main" tabindex="0" aria-expanded="false" role="menu">
                                <span class="orb-icon">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" role="graphics-document" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <title>more</title>
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'url',
        'index',
        'key'
    ],
    data() {
        return {
            'app_url' : process.env.MIX_APP_URL
        }
    },
}
</script>