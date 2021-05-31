<template>
  <div class="flex flex-col relative">
    <video-player :source="source" :key="key" />
    <control-wrapper
      :episode-list="episodeList"
      @changeEpisode="handleSourceChange"
    />
  </div>
</template>

<script>
import ControlWrapper from "components/Player/ControlWrapper.vue";
import VideoPlayer from "components/Player/VideoPlayer.vue";

export default {
  components: { VideoPlayer, ControlWrapper },
  props: {
    episodeList: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      source: "/videos/video.mp4",
      key: 1,
    };
  },
  methods: {
    handleSourceChange() {},
  },
};
</script>

<style lang="scss" scoped></style>
