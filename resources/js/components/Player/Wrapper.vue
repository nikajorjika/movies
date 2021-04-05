<template>
    <div class="flex relative">
        <div class="w-2/3">
            <video-player />
        </div>
        <episode-list-wrapper />
    </div>
</template>

<script>
import EpisodeListWrapper from "./EpisodeListWrapper.vue";
import VideoPlayer from "./VideoPlayer.vue";

export default {
    components: { VideoPlayer, EpisodeListWrapper }
};
</script>

<style lang="scss" scoped></style>
