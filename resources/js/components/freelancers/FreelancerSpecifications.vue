<template>
    <div class="hidden lg:flex flex-wrap justify-start items-center">    
        <!-- Freelancer Location -->
        <div class="flex items-center my-4 lg:my-1 sm:w-48 md:w-auto">       
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
        <div class="flex items-center my-4 lg:my-1 sm:w-48 md:w-auto">       
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
        <div class="flex items-center my-4 lg:my-1 sm:w-48 md:w-auto">       
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.618 19">
                <path d="M20.989,2.533H15.242V1.9a1.9,1.9,0,0,0-1.9-1.9H8.276a1.9,1.9,0,0,0-1.9,1.9v.633H.634A.635.635,0,0,0,0,3.167V17.1A1.9,1.9,0,0,0,1.9,19H19.718a1.9,1.9,0,0,0,1.9-1.9V3.178a.615.615,0,0,0-.629-.644ZM7.642,1.9a.634.634,0,0,1,.633-.633h5.067a.634.634,0,0,1,.633.633v.633H7.642ZM20.106,3.8,18.139,9.7a.632.632,0,0,1-.6.433H13.976V9.5a.633.633,0,0,0-.633-.633H8.276a.633.633,0,0,0-.633.633v.633H4.08a.632.632,0,0,1-.6-.433L1.512,3.8Zm-7.4,6.333V11.4h-3.8V10.133ZM20.351,17.1a.634.634,0,0,1-.633.633H1.9a.634.634,0,0,1-.633-.633V7.069L2.277,10.1a1.9,1.9,0,0,0,1.8,1.3H7.642v.633a.633.633,0,0,0,.633.633h5.067a.633.633,0,0,0,.633-.633V11.4h3.563a1.9,1.9,0,0,0,1.8-1.3l1.011-3.031Zm0,0" transform="translate(0)" fill="#5d5a5a"/>
            </svg>
            <span class="text-sm text-gray-700 px-2">65 jobs done</span>
        </div>

        <!-- Freelancer Hours Worked -->
        <div class="flex items-center my-4 lg:my-1 sm:w-48 md:w-auto">       
            <svg id="quarter" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <path d="M81.4,74.668A6.738,6.738,0,0,0,74.668,81.4a.56.56,0,0,0,.561.561H81.4a.56.56,0,0,0,.561-.561v-6.17a.56.56,0,0,0-.561-.561Zm0,0" transform="translate(-71.751 -71.751)" fill="#5d5a5a"/>
                <path d="M10,20A10,10,0,1,1,20,10,10.011,10.011,0,0,1,10,20ZM10,1.667A8.333,8.333,0,1,0,18.333,10,8.343,8.343,0,0,0,10,1.667Zm0,0" fill="#5d5a5a"/>
            </svg>
            <span class="text-sm text-gray-700 px-2">1,850 hours</span>
        </div>
    </div>
</template>

<script>
export default {}
</script>
