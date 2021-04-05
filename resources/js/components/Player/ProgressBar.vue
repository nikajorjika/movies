<template>
    <div
        class="progress-bar z-20 transition-all h-10 w-full px-3 absolute bottom-0"
    >
        <div class="rail cursor-pointer w-full h-1 relative">
            <div class="buffered h-full absolute top-0 left-0 bg-red"></div>
            <div class="progress bg-green-700 h-full absolute top-0 left-0">
                <div
                    class="handle absolute -right-1.5 -top-1.5 h-4 w-4 bg-green-700 rounded-full"
                ></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.progress-bar {
    &:hover {
        .buffered {
            background: rgba(255, 255, 255, 1);
        }
        .rail {
            background: rgba(185, 185, 185, 1);
        }
    }
    .buffered {
        width: 20%;
        background: rgba(255, 255, 255, 0.4);
    }
    .progress {
        width: 10%;
    }
    .rail {
        background: rgba(185, 185, 185, 0.3);
        opacity: 0.7;
    }
}
</style>
