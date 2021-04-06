<template>
    <div
        class="button-wrapper absolute inset-0 flex justify-center items-center cursor-pointer"
        :class="{ animating: animating }"
        @click="handleClick"
    >
        <span
            v-if="!playing"
            class="icon text-green-700 hover:text-green-900 opacity-0"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-20 w-20"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="{2}"
                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"
                />
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="{2}"
                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                />
            </svg>
        </span>
        <span v-else class="icon text-green-700 hover:text-green-900 opacity-0">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-20 w-20"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    strokeWidth="{2}"
                    d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"
                />
            </svg>
        </span>
    </div>
</template>
<script>
export default {
    props: {
        playing: {
            type: Boolean,
            required: true
        }
    },
    data() {
        return {
            animating: false
        };
    },
    methods: {
        handleClick() {
            this.$emit("update:playing", !this.playing);
            this.animating = true;
            setTimeout(() => {
                this.animating = false;
            }, 500);
        }
    }
};
</script>
<style lang="scss" scoped>
.button-wrapper {
    &.animating {
        .icon {
            animation: fadeout 0.5s linear 1 normal forwards;
        }
    }
}

@keyframes fadeout {
    0% {
        opacity: 1;
    }

    to {
        opacity: 0;
        transform: scale(2);
    }
}
</style>
