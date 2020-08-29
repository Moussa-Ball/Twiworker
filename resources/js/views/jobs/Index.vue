<template>
  <div class="container mx-auto px-4 lg:px-6 flex flex-wrap items-center justify-between">
    <div class="flex flex-wrap w-full my-12">
      <!-- COL-3 -->
      <div class="w-full lg:w-3/12">
        <!-- Page title -->
        <h4 class="font-gotham-rounded text-gray-900 font-medium text-xl">News Feed</h4>
        
        <!-- Photo Profile -->
        <div class="flex items-center mt-10">
          <a class="relative" href="#">
            <img class="select-none h-10 w-10 border-4 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
            <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
              <div class="h-2 w-2 bg-green-400 rounded-full"></div>
            </div>
          </a>
          <div class="flex flex-col pl-2 leading-5">
            <a href="#">
              <h5 class="text-sm text-gray-800 font-semibold">Melinda Gates</h5>
              <span class="text-sm text-gray-600">Graphic Designer</span>
            </a>
          </div>
        </div>

        <!-- Shortcuts -->
        <div class="flex flex-col mt-10">
          <h5 class="font-gotham-rounded text-gray-900 text-base font-normal mb-4">Shortcuts</h5>
          <a href="#" class="my-2 text-sm text-gray-600 hover:text-primary hover:underline">Saved Job</a>
          <a href="#" class="my-2 text-sm text-gray-600 hover:text-primary hover:underline">Profile Stats</a>
          <a href="#" class="my-2 text-sm text-gray-600 hover:text-primary hover:underline">Your Submitted Jobs</a>
        </div>

        <!-- Filters -->
        <div class="flex flex-col">
          <h5 class="font-gotham-rounded text-gray-800 text-base font-normal mt-10 mb-2">My Filters</h5>
          <div class="my-4 bg-white w-full py-2 px-6 shadow-dropdown flex justify-between items-center">
            <span class="font-gotham-rounded text-sm text-gray-600">News Feed</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 19.234 19.234">
              <g>
                <path d="M9.617,0a9.617,9.617,0,1,0,9.617,9.617A9.628,9.628,0,0,0,9.617,0Zm5.375,7.086-6.146,6.1a.946.946,0,0,1-1.326.024L4.266,10.244a.978.978,0,0,1-.072-1.35.954.954,0,0,1,1.35-.048l2.579,2.362,5.5-5.5a.971.971,0,0,1,1.374,1.374Z" fill="#53d121"/>
              </g>
            </svg>
          </div>
          <div class="mt-2 mb-4 w-full px-6 flex justify-between items-center">
            <span class="text-sm hover:text-primary text-gray-600 font-normal hover:underline cursor-pointer">U.S only</span>
          </div>
          <div class="mt-2 w-full px-6 flex justify-between items-center">
            <span class="text-sm hover:text-primary text-gray-600 font-normal hover:underline cursor-pointer">Car repair</span>
          </div>
        </div>

        <!-- Summary -->
        <div class="flex flex-col mb-10">
          <h5 class="font-gotham-rounded text-gray-800 text-base font-normal mt-10 mb-4">Summary</h5>

          <div class="flex justify-between items-cemter mt-2 mt-0 px-4 py-3 font-gotham-rounded-book text-sm font-normal text-gray-600 bg-message bg-opacity-20 border-b border-message">
            <div><a href="#" class="hover:underline hover:text-primary focus:outline-none">Credit remaining</a></div>
            <div>140</div>
          </div>
          <div class="flex justify-between items-cemter mt-0 px-4 py-3 font-gotham-rounded-book text-sm font-normal text-gray-600 border-b border-message">
            <div><a href="#" class="hover:underline hover:text-primary focus:outline-none">Submitted jobs</a></div>
            <div>4</div>
          </div>
          <div class="flex justify-between items-cemter mt-0 px-4 py-3 font-gotham-rounded-book text-sm font-normal text-gray-600 bg-message bg-opacity-20">
            <div><a href="#" class="hover:underline hover:text-primary focus:outline-none">Open contracts</a></div>
            <div>2</div>
          </div>
        </div>

        <!-- Messages -->
        <div class="flex flex-col mb-10">
          <h5 class="font-gotham-rounded text-gray-800 text-base font-normal mb-6">Messages</h5>
          
          <div class="flex items-center px-4 py-2 bg-message bg-opacity-20 border-b border-message">
            <a class="relative" href="#">
              <img class="select-none h-10 w-10 border-2 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
              <div class="flex items-center justify-center absolute top-0 right-0 h-2 w-2 -mt-1 p-2 bg-primary text-white text-xs font-medium rounded-full">1</div>
              <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
                <div class="h-2 w-2 bg-green-400 rounded-full"></div>
              </div>
            </a>
            <div class="flex flex-col pl-2 leading-5 w-full">
              <a href="#">
                <div class="flex flex-row items-baseline justify-between">
                  <h5 class="text-sm text-gray-800 font-semibold">Melinda Gates</h5>
                  <span class="text-link font-normal">1 hour ago</span>
                </div>
                <span class="text-sm text-primary font-medium">Hello, I have a job for you.</span>
              </a>
            </div>
          </div>

          <div class="flex items-center px-4 py-2 border-b border-message">
            <a class="relative" href="#">
              <img class="select-none h-10 w-10 border-2 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
              <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
                <div class="h-2 w-2 bg-green-400 rounded-full"></div>
              </div>
            </a>
            <div class="flex flex-col pl-2 leading-5 w-full">
              <a href="#">
                <div class="flex flex-row items-baseline justify-between">
                  <h5 class="text-sm text-gray-600 font-normal">Melinda Gates</h5>
                  <span class="text-link font-normal">1 hour ago</span>
                </div>
                <span class="text-gray-700 text-sm font-medium">I have a job for you.</span>
              </a>
            </div>
          </div>

          <div class="flex items-center px-4 py-2 bg-message bg-opacity-20 border-b border-message">
            <a class="relative" href="#">
              <img class="select-none h-10 w-10 border-2 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
              <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
                <div class="h-2 w-2 bg-green-400 rounded-full"></div>
              </div>
            </a>
            <div class="flex flex-col pl-2 leading-5 w-full">
              <a href="#">
                <div class="flex flex-row items-baseline justify-between">
                  <h5 class="text-sm text-gray-600 font-normal">Melinda Gates</h5>
                  <span class="text-link font-normal">1 hour ago</span>
                </div>
                <span class="text-gray-700 text-sm font-medium">I have a job for you.</span>
              </a>
            </div>
          </div>

          <div class="flex items-center px-4 py-2 border-b border-message">
            <a class="relative" href="#">
              <img class="select-none h-10 w-10 border-2 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
              <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
                <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
              </div>
            </a>
            <div class="flex flex-col pl-2 leading-5 w-full">
              <a href="#">
                <div class="flex flex-row items-baseline justify-between">
                  <h5 class="text-sm text-gray-600 font-normal">Melinda Gates</h5>
                  <span class="text-link font-normal">1 hour ago</span>
                </div>
                <span class="text-gray-700 text-sm font-medium">I have a job for you.</span>
              </a>
            </div>
          </div>

          <div class="flex items-center px-4 py-2 bg-message bg-opacity-20">
            <a class="relative" href="#">
              <img class="select-none h-10 w-10 border-2 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
              <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
                <div class="h-2 w-2 bg-gray-400 rounded-full"></div>
              </div>
            </a>
            <div class="flex flex-col pl-2 leading-5 w-full">
              <a href="#">
                <div class="flex flex-row items-baseline justify-between">
                  <h5 class="text-sm text-gray-600 font-normal">Melinda Gates</h5>
                  <span class="text-link font-normal">1 hour ago</span>
                </div>
                <span class="text-gray-700 text-sm font-medium">I have a job for you.</span>
              </a>
            </div>
          </div>

          <div class="flex justify-center items-center mt-8">
            <a href="#" class="text-primary text-sm hover:underline">See all</a>
          </div>

          <div class="flex flex-col mt-10">
            <h5 class="font-gotham-rounded text-gray-800 text-base font-normal mb-6">Messages</h5>
            <span class="text-sm mb-2">You do not have a message yet.</span>
            <a href="#" class="text-sm text-primary hover:underline">Open Messenger</a>
          </div>
        </div>
      </div>
      
      <!-- COL-9 -->
      <div class="w-full lg:w-9/12 px-0 lg:pl-4">
        <button v-if="false" class="font-gotham-rounded text-sm font-medium text-gray-700 bg-white shadow-dropdown hover:shadow-btn-hover py-3 mb-4 w-full focus:outline-none transition duration-200 ease-in-out">
          New jobs have just been posted. Click to see them.
        </button>
        <div class="bg-white shadow-dropdown">
          <div class="flex py-6 px-6">
            <input type="text" class="flex-1 px-4 py-3 w-full text-sm border focus:outline-none focus:shadow-inner focus:border-primary transition duration-100 ease-linear" placeholder="eg: Job title, Skills or keyword…">
            <button class="bg-primary focus:outline-none flex justify-center items-center px-4 shadow-sm">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <g transform="translate(0 0)">
                  <path d="M17.89,16.83,12.661,11.6A7.139,7.139,0,1,0,11.6,12.661L16.83,17.89a.375.375,0,0,0,.53,0l.53-.53A.375.375,0,0,0,17.89,16.83ZM7.125,12.75A5.625,5.625,0,1,1,12.75,7.125,5.631,5.631,0,0,1,7.125,12.75Z" transform="translate(0 0)" fill="#fff"/>
                </g>
              </svg>
            </button>
          </div>
          <ul>
            <li v-for="i in 5">
              <JobCard :job="job" :key="i" />
            </li>
          </ul>
        </div>
        <!--<div class="w-full flex justify-center mt-10">
          <pagination 
            :data="jobs" 
            @pagination-change-page="getResults"
          />
        </div>-->
      </div>
    </div>
  </div>
</template>

<script>
import JobCard from '../../components/jobs/JobCard'
export default {
  components: {
    JobCard
  },
  data () {
    return {
      job: {
        title: "Developer to build a custom screensaver for MacOS",
        country: "United States",
        city: "New York",
        posted_at: "5 minutes ago",
        payment_type: 'Hourly Rate',
        amount: 75,
        payment_verified: true,
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aperiam temporibus, ipsa dolorum accusamus, impedit quod error quisquam illum earum vero at perspiciatis nulla voluptatum! Doloribus iste voluptatum itaque nulla?",
        skills: [
          'Website',
          'Wordpress',
          'Bug Fixes',
        ],
        bids: 10,
        delivery: "-1 month",
        availibility: "The morning",
        rating: 2.5,
        hire_rating: 78
      },
      jobs: {}
    }
  },
  methods: {
    // eslint-disable-next-line no-unused-vars
    getResults (page = 1) {}
  }
}
</script>
