<template>
  <div class="bg-body w-10/12 h-full fixed top-0 right-0 bottom-0 shadow-md z-50 overflow-auto">
    <div class="w-full flex items-center px-10 py-6 bg-white border-b">
      <div class="container px-4 lg:px-6 flex flex-wrap items-center justify-between">
        <svg v-on:click.prevent.stop="goBack" class="w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.97 27">
          <g transform="translate(-101.48)">
            <g transform="translate(101.48 0)">
              <path d="M106.51,13.506l9.533-10.1a1.51,1.51,0,0,0,.407-1.044,1.511,1.511,0,0,0-.407-1.044l-.835-.885a1.341,1.341,0,0,0-1.971,0l-11.35,12.026a1.554,1.554,0,0,0,0,2.1l11.339,12.015a1.341,1.341,0,0,0,1.971,0l.835-.885a1.542,1.542,0,0,0,0-2.089Z" transform="translate(-101.48 0)" fill="#293fdf"/>
            </g>
          </g>
        </svg>
      </div>
    </div>
    <div class="px-10 relative top-auto left-auto mx-auto bg-header border-b">
      <div class="flex flex-wrap items-center justify-between container px-4 py-16 lg:px-6">
        <div>
          <h2 class="pb-10 font-gotham-rounded text-gray-800 text-xl font-medium">Need a bedroom and living room cleaning.</h2>
          <span class="block font-gotham-rounded text-gray-800 text-sm font- -mb-2">About the client</span>
          <div class="flex flex-wrap items-baseline">
            <div class="flex items-center mr-4">
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
            
            <div class="flex items-baseline mr-4">
              <h4 class="font-gotham-rounded text-gray-800 text-sm font-medium pr-1">Location:</h4>
              <p class="font-light text-sm">{{ job.city }}, {{ job.country }}</p>
            </div>
            
            <div class="flex items-baseline mr-4 relative" style="top: 4px;">
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
          </div>
        </div>
        <div class="flex flex-col justify-center items-center bg-white shadow-btn-hover h-32 w-48">
          <span class="pb-4 text-sm text-gray-700">Hourly Rate</span>
          <strong class="text-base text-gray-700 font-gotham-rounded font-medium">$40,00</strong>
        </div>
      </div>
    </div>
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
    goBack ()  {
      this.$router.go(-1)
    },
  }
}
</script>
