<template>
    <div class="container mx-auto px-4 lg:px-6 my-20 flex flex-wrap items-center justify-between">
        <div class="grid grid-cols-1 gap-8">
            <!-- Accordion -->
            <div class="mb-10">
                <h2 class="mb-10 font-semibold text-gray-800 text-2xl">Accordion</h2>
                <accordion>
                    <accordion-item v-for="i in 5" :key="i" :header="'Title of this section: ' + i">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae quis animi rem fuga fugit eum maiores, tenetur dolores iusto similique nemo quos soluta ipsum id doloremque temporibus nihil sunt omnis.
                    </accordion-item>
                </accordion>
            </div>
            
            <!-- Buttons -->
            <div class="mb-10">
                <h2 class="mb-10 font-semibold text-gray-800 text-2xl">Buttons</h2>
                <div class="flex flex-wrap">
                    <div class="mb-2 lg:my-0 w-full lg:w-6/12">
                        <button-base type="primary" size="medium">Primary Button</button-base>
                    </div>
                    <div class="my-2 lg:my-0 w-full lg:w-6/12">
                        <button-base Example-base type="danger" size="medium">Danger Button</button-base>
                    </div>

                    <div class="my-20"></div>
                    
                    <div class="my-2 lg:my-0 w-full lg:w-6/12">
                        <button-base type="default" size="medium">Default Button</button-base>
                    </div>
                    <div class="my-2 lg:my-0 w-full lg:w-6/12">
                        <button-base type="outline" size="medium">Outline Button</button-base>
                    </div>
                    
                    <div class="my-20"></div>

                    <div class="my-2 lg:my-0 w-full lg:w-6/12">
                        <button-base type="outline.darken" size="medium">Outline - Dark Button</button-base>
                    </div>
                    <div class="my-2 lg:my-0 w-full lg:w-6/12">
                        <button-base :disabled="true" type="darken" size="medium">Disabled - Dark Button</button-base>
                    </div>
                </div>
            </div>

             <!-- Table -->
             <div class="mb-20">
                <h2 class="mb-10 font-semibold text-gray-800 text-2xl">Table</h2>
                <table-base>
                    <table-head>
                        <table-row>
                            <table-header>Name</table-header>
                            <table-header>Title</table-header>
                            <table-header>Status</table-header>
                            <table-header>Role</table-header>
                        </table-row>
                    </table-head>

                    <table-body>
                        <table-row>
                            <table-cells>
                              <div class="flex items-center">
                                <div class="flex-shrink-0 h-12 w-12">
                                  <img class="h-12 w-12 rounded-full bg-cover border-4 border-gray-200" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="avatar">
                                </div>
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">Melinda Gates</div>
                                    <div class="text-sm text-gray-500">melinda.gates@microsoft.com</div>
                                </div>
                              </div>
                            </table-cells>
                            <table-cells>
                                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                <div class="text-sm text-gray-500">Optimization</div>
                            </table-cells>
                            <table-cells>
                              <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            </table-cells>
                            <table-cells class="text-sm text-gray-500">
                              Admin
                            </table-cells>
                        </table-row>
                    </table-body>
                </table-base>
            </div>

             <!-- Tabs -->
             <div class="mb-20">
                <h2 class="mb-10 font-semibold text-gray-800 text-2xl">Table</h2>
                <tabs>
                    <tab>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos rem quae commodi dolorem eius quis sequi praesentium sunt corrupti natus aperiam repudiandae mollitia corporis incidunt, aspernatur dicta, placeat tempora blanditiis.
                    </tab>
                </tabs>
            </div>
        </div>
    </div>
</template>

<script>
export default {}
</script>
