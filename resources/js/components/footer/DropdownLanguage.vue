<template>
  <div
    v-click-outside="hide"
    class="relative flex"
  >
    <button
      class="flex items-center focus:ring-2 focus:ring-offset-1 focus:ring-offset-blue-100 border-2 py-3 px-5 rounded-none focus:outline-none"
      @click="open = !open"
    >
      <span class="text-sm font-semibold">English</span>
      <span class="ml-3 -mt-2 relative" style="bottom: 1px;">
        <svg class="w-3 text-white fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path fill="currentColor" d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z"></path>
        </svg>
      </span>
    </button>
    <div
      :class="open ? 'translate-y-16 opacity-100' : 'translate-y-14 opacity-0'"
      class="transform transition-all duration-300 ease-in-out float-none absolute right-0 tw-dropdown-language shadow-btn-hover bg-white list-none text-left min-w-10rem py-2 mt-1"
    >
      <a
        href="#"
        class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-600 hover:bg-gray-200 capitalize border-none"
      >普通话</a>
      <a
        href="#"
        class="flex items-center justify-between w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-600 hover:bg-gray-200 capitalize border-none"
      >
        <span>English</span>
        <svg class="w-3 text-primary fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
        </svg>
      </a>
      <a
        href="#"
        class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-600 hover:bg-gray-200 capitalize border-none"
      >Spanish</a>
      <a
        href="#"
        class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-600 hover:bg-gray-200 capitalize border-none"
      >French</a>
      <a
        href="#"
        class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-600 hover:bg-gray-200 capitalize border-none"
      >German</a>
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
    },
    methods: {
      hide () {
        this.open = false
      }
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
