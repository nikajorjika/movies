<template>
  <div class="flex mt-4">
    <action-button @click="go(-1)">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M11 19l-7-7 7-7m8 14l-7-7 7-7"
        />
      </svg>
      Previous
    </action-button>
    <episodes-dropdown class="mx-2.5" />
    <action-button @click="go(1)">
      Next
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-6 w-6"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M13 5l7 7-7 7M5 5l7 7-7 7"
        />
      </svg>
    </action-button>
  </div>
</template>

<script>
import EpisodesDropdown from "components/Player/EpisodesDropdown.vue";
import ActionButton from "components/Player/ActionButton.vue";

export default {
  components: { ActionButton, EpisodesDropdown },
  methods: {
    go(direction) {
      console.log("CHANGE " + direction);
      this.$emit("change", direction);
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
