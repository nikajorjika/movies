<template>
  <div class="">
    <div class="flex-auto flex flex-col items-center relative">
      <episodes-dropdown-selected
        :text="textLabel"
        :active="dropdownOpen"
        @click="toggleDropdown"
      />
      <episodes-dropdown-list
        v-if="dropdownOpen"
        :list="Array(20).fill({ label: 'NO EPISODES', value: 3 })"
        @change="changeCurrentEpisode"
      />
    </div>
  </div>
</template>

<script>
import EpisodesDropdownList from "components/Player/EpisodesDropdownList.vue";
import EpisodesDropdownSelected from "components/Player/EpisodesDropdownSelected.vue";
export default {
  components: { EpisodesDropdownSelected, EpisodesDropdownList },
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
    changeCurrentEpisode({ value, label }) {
      this.currentEpisode = value;
      this.dropdownOpen = false;
    },
  },
};
</script>
