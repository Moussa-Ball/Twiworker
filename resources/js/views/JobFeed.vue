<template>
  <div class="container">
    <div class="extended-page grid lg-min:grid-cols-3 md-max:grid-cols-1 gap-4">
      <div class="side-bar md-min:col-span-1">
        <h4 class="mb-10">News Feed</h4>
        
        <div class="user mb-10">
          <div class="user-img">
            <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
            <div class="user-presence"></div>
            <div class="user-presence-online"></div>
          </div>
          <div class="user-name-tagline">
            <h5 class="font-gotham-rounded text-base text-gray-700 font-semibold">Melinda Gates</h5>
            <span class="text-base">Graphic Designer</span>
          </div>
        </div>
        
        <div class="flex flex-col">
          <h5 class="font-gotham-rounded text-gray-800 text-lg font-normal mb-4">Shortcuts</h5>
          <a href="#" class="my-2 text-base text-gray-600 hover:text-primary hover:underline">Saved Job</a>
          <a href="#" class="my-2 text-base text-gray-600 hover:text-primary hover:underline">Profile Stats</a>
          <a href="#" class="my-2 text-base text-gray-600 hover:text-primary hover:underline">Your Submitted Jobs</a>
        </div>
        
        <div class="flex flex-col">
          <h5 class="font-gotham-rounded text-gray-800 text-lg font-normal mt-10 mb-4">My Filters</h5>
          <div class="my-4 bg-white w-full py-2 px-6 shadow-dropdown flex justify-between items-center">
            <span class="font-gotham-rounded text-base text-gray-600 font-medium">News Feed</span>
            <svg id="tick_3_" data-name="tick (3)" xmlns="http://www.w3.org/2000/svg" width="19.234" height="19.234" viewBox="0 0 19.234 19.234">
              <g id="Groupe_34" data-name="Groupe 34">
                <path id="Tracé_326" data-name="Tracé 326" d="M9.617,0a9.617,9.617,0,1,0,9.617,9.617A9.628,9.628,0,0,0,9.617,0Zm5.375,7.086-6.146,6.1a.946.946,0,0,1-1.326.024L4.266,10.244a.978.978,0,0,1-.072-1.35.954.954,0,0,1,1.35-.048l2.579,2.362,5.5-5.5a.971.971,0,0,1,1.374,1.374Z" fill="#53d121"/>
              </g>
            </svg>
          </div>
          <div class="my-2 w-full px-6 flex justify-between items-center">
            <span class="text-base hover:text-primary text-gray-700 font-normal hover:underline cursor-pointer">U.S only</span>
          </div>
          <div class="my-2 w-full px-6 flex justify-between items-center">
            <span class="text-base hover:text-primary text-gray-700 font-normal hover:underline cursor-pointer">Car repair</span>
          </div>
        </div>

        <div class="flex flex-col mb-10">
          <h5 class="font-gotham-rounded text-gray-800 text-lg font-normal mt-10 mb-4">Summary</h5>

          <div class="flex justify-between items-cemter mt-2 mt-0 px-4 py-3 font-gotham-rounded-book text-base font-normal text-gray-700 bg-message bg-opacity-20 border-b border-message">
            <div><a href="#" class="hover:underline hover:text-primary focus:outline-none">Credit remaining</a></div>
            <div>140</div>
          </div>
          <div class="flex justify-between items-cemter mt-0 px-4 py-3 font-gotham-rounded-book text-base font-normal text-gray-700 border-b border-message">
            <div><a href="#" class="hover:underline hover:text-primary focus:outline-none">Submitted jobs</a></div>
            <div>4</div>
          </div>
          <div class="flex justify-between items-cemter mt-0 px-4 py-3 font-gotham-rounded-book text-base font-normal text-gray-700 bg-message bg-opacity-20">
            <div><a href="#" class="hover:underline hover:text-primary focus:outline-none">Open contracts</a></div>
            <div>2</div>
          </div>
        </div>

        <div class="flex flex-col mb-10">
          <h5 class="font-gotham-rounded text-gray-800 text-lg font-normal mb-4">Messages</h5>
          
          <div class="mt-2 mt-0 px-4 py-2 bg-message bg-opacity-20 border-b border-message">
            <div class="user cursor-pointer">
              <div class="user-img">
                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                <div class="user-presence"></div>
                <div class="user-presence-online"></div>
                <div class="absolute top-0 right-0 w-1 h-1 p-3 text-xxs font-medium flex items-center justify-center rounded-full bg-primary text-white -mt-1 ml-1">1</div>
              </div>
              <div class="user-name-tagline">
                <h5 class="font-gotham-rounded text-sm text-gray-700 font-semibold">Melinda Gates</h5>
                <span class="text-primary text-base font-semibold">I have a job for you.</span>
              </div>
              <div class="self-start">
                <div class="flex-1 self-end">
                  <span class="text-sm font-normal">1 hour ago</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="mt-0 px-4 py-2 border-b border-message">
            <div class="user cursor-pointer">
              <div class="user-img">
                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                <div class="user-presence"></div>
                <div class="user-presence-online"></div>
              </div>
              <div class="user-name-tagline">
                <h5 class="font-gotham-rounded text-sm text-gray-700 font-semibold">Melinda Gates</h5>
                <span class="text-gray-700 text-base font-medium">I have a job for you.</span>
              </div>
              <div class="self-start">
                <div class="flex-1">
                  <span class="text-sm font-normal">1 hour ago</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="mt-0 px-4 py-2 bg-message bg-opacity-20 border-b border-message">
            <div class="user cursor-pointer">
              <div class="user-img">
                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                <div class="user-presence"></div>
                <div class="user-presence-online"></div>
              </div>
              <div class="user-name-tagline">
                <h5 class="font-gotham-rounded text-sm text-gray-700 font-semibold">Melinda Gates</h5>
                <span class="text-gray-700 text-base font-medium">I have a job for you.</span>
              </div>
              <div class="self-start">
                <div class="flex-1">
                  <span class="text-sm font-normal">1 hour ago</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="mt-0 px-4 py-2 border-b border-message">
            <div class="user cursor-pointer">
              <div class="user-img">
                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                <div class="user-presence"></div>
                <div class="user-presence-online"></div>
              </div>
              <div class="user-name-tagline">
                <h5 class="font-gotham-rounded text-sm text-gray-700 font-semibold">Melinda Gates</h5>
                <span class="text-gray-700 text-base font-medium">I have a job for you.</span>
              </div>
              <div class="self-start">
                <div class="flex-1">
                  <span class="text-sm font-normal">1 hour ago</span>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-0 px-4 py-2 bg-message bg-opacity-20 border-b border-message">
            <div class="user cursor-pointer">
              <div class="user-img">
                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                <div class="user-presence"></div>
                <div class="user-presence-online"></div>
              </div>
              <div class="user-name-tagline">
                <h5 class="font-gotham-rounded text-sm text-gray-700 font-semibold">Melinda Gates</h5>
                <span class="text-gray-700 text-base font-medium">I have a job for you.</span>
              </div>
              <div class="self-start">
                <div class="flex-1">
                  <span class="text-sm font-normal">1 hour ago</span>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-0 px-4 py-2">
            <div class="user cursor-pointer">
              <div class="user-img">
                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                <div class="user-presence"></div>
                <div class="user-presence-online"></div>
              </div>
              <div class="user-name-tagline">
                <h5 class="font-gotham-rounded text-sm text-gray-700 font-semibold">Melinda Gates</h5>
                <span class="text-gray-700 text-base font-medium">I have a job for you.</span>
              </div>
              <div class="self-start">
                <div class="flex-1">
                  <span class="text-sm font-normal">1 hour ago</span>
                </div>
              </div>
            </div>
          </div>

          <div class="flex justify-center items-center mt-4">
            <a href="#" class="text-primary hover:underline">See all</a>
          </div>
        </div>

        <div class="flex flex-col md-min:mb-10">
          <h5 class="font-gotham-rounded text-gray-800 text-lg font-normal mb-4">Messages</h5>
          <span>You do not have a message yet.</span>
          <a href="#" class="text-primary hover:underline">Open Messenger</a>
        </div>
      </div>
      <div class="md-min:mt-10 mb-10 lg-min:col-span-2 md-max:col-span-1">
        <div class="bg-white shadow-dropdown">
          <div class="flex py-6 px-6">
            <input type="text" class="flex-1 px-4 py-3 w-full text-sm border focus:outline-none focus:shadow-inner focus:border-primary transition duration-100 ease-linear" placeholder="eg: Job title, Skills or keyword…">
            <button class="bg-primary focus:outline-none flex justify-center items-center px-4 shadow-sm">
              <svg id="search_2_" data-name="search (2)" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <g id="Groupe_10" data-name="Groupe 10" transform="translate(0 0)">
                  <path id="Tracé_248" data-name="Tracé 248" d="M17.89,16.83,12.661,11.6A7.139,7.139,0,1,0,11.6,12.661L16.83,17.89a.375.375,0,0,0,.53,0l.53-.53A.375.375,0,0,0,17.89,16.83ZM7.125,12.75A5.625,5.625,0,1,1,12.75,7.125,5.631,5.631,0,0,1,7.125,12.75Z" transform="translate(0 0)" fill="#fff"/>
                </g>
              </svg>
            </button>
          </div>
          <div class="relative flex justify-between border-t py-8 px-6 cursor-pointer" v-for="i in 8">
            <div class="flex flex-col">
              <h4 class="font-gotham-rounded text-gray-800 text-base font-normal">Developer to build a custom screensaver for MacOS</h4>
              <div class="flex items-center mt-2">
                <div class="flex items-center mr-2">
                  <svg class="w-4 h-4 -mt-1 fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                  </svg>
                  <span class="text-sm px-2">New York, United States</span>
                </div>
                
                <div class="flex items-center mr-2">
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.254 21.254">
                    <g id="clock" transform="translate(0 0)">
                      <g id="Groupe_12" data-name="Groupe 12" transform="translate(0 0)">
                        <path id="Tracé_250" data-name="Tracé 250" d="M10.627,21.254A10.627,10.627,0,0,1,3.113,3.113,10.627,10.627,0,0,1,18.142,18.142a10.558,10.558,0,0,1-7.515,3.113Zm0-20.009A9.382,9.382,0,0,0,3.993,17.261,9.382,9.382,0,1,0,17.261,3.993,9.32,9.32,0,0,0,10.627,1.245Z" transform="translate(0 0)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_13" data-name="Groupe 13" transform="translate(10.004 2.492)">
                        <path id="Tracé_251" data-name="Tracé 251" d="M241,60.036h1.245V61.7H241Z" transform="translate(-241 -60.036)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_14" data-name="Groupe 14" transform="translate(14.762 4.436)">
                        <path id="Tracé_252" data-name="Tracé 252" d="M0,0H1.662V1.245H0Z" transform="translate(0 1.175) rotate(-45)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_15" data-name="Groupe 15" transform="translate(17.1 10.004)">
                        <path id="Tracé_253" data-name="Tracé 253" d="M411.932,241h1.662v1.245h-1.662Z" transform="translate(-411.932 -241)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_16" data-name="Groupe 16" transform="translate(14.761 14.764)">
                        <path id="Tracé_254" data-name="Tracé 254" d="M0,0H1.245V1.662H0Z" transform="translate(0 0.88) rotate(-45)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_17" data-name="Groupe 17" transform="translate(10.004 17.1)">
                        <path id="Tracé_255" data-name="Tracé 255" d="M241,411.932h1.245v1.662H241Z" transform="translate(-241 -411.932)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_18" data-name="Groupe 18" transform="translate(4.432 14.763)">
                        <path id="Tracé_256" data-name="Tracé 256" d="M0,0H1.662V1.245H0Z" transform="translate(0 1.175) rotate(-45)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_19" data-name="Groupe 19" transform="translate(2.492 10.004)">
                        <path id="Tracé_257" data-name="Tracé 257" d="M60.036,241H61.7v1.245H60.036Z" transform="translate(-60.036 -241)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_20" data-name="Groupe 20" transform="translate(4.434 4.435)">
                        <path id="Tracé_258" data-name="Tracé 258" d="M0,0H1.245V1.662H0Z" transform="translate(0 0.88) rotate(-45)" fill="#5d5a5a"/>
                      </g>
                      <g id="Groupe_21" data-name="Groupe 21" transform="translate(10.004 6.231)">
                        <path id="Tracé_259" data-name="Tracé 259" d="M246.018,155.126H241v-5.018h1.245v3.773h3.773Z" transform="translate(-241 -150.108)" fill="#5d5a5a"/>
                      </g>
                    </g>
                  </svg>
                  <span class="text-sm px-2">5 minutes ago</span>
                </div>
                
                <div class="flex items-center mr-2">
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.18 16.176">
                    <path id="Tracé_211" data-name="Tracé 211" d="M93.724,89.2a4.825,4.825,0,1,0,4.825,4.825A4.831,4.831,0,0,0,93.724,89.2Zm2.42,3.669-2.912,2.747a.283.283,0,0,1-.2.081.286.286,0,0,1-.209-.088L91.3,94.043a.294.294,0,0,1,.419-.411l1.322,1.359,2.7-2.548a.294.294,0,0,1,.4.426Zm0,0" transform="translate(-85.634 -85.935)" fill="#5c74ff"/>
                    <path id="Tracé_212" data-name="Tracé 212" d="M15.019,10.149l1.16-1.759-1.16-1.759a.3.3,0,0,1-.048-.176l.117-2.108L13.212,3.4a.29.29,0,0,1-.129-.129l-.947-1.877-2.108.117a.3.3,0,0,1-.176-.048L8.09.3,6.331,1.461a.3.3,0,0,1-.176.048L4.047,1.391,3.1,3.268a.29.29,0,0,1-.129.129l-1.877.947.117,2.108a.3.3,0,0,1-.048.176L0,8.391,1.16,10.15a.3.3,0,0,1,.048.176l-.117,2.108,1.877.947a.29.29,0,0,1,.129.129l.947,1.877,2.108-.118h.015a.31.31,0,0,1,.162.048l1.759,1.16,1.759-1.16a.3.3,0,0,1,.176-.048l2.108.118.947-1.877a.29.29,0,0,1,.129-.129l1.876-.947-.117-2.108a.369.369,0,0,1,.055-.176ZM8.09,13.8A5.413,5.413,0,1,1,13.5,8.391,5.418,5.418,0,0,1,8.09,13.8Zm0,0" transform="translate(0 -0.301)" fill="#5c74ff"/>
                  </svg>
                  <span class="text-sm px-2">Payment Verified</span>
                </div>
              </div>
              
              <p class="mt-6 text-sm font-medium">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aperiam temporibus, ipsa dolorum accusamus, impedit quod error quisquam illum earum vero at perspiciatis nulla voluptatum! Doloribus iste voluptatum itaque nulla?
              </p>
            </div>

            <div class="before:empty-content before:h-full before:block before:absolute before:top-0 before:border-l">
              <div class="w-5 h-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39">
                  <circle id="Ellipse_20" data-name="Ellipse 20" cx="19.5" cy="19.5" r="19.5" fill="#e8eaef"/>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
	export default {}
</script>
