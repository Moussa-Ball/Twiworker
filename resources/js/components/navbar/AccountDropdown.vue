<template>
  <div v-click-outside="hideAvatarDropdown" class="lg:z-20 mt-1 relative md-min:flex md-min:items-center md-min:justify-start w-full rounded-full">
    <div @click="open = !open" class="hidden dropdown-avatar cursor-pointer select-none relative z-10 lg:block h-10 w-10 rounded-full overflow-hidden border-4 border-gray-300 focus:outline-none">
      <img class="select-none h-full w-full object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
    </div>
    
    <!-- Dropdown -->
    <!-- style="top: 42px; width: 400px;" class="absolute right-0 mt-4 py-2 bg-white rounded-none shadow-md hidden sm:block" -->
    <div :class="open ? 'lg:block' : 'lg:hidden'" class="w-full lg:w-300px lg:flex-1 lg:absolute lg:right-0 mt-2 -mb-2 lg:mt-4 lg:py-2 bg-white rounded-none lg:shadow-dropdown block tw-account-dropdown">
      <div class="block px-1 lg:px-4 py-2 hover:bg-gray-200 cursor-pointer lg:mx-2 rounded-none flex justify-start items-center transition ease-in-out duration-300">
        <button class="relative z-10 block h-10 w-10 rounded-full overflow-hidden border-4 border-gray-300 focus:outline-none">
          <img class="h-full w-full object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
        </button>
        <div class="flex flex-col justify-start items-start pl-2">
          <span class="select-none antialiased font-gotham-rounded text-link text-gray-600 font-normal" style="font-size: 14px;">Melinda Gates</span>
          <span class="select-none text-gray-500 text-sm">Graphic Designer</span>
        </div>
      </div>

      <hr class="lg:mx-6 my-2">

      <div class="flex items-center justify-between w-auto lg:mx-6 user-presence shadow-dropdown">
        <button @click="status = 'online'" class="w-full h-full px-4 py-2 bg-white border-1 text-sm font-normal border-gray-500 focus:outline-none" :class="status == 'online' ? 'bg-primary text-white' : 'text-gray-800'">Online</button>
        <button @click="status = 'offline'" class="w-full h-full px-4 py-2 bg-white px-2 border-1 text-sm font-normal border-gray-500 focus:outline-none" :class="status == 'offline' ? 'bg-primary text-white' : 'text-gray-800'">Offline</button>
      </div>
      
      <hr class="lg:mx-6 my-2">

      <div class="flex items-center justify-start w-auto px-1 lg:px-4 py-2 hover:bg-gray-200 lg:mx-2 cursor-pointer rounded-none transition ease-in-out duration-300">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
          <svg class="w-4 h-4 text-gray-600 fill-current" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m262.689 176.286c-2.207-.192-4.431-.286-6.689-.286-44.112 0-80 35.888-80 80s35.888 80 80 80c2.258 0 4.482-.094 6.611-.279 41.187-3.386 73.389-38.4 73.389-79.721s-32.202-76.335-73.311-79.714z"/><path d="m495.594 216.407c-10.58-10.58-24.641-16.407-39.594-16.407h-16.299c-3.606-11.863-8.359-23.331-14.212-34.292l11.534-11.534c21.828-21.828 21.83-57.354.001-79.197-10.573-10.574-24.638-16.397-39.604-16.397-14.959 0-29.02 5.823-39.594 16.396l-11.534 11.534c-10.961-5.852-22.429-10.605-34.292-14.212v-16.298c0-26.523-18.847-49.604-44.851-54.887-3.677-.738-7.428-1.113-11.149-1.113-14.953 0-29.014 5.827-39.595 16.407-10.579 10.58-16.405 24.641-16.405 39.593v16.298c-11.863 3.606-23.331 8.359-34.292 14.212l-11.534-11.534c-21.828-21.828-57.354-21.83-79.198 0-10.573 10.574-16.396 24.639-16.396 39.604 0 14.958 5.823 29.02 16.396 39.594l11.534 11.534c-5.853 10.961-10.605 22.43-14.212 34.292h-16.298c-30.879 0-56 25.122-56 56 0 14.952 5.826 29.013 16.406 39.593s24.641 16.407 39.594 16.407h16.299c3.606 11.863 8.359 23.331 14.212 34.292l-11.534 11.534c-21.828 21.828-21.83 57.354-.001 79.197 10.573 10.573 24.639 16.396 39.604 16.396 14.959 0 29.02-5.823 39.594-16.396l11.534-11.534c10.961 5.853 22.429 10.605 34.292 14.212v16.299c0 30.878 25.121 56 56 56 3.721 0 7.472-.375 11.149-1.113.012-.002.023-.005.035-.007 10.773-2.188 20.597-7.474 28.41-15.287 10.58-10.58 16.406-24.641 16.406-39.593v-16.298c11.863-3.606 23.331-8.359 34.292-14.212l11.534 11.534c10.915 10.915 25.251 16.373 39.594 16.371 14.339-.001 28.684-5.458 39.604-16.372 10.572-10.574 16.396-24.639 16.396-39.604 0-14.958-5.823-29.02-16.396-39.594l-11.534-11.534c5.853-10.961 10.605-22.43 14.212-34.292h16.298c30.879 0 56-25.122 56-56 0-14.951-5.826-29.012-16.406-39.592zm-157.37 115.645c-19.093 20.633-44.987 33.259-72.913 35.555-2.972.259-6.13.394-9.311.394-61.757 0-112-50.243-112-112s50.243-112 112-112c3.181 0 6.339.135 9.389.4 27.848 2.289 53.742 14.915 72.835 35.548 19.201 20.749 29.776 47.759 29.776 76.051s-10.575 55.302-29.776 76.052z"/></g></svg>
        </div>
        <span class="pl-3 font-gotham-rounded text-sm text-gray-600 font-medium">Settings</span>
      </div>

      <div class="flex items-center justify-start w-auto px-1 lg:px-4 py-2 hover:bg-gray-200 lg:mx-2 cursor-pointer rounded-none transition ease-in-out duration-300">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
          <svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg>
        </div>
        <span class="pl-3 font-gotham-rounded text-sm text-gray-600 font-medium">Support</span>
      </div>

      <div class="flex items-center justify-start w-auto px-1 lg:px-4 py-2 hover:bg-gray-200 lg:mx-2 cursor-pointer rounded-none transition ease-in-out duration-300">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
          <svg class="w-4 h-4 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>
        </div>
        <span class="pl-3 font-gotham-rounded text-sm text-gray-600 font-medium">Community</span>
      </div>

      <hr class="lg:mx-6 my-2">
      
      <div @click.prevent="logout" class="flex items-center justify-start w-auto px-1 lg:px-4 py-2 hover:bg-gray-200 lg:mx-2 cursor-pointer rounded-none transition ease-in-out duration-300">
        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
          <svg class="w-4 h-4 text-gray-600 fill-current" viewBox="0 0 512.00533 512" xmlns="http://www.w3.org/2000/svg"><path d="m320 277.335938c-11.796875 0-21.332031 9.558593-21.332031 21.332031v85.335937c0 11.753906-9.558594 21.332032-21.335938 21.332032h-64v-320c0-18.21875-11.605469-34.496094-29.054687-40.554688l-6.316406-2.113281h99.371093c11.777344 0 21.335938 9.578125 21.335938 21.335937v64c0 11.773438 9.535156 21.332032 21.332031 21.332032s21.332031-9.558594 21.332031-21.332032v-64c0-35.285156-28.714843-63.99999975-64-63.99999975h-229.332031c-.8125 0-1.492188.36328175-2.28125.46874975-1.027344-.085937-2.007812-.46874975-3.050781-.46874975-23.53125 0-42.667969 19.13281275-42.667969 42.66406275v384c0 18.21875 11.605469 34.496093 29.054688 40.554687l128.386718 42.796875c4.351563 1.34375 8.679688 1.984375 13.226563 1.984375 23.53125 0 42.664062-19.136718 42.664062-42.667968v-21.332032h64c35.285157 0 64-28.714844 64-64v-85.335937c0-11.773438-9.535156-21.332031-21.332031-21.332031zm0 0"/><path d="m505.75 198.253906-85.335938-85.332031c-6.097656-6.101563-15.273437-7.9375-23.25-4.632813-7.957031 3.308594-13.164062 11.09375-13.164062 19.714844v64h-85.332031c-11.777344 0-21.335938 9.554688-21.335938 21.332032 0 11.777343 9.558594 21.332031 21.335938 21.332031h85.332031v64c0 8.621093 5.207031 16.40625 13.164062 19.714843 7.976563 3.304688 17.152344 1.46875 23.25-4.628906l85.335938-85.335937c8.339844-8.339844 8.339844-21.824219 0-30.164063zm0 0"/></svg>
        </div>
        <span class="pl-3 font-gotham-rounded text-sm text-gray-600 font-medium">Logout</span>
      </div>
      <form class="logout-form hidden" action="/logout" method="POST">
        <input type="hidden" name="_token" :value="token">
      </form>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    token: {
      type: String,
      default: ""
    },
  },
  data () {
    return {
      open: false,
      status: 'online'
    }
  },
  methods: {
    hideAvatarDropdown() {
      this.open = false
    },
    logout() {
      document.getElementsByClassName('logout-form')[0].submit();
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
};
</script>


<style lang="scss">
  .tw-account-dropdown-box {
    .tw-account-dropdown {
      transform: translateX(7%);
      &:before {
        content: '';
        position: absolute;
        top: -6px;
        right: 30px;
        border: 6px solid #fff;
        transform: translateX(-40%) rotate(135deg);
        box-shadow: -2px 2px 2px rgba(50, 50, 50, .10);
      }
    }
  }
  
</style>
