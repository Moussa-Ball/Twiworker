<template>
  <div>
    <div @click.prevent.stop="show" class="relative flex flex-wrap justify-between border-t p-5 cursor-pointer hover:bg-gray-100 hover:bg-opacity-75">
      <div class="flex flex-col md:w-12/12 lg:w-9/12">
        <!-- Job Title -->
        <h4 class="font-gotham-rounded text-gray-900 text-base font-medium">{{ job.title }}</h4>
        <div class="flex flex-wrap items-center">
          <!-- Job Location -->
          <div class="flex items-center mr-2 pt-4 lg:pt-3 lg:my-0">       
            <svg class="w-4 h-4 fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
              <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
            </svg>
            <span class="text-sm px-2">{{ job.city }}, {{ job.country }}</span>
          </div>

          <!-- Job Posted At -->
          <div class="flex items-center mr-2 pt-4 lg:pt-3 lg:my-0">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.254 21.254">
              <g transform="translate(0 0)">
                <g transform="translate(0 0)">
                  <path id="Tracé_250" data-name="Tracé 250" d="M10.627,21.254A10.627,10.627,0,0,1,3.113,3.113,10.627,10.627,0,0,1,18.142,18.142a10.558,10.558,0,0,1-7.515,3.113Zm0-20.009A9.382,9.382,0,0,0,3.993,17.261,9.382,9.382,0,1,0,17.261,3.993,9.32,9.32,0,0,0,10.627,1.245Z" transform="translate(0 0)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(10.004 2.492)">
                  <path id="Tracé_251" data-name="Tracé 251" d="M241,60.036h1.245V61.7H241Z" transform="translate(-241 -60.036)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(14.762 4.436)">
                  <path id="Tracé_252" data-name="Tracé 252" d="M0,0H1.662V1.245H0Z" transform="translate(0 1.175) rotate(-45)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(17.1 10.004)">
                  <path id="Tracé_253" data-name="Tracé 253" d="M411.932,241h1.662v1.245h-1.662Z" transform="translate(-411.932 -241)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(14.761 14.764)">
                  <path d="M0,0H1.245V1.662H0Z" transform="translate(0 0.88) rotate(-45)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(10.004 17.1)">
                  <path d="M241,411.932h1.245v1.662H241Z" transform="translate(-241 -411.932)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(4.432 14.763)">
                  <path d="M0,0H1.662V1.245H0Z" transform="translate(0 1.175) rotate(-45)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(2.492 10.004)">
                  <path d="M60.036,241H61.7v1.245H60.036Z" transform="translate(-60.036 -241)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(4.434 4.435)">
                  <path d="M0,0H1.245V1.662H0Z" transform="translate(0 0.88) rotate(-45)" fill="#5d5a5a"/>
                </g>
                <g transform="translate(10.004 6.231)">
                  <path d="M246.018,155.126H241v-5.018h1.245v3.773h3.773Z" transform="translate(-241 -150.108)" fill="#5d5a5a"/>
                </g>
              </g>
            </svg>
            <span class="text-sm px-2">{{ job.posted_at }}</span>
          </div>
      
          <!-- Job - Payment Verified -->
          <div v-if="job.payment_verified" class="flex items-center mr-2 pt-4 lg:pt-3 lg:my-0">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.18 16.176">
              <path d="M93.724,89.2a4.825,4.825,0,1,0,4.825,4.825A4.831,4.831,0,0,0,93.724,89.2Zm2.42,3.669-2.912,2.747a.283.283,0,0,1-.2.081.286.286,0,0,1-.209-.088L91.3,94.043a.294.294,0,0,1,.419-.411l1.322,1.359,2.7-2.548a.294.294,0,0,1,.4.426Zm0,0" transform="translate(-85.634 -85.935)" fill="#5c74ff"/>
              <path d="M15.019,10.149l1.16-1.759-1.16-1.759a.3.3,0,0,1-.048-.176l.117-2.108L13.212,3.4a.29.29,0,0,1-.129-.129l-.947-1.877-2.108.117a.3.3,0,0,1-.176-.048L8.09.3,6.331,1.461a.3.3,0,0,1-.176.048L4.047,1.391,3.1,3.268a.29.29,0,0,1-.129.129l-1.877.947.117,2.108a.3.3,0,0,1-.048.176L0,8.391,1.16,10.15a.3.3,0,0,1,.048.176l-.117,2.108,1.877.947a.29.29,0,0,1,.129.129l.947,1.877,2.108-.118h.015a.31.31,0,0,1,.162.048l1.759,1.16,1.759-1.16a.3.3,0,0,1,.176-.048l2.108.118.947-1.877a.29.29,0,0,1,.129-.129l1.876-.947-.117-2.108a.369.369,0,0,1,.055-.176ZM8.09,13.8A5.413,5.413,0,1,1,13.5,8.391,5.418,5.418,0,0,1,8.09,13.8Zm0,0" transform="translate(0 -0.301)" fill="#5c74ff"/>
            </svg>
            <span class="text-sm px-2">Payment Verified</span>
          </div>
          <div v-else class="flex items-center mr-2 pt-4 lg:pt-3 lg:my-0">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.18 16.176">
              <path d="M93.724,89.2a4.825,4.825,0,1,0,4.825,4.825A4.831,4.831,0,0,0,93.724,89.2Zm2.42,3.669-2.912,2.747a.283.283,0,0,1-.2.081.286.286,0,0,1-.209-.088L91.3,94.043a.294.294,0,0,1,.419-.411l1.322,1.359,2.7-2.548a.294.294,0,0,1,.4.426Zm0,0" transform="translate(-85.634 -85.935)" fill="#b1b1b1"/>
              <path d="M15.019,10.149l1.16-1.759-1.16-1.759a.3.3,0,0,1-.048-.176l.117-2.108L13.212,3.4a.29.29,0,0,1-.129-.129l-.947-1.877-2.108.117a.3.3,0,0,1-.176-.048L8.09.3,6.331,1.461a.3.3,0,0,1-.176.048L4.047,1.391,3.1,3.268a.29.29,0,0,1-.129.129l-1.877.947.117,2.108a.3.3,0,0,1-.048.176L0,8.391,1.16,10.15a.3.3,0,0,1,.048.176l-.117,2.108,1.877.947a.29.29,0,0,1,.129.129l.947,1.877,2.108-.118h.015a.31.31,0,0,1,.162.048l1.759,1.16,1.759-1.16a.3.3,0,0,1,.176-.048l2.108.118.947-1.877a.29.29,0,0,1,.129-.129l1.876-.947-.117-2.108a.369.369,0,0,1,.055-.176ZM8.09,13.8A5.413,5.413,0,1,1,13.5,8.391,5.418,5.418,0,0,1,8.09,13.8Zm0,0" transform="translate(0 -0.301)" fill="#b1b1b1"/>
            </svg>
            <span class="text-sm px-2">Payment Unverified</span>
          </div>
        </div>
      
        <p class="mt-5 text-sm text-gray-900 font-gotham-rounded-book font-light leading-5">
          {{ job.description }}
        </p>

        <div class="flex flex-wrap items-baseline mt-3">
          <div 
            v-for="(skill, key) in job.skills" 
            :key="key" 
            class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary p-2 mt-2 font-medium text-xs mr-1 rounded-sm"
          >
            {{ skill }}
          </div>
        </div>

        <div class="flex flex-wrap items-baseline">
          <div class="flex items-baseline mr-4 mt-5">
            <h4 class="font-gotham-rounded text-gray-800 text-sm font-medium pr-1">Bids:</h4>
            <p class="font-light text-sm">{{ job.bids }}</p>
          </div>
          <div class="flex items-baseline mr-4 mt-5">
            <h4 class="font-gotham-rounded text-gray-800 text-sm font-medium pr-1">Delivery:</h4>
            <p class="font-light text-sm">{{ job.delivery }}</p>
          </div>
          <div class="flex items-baseline mr-4 mt-5">
            <h4 class="font-gotham-rounded text-gray-800 text-sm font-medium pr-1">Availibility:</h4>
            <p class="font-light text-sm">{{ job.availibility }}</p>
          </div>
          <div class="flex items-center mr-4 mt-5">
            <h4 class="font-gotham-rounded text-gray-800 text-sm font-medium pr-1">Reviews:</h4>
            <p class="relative flex items-center font-light text-sm" style="bottom: 1.5px;">
              <star-rating 
                text-class="flex items-center" 
                :rating="job.rating"
                :increment="0.01"
                :read-only="true"
                :star-size="16" 
                active-color="#293FDF" 
                inactive-color="#B1B1B1"
                :show-rating="false"
              />
              <span class="ml-1 mt-1">{{ job.rating }}</span>
            </p>
          </div>
        </div>
      </div>

      <div class="flex items-center justify-center lg:block w-full lg:w-3/12 before:empty-content before:h-full before:block before:absolute before:top-0 lg:before:border-l border-t lg:border-none mt-4 lg:mt-0 pt-4 lg:pt-0">
        <div class="lg:pl-4 w-full">
          <div class="flex flex-row items-center justify-center">
            <button class="bg-gray-200 flex items-center justify-center h-39px w-39px rounded-full hover:bg-gray-300 focus:outline-none">
              <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                <path d="M11.878,8.515H10L10.939,0h.939l1.565,4.258Z" transform="translate(-9.687)" fill="#b1b1b1"/>
                <rect width="8" height="9" transform="translate(8 3)" fill="#b1b1b1"/>
                <path d="M203.818,244.347a1.409,1.409,0,1,1-2.818,0V242S203.818,241.968,203.818,244.347Z" transform="translate(-194.707 -234.423)" fill="#b1b1b1"/>
                <path d="M75.51,0H70V8.515h5.51a1.413,1.413,0,0,1,1.409,1.409V1.409A1.413,1.413,0,0,0,75.51,0Z" transform="translate(-67.809)" fill="#b1b1b1"/>
                <rect width="1" height="16" fill="#b1b1b1"/>
              </svg>
            </button>
            <button class="ml-4 bg-gray-200 flex items-center justify-center h-39px w-39px rounded-full hover:bg-gray-300 focus:outline-none">
              <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.732 16.035">
                <path d="M16.688,6.555a.888.888,0,0,0-.765-.611l-4.83-.439L9.184,1.036a.89.89,0,0,0-1.636,0L5.639,5.506.808,5.944A.89.89,0,0,0,.3,7.5l3.651,3.2L2.877,15.443A.889.889,0,0,0,4.2,16.4l4.165-2.49L12.53,16.4a.89.89,0,0,0,1.324-.962L12.777,10.7l3.651-3.2a.89.89,0,0,0,.259-.945ZM8.446,13.866" transform="translate(0 -0.496)" fill="#B1B1B1"/>
              </svg>
            </button>
          </div>
          <div class="flex items-center justify-center">
            <strong class="font-gotham-rounded pt-5 text-sm text-gray-800 font-medium">${{ job.amount }}</strong>
          </div>
          <div class="flex items-center justify-center">
            <span class="pt-2 text-sm text-gray-700 font-gotham-rounded-book font-light">{{ job.payment_type }}</span>
          </div>
          <div class="md:pt-6 pt-4 flex items-center justify-center">
            <vue-circle
              class="flex text-sm text-gray-700 font-gotham-rounded-book font-light leading-4"
              :progress="job.hire_rating"
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
              <p>Hire Rate</p>
            </vue-circle>
          </div>
        </div>
      </div>
    </div>

    <modal :name="`job.show-${$vnode.key}`" classes="lg:py-10" :adaptive="true" height="auto" width="100%" :maxWidth="1024" transition="pop-out" @closed="closed" :scrollable="true">
      <div class="card card-custom shadow-btn-hover">
        <h5 class="card-header card-header-custom flex items-center justify-between font-gotham-rounded-book text-gray-900 text-lg font-medium py-6 bg-white">
          {{ job.title }}
          <a @click.prevent="closeModal(`job.show-${$vnode.key}`, true)" class="pr-2" style="color: #7619df; cursor: pointer;">
            <img
              width="16"
              height="16" 
              src="/img/cross-out.svg" 
              alt="cross"
            >
          </a>
        </h5>
        <div class="card-body bg-header">
          <!-- Job Header -->
          <div class="px-10 relative top-auto left-auto mx-auto bg-header border-b" style="border-bottom: 1px solid rgba(0, 0, 0, 0.125);">
            <div class="flex flex-wrap justify-between container mx-auto px-4 py-8 lg:py-16 lg:px-6">
              <div class="w-full lg:w-9/12">
                <!-- Job title -->
                <h2 class="font-gotham-rounded-book text-gray-800 text-lg lg:text-xl font-semibold leading-6">{{ job.title }}</h2>
                
                <!-- Separator -->
                <div class="border-opacity-50 border-b border-gray-400 my-8 lg:hidden"></div>
                
                <!-- About the client -->
                <h5 class="font-gotham-rounded text-gray-800 text-sm font-normal md:-mb-2 lg:mb-0 lg:mt-10">About the client</h5>
                <div class="flex flex-wrap items-baseline lg:mt-2">
                  <div class="flex items-center mr-4 mt-4 lg:mt-0">
                    <h4 class="font-gotham-rounded text-gray-800 text-sm font-medium pr-1">Reviews:</h4>
                    <p class="relative flex items-center font-light text-sm" style="bottom: 1.5px;">
                      <star-rating 
                        text-class="flex items-center" 
                        :rating="job.rating"
                        :increment="0.01"
                        :read-only="true"
                        :star-size="16" 
                        active-color="#293FDF" 
                        inactive-color="#B1B1B1"
                        :show-rating="false"
                      />
                      <span class="ml-1 mt-1">{{ job.rating }}</span>
                    </p>
                  </div>
                  
                  <div class="flex items-baseline mr-4 mt-4 lg:mt-0">
                    <h4 class="font-gotham-rounded text-gray-800 text-sm font-medium pr-1">Location:</h4>
                    <p class="font-light text-sm">{{ job.city }}, {{ job.country }}</p>
                  </div>
                  
                  <div class="flex items-baseline mr-4 mt-4 lg:mt-0 relative" style="top: 4px;">
                    <!-- Job - Payment Verified -->
                    <div v-if="job.payment_verified" class="flex items-center mr-2">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.18 16.176">
                        <path d="M93.724,89.2a4.825,4.825,0,1,0,4.825,4.825A4.831,4.831,0,0,0,93.724,89.2Zm2.42,3.669-2.912,2.747a.283.283,0,0,1-.2.081.286.286,0,0,1-.209-.088L91.3,94.043a.294.294,0,0,1,.419-.411l1.322,1.359,2.7-2.548a.294.294,0,0,1,.4.426Zm0,0" transform="translate(-85.634 -85.935)" fill="#5c74ff"/>
                        <path d="M15.019,10.149l1.16-1.759-1.16-1.759a.3.3,0,0,1-.048-.176l.117-2.108L13.212,3.4a.29.29,0,0,1-.129-.129l-.947-1.877-2.108.117a.3.3,0,0,1-.176-.048L8.09.3,6.331,1.461a.3.3,0,0,1-.176.048L4.047,1.391,3.1,3.268a.29.29,0,0,1-.129.129l-1.877.947.117,2.108a.3.3,0,0,1-.048.176L0,8.391,1.16,10.15a.3.3,0,0,1,.048.176l-.117,2.108,1.877.947a.29.29,0,0,1,.129.129l.947,1.877,2.108-.118h.015a.31.31,0,0,1,.162.048l1.759,1.16,1.759-1.16a.3.3,0,0,1,.176-.048l2.108.118.947-1.877a.29.29,0,0,1,.129-.129l1.876-.947-.117-2.108a.369.369,0,0,1,.055-.176ZM8.09,13.8A5.413,5.413,0,1,1,13.5,8.391,5.418,5.418,0,0,1,8.09,13.8Zm0,0" transform="translate(0 -0.301)" fill="#5c74ff"/>
                      </svg>
                      <span class="text-sm px-2">Payment Verified</span>
                    </div>
                    <div v-else class="flex items-center mr-2">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.18 16.176">
                        <path d="M93.724,89.2a4.825,4.825,0,1,0,4.825,4.825A4.831,4.831,0,0,0,93.724,89.2Zm2.42,3.669-2.912,2.747a.283.283,0,0,1-.2.081.286.286,0,0,1-.209-.088L91.3,94.043a.294.294,0,0,1,.419-.411l1.322,1.359,2.7-2.548a.294.294,0,0,1,.4.426Zm0,0" transform="translate(-85.634 -85.935)" fill="#b1b1b1"/>
                        <path d="M15.019,10.149l1.16-1.759-1.16-1.759a.3.3,0,0,1-.048-.176l.117-2.108L13.212,3.4a.29.29,0,0,1-.129-.129l-.947-1.877-2.108.117a.3.3,0,0,1-.176-.048L8.09.3,6.331,1.461a.3.3,0,0,1-.176.048L4.047,1.391,3.1,3.268a.29.29,0,0,1-.129.129l-1.877.947.117,2.108a.3.3,0,0,1-.048.176L0,8.391,1.16,10.15a.3.3,0,0,1,.048.176l-.117,2.108,1.877.947a.29.29,0,0,1,.129.129l.947,1.877,2.108-.118h.015a.31.31,0,0,1,.162.048l1.759,1.16,1.759-1.16a.3.3,0,0,1,.176-.048l2.108.118.947-1.877a.29.29,0,0,1,.129-.129l1.876-.947-.117-2.108a.369.369,0,0,1,.055-.176ZM8.09,13.8A5.413,5.413,0,1,1,13.5,8.391,5.418,5.418,0,0,1,8.09,13.8Zm0,0" transform="translate(0 -0.301)" fill="#b1b1b1"/>
                      </svg>
                      <span class="text-sm px-2">Payment Unverified</span>
                    </div>
                  </div>
                </div>

                <div class="border-opacity-50 border-b border-gray-400 my-8 lg:hidden"></div>
              </div>

              <!-- Project Budget -->
              <div class="flex flex-col justify-start items-start lg:justify-center lg:items-center w-12/12 lg:w-48 xl:w-48 lg:bg-white lg:shadow-btn-hover lg:h-32">
                <h5 class="hidden lg:block font-gotham-rounded-book text-gray-800 text-base font-light mb-4">Hourly Rate</h5>
                <h5 class="block lg:hidden font-gotham-rounded text-gray-800 text-sm font-normal mb-4">Hourly Rate</h5>
                <strong class="text-lg text-gray-800 font-gotham-rounded-book font-medium">$2,500 - $3,500</strong>
              </div>
            </div>
          </div>
          <!-- End Job Header -->

          <!-- Job Content-->
          <div class="px-10 relative top-auto left-auto mx-auto bg-header border-b">
            <div class="flex flex-wrap items-start justify-between container mx-auto px-4 py-16 lg:px-6">
              <!-- Job informations -->
              <div class="w-12/12 lg:w-8/12">
                <div class="card card-custom w-auto shadow-dropdown">
                  <h5 class="card-header card-header-custom font-gotham-rounded text-gray-700 text-base font-medium py-6 border-b border-gray-200">
                    Details
                  </h5>
                  <div class="card-body container px-4 lg:px-5">
                    <h4 class="mt-2 font-gotham-rounded text-gray-700 text-sm font-medium py-4">Description</h4>
                    <p class="mt-2 text-sm text-gray-900 font-gotham-rounded-book font-light pb-4 leading-5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aperiam temporibus, ipsa dolorum accusamus, impedit quod error quisquam illum earum vero at perspiciatis nulla voluptatum! Doloribus iste voluptatum itaque nulla?
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam aperiam temporibus, ipsa dolorum accusamus, impedit quod error quisquam illum earum vero at perspiciatis nulla voluptatum! Doloribus iste voluptatum itaque nulla?
                    </p>
                  </div>

                  <div class="border-b mx-5 mb-4"></div>

                  <div class="card-body container px-4 lg:px-5">
                    <h4 class="mt-2 font-gotham-rounded text-gray-700 text-sm font-medium pb-4">Attachment(s)</h4>
                    <div class="pb-5 flex flex-col justify-between">
                      <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.378" height="16.146" viewBox="0 0 14.378 16.146">
                          <path d="M41.243,1.176a4.027,4.027,0,0,0-5.688,0L29.566,7.165a.473.473,0,1,0,.669.669l5.989-5.989a3.15,3.15,0,0,1,4.35,0,3.079,3.079,0,0,1,0,4.349l-8.363,8.457a1.938,1.938,0,0,1-2.677,0,1.894,1.894,0,0,1,0-2.676l8.028-8.123a.727.727,0,0,1,1,0,.711.711,0,0,1,0,1l-7.693,7.788a.527.527,0,0,0,0,.669.473.473,0,0,0,.669,0l7.693-7.788a1.658,1.658,0,0,0,0-2.342,1.7,1.7,0,0,0-2.342,0l-8.028,8.123a2.858,2.858,0,0,0,0,4.014,2.854,2.854,0,0,0,4.015,0l8.363-8.457A4.026,4.026,0,0,0,41.243,1.176Z" transform="translate(-28.042 0)" fill="#768088"/>
                        </svg>
                        <a href="#" class="block font-gotham-rounded font-medium text-link text-primary hover:underline pl-2">
                          document concerning the house to be cleaned.txt (130 KB)
                        </a>
                      </div>
                      <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.378" height="16.146" viewBox="0 0 14.378 16.146">
                          <path d="M41.243,1.176a4.027,4.027,0,0,0-5.688,0L29.566,7.165a.473.473,0,1,0,.669.669l5.989-5.989a3.15,3.15,0,0,1,4.35,0,3.079,3.079,0,0,1,0,4.349l-8.363,8.457a1.938,1.938,0,0,1-2.677,0,1.894,1.894,0,0,1,0-2.676l8.028-8.123a.727.727,0,0,1,1,0,.711.711,0,0,1,0,1l-7.693,7.788a.527.527,0,0,0,0,.669.473.473,0,0,0,.669,0l7.693-7.788a1.658,1.658,0,0,0,0-2.342,1.7,1.7,0,0,0-2.342,0l-8.028,8.123a2.858,2.858,0,0,0,0,4.014,2.854,2.854,0,0,0,4.015,0l8.363-8.457A4.026,4.026,0,0,0,41.243,1.176Z" transform="translate(-28.042 0)" fill="#768088"/>
                        </svg>
                        <a href="#" class="block font-gotham-rounded font-medium text-link text-primary hover:underline pl-2">
                          example of contract for one who is exempt from doing the work.txt (28 KB) 
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="border-b mx-5 mb-4"></div>

                  <div class="card-body container px-4 lg:px-5">
                    <h4 class="mt-2 font-gotham-rounded text-gray-700 text-sm font-medium pb-4">Expertise Field</h4>
                    <div class="pb-5">
                      <div class="flex flex-wrap items-baseline">
                        <div 
                          v-for="(skill, key) in job.skills" 
                          :key="key" 
                          class="bg-gray-300 text-gray-800 hover:text-white hover:bg-primary cursor-pointer p-2 mt-2 font-medium text-xs mr-1 rounded-sm"
                        >
                          {{ skill }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="card card-custom w-auto shadow-dropdown mt-8">
                  <h5 class="card-header card-header-custom font-gotham-rounded text-gray-700 text-base font-medium py-6 border-b border-gray-200">
                    Freelancers Bidding (2)
                  </h5>
                  <div class="card-body container px-4 lg:px-5">
                    <div class="flex flex-col py-4">
                      <!-- Bidding Item -->
                      <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center">
                          <a class="relative" href="#">
                            <img class="select-none h-10 w-10 border-4 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                            <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
                              <div class="h-2 w-2 bg-green-400 rounded-full"></div>
                            </div>
                          </a>
                          <div class="flex flex-col pl-2 leading-5">
                            <a href="#">
                              <h5 class="font-gotham-book text-link text-gray-800 font-semibold">Melinda Gates</h5>
                              <span class="text-link text-gray-600">Graphic Designer</span>
                            </a>
                          </div>
                        </div>
                        <div class="hidden md:flex lg:flex flex-col items-center">
                          <progress-bar bar-color="#293FDF" size="medium" :val="70" text="Job Success: 70%" text-position="top" max="100"/>
                        </div>
                        <div class="flex flex-col items-center">
                          <strong class="text-link text-gray-800 font-gotham-rounded font-medium pb-2">$40,00</strong>
                          <span class="text-link text-gray-800">Hourly Rate</span>
                        </div>
                      </div>
                      <!-- End Bidding Item -->
                      
                      <div class="border-b my-4"></div>
                      
                      <!-- Bidding Item -->
                      <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center">
                          <a class="relative" href="#">
                            <img class="select-none h-10 w-10 border-4 border-gray-300 object-cover rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=256&q=80" alt="Your avatar">
                            <div class="flex items-center justify-center absolute top-0 right-0 mt-6 h-3 w-3 bg-white rounded-full">
                              <div class="h-2 w-2 bg-green-400 rounded-full"></div>
                            </div>
                          </a>
                          <div class="flex flex-col pl-2 leading-5">
                            <a href="#">
                              <h5 class="font-gotham-book text-link text-gray-800 font-semibold">Melinda Gates</h5>
                              <span class="text-link text-gray-600">Graphic Designer</span>
                            </a>
                          </div>
                        </div>
                        <div class="hidden md:flex lg:flex flex-col items-center">
                          <progress-bar bar-color="#293FDF" size="medium" :val="70" text="Job Success: 70%" text-position="top" max="100"/>
                        </div>
                        <div class="flex flex-col items-center">
                          <strong class="text-link text-gray-800 font-gotham-rounded font-medium pb-2">$40,00</strong>
                          <span class="text-link text-gray-800">Hourly Rate</span>
                        </div>
                      </div>
                      <!-- End Bidding Item -->
                    </div>
                  </div>
                </div>

                <div class="card card-custom w-auto shadow-dropdown mt-8">
                  <h5 class="card-header card-header-custom font-gotham-rounded text-gray-700 text-base font-medium py-6 border-b border-gray-200">
                    Feedbacks (2)
                  </h5>
                  <div class="card-body container px-4 lg:px-5">
                    <!-- Feedback Item -->
                    <div class="flex flex-col py-4">
                      <div class="flex flex-wrap items-baseline justify-between">
                        <strong class="font-gotham-book text-sm text-gray-900 font-semibold leading-5 mr-2">Developer to build a custom screensaver for MacOS</strong>
                        <span class="text-sm text-gray-900 font-medium leading-5 mt-1">Rated as Client</span>
                      </div>
                      <p class="relative flex items-center justify-between mt-2" style="bottom: 1.5px;">
                        <span class="flex items-center font-light text-sm">
                          <star-rating 
                            text-class="flex items-center leading-5" 
                            :rating="job.rating"
                            :increment="0.01"
                            :read-only="true"
                            :star-size="16" 
                            active-color="#293FDF" 
                            inactive-color="#B1B1B1"
                            :show-rating="false"
                          />
                          <span class="ml-1 mt-1">{{ job.rating }}</span>
                        </span>
                        <span class="ml-4 mt-1 flex items-center text-sm text-gray-900 font-medium">19 April 2020</span>
                      </p>
                      <p class="mt-4 text-sm flex items-start text-gray-900 font-gotham-rounded-book font-light leading-5">
                        <read-more class="read-more leading-5" link="javascript:void;" more-str="more" less-str="less" :max-chars="130" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod consectetur maxime repudiandae facilis repellendus fugit accusantium soluta dolorum officiis deleniti tempora sed nam harum, animi beatae aliquam? Consequuntur, dolor eum!"></read-more>  
                      </p>
                    </div>
                    <!-- End Feedback Item -->

                    <!-- Separator -->
                    <div class="border-b mb-1"></div>

                    <!-- Feedback Item -->
                    <div class="flex flex-col py-4">
                      <div class="flex flex-wrap items-baseline justify-between">
                        <strong class="font-gotham-book text-sm text-gray-900 font-semibold leading-5 mr-2">Developer to build a custom screensaver for MacOS</strong>
                        <span class="text-sm text-gray-900 font-medium leading-5 mt-1">Rated as Client</span>
                      </div>
                      <p class="relative flex items-center justify-between mt-2" style="bottom: 1.5px;">
                        <span class="flex items-center font-light text-sm">
                          <star-rating 
                            text-class="flex items-center leading-5" 
                            :rating="job.rating"
                            :increment="0.01"
                            :read-only="true"
                            :star-size="16" 
                            active-color="#293FDF" 
                            inactive-color="#B1B1B1"
                            :show-rating="false"
                          />
                          <span class="ml-1 mt-1">{{ job.rating }}</span>
                        </span>
                        <span class="ml-4 mt-1 flex items-center text-sm text-gray-900 font-medium">19 April 2020</span>
                      </p>
                      <p class="mt-4 text-sm flex items-start text-gray-900 font-gotham-rounded-book font-light leading-5">
                        <read-more class="read-more leading-5" link="javascript:void;" more-str="more" less-str="less" :max-chars="130" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod consectetur maxime repudiandae facilis repellendus fugit accusantium soluta dolorum officiis deleniti tempora sed nam harum, animi beatae aliquam? Consequuntur, dolor eum!"></read-more>  
                      </p>
                    </div>
                    <!-- End Feedback Item -->
                  </div>
                </div>
              </div>

              <!-- Sidebar -->
              <div class="w-full lg:w-4/12 lg:pl-6">
                <div class="w-full flex flex-col">
                  <button class="w-full bg-primary text-white text-center text-sm p-4 mt-8 lg:mt-0 font-gotham-rounded font-medium shadow-dropdown hover:shadow-btn-hover hover:text-opacity-75 focus:outline-none transition duration-300 ease-in-out">Apply Now</button>
                  <button class="flex items-center justify-start w-full bg-white text-gray-600 text-center text-sm p-2 mt-4 font-gotham-rounded font-medium shadow-dropdown hover:shadow-btn-hover hover:text-opacity-75 focus:outline-none transition duration-300 ease-in-out">
                    <span class="ml-4 bg-gray-200 flex items-center justify-center h-8 w-8 rounded-full focus:outline-none">
                      <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path d="M11.878,8.515H10L10.939,0h.939l1.565,4.258Z" transform="translate(-9.687)" fill="#b1b1b1"/>
                        <rect width="8" height="9" transform="translate(8 3)" fill="#b1b1b1"/>
                        <path d="M203.818,244.347a1.409,1.409,0,1,1-2.818,0V242S203.818,241.968,203.818,244.347Z" transform="translate(-194.707 -234.423)" fill="#b1b1b1"/>
                        <path d="M75.51,0H70V8.515h5.51a1.413,1.413,0,0,1,1.409,1.409V1.409A1.413,1.413,0,0,0,75.51,0Z" transform="translate(-67.809)" fill="#b1b1b1"/>
                        <rect width="1" height="16" fill="#b1b1b1"/>
                      </svg>
                    </span> 
                    <span class="pl-3">Flag as Inappropriate</span>
                  </button>
                  <button class="flex items-center justify-start w-full bg-white text-gray-600 text-center text-sm p-2 mt-4 font-gotham-rounded font-medium shadow-dropdown hover:shadow-btn-hover hover:text-opacity-75 focus:outline-none transition duration-300 ease-in-out">
                    <span class="ml-4 bg-gray-200 flex items-center justify-center h-8 w-8 rounded-full focus:outline-none">
                      <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.732 16.035">
                        <path d="M16.688,6.555a.888.888,0,0,0-.765-.611l-4.83-.439L9.184,1.036a.89.89,0,0,0-1.636,0L5.639,5.506.808,5.944A.89.89,0,0,0,.3,7.5l3.651,3.2L2.877,15.443A.889.889,0,0,0,4.2,16.4l4.165-2.49L12.53,16.4a.89.89,0,0,0,1.324-.962L12.777,10.7l3.651-3.2a.89.89,0,0,0,.259-.945ZM8.446,13.866" transform="translate(0 -0.496)" fill="#B1B1B1"/>
                      </svg>
                    </span> 
                    <span class="pl-3">Bookmark as Job</span>
                  </button>
                </div>

                <div class="border-b border-gray-400 mt-6"></div>

                <div class="flex flex-col">
                  <div class="mt-6">
                    <strong class="font-gotham-book text-sm text-gray-700 font-semibold">Posted at:</strong>
                    <span class="text-sm text-gray-700">2 hours ago</span>
                  </div>
                  <div class="mt-6 flex items-center">
                    <strong class="font-gotham-book text-sm text-gray-700 font-semibold">English Level:</strong>
                    <span class="ml-1 text-sm text-gray-700">Fluent</span>
                    <svg class="ml-2 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.18 16.176">
                      <path d="M93.724,89.2a4.825,4.825,0,1,0,4.825,4.825A4.831,4.831,0,0,0,93.724,89.2Zm2.42,3.669-2.912,2.747a.283.283,0,0,1-.2.081.286.286,0,0,1-.209-.088L91.3,94.043a.294.294,0,0,1,.419-.411l1.322,1.359,2.7-2.548a.294.294,0,0,1,.4.426Zm0,0" transform="translate(-85.634 -85.935)" fill="#5c74ff"/>
                      <path d="M15.019,10.149l1.16-1.759-1.16-1.759a.3.3,0,0,1-.048-.176l.117-2.108L13.212,3.4a.29.29,0,0,1-.129-.129l-.947-1.877-2.108.117a.3.3,0,0,1-.176-.048L8.09.3,6.331,1.461a.3.3,0,0,1-.176.048L4.047,1.391,3.1,3.268a.29.29,0,0,1-.129.129l-1.877.947.117,2.108a.3.3,0,0,1-.048.176L0,8.391,1.16,10.15a.3.3,0,0,1,.048.176l-.117,2.108,1.877.947a.29.29,0,0,1,.129.129l.947,1.877,2.108-.118h.015a.31.31,0,0,1,.162.048l1.759,1.16,1.759-1.16a.3.3,0,0,1,.176-.048l2.108.118.947-1.877a.29.29,0,0,1,.129-.129l1.876-.947-.117-2.108a.369.369,0,0,1,.055-.176ZM8.09,13.8A5.413,5.413,0,1,1,13.5,8.391,5.418,5.418,0,0,1,8.09,13.8Zm0,0" transform="translate(0 -0.301)" fill="#5c74ff"/>
                    </svg>
                  </div>
                  <div class="mt-6">
                    <strong class="font-gotham-book text-sm text-gray-700 font-semibold">Time in New York:</strong>
                    <span class="text-sm text-gray-700">8:22 pm</span>
                  </div>
                  <div class="mt-6">
                    <strong class="font-gotham-book text-sm text-gray-700 font-semibold">Interviewing:</strong>
                    <span class="text-sm text-gray-700">2</span>
                  </div>
                  <div class="mt-6">
                    <strong class="font-gotham-book text-sm text-gray-700 font-semibold">Bids:</strong>
                    <span class="text-sm text-gray-700">2</span>
                  </div>
                </div>

                <div class="border-b border-gray-400 mt-6"></div>

                <div class="flex flex-col mt-6">
                  <strong class="font-gotham-book text-sm text-gray-700 font-semibold">Request Link</strong>
                  <div class="w-full flex mt-6">
                    <input class="flex-1 px-4 py-3 focus:outline-none text-sm text-gray-700 bg-input border border-message cursor-not-allowed opacity-75" type="url" value="http://localhost:3000/job/~5456465456" disabled>
                    <button content="Copy the link" v-tippy="{placement: 'bottom', arrow: true, theme: 'light'}" class="px-4 py-3 text-sm text-white text-center bg-primary focus:outline-none flex justify-center items-center shadow-sm">     
                      <svg class="fill-current text-white h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M320 448v40c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V120c0-13.255 10.745-24 24-24h72v296c0 30.879 25.121 56 56 56h168zm0-344V0H152c-13.255 0-24 10.745-24 24v368c0 13.255 10.745 24 24 24h272c13.255 0 24-10.745 24-24V128H344c-13.2 0-24-10.8-24-24zm120.971-31.029L375.029 7.029A24 24 0 0 0 358.059 0H352v96h96v-6.059a24 24 0 0 0-7.029-16.97z"></path></svg>
                    </button>
                  </div>
                </div>

                <div class="border-b border-gray-400 mt-6"></div>

                <div class="flex flex-col mt-6">
                  <strong class="font-gotham-book text-sm text-gray-700 font-semibold">Share</strong>
                  <div class="flex items-center justify-between mt-6">
                    <button content="Share on facebook" v-tippy="{placement: 'bottom', arrow: true, theme: 'light'}" class="bg-white text-gray-600 p-3 shadow-dropdown rounded-sm hover:shadow-btn-hover hover:opacity-75 focus:outline-none transition duration-300 ease-in-out">
                      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.5 30.807">
                        <path d="M38.309,17.329l.856-5.575h-5.35V8.136c0-1.525.747-3.012,3.143-3.012H39.39V.377A29.659,29.659,0,0,0,35.073,0c-4.406,0-7.285,2.67-7.285,7.5v4.249h-4.9v5.575h4.9V30.807h6.027V17.329Z" transform="translate(-22.89)" fill="#3b5999"/>
                      </svg>
                    </button>
                    <button content="Share on twitter" v-tippy="{placement: 'bottom', arrow: true, theme: 'light'}" class="bg-white text-gray-600 p-3 shadow-dropdown rounded-sm hover:shadow-btn-hover hover:opacity-75 focus:outline-none transition duration-300 ease-in-out">
                      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.245 22.128">
                        <path d="M24.444,53.6c.017.242.017.484.017.726A15.778,15.778,0,0,1,8.574,70.21,15.779,15.779,0,0,1,0,67.7a11.552,11.552,0,0,0,1.348.069,11.183,11.183,0,0,0,6.932-2.386A5.594,5.594,0,0,1,3.06,61.514a7.042,7.042,0,0,0,1.055.086,5.906,5.906,0,0,0,1.469-.19,5.585,5.585,0,0,1-4.477-5.48v-.069a5.623,5.623,0,0,0,2.524.709A5.592,5.592,0,0,1,1.9,49.1a15.872,15.872,0,0,0,11.513,5.843,6.3,6.3,0,0,1-.138-1.279,5.589,5.589,0,0,1,9.664-3.82A10.993,10.993,0,0,0,26.484,48.5a5.569,5.569,0,0,1-2.455,3.077,11.194,11.194,0,0,0,3.215-.864A12,12,0,0,1,24.444,53.6Z" transform="translate(0 -48.082)" fill="#55acee"/>
                      </svg>
                    </button>
                    <button content="Share on linkedin" v-tippy="{placement: 'bottom', arrow: true, theme: 'light'}" class="bg-white text-gray-600 p-3 shadow-dropdown rounded-sm hover:shadow-btn-hover hover:opacity-75 focus:outline-none transition duration-300 ease-in-out">
                      <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.128 22.128">
                        <path d="M4.953,22.138H.366V7.364H4.953ZM2.657,5.349A2.669,2.669,0,1,1,5.314,2.667,2.679,2.679,0,0,1,2.657,5.349ZM22.123,22.138H17.545V14.946c0-1.714-.035-3.912-2.385-3.912-2.385,0-2.751,1.862-2.751,3.788v7.315H7.827V7.364h4.4V9.379h.064a4.821,4.821,0,0,1,4.341-2.386c4.643,0,5.5,3.057,5.5,7.029v8.115Z" transform="translate(0 -0.01)" fill="#0077b5"/>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Job Content-->
        </div>
      </div>
    </modal>
  </div>
</template>

<script>
export default {
  props: {
    job: {
      type: Object,
      default: () => {
        return {}
      }
    },
  },
  methods: {
    show() {
      this.$router.push({name: 'job.show', params: {id: '5456465456'}})
      this.showModal(`job.show-${this.$vnode.key}`)
    },
    closed () {
      let body = document.querySelector('body')
      body.classList.remove('overflow-hidden')
      this.$router.go(-1)
    },
  }
}
</script>

<style lang="scss">
.vue-simple-progress-text {
  font-size: 13px !important;
}
.vue-simple-progress {
  @apply mt-2;
}
.read-more {
  p {
    display: inline;
  }
  a {
    @apply text-primary;
    &:hover {
      @apply underline;
    }
  }
}
</style>
