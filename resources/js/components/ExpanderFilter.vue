<template>
  <div class="block mt-8">
    <!-- Separator -->
    <div class="border-t my-4" />
    <div 
      class="flex justify-between items-center cursor-pointer pr-1"
      @click="open = !open"
    >
      <h5 class="font-gotham-rounded text-gray-900 text-sm font-normal">
        {{ name }}
      </h5>
      <div
        class="transform transition duration-300 ease-in-out"
        :class="open ? '-rotate-90' : 'rotate-90'"
      >
        <svg
          class="h-3 fill-current text-gray-600"
          :class="open ? 'text-primary': ''"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 320 512"
        >
          <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
        </svg>
      </div>
    </div>
    <slide-up-down
      class="block relative"
      :active="open"
      :duration="300"
    >
      <div class="pt-4 pb-1">
        <slot />
      </div>
    </slide-up-down>
  </div>
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      required: true
    }
  },
  data () {
    return {
      open: false
    }
  },
  watch: {
    open() {
      this.saveInStorage()
    }
  },
  mounted () {
    this.open = this.open
    this.saveInStorage()
  },
  methods: {
    saveInStorage() {
      // Put a single filter in variable.
      let filter = {}
      filter[this.name] = this.open
      
      // Get latest saved filter.
      let old = this.$storage.get('filter') || []

      if (!this.contains(filter, old)) {
        old.push(filter)
        this.$storage.set('filter', old)
      } else {
        old = this.contains(filter, old)
      }
    }
  }
}
</script>
