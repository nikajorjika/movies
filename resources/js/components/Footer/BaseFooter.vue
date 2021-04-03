<template>
    <footer class="flex mt-auto">
        <div class="mx-auto w-full max-w-screen-2xl py-16">
            <div class="flex">
                <div class="w-1/2">
                    <ul class="text-white flex mb-7">
                        <li
                            v-for="{ name, href } in menu"
                            :key="href"
                            class="mr-5"
                        >
                            <a :href="href">{{ name }}</a>
                        </li>
                    </ul>
                    <p class="text-gray-400 text-sm">
                        © 2021 STREAMIT. All Rights Reserved. All videos and
                        shows on this platform are trademarks of, and all
                        related images and content are the property of, Streamit
                        Inc. Duplication and copy of this is strictly
                        prohibited. All rights reserved.
                    </p>
                </div>
                <div class="ml-auto mr-10">
                    <h6 class="mb-7 text-white">
                        Follow Us :
                    </h6>
                    <ul class="flex">
                        <li v-for="social in socials" :key="social.alt">
                            <a
                                target="_blank"
                                href="#"
                                class="block w-10 h-10 bg-gray-800 rounded-full mr-4 p-3 text-white hover:text-red-500 transition-all"
                            >
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
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                                    />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <h6 class="text-white mb-7">Streamit App</h6>
                    <div class="flex">
                        <a class="mr-5" href="#"
                            ><img
                                src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/022.png"
                                alt="play-store"/></a
                        ><br />
                        <a class="mr-5" href="#"
                            ><img
                                src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/011.png"
                                alt="app-store"
                        /></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    data() {
        return {
            menu: [
                {
                    name: "Terms Of Use",
                    href: "#"
                },
                {
                    name: "Privacy-Policy",
                    href: "#"
                },
                {
                    name: "Blog",
                    href: "#"
                },
                {
                    name: "FAQ",
                    href: "#"
                },
                {
                    name: "Watch List",
                    href: "#"
                }
            ],
            socials: [
                {
                    icon: "",
                    alt: "Facebook"
                },
                {
                    icon: "",
                    alt: "Twitter"
                },
                {
                    icon: "",
                    alt: "G-Plus"
                },
                {
                    icon: "",
                    alt: "Github"
                }
            ]
        };
    }
};
</script>

<style lang="scss" scoped></style>
