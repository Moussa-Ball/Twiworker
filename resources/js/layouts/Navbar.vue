<template>
  <nav class="relative flex flex-wrap items-center justify-between w-full bg-white shadow-md lg:px-6 py-4">
    <div class="container mx-auto px-4 lg:px-6 flex flex-wrap items-center justify-between">
      <!-- Logo link -->
      <a
        href="/"
      >
        <svg
          class="h-5"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 147.952 22.096"
        >
          <path
            fill="#293fdf"
            transform="translate(-3.078 21.094)"
            d="M5.922,0h0l4.125-16.281H3.078l1.172-4.8H22.906l-1.187,4.8h-6.75L10.906,0ZM22.3-1.625h0A3.978,3.978,0,0,0,25.641,0h1.781V-.016h1.75l.719-3.062A4.06,4.06,0,0,0,33.969,0h3.5V-.016h4.656l3.844-15.875H40.75L38.031-4.375H35.844a.789.789,0,0,1-.672-.312.862.862,0,0,1-.187-.7l2.563-10.5H32.422l-2.562,10.5a4.771,4.771,0,0,0-.141,1.016H27.5a.789.789,0,0,1-.672-.312.944.944,0,0,1-.187-.7l2.563-10.5H24.078l-2.562,10.5A4.344,4.344,0,0,0,22.3-1.625ZM44.141,0h0l3.938-15.969h5.156L49.359,0Zm4.266-17.344h0l.969-3.75h5.141l-.969,3.75Z"
          />
          <path
            transform="translate(49.250 21.094)"
            d="M.906-1.625h0A3.978,3.978,0,0,0,4.25,0H6.031V-.016h1.75L8.5-3.078A4.06,4.06,0,0,0,12.578,0h3.5V-.016h4.656l3.844-15.875H19.359L16.641-4.375H14.453a.789.789,0,0,1-.672-.312.862.862,0,0,1-.187-.7l2.563-10.5H11.031L8.469-5.391a4.771,4.771,0,0,0-.141,1.016H6.109a.789.789,0,0,1-.672-.312.944.944,0,0,1-.187-.7l2.563-10.5H2.688L.125-5.391A4.344,4.344,0,0,0,.906-1.625ZM29.719-.078h0a18.239,18.239,0,0,0,2.688.047q5.828-.234,8.344-4.844a9.219,9.219,0,0,0,.563-7.453,5.75,5.75,0,0,0-1.8-2.461,6.568,6.568,0,0,0-3.5-1.133,20.944,20.944,0,0,0-2.8-.031,9.054,9.054,0,0,0-8.187,4.8A9.223,9.223,0,0,0,24.469-3.7a5.419,5.419,0,0,0,1.766,2.422A7.406,7.406,0,0,0,29.719-.078Zm5.406-5.312h0a6.185,6.185,0,0,1-3.812.8q-3.281-.266-2.2-3.812a4.235,4.235,0,0,1,1.547-2.234,6.044,6.044,0,0,1,3.813-.8q1.781.156,2.234,1.094a4.007,4.007,0,0,1-.031,2.719A4.157,4.157,0,0,1,35.125-5.391ZM44.609-11.5h0a5.629,5.629,0,0,1,5-4.391h5.047L53.5-11.359H50.75a1.306,1.306,0,0,0-.859.328,1.583,1.583,0,0,0-.5.828L46.906,0H41.844l2.766-11.5ZM57.891,0h0l1.563-7.187L62.172,0h4.656L63.719-8.094l7-7.844H65.125l-4.75,5.328,2.734-10.484H57.984L52.766,0ZM82.938,0h0l1.094-4.531H75.047q-3.062-.109-2.156-3.687a4.254,4.254,0,0,1,1.516-2.25,4.772,4.772,0,0,1,3.031-1.047h3.234L80.344-10.2H76.859a2.445,2.445,0,0,0-1.953,1.156,3.669,3.669,0,0,0-.648,2.078q.023,1.031.789,1.141h9.281l1.391-5.687h0l.031-.156a3.5,3.5,0,0,0-.367-2.789q-.758-1.242-3.148-1.4H77.063a9.237,9.237,0,0,0-8.156,5.047q-1.859,4.125-.562,7.359A5.358,5.358,0,0,0,70.1-1.078a6.333,6.333,0,0,0,3.43,1.016ZM87.7-11.5h0a5.629,5.629,0,0,1,5-4.391H97.75l-1.156,4.531h-2.75a1.306,1.306,0,0,0-.859.328,1.583,1.583,0,0,0-.5.828L90,0H84.938L87.7-11.5Z"
          />      
        </svg>
      </a>

      <!-- Hamburger button to open responsive menu -->
      <div class="md:block lg:hidden bg-white focus:outline-none">
        <tasty-burger-button
          v-on:toggle="open = !open"
          type="slider"
          :rounded="false"
          size="s"
          color="#4a5568"
          activeColor="#4a5568"
        />
      </div>

      <!-- For responsive menu when the user is not authenticated. -->
      <slide-up-down v-if="!auth" class="w-full lg:flex lg:items-center lg:w-auto lg:hidden" :active="open" :duration="300">
        <ul class="lg:flex lg:items-center md:block pl-0 m-0 leading-none mr-auto pt-4 lg:pt-0">
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" :class="{'text-primary': loginRouteActive}" :href="loginRoute">Sign in</a>
          </li>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" :class="{'text-primary': registerRouteActive}" :href="registerRoute">Sign up</a>
          </li>
          <li class="font-gotham-rounded uppercase lg:normal-case">
            <a class="block lg:inline-block text-gray-600 hover:text-primary lg:hover:text-white lg:hover:bg-opacity-95 trasition duration-300 lg:bg-primary lg:shadow-dropdown lg:text-white text-link px-0 lg:px-4 lg:py-3 py-4 lg:ml-4 font-normal" href="#">Post a Job</a>
          </li>
        </ul>
      </slide-up-down>

      <!-- For responsive menu when the user is authenticated. -->
      <slide-up-down v-if="auth" class="w-full lg:flex lg:items-center lg:w-auto lg:hidden" :active="open" :duration="300">
        <ul class="lg:flex lg:items-center md:block pl-0 m-0 leading-none mr-auto pt-4 lg:pt-0">
          <DropdownMenu name="Jobs" link="#">
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">News Feed</a>
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">Search Job</a>
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">My biddings</a>
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">My Contracts</a>
          </DropdownMenu>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" href="#">Freelancers</a>
          </li>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" href="#">Profile</a>
          </li>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" href="#">Reports</a>
          </li>
        </ul>

        <ul class="lg:flex lg:items-center md:block pl-0 m-0 leading-none mr-auto pt-4 lg:pt-0">
          <div class="flex justify-between items-center border-b lg:border-none border-gray-200 pr-2">
            <SearchComponent />
            <navicon type="message" :counter="95" />
            <navicon type="notification" :counter="70" :last="true"/>
          </div>
          <AccountDropdown />
        </ul> 
      </slide-up-down>

      <!-- Menu when the user is on large screen and he is authenticated. -->
      <div v-if="auth" class="hidden w-full lg:flex lg:items-center lg:w-auto pt-4 lg:pt-0" :class="open ? 'block': 'hidden'">
        <ul class="lg:flex lg:items-center md:block pl-0 m-0 leading-none mr-auto">
          <DropdownMenu name="Jobs" link="#">
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">News Feed</a>
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">Search Job</a>
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">My biddings</a>
            <a class="block w-full px-4 py-2 clear-both font-medium text-sm bg-transparent font-gotham-rounded-book text-gray-700 hover:bg-gray-200 capitalize border-none" href="#">My Contracts</a>
          </DropdownMenu>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" href="#">Freelancers</a>
          </li>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" href="#">Profile</a>
          </li>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" href="#">Reports</a>
          </li>
        </ul>
      </div>

      <!-- Menu when the user is on large screen and he isn't authenticated. -->
      <div v-if="!auth" class="hidden w-full lg:flex lg:items-center lg:w-auto pt-4 lg:pt-0">
        <ul class="lg:flex lg:items-center md:block pl-0 m-0 leading-none mr-auto">
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" :class="{'text-primary': loginRouteActive}" :href="loginRoute">Sign in</a>
          </li>
          <li class="font-gotham-rounded uppercase border-b lg:border-none border-gray-200">
            <a class="block lg:inline-block text-gray-600 hover:text-primary text-link px-0 lg:px-4 py-4" :class="{'text-primary': registerRouteActive}" :href="registerRoute">Sign up</a>
          </li>
          <li class="font-gotham-rounded uppercase lg:normal-case">
            <a class="block lg:inline-block text-gray-600 hover:text-primary lg:hover:text-white lg:hover:bg-opacity-95 lg:hover:shadow-btn-hover trasition duration-300 lg:bg-primary lg:shadow-dropdown lg:text-white text-link px-0 lg:px-4 lg:py-3 py-4 lg:ml-4 font-normal" href="#">Post a Job</a>
          </li>
        </ul>
      </div>

      <div v-if="auth" class="hidden w-full lg:flex lg:items-center lg:w-auto pt-4 lg:py-0" :class="open ? 'block': 'hidden'">
        <ul class="lg:flex lg:items-center md:block pl-0 m-0 leading-none mr-auto pb-4 lg:py-0">
          <div class="flex justify-between items-center border-b lg:border-none border-gray-200">
            <SearchComponent/>
            <navicon type="message" :counter="95" />
            <navicon type="notification" :counter="70" :last="true"/>
          </div>
          <AccountDropdown class="tw-account-dropdown-box" />
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import Navicon from '../components/navbar/Navicon'
import DropdownMenu from '../components/navbar/DropdownMenu'
import AccountDropdown from "../components/navbar/AccountDropdown"
import SearchComponent from "../components/navbar/SearchComponent"
export default {
  components: {
    Navicon,
    DropdownMenu,
    AccountDropdown,
    SearchComponent,
  },
  props: {
    auth: Boolean,
    token: {
      type: String,
      default: ""
    },
    loginRoute: {
      type: String,
      default: "/login"
    },
    loginRouteActive: {
      type: Boolean,
      default: false
    },
    registerRoute: {
      type: String,
      default: "/register"
    },
    registerRouteActive: {
      type: Boolean,
      default: false
    },
  },
  data() {
    return {
      open: false,
    };
  }
};
</script>
