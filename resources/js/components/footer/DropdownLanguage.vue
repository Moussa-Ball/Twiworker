<template>
  <div v-click-outside="hide" class="relative flex">
    <button @click="open = !open" class="flex items-center border-2 py-3 px-4 rounded-none focus:outline-none">
      <span class="text-link">English</span>
      <span class="pl-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="13.389" height="7.865" viewBox="0 0 13.389 7.865">
          <g transform="translate(0 7.865) rotate(-90)">
            <g transform="translate(0 0)">
              <path d="M104.123,6.7l5.009-5.009a.734.734,0,0,0,0-1.036l-.439-.439a.734.734,0,0,0-1.036,0l-5.964,5.964a.739.739,0,0,0,0,1.039l5.958,5.958a.734.734,0,0,0,1.036,0l.439-.439a.733.733,0,0,0,0-1.036Z" transform="translate(-101.48 0)" fill="#fff"/>
            </g>
          </g>
        </svg>
      </span>
    </button>
    <div :class="open ? 'block' : 'hidden'" class="float-none absolute right-0 tw-dropdown-language shadow-dropdown bg-white list-none text-left float-left min-w-10rem py-2">
      <a href="#" class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none">普通话</a>
      <a href="#" class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none">English</a>
      <a href="#" class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none">Spanish</a>
      <a href="#" class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none">French</a>
      <a href="#" class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none">German</a>
    </div>
  </div>
</template>

<script>
  export default {
      data () {
      return {
        open: false
      }
    },
    methods: {
      hide () {
        this.open = false
      }
    },
    created() {
      const handleEscape = (e) => {
        if (e.key === 'Esc' || e.key === 'Escape') {
          this.open = false
        }
      }
      document.addEventListener('keydown', handleEscape)
      this.$once('hook:beforeDestroy', () => {
        document.removeEventListener('keydown', handleEscape)
      })
    }
  }
</script>

<style lang="scss">
  .tw-dropdown-language {
    transform: translateY(33%);
    &:before {
      content: '';
      position: absolute;
      top: -6px;
      right: 12px;
      border: 6px solid #fff;
      transform: translateX(-40%) rotate(135deg);
      box-shadow: -2px 2px 2px rgba(50, 50, 50, .10);
    }
  }
</style>
