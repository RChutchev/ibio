<template>
    <div>
        <url-card v-for="(url, index) in urls"
                :url="url"
                :index="index"
                :key="url.id" 
            />
    </div>
</template>

<script>
import UrlCard from '@/Pages/ShortUrls/UrlCard';

export default {
    name: "MyUrls",
    components: {
        UrlCard,
    },
    data() {
        return {
            urls: this.$page.props.urls,
        };
    },
}
</script>