<template>
  <div class="flex flex-1">
    <input
      type="text"
      class="px-4 py-3 w-full text-sm border focus:outline-none focus:shadow-inner focus:border-primary transition duration-100 ease-linear"
      :placeholder="placeholder"
    >
    <button class="bg-primary focus:outline-none flex justify-center items-center px-4 shadow-sm">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="18"
        height="18"
        viewBox="0 0 18 18"
      >
        <g transform="translate(0 0)">
          <path
            d="M17.89,16.83,12.661,11.6A7.139,7.139,0,1,0,11.6,12.661L16.83,17.89a.375.375,0,0,0,.53,0l.53-.53A.375.375,0,0,0,17.89,16.83ZM7.125,12.75A5.625,5.625,0,1,1,12.75,7.125,5.631,5.631,0,0,1,7.125,12.75Z"
            transform="translate(0 0)"
            fill="#fff"
          />
        </g>
      </svg>
    </button>
  </div>
</template>

<script>
export default {
     props: {
        placeholder: {
            type: String,
            required: true
        }
    }
}
</script>
