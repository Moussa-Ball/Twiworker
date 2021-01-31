<template>
  <div class="flex items-center text-sm text-gray-600 font-normal ml-6">
    Sort By: 
    <div
      v-click-outside="hide"
      class="relative flex"
    >
      <div
        class="flex justify-center items-center py-3 ml-1 rounded-none focus:outline-none cursor-pointer"
        @click="open = !open"
      >
        <span class="text-gray-800 font-semibold cursor-pointer">Newest</span>
        <span class="pl-2 ml-2 mb-1 transform rotate-180">
          <svg class="h-3 fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path d="M279 224H41c-21.4 0-32.1-25.9-17-41L143 64c9.4-9.4 24.6-9.4 33.9 0l119 119c15.2 15.1 4.5 41-16.9 41z" />
          </svg>
        </span>
      </div>
      <div
        :class="open ? 'block' : 'hidden'"
        class="float-none absolute right-0 tw-dropdown-language shadow-dropdown bg-white list-none text-left min-w-10rem py-2"
      >
        <a
          href="#"
          class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-700 hover:bg-gray-200 capitalize border-none"
        >Relevance</a>
        <a
          href="#"
          class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-700 hover:bg-gray-200 capitalize border-none"
        >Newest</a>
        <a
          href="#"
          class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-700 hover:bg-gray-200 capitalize border-none"
        >Oldest</a>
        <a
          href="#"
          class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent text-gray-700 hover:bg-gray-200 capitalize border-none"
        >Random</a>
      </div>
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
    transform: translateY(20%);
    &:before {
      content: '';
      margin-right: 26px;
      position: absolute;
      top: -6px;
      right: 12px;
      border: 6px solid #fff;
      transform: translateX(-40%) rotate(135deg);
      box-shadow: -2px 2px 2px rgba(50, 50, 50, .10);
    }
  }
</style>
