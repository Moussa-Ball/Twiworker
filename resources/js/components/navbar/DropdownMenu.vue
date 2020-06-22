<template>
  <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200 relative" @mouseover="open = true" @mouseleave="open = false">
    <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4 dropdown-toggle" :href="link">{{ name }}</a>
    <div :class="open ? 'block' : 'hidden'" class="hidden lg:block absolute w-full z-10 cursor-pointer">&nbsp;</div>
    <div :class="open ? 'block' : 'hidden'" class="static float-none before:hidden lg:absolute top-0 lg:shadow-dropdown bg-white list-none text-left float-left min-w-10rem py-2 mt-12">
      <slot></slot>
    </div>
  </li>
</template>

<script>
export default {
  // eslint-disable-next-line vue/require-prop-types
  props: ["name", "link"],
  data () {
    return {
      open: false
    }
  }
}
</script>
