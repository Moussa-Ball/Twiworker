<template>
  <li class="lg:z-10 font-gotham-rounded uppercase border-b lg:border-none border-gray-200 relative" @mouseover="open = true" @mouseleave="open = false">
    <div class="flex justify-between items-center">
      <a 
        class="block lg:inline-block text-gray-600 text-link px-0 lg:px-4 py-4 dropdown-toggle" 
        :class="open || active ? 'text-primary': ''" 
        :href="link"
      >
        {{ name }}
      </a>
      <div class="lg:hidden" :class="open ? 'rotate-chevron' : 'unrotate-chevron'">
        <svg class="h-4 fill-current text-gray-600" :class="open ? 'text-primary': ''" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
        </svg>
      </div>
    </div>
    
    <div class="hidden lg:block absolute w-full z-10 cursor-pointer">&nbsp;</div>
    <div class="lg:hidden static float-none lg:absolute top-0 lg:shadow-dropdown bg-white list-none text-left float-left min-w-10rem py-2 lg:mt-12 -mt-4">
      <slide-up-down class="w-full lg:flex lg:items-center lg:w-auto lg:hidden" :active="open" :duration="300">
        <slot />
      </slide-up-down>
    </div>
    
    <div :class="open ? 'lg:block' : 'lg:hidden'" class="hidden tw-dropdown-menu static float-none lg:absolute top-0 lg:shadow-dropdown bg-white list-none text-left float-left min-w-10rem py-3 lg:py-2 lg:mt-12 -mt-4">
      <slot />
    </div>
  </li>
</template>

<script>
export default {
  // eslint-disable-next-line vue/require-prop-types
  props: ["name", "link", 'active'],
  data () {
    return {
      open: false
    }
  },
  methods: {
    toggle () {
      if (this.open) {
        this.open = false
      }
    }
  }
}
</script>

<style lang="scss">
  .rotate-chevron {
    transform: rotate(90deg);
    transition: transform .3s;
  }

  .unrotate-chevron {
    transform: rotate(0deg);
    transition: transform .3s;
  }

  .tw-dropdown-menu {
    &:before {
      content: '';
      position: absolute;
      top: -6px;
      left: 30px;
      border: 6px solid #fff;
      transform: translateX(-40%) rotate(135deg);
      box-shadow: -2px 2px 2px rgba(50, 50, 50, .10);
    }
  }
</style>
