<template>
  <div>
    <home-slider :slides="slides" />
    <type-one-list title="Movies" :movies="movies" />
  </div>
</template>

<script>
export default {
  components: {
    HomeSlider: () => import("components/Slider/Home/HomeSlider"),
    TypeOneList: () => import("components/Lists/TypeOneList"),
  },
  props: {
    slides: {
      type: Array,
      default: () => [],
    },

    movies: {
      type: Array,
      default: () => [],
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
