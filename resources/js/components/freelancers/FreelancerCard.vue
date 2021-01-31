<template>
  <div>
    <!-- Left Section - CARD -->
    <div
      class="relative flex flex-wrap justify-between border-t p-5 cursor-pointer hover:bg-gray-100 hover:bg-opacity-75"
      @click="show"
    >
      <div class="flex flex-col md:w-12/12 lg:w-9/12 p-1">
        <!-- Photo Profile -->
        <div class="flex items-center">
          <div class="relative rounded-full">
            <img
              class="object-ycover select-none h-20 w-20 border-4 border-gray-300 rounded-full"
              src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80"
              alt="Your avatar">
            <div class="flex items-center justify-center absolute bottom-0 right-0 h-4 w-4 lg:h-5 lg:w-5 mb-1 mr-1 bg-white rounded-full">
              <div class="h-3 w-3 bg-green-500 rounded-full" />
            </div>
          </div>
          <div class="flex flex-col pl-2 leading-6">
            <div class="flex items-center">
              <!-- Freelancer Fullname -->
              <h5 class="text-sm text-gray-800 font-semibold">Melinda Gates</h5>
              
              <!-- Verified Freelancer -->
              <svg class="h-5 w-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.005 23">
                <g transform="translate(0 -0.301)">
                  <path d="M95.76,89.2a6.861,6.861,0,1,0,6.861,6.861A6.869,6.869,0,0,0,95.76,89.2ZM99.2,94.415,95.06,98.321a.4.4,0,0,1-.287.115.407.407,0,0,1-.3-.125l-2.167-2.224a.417.417,0,0,1,.6-.585l1.88,1.932,3.843-3.624a.417.417,0,1,1,.574.606Zm0,0" transform="translate(-84.257 -84.257)" fill="#293fdf"/>
                  <path d="M21.355,14.3l1.65-2.5-1.65-2.5a.422.422,0,0,1-.068-.251l.167-3L18.786,4.7A.412.412,0,0,1,18.6,4.52L17.257,1.852l-3,.167a.421.421,0,0,1-.251-.068L11.5.3,9,1.951a.42.42,0,0,1-.25.068l-3-.167L4.4,4.52a.412.412,0,0,1-.183.183L1.551,6.049l.167,3A.423.423,0,0,1,1.65,9.3L0,11.8l1.65,2.5a.422.422,0,0,1,.068.251l-.167,3L4.219,18.9a.412.412,0,0,1,.183.183L5.749,21.75l3-.167h.021a.441.441,0,0,1,.23.068l2.5,1.65,2.5-1.65a.423.423,0,0,1,.25-.068l3,.167,1.347-2.668a.412.412,0,0,1,.183-.183l2.668-1.347-.167-3a.525.525,0,0,1,.078-.251ZM11.5,19.5a7.7,7.7,0,1,1,7.7-7.7,7.7,7.7,0,0,1-7.7,7.7Zm0,0" fill="#293fdf"/>
                </g>
              </svg>

              <!-- Badge -->
              <div class="block ml-2 bg-gray-200 text-xs  text-primary rounded-sm px-2">
                Highest Rated
              </div>
            </div>

            <!-- Freelancer Tagline -->
            <span class="block text-sm text-gray-700 mt-1">Full-Stack Web Developer | Laravel | Vue.js</span>
            
            <!-- Specifications -->
            <freelancer-specifications></freelancer-specifications>
          </div>
        </div>
        
        <div class="sm:flex sm:flex-col md:hidden w-full">
          <!-- Specifications -->
          <freelancer-specifications class="sm:flex md:hidden"></freelancer-specifications>
        </div>

        <p class="mt-5 text-sm text-gray-900  font-light leading-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique beatae quisquam id necessitatibus nulla? Laboriosam maxime numquam nostrum cum laudantium distinctio nobis velit voluptatum quasi inventore, nisi exercitationem voluptatibus dolorum?
        </p>
        <div class="flex flex-wrap items-baseline mt-3">
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-2 rounded-sm">Node.js</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-2 rounded-sm">Webpack</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-2 rounded-sm">Laravel</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-2 rounded-sm">PHP</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-2 rounded-sm">MySQL</div>
          <a href="javascript:void;" class="text-primary  text-sm mt-2 hover:underline">more</a>
        </div>
      </div>

      <!-- Right Section - CARD -->
      <div class="flex items-center justify-center lg:block w-full lg:w-3/12 before:empty-content before:h-full before:block before:absolute before:top-0 lg:before:border-l border-t lg:border-none mt-4 lg:mt-0 pt-4 lg:pt-0">
        <div class="lg:pl-4 w-full">
          <div class="flex flex-row items-center justify-center">
            <button class="bg-gray-200 flex items-center justify-center h-39px w-39px rounded-full hover:bg-gray-300 focus:outline-none">
              <svg
                class="w-3 h-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16"
              >
                <path
                  d="M11.878,8.515H10L10.939,0h.939l1.565,4.258Z"
                  transform="translate(-9.687)"
                  fill="#b1b1b1"
                />
                <rect
                  width="8"
                  height="9"
                  transform="translate(8 3)"
                  fill="#b1b1b1"
                />
                <path
                  d="M203.818,244.347a1.409,1.409,0,1,1-2.818,0V242S203.818,241.968,203.818,244.347Z"
                  transform="translate(-194.707 -234.423)"
                  fill="#b1b1b1"
                />
                <path
                  d="M75.51,0H70V8.515h5.51a1.413,1.413,0,0,1,1.409,1.409V1.409A1.413,1.413,0,0,0,75.51,0Z"
                  transform="translate(-67.809)"
                  fill="#b1b1b1"
                />
                <rect
                  width="1"
                  height="16"
                  fill="#b1b1b1"
                />
              </svg>
            </button>
            <button class="ml-4 bg-gray-200 flex items-center justify-center h-39px w-39px rounded-full hover:bg-gray-300 focus:outline-none">
              <svg
                class="w-3 h-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16.732 16.035"
              >
                <path
                  d="M16.688,6.555a.888.888,0,0,0-.765-.611l-4.83-.439L9.184,1.036a.89.89,0,0,0-1.636,0L5.639,5.506.808,5.944A.89.89,0,0,0,.3,7.5l3.651,3.2L2.877,15.443A.889.889,0,0,0,4.2,16.4l4.165-2.49L12.53,16.4a.89.89,0,0,0,1.324-.962L12.777,10.7l3.651-3.2a.89.89,0,0,0,.259-.945ZM8.446,13.866"
                  transform="translate(0 -0.496)"
                  fill="#B1B1B1"
                />
              </svg>
            </button>
          </div>
          <div class="flex items-center justify-center">
            <strong class=" pt-5 text-sm text-gray-800 font-medium">$20 - $40</strong>
          </div>
          <div class="flex items-center justify-center">
            <span class="pt-2 text-sm text-gray-700  font-light">Hourly Rate</span>
          </div>
          <div class="md:pt-6 pt-4 flex items-center justify-center">
            <vue-circle
              class="flex text-sm text-gray-700  font-light leading-4"
              :progress="75"
              :scale="100"
              :precision="0"
              :size="90"
              :reverse="false"
              line-cap="round"
              :fill="'#293fdf'"
              empty-fill="#e0e0e0"
              :animation-start-value="0.0"
              :start-angle="0"
              insert-mode="append"
              :thickness="5"
              :show-percent="true"
            >
              <p>Success</p>
            </vue-circle>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
import FreelancerSpecifications from '../freelancers/FreelancerSpecifications'
export default {
  components: {
    'freelancer-specifications': FreelancerSpecifications
  },
  methods: {
    show() {}
  }
}
</script>
