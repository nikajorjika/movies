<template>
    <div
        ref="progressBar"
        class="progress-bar z-20 transition-all h-10 w-full px-3 absolute bottom-0"
    >
        <div class="relative">
            <div
                ref="railBar"
                class="rail cursor-pointer w-full absolute"
                @mousemove="handleHover"
                @mouseleave="handleLeave"
                @click="goToTime"
            >
                <div
                    ref="mouseover"
                    class="mouseover absolute top-0 bottom-0 left-0"
                ></div>
                <div class="buffered h-full absolute top-0 left-0 bg-red"></div>
                <div
                    class="progress bg-green-700 h-full absolute top-0 left-0 transition-all"
                    :style="{ width: `${percentagePlayed}%` }"
                >
                    <div
                        class="handle absolute -right-1.5 -top-1.5 bg-green-700 rounded-full"
                    ></div>
                </div>
            </div>
        </div>
        <div class="controls flex items-center h-full">
            <div
                class="play cursor-pointer h-7 w-7 text-white hover:text-green-700 transition-all ml-3 mr-5"
                @click="playPause"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        v-if="!playing"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="{2}"
                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"
                    />
                    <path
                        v-if="!playing"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="{2}"
                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                    <path
                        v-if="playing"
                        strokeLinecap="round"
                        strokeLinejoin="round"
                        strokeWidth="{2}"
                        d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                </svg>
            </div>
            <div class="duration text-white">
                {{ timePlayed }} / {{ timeDuration }} / {{ percentagePlayed }}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        playing: {
            type: Boolean,
            required: true
        },
        played: {
            type: Number,
            default: 0
        },
        duration: {
            type: Number,
            default: 0
        }
    },
    data() {
        return {
            leftPosition: 0
        };
    },
    computed: {
        timeDuration() {
            return this.toDateFormat(this.duration);
        },
        timePlayed() {
            return this.toDateFormat(this.played);
        },
        percentagePlayed() {
            console.log(Date.now());
            return parseFloat((this.played / this.duration) * 100).toFixed(2);
        }
    },
    mounted() {
        this.leftPosition = this.$refs.progressBar.getBoundingClientRect().left;
    },
    methods: {
        toDateFormat(seconds) {
            return new Date(seconds * 1000).toISOString().substr(11, 8);
        },
        handleHover(e) {
            const approxWidth =
                parseInt(e.screenX) - parseInt(this.leftPosition) - 10;
            this.$refs.mouseover.style.width = `${approxWidth}px`;
        },
        handleLeave() {
            this.$refs.mouseover.style.width = `0px`;
        },
        goToTime(e) {
            const approxWidth =
                parseInt(e.screenX) - parseInt(this.leftPosition) - 10;
            const fullWidth = this.$refs.railBar.offsetWidth;
            let percentageWidth =
                (approxWidth / fullWidth) * 100 < 100
                    ? (approxWidth / fullWidth) * 100
                    : 100;

            console.log(parseInt(percentageWidth));
        },
        playPause() {
            this.$emit("update:playing", !this.playing);
        }
    }
};
</script>

<style lang="scss" scoped>
.progress-bar {
    background-image: linear-gradient(
        to bottom,
        rgba(51, 51, 51, 0),
        rgba(0, 0, 0, 0.8) 70%,
        var(--mv-black) 100%
    );
    &:hover {
        .buffered {
            background: rgba(255, 255, 255, 1);
        }
    }
    .buffered {
        width: 20%;
        background: rgba(255, 255, 255, 0.4);
    }
    .rail {
        background: rgba(185, 185, 185, 0.3);
        opacity: 0.7;
        height: 4px;
        transition: all 0.2s;
        &:hover {
            height: 7px;
            .handle {
                height: 20px;
                width: 20px;
                top: -7px;
            }
        }
        .handle {
            transition: all 0.2s;
            height: 16px;
            width: 16px;
            top: -6px;
        }
        .mouseover {
            background: rgba(185, 185, 185, 1);
        }
    }
}
</style>
