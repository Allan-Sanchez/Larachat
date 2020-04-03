<template>
    <div>
        <b-input-group size="sm" class="mb-4">
            <b-form-input class="p-3" type="search" placeholder="Search terms"></b-form-input>
            <b-input-group-prepend is-text>
                <svg  width="20"  viewBox="0 0 48 48"><title>ic_search_48px</title>
                    <g fill="#111111">
                        <path d="M31 28h-1.59l-.55-.55C30.82 25.18 32 22.23 32 19c0-7.18-5.82-13-13-13S6 11.82 6 19s5.82 13 13 13c3.23 0 6.18-1.18 8.45-3.13l.55.55V31l10 9.98L40.98 38 31 28zm-12 0c-4.97 0-9-4.03-9-9s4.03-9 9-9 9 4.03 9 9-4.03 9-9 9z"></path>
                    </g>
                </svg>
            </b-input-group-prepend>
        </b-input-group>

        <div class=" scroll_text scroll_texting">

            <contact-message></contact-message>
            <contact-message></contact-message>
            <contact-message></contact-message>
            <contact-message></contact-message>
            <contact-message></contact-message>
            <contact-message></contact-message>
        </div>

    </div>
</template>


<script>
    export default {
        name: "ListContactMessage",

    }
</script>

<style scoped>

</style>
