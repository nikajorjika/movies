<template>
    <div class="absolute w-1/3 right-0 top-0 h-full overflow-y-auto">
        <div class="">
            <div
                v-for="item in 10"
                :key="item.id"
                class="flex px-5 py-5 bg-gray-900"
            >
                <div class="pr-4 text-gray-300">{{ item }}</div>
                <div class="image h-full w-32">
                    <img
                        class="block h-full w-full object-cover"
                        src="https://static.imovies.cc/movies/covers/367/313/878375313-956cc43cb006d15333ff948a80000e15.jpg"
                        alt=""
                    />
                </div>
                <div class="pl-4 text-gray-300">Episode {{ item }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
