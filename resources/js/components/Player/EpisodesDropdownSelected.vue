<template functional>
  <div
    class="bg-gray-700 cursor-pointer p-1 flex items-center text-gray-400 hover:text-white border-gray-400 border rounded"
    v-bind="data.attrs"
    v-on="listeners"
  >
    <div
      class="w-32 whitespace-nowrap text-current hover:text-white px-1 overflow-hidden overflow-ellipsis"
    >
      {{ props.text }}
    </div>
    <div class="w-8 py-1 pl-2 pr-1 border-l flex items-center border-current">
      <button class="cursor-pointer w-6 h-6 outline-none focus:outline-none">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="100%"
          height="100%"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="feather rotate-180 feather-chevron-up w-4 h-4"
          :class="{ transform: !props.active }"
        >
          <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
      </button>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
</style>
