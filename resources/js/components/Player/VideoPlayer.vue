<template>
    <div class="video-player w-full relative ">
        <div class="absolute inset-0">
            <video
                ref="VideoPlayer"
                width="100%"
                height="100%"
                class="block w-full h-full object-contain bg-black z-10"
            >
                <source
                    src="https://www.w3schools.com/html/mov_bbb.mp4"
                    type="video/mp4"
                />
                <source
                    src="https://www.w3schools.com/html/mov_bbb.ogg"
                    type="video/ogg"
                />
                Your browser does not support the video tag.
            </video>
            <play-pause-button class="z-20" :playing.sync="playing" />
            <progress-bar
                class="progress-bar"
                :playing.sync="playing"
                :played="played"
                :duration="duration"
                @skip-to="handleSkipTo"
            />
        </div>
    </div>
</template>

<script>
import PlayPauseButton from "./PlayPauseButton";
import ProgressBar from "./ProgressBar";
export default {
    components: { PlayPauseButton, ProgressBar },
    data() {
        return {
            playing: false,
            duration: 0,
            played: 0,
            videoNode: null
        };
    },
    mounted() {
        this.videoNode = this.$refs.VideoPlayer;
        this.regiterVideoLoadedEvent();
    },
    watch: {
        playing: {
            handler: "handlePlayPause",
            immediate: false
        }
    },
    methods: {
        handlePlayPause(playing) {
            if (playing) {
                this.$refs.VideoPlayer.play();
            } else {
                this.$refs.VideoPlayer.pause();
            }
        },
        regiterVideoLoadedEvent() {
            this.videoNode.addEventListener(
                "loadeddata",
                this.onVideoLoaded,
                false
            );

            this.videoNode.addEventListener(
                "timeupdate",
                this.seekTimeUpdate,
                false
            );
        },
        seekTimeUpdate() {
            this.played = this.videoNode.currentTime;
        },
        onVideoLoaded() {
            this.duration = this.$refs.VideoPlayer.duration;
        },
        handleSkipTo(seconds) {
            console.log("go to seconds" + seconds);
        }
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
