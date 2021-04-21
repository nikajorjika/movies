<template>
    <div class="mt-20 max-w-screen-xl w-full mx-auto px-10">
        <video-player-wrapper />
        <details-poster-section />
    </div>
</template>

<script>
import DetailsPosterSection from "./DetailsPosterSection";
import VideoPlayerWrapper from "components/Player/Wrapper";
export default {
    components: {
        VideoPlayerWrapper,
        DetailsPosterSection
    }
};
</script>

<style lang="scss" scoped></style>
