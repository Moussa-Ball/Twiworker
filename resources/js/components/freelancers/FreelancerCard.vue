<template>
  <div>
    <div
      class="relative flex flex-wrap justify-between border-t p-5 cursor-pointer hover:bg-gray-100 hover:bg-opacity-75"
      @click="show"
    >
      <div class="flex flex-col md:w-12/12 lg:w-9/12 p-1">
        <!-- Photo Profile -->
        <div class="flex items-center">
          <a
            class="relative"
            href="#"
          >
            <img
              class="select-none h-20 w-20 border-4 border-gray-300 object-cover rounded-full"
              src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80"
              alt="Your avatar"
            >
            <div class="flex items-center justify-center absolute bottom-0 right-0 h-5 w-5 mb-1 mr-1 bg-white rounded-full">
              <div class="h-3 w-3 bg-green-500 rounded-full" />
            </div>
          </a>
          <div class="flex flex-col pl-2 leading-6">
            <div class="flex items-center">
              <!-- Freelancer Fullname -->
              <h5 class="text-sm text-gray-800 font-semibold">Melinda Gates</h5>
              
              <!-- Verified Freelancer -->
              <svg class="h-5 w-5 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.005 23">
                <g transform="translate(0 -0.301)">
                  <path d="M95.76,89.2a6.861,6.861,0,1,0,6.861,6.861A6.869,6.869,0,0,0,95.76,89.2ZM99.2,94.415,95.06,98.321a.4.4,0,0,1-.287.115.407.407,0,0,1-.3-.125l-2.167-2.224a.417.417,0,0,1,.6-.585l1.88,1.932,3.843-3.624a.417.417,0,1,1,.574.606Zm0,0" transform="translate(-84.257 -84.257)" fill="#293fdf"/>
                  <path d="M21.355,14.3l1.65-2.5-1.65-2.5a.422.422,0,0,1-.068-.251l.167-3L18.786,4.7A.412.412,0,0,1,18.6,4.52L17.257,1.852l-3,.167a.421.421,0,0,1-.251-.068L11.5.3,9,1.951a.42.42,0,0,1-.25.068l-3-.167L4.4,4.52a.412.412,0,0,1-.183.183L1.551,6.049l.167,3A.423.423,0,0,1,1.65,9.3L0,11.8l1.65,2.5a.422.422,0,0,1,.068.251l-.167,3L4.219,18.9a.412.412,0,0,1,.183.183L5.749,21.75l3-.167h.021a.441.441,0,0,1,.23.068l2.5,1.65,2.5-1.65a.423.423,0,0,1,.25-.068l3,.167,1.347-2.668a.412.412,0,0,1,.183-.183l2.668-1.347-.167-3a.525.525,0,0,1,.078-.251ZM11.5,19.5a7.7,7.7,0,1,1,7.7-7.7,7.7,7.7,0,0,1-7.7,7.7Zm0,0" fill="#293fdf"/>
                </g>
              </svg>

              <!-- Badge -->
              <div class="ml-3 bg-gray-200 text-xs font-gotham-rounded text-primary rounded-sm px-2">
                Highest Rated
              </div>
            </div>

            <!-- Freelancer Tagline -->
            <span class="text-sm text-gray-700">Full-Stack Web Developer | Laravel | Vue.js</span>
            
            <div class="flex flex-wrap items-center">
              <!-- Freelancer Location -->
              <div class="flex items-center">       
                <svg
                  class="w-4 h-4 fill-current text-gray-700"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 384 512"
                >
                  <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" />
                </svg>
                <span class="text-sm text-gray-700 px-2">United States</span>
              </div>
              
              <!-- Freelancer Amount Earned -->
              <div class="flex items-center">       
                <svg class="w-5 h-5" id="price" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.254 21.254">
                  <g>
                    <g>
                      <path d="M18.142,3.113A10.627,10.627,0,0,0,3.113,18.142,10.627,10.627,0,0,0,18.142,3.113Zm-7.515,16.9a9.382,9.382,0,1,1,9.382-9.382A9.392,9.392,0,0,1,10.627,20.009Z" fill="#5d5a5a"/>
                    </g>
                  </g>
                  <g transform="translate(7.337 4.002)">
                    <g>
                      <path d="M180.691,102.4h-1.334a1.378,1.378,0,1,1,0-2.756h2.668a.623.623,0,0,0,0-1.245h-1.378V97.024a.623.623,0,1,0-1.245,0V98.4h-.044a2.624,2.624,0,1,0,0,5.247h1.334a1.378,1.378,0,0,1,0,2.756h-2.668a.623.623,0,1,0,0,1.245H179.4v1.378a.623.623,0,0,0,1.245,0v-1.378h.044a2.624,2.624,0,0,0,0-5.247Z" transform="translate(-176.734 -96.401)" fill="#5d5a5a"/>
                    </g>
                  </g>
                </svg>
                <span class="text-sm text-gray-700 px-2">$450K+ Earned</span>
              </div>
              
              <!-- Freelancer Number of Job -->
              <div class="flex items-center">       
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.618 19">
                  <path d="M20.989,2.533H15.242V1.9a1.9,1.9,0,0,0-1.9-1.9H8.276a1.9,1.9,0,0,0-1.9,1.9v.633H.634A.635.635,0,0,0,0,3.167V17.1A1.9,1.9,0,0,0,1.9,19H19.718a1.9,1.9,0,0,0,1.9-1.9V3.178a.615.615,0,0,0-.629-.644ZM7.642,1.9a.634.634,0,0,1,.633-.633h5.067a.634.634,0,0,1,.633.633v.633H7.642ZM20.106,3.8,18.139,9.7a.632.632,0,0,1-.6.433H13.976V9.5a.633.633,0,0,0-.633-.633H8.276a.633.633,0,0,0-.633.633v.633H4.08a.632.632,0,0,1-.6-.433L1.512,3.8Zm-7.4,6.333V11.4h-3.8V10.133ZM20.351,17.1a.634.634,0,0,1-.633.633H1.9a.634.634,0,0,1-.633-.633V7.069L2.277,10.1a1.9,1.9,0,0,0,1.8,1.3H7.642v.633a.633.633,0,0,0,.633.633h5.067a.633.633,0,0,0,.633-.633V11.4h3.563a1.9,1.9,0,0,0,1.8-1.3l1.011-3.031Zm0,0" transform="translate(0)" fill="#5d5a5a"/>
                </svg>
                <span class="text-sm text-gray-700 px-2">65 jobs done</span>
              </div>

              <!-- Freelancer Hours Worked -->
              <div class="flex items-center">       
                <svg id="quarter" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                  <path d="M81.4,74.668A6.738,6.738,0,0,0,74.668,81.4a.56.56,0,0,0,.561.561H81.4a.56.56,0,0,0,.561-.561v-6.17a.56.56,0,0,0-.561-.561Zm0,0" transform="translate(-71.751 -71.751)" fill="#5d5a5a"/>
                  <path d="M10,20A10,10,0,1,1,20,10,10.011,10.011,0,0,1,10,20ZM10,1.667A8.333,8.333,0,1,0,18.333,10,8.343,8.343,0,0,0,10,1.667Zm0,0" fill="#5d5a5a"/>
                </svg>
                <span class="text-sm text-gray-700 px-2">1,850 hours</span>
              </div>
            </div>
          </div>
        </div>
        <p class="mt-5 text-sm text-gray-900 font-gotham-rounded-book font-light leading-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique beatae quisquam id necessitatibus nulla? Laboriosam maxime numquam nostrum cum laudantium distinctio nobis velit voluptatum quasi inventore, nisi exercitationem voluptatibus dolorum?
        </p>
        <div class="flex flex-wrap items-baseline mt-3">
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-1 rounded-sm">Node.js</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-1 rounded-sm">Webpack</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-1 rounded-sm">Laravel</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-1 rounded-sm">PHP</div>
          <div class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-1 rounded-sm">MySQL</div>
          <a href="javascript:void;" class="text-primary font-gotham-rounded text-sm ml-2 hover:underline">more</a>
        </div>
      </div>

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
            <strong class="font-gotham-rounded pt-5 text-sm text-gray-800 font-medium">$20 - $40</strong>
          </div>
          <div class="flex items-center justify-center">
            <span class="pt-2 text-sm text-gray-700 font-gotham-rounded-book font-light">Hourly Rate</span>
          </div>
          <div class="md:pt-6 pt-4 flex items-center justify-center">
            <vue-circle
              class="flex text-sm text-gray-700 font-gotham-rounded-book font-light leading-4"
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
export default {
    methods: {
        show() {}
    }
}
</script>
