<template>
    <div class="flex items-center justify-end relative" v-click-outside="hide">
        <a
            href="#"
            class="block text-gray-300 hover:text-red-600"
            @click="toggleSearch"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                width="2rem"
                height="2rem"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="{2}"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                />
            </svg>
        </a>
        <form
            method="get"
            class="absolute top-full right-0"
            :class="[active ? 'block slide-up' : 'hidden']"
        >
            <input
                type="text"
                class="pl-4 pr-10 bg-footer-bg text-gray-200 h-10 w-80 rounded"
                placeholder="Search..."
            />
            <button
                class=" text-gray-300 hover:text-red-600 absolute right-0.5 inset-y-0.5"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    width="2rem"
                    height="2rem"
                    fill="currentColor"
                >
                    <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
                        clip-rule="evenodd"
                    />
                </svg>
            </button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            active: false
        };
    },
    methods: {
        hide() {
            this.active = false;
        },
        toggleSearch() {
            this.active = !this.active;
        }
    }
};
</script>
