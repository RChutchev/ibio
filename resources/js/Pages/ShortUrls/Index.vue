<template>
    <app-layout>
        <v-container>
            <v-section-title>
                <template #title>Manage your short urls</template>
                <template #description> Here you can create and manage your short urls </template>
                <template #aside>
                    <create />
                </template>
            </v-section-title>

            <div class="mt-5 grid grid-cols-1 gap-5">
                <v-card
                    v-for="(link, i) in $page.props.urls"
                    :key="i"
                    class="flex items-center justify-between link-card_container"
                >
                    <div class="link-card_infomation flex flex-col gap-3">
                        <h3 class="font-bold text-xl">
                            <a class="capitalize" :href="link.keyword" ref="nofollow" target="_blank">
                                {{ link.title }}
                            </a>
                        </h3>
                        <div class="link-card_infomation-body flex flex-col gap-2">
                            <a class="text-sm block" :href="link.keyword" ref="nofollow" target="_blank">
                                {{ app_url + link.keyword }}
                            </a>
                            <a class="text-sm block" :href="link.destination" ref="nofollow" target="_blank">
                                {{ link.destination }}
                            </a>
                            <div class="flex flex-row gap-6 links-page-card mt-4">
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
                                            <span class="clicks">{{link.uniqueClicks}} engagements</span>
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
                                    <span>{{ new Date(link.created_at).toDateString('en-GB') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="link-card_button">
                        <div class="text-center">
                            <delete :link="link" />
                            <copy :link="link.keyword" />
                        </div>
                    </div>
                    
                </v-card>
            </div>
        </v-container>
    </app-layout>
</template>

<script>
    import AppLayout from "@/Layouts/AppLayout";
    import Links from "@/Pages/Links/Links";
    import CreateFirstLink from "@/Pages/Links/CreateFirstLink";
    import CreateButton from "@/Pages/Links/CreateButton";
    import CreateCustomLink from "@/Pages/Links/CreateCustomLink";
    import VSectionTitle from "@/Components/SectionTitle";
    import VContainer from "@/Components/Container";
    import VCard from "@/Components/Card";
    import VAvatar from "@/Components/Avatar";
    import VButtonCopy from "@/Components/ButtonCopy";
    import UrlCard from "@/Pages/ShortUrls/UrlCard";
    import MyUrls from "@/Pages/ShortUrls/MyUrls";
    import Create from "@/Pages/ShortUrls/Create";
    import Delete from "@/Pages/ShortUrls/Delete";
    import Copy from "@/Pages/ShortUrls/Copy";

    export default {
        name: "Index",
        components: {
            VButtonCopy,
            VAvatar,
            VCard,
            VContainer,
            VSectionTitle,
            CreateCustomLink,
            CreateButton,
            CreateFirstLink,
            Links,
            AppLayout,
            UrlCard,
            MyUrls,
            Create,
            Delete,
            Copy,
        },

        data() {
            return {
                urls: this.$page.props.urls,
                urlvisit: this.$page.props.urlvisit,
            };
        },
    };
</script>
