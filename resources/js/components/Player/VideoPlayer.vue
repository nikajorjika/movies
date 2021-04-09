<template>
    <div class="video-player w-full relative ">
        <div class="absolute inset-0">
            <vue-plyr :options="options">
                <video
                    controls
                    crossorigin
                    playsinline
                    data-poster="poster.jpg"
                >
                    <source :src="source" type="video/mp4" />
                </video>
            </vue-plyr>
        </div>
    </div>
</template>

<script>
const VuePlyr = () => import("vue-plyr");
import "vue-plyr/dist/vue-plyr.css";

export default {
    components: {
        VuePlyr
    },
    props: {
        source: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            options: {
                seekTime: 5
            }
        };
    }
};
</script>

<style lang="scss" scoped>
.video-player {
    padding-top: 56.25%;
    .progress-bar {
        opacity: 0;
    }
    &:hover {
        .progress-bar {
            opacity: 1;
        }
    }
}
</style>
