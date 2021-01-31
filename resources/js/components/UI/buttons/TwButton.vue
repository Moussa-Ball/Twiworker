<template>
    <button :class="style" class="bg-primary text-white text-center text-sm p-4 mt-8 focus:ring-4 lg:mt-0  font-medium shadow-dropdown hover:shadow-btn-hover hover:text-opacity-75 focus:outline-none transition duration-300 ease-in-out">
        <slot></slot>
    </button>
</template>

<script>
export default {
    name: 'tw-button',
    props: {
        type: {
            type: String,
            required: true,
            default: function () {
                return ['primary'];
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
        style () {
            if (this.type == 'primary') {
                return 'bg-primary'
            }
        }
    }
}
</script>
