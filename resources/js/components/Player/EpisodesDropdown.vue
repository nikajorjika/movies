<template>
  <div v-click-outside="handleClose">
    <div class="flex-auto flex flex-col items-center relative">
      <episodes-dropdown-selected
        :text="textLabel"
        :active="dropdownOpen"
        @click="toggleDropdown"
      />
      <episodes-dropdown-list
        v-if="dropdownOpen"
        :list="Array(20).fill({ label: 'NO EPISODES', value: 3 })"
        @change="handleCurrentEpisodeChange"
      />
    </div>
  </div>
</template>

<script>
import EpisodesDropdownList from "components/Player/EpisodesDropdownList.vue";
import EpisodesDropdownSelected from "components/Player/EpisodesDropdownSelected.vue";
export default {
  components: { EpisodesDropdownSelected, EpisodesDropdownList },
  props: {
    episodeList: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      currentEpisode: 1,
      dropdownOpen: false,
    };
  },
  computed: {
    textLabel() {
      return `${this.currentEpisode} Episode`;
    },
  },
  methods: {
    toggleDropdown() {
      this.dropdownOpen = !this.dropdownOpen;
    },
    handleCurrentEpisodeChange({ value, label }) {
      this.currentEpisode = value;
      this.dropdownOpen = false;
    },
    handleClose() {
      this.dropdownOpen = false;
    },
  },
};
</script>
