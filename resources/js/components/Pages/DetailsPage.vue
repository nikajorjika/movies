<template>
  <div class="mt-20 max-w-screen-xl w-full mx-auto px-10">
    <video-player-wrapper :episode-list="episodes" />
    <details-poster-section />
  </div>
</template>

<script>
import DetailsPosterSection from "components/Movie/DetailsPosterSection";
import VideoPlayerWrapper from "components/Player/Wrapper";
export default {
  components: {
    VideoPlayerWrapper,
    DetailsPosterSection,
  },
  props: {
    movie: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      episodes: this.movie.episodes,
    };
  },
};
</script>

<style lang="scss" scoped></style>
