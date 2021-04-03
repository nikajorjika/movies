<template>
    <div class="max-w-screen-2xl mx-auto w-full my-10 text-white">
        <h1 v-if="mainList" class="text-3xl text-current">{{ title }}</h1>
        <h2 v-else class="text-3xl text-current">{{ title }}</h2>
        <div class="grid mt-3 grid-cols-4 gap-6">
            <movie-item
                v-for="movie in movies"
                :key="movie.id"
                :movie="movie"
            />
        </div>
    </div>
</template>

<script>
import MovieItem from "../Movie/MovieItem.vue";
export default {
    components: { MovieItem },
    props: {
        movies: {
            type: Array,
            default: () => []
        },
        title: {
            type: String,
            default: ""
        },
        mainList: {
            type: Boolean,
            default: false
        }
    }
};
</script>

<style lang="scss" scoped></style>
