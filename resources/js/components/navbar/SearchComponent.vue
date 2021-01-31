<template>
  <div class="relative flex items-center bg-gray-300 hover:bg-gray-400 transition ease-in-out duration-300 justify-start w-auto cursor-pointer rounded-full lg:mr-6 mb-4 lg:mb-0">
    <div @click="show" class="h-10 w-10 rounded-full flex items-center justify-center">
      <svg
        class="w-4 h-4 text-gray-600 fill-current"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="-1 0 136 136.21852"
      >
        <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031" />
      </svg>
    </div>
    <modal
      name="search-modal"
      classes="lg:py-10"
      :adaptive="true"
      height="auto"
      width="100%"
      :max-width="600"
      transition="pop-out"
      :scrollable="true"
      @closed="closed"
    >
      <div class="card card-custom shadow-btn-hover border border-gray-400">
          <h5 class="card-header card-header-custom cursor-default p-0 flex items-center justify-between  text-gray-900 text-lg font-medium bg-white">
            <div class="flex h-full px-4">
              <button @click="type = 'jobs'" :class="type == 'jobs' ? 'border-primary text-primary' : ''" class="transition-all duration-200 bg-transparent focus:outline-none mr-4 py-4 text-base font-light border-b-2 border-transparent text-gray-600">Jobs</button>
              <button @click="type = 'freelancers'" :class="type == 'freelancers' ? 'border-primary text-primary' : ''" class="transition-all duration-200 bg-transparent focus:outline-none py-4 text-base font-light border-b-2 border-transparent text-gray-600">Freelancers</button>
            </div>
          </h5>
          <div @click="focusSearch" class="flex items-center card-body bg-header cursor-default">
            <label for="search-input-modal" class="h-auto w-auto cursor-default">
              <svg
                class="w-5 h-5 ml-4 text-gray-600 fill-current"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="-1 0 136 136.21852"
              >
                <path d="M 93.148438 80.832031 C 109.5 57.742188 104.03125 25.769531 80.941406 9.421875 C 57.851562 -6.925781 25.878906 -1.460938 9.53125 21.632812 C -6.816406 44.722656 -1.351562 76.691406 21.742188 93.039062 C 38.222656 104.707031 60.011719 105.605469 77.394531 95.339844 L 115.164062 132.882812 C 119.242188 137.175781 126.027344 137.347656 130.320312 133.269531 C 134.613281 129.195312 134.785156 122.410156 130.710938 118.117188 C 130.582031 117.980469 130.457031 117.855469 130.320312 117.726562 Z M 51.308594 84.332031 C 33.0625 84.335938 18.269531 69.554688 18.257812 51.308594 C 18.253906 33.0625 33.035156 18.269531 51.285156 18.261719 C 69.507812 18.253906 84.292969 33.011719 84.328125 51.234375 C 84.359375 69.484375 69.585938 84.300781 51.332031 84.332031 C 51.324219 84.332031 51.320312 84.332031 51.308594 84.332031 Z M 51.308594 84.332031" />
              </svg>
            </label>
            <input id="search-input-modal" ref="search" type="text" :placeholder="placeholder" class="input-search-modal flex-1 bg-transparent px-4 py-6 w-full text-sm border-0 focus:outline-none transition duration-100 ease-linear">
          </div>
      </div>
    </modal>
  </div>
</template>

<script>
  export default {
    data () {
      return {
        placeholder: 'eg: Job title, Skills or keyword…',
        type: 'jobs',
      }
    },
    watch: {
      type () {
        if (this.type == 'jobs') {
          this.placeholder = 'eg: Job title, Skills or keyword…'
        } else {
          this.placeholder = 'eg: Name, Skills, Amount, Hours, or keyword…'
        }
      }
    },
    methods: {
      focusSearch () {
        this.$refs.search.focus();
      },
      show () {
        this.showModal(`search-modal`)
      },
      closed () {
        let body = document.querySelector('body')
        body.classList.remove('overflow-hidden')
        this.closeModal(`search-modal`)
      },
    }
  }
</script>


<style lang="scss">
  .input-search-modal {
    &:focus {
      box-shadow: none !important;
    }
  }
</style>
