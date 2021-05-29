<template>
  <div
    class="absolute mt-2 shadow z-40 top-full min-w-full rounded border border-gray-500 max-h-60 overflow-y-auto"
  >
    <div
      v-for="(item, index) in list"
      :key="index"
      class="py-2 px-4 text-gray-200 bg-gray-700 hover:bg-gray-800 cursor-pointer border-b border-gray-500"
      @click="$emit('change', item)"
    >
      {{ item.label }}
    </div>
  </div>
</template>
<script>
export default {
  props: {
    list: {
      type: Array,
      default: () => [{ label: "NO EPISODES", value: null }],
    },
  },
};
</script>
