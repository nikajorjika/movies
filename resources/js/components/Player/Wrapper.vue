<template>
    <div class="flex relative">
        <div class="w-2/3">
            <video-player :source="source" :key="key" />
        </div>
        <episode-list-wrapper @changeEpisode="handleSourceChange" />
    </div>
</template>

<script>
import EpisodeListWrapper from "./EpisodeListWrapper.vue";
import VideoPlayer from "./VideoPlayer.vue";

export default {
    components: { VideoPlayer, EpisodeListWrapper },
    data() {
        return {
            source: "/videos/video.mp4",
            key: 1
        };
    },
    methods: {
        handleSourceChange() {}
    }
};
</script>

<style lang="scss" scoped></style>
