<template functional>
  <button
    class="flex justify-center items-center w-32 rounded border-gray-400 border bg-gray-700 hover:bg-gray-500 transition text-white"
    v-bind="data.attrs"
    v-on="listeners"
  >
    <slot />
  </button>
</template>
