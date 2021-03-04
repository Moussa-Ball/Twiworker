<template>
    <button :class="styles" class="rounded-sm text-center text-sm lg:mt-0 font-medium focus:outline-none transition duration-300 ease-in-out" :disabled="disabled == true">
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: 'button-base',
    props: {
        disabled: {
            type: Boolean,
            required: false
        },
        type: {
            type: String,
            required: true,
            default: function () {
                return ['primary', 'danger', 'default', 'outline', 'outline.darken', 'darken'];
            }
        },
        size: {
            type: String,
            required: true,
            default: function () {
                return ['small', 'medium', 'large'];
            }
        }
    },
    computed: {
        styles () {
            let styles = []
            
            /*----------------------------------------------------*/
            /*-----------------Type of button---------------------*/
            /*----------------------------------------------------*/
            if (this.type == "primary")
                styles.push("bg-primary text-white focus:ring-4 focus:ring-offset focus:ring-blue-400 shadow-dropdown hover:shadow-btn-hover")

            if (this.type == "danger")
                styles.push("bg-red-600 text-white focus:ring-4 focus:ring-offset focus:ring-red-400 shadow-dropdown hover:shadow-btn-hover")

            if (this.type == "default")
                styles.push("bg-white text-primary focus:ring-4 focus:ring-offset focus:ring-blue-400 shadow-dropdown hover:shadow-btn-hover")
            
            if (this.type == "outline")
                styles.push("bg-transparent text-primary border border-primary focus:ring-4 focus:ring-offset focus:ring-blue-400")
            
            if (this.type == "outline.darken")
                styles.push("bg-transparent text-gray-800 border border-gray-800 focus:ring-4 focus:ring-offset focus:ring-gray-400")

            if (this.type == "darken")
                styles.push("bg-gray-800 text-white focus:ring-4 focus:ring-offset focus:ring-gray-400 shadow-dropdown hover:shadow-btn-hover")

            if (!this.disabled) {
                styles.push("hover:text-opacity-75")
            } else {
                styles.push("opacity-75 cursor-default")
            }


            /*------------------------------------------*/
            /*-----------------SIZE---------------------*/
            /*------------------------------------------*/
            if (this.size == "large")
                styles.push("px-4 py-4")

            if (this.size == "medium")
                styles.push("px-4 py-3")

            if (this.size == "small")
                styles.push("px-3 py-2")

            return styles
        }
    }
}
</script>
