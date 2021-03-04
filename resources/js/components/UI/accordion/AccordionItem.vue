<template>
    <div>
        <div v-if="$vnode.key > 1" class="border-b w-full"></div>
        <div :id="open == false ? 'accordion-identifier' : ''" class="flex justify-between items-center cursor-pointer px-10 py-8" @click="show">
            <h5 :class="open ? 'text-primary' : ''" class=" text-gray-500 text-base font-normal">
                {{ header }}
            </h5>
            <div class="mr-2 transform transition duration-300 ease-in-out" :class="open ? '-rotate-90' : 'rotate-90'">
                <svg class="h-4 fill-current text-gray-500" :class="open ? 'text-primary': ''"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 320 512">
                    <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                </svg>
            </div>
        </div>
        
        <slide-up-down class="block relative" :active="open" :duration="300">
            <p class="px-10 pb-8 pt-2 text-sm text-gray-800 leading-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, eius distinctio? Obcaecati repellat vero blanditiis veritatis quos? Ipsam, placeat! Nostrum corrupti debitis sint minus corporis tempora perferendis repellendus porro libero.</p>
        </slide-up-down>
    </div>
</template>

<script>
export default {
    name: 'accordion-item',
    props: {
        header: {
            type: String,
            required: true
        }
    },
    data () {
        return {
            open: false
        }
    },
    methods: {
        show () {
            this.open = !this.open
        }
    }
}
</script>
