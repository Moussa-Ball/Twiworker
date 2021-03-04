<template>
    <div :class="[shadow ? 'shadow-dropdown' : '', border ? 'border border-gray-200' : '']" class="w-full bg-white">
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: {
        shadow: {
            type: Boolean,
            default: true
        },
        border: {
            type: Boolean,
            default: false
        }
    },
    name: 'accordion'
}
</script>
