<template>
    <div class="flex py-2 max-w-screen-2xl mx-auto h-full z-10 relative">
        <div class="h-full w-full flex">
            <div class="w-1/2 flex">
                <div class="my-auto">
                    <h2 class="textured-title text-7xl font-extrabold">
                        Pirates of Sea
                    </h2>
                    <div class="flex">
                        <div class="">
                            <ul
                                class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left"
                            >
                                <li>
                                    <i
                                        class="fa fa-star"
                                        aria-hidden="true"
                                    ></i>
                                </li>
                                <li>
                                    <i
                                        class="fa fa-star"
                                        aria-hidden="true"
                                    ></i>
                                </li>
                                <li>
                                    <i
                                        class="fa fa-star"
                                        aria-hidden="true"
                                    ></i>
                                </li>
                                <li>
                                    <i
                                        class="fa fa-star"
                                        aria-hidden="true"
                                    ></i>
                                </li>
                                <li>
                                    <i
                                        class="fa fa-star-half"
                                        aria-hidden="true"
                                    ></i>
                                </li>
                            </ul>
                            <span class="text-white">4.8(lmdb)</span>
                        </div>
                        <div class="mx-3 text-gray-400">
                            1hr : 45mins
                        </div>
                    </div>
                    <div class="my-5 text-gray-400">
                        <p class="max-w-xl">
                            Piracy is an act of robbery or criminal violence by
                            ship or boat-borne attackers upon another ship or a
                            coastal area, typically with the goal of stealing
                            cargo and other valuable items or properties.
                        </p>
                    </div>
                    <div class="flex text-lg">
                        <p class="text-red-700 mr-4">Genres</p>
                        <p class="text-white">
                            <span>Action</span>,
                            <span>Fantasy</span>
                        </p>
                    </div>
                    <button
                        class="bg-red-500 hover:bg-red-700 transition-all text-white py-3 px-5 mt-4 flex justify-center items-center"
                    >
                        <div class="h-6 w-6 mr-2">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
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
                        </div>
                        <span>Play Now</span>
                    </button>
                </div>
            </div>
            <div class="w-1/2"></div>
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
