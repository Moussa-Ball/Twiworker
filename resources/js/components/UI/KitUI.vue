<template>
    <div class="container mx-auto px-4 lg:px-6 my-20 flex flex-wrap items-center justify-between">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 pr-8">
                <h2 class="mb-20 font-semibold text-gray-800 text-xl">Accordion</h2>
                <accordion>
                    <accordion-item v-for="i in 10" :key="i" :header="'Title of this section: ' + i">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae quis animi rem fuga fugit eum maiores, tenetur dolores iusto similique nemo quos soluta ipsum id doloremque temporibus nihil sunt omnis.
                    </accordion-item>
                </accordion>
            </div>
            <div class="w-full lg:w-6/12">
                <h2 class="mb-20 font-semibold text-gray-800 text-xl">Buttons</h2>
                <tw-button type="primary" size="small">Normal Button</tw-button>
            </div>
        </div>
    </div>
</template>

<script>
export default {}
</script>
