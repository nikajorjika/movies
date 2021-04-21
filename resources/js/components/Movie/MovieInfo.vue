<template>
    <div class="flex flex-col px-10 max-w-screen-xl h-full relative">
        <h2 class="textured-title text-7xl font-extrabold mb-5">
            Pirates of Sea
        </h2>
        <div class="flex">
            <div class="">
                <span class="text-white">4.8(lmdb)</span>
            </div>
            <div class="mx-3 text-gray-400">
                1hr : 45mins
            </div>
        </div>
        <div class="my-5 text-gray-400">
            <p class="max-w-xl">
                Piracy is an act of robbery or criminal violence by ship or
                boat-borne attackers upon another ship or a coastal area,
                typically with the goal of stealing cargo and other valuable
                items or properties.
            </p>
        </div>
        <div class="flex text-lg">
            <p class="text-red-700 mr-4">Genres</p>
            <p class="text-white">
                <span>Action</span>,
                <span>Fantasy</span>
            </p>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
.textured-title {
    background: url("../../../images/texture.jpg");
    background-repeat: repeat-x;
    background-position: 100% 100%;
    color: transparent;
    -webkit-font-smoothing: antialiased;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}
</style>
