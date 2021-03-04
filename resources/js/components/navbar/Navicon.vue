<template>
  <div class="select-none relative flex items-center bg-gray-300 hover:bg-gray-400 transition ease-in-out duration-300 justify-start w-auto cursor-pointer rounded-full lg:mr-6 mb-4 lg:mb-0">
    <div class="h-10 w-10 rounded-full flex items-center justify-center">
      <svg
        v-if="type == 'judge'"
        class="w-4 h-4 text-gray-600 fill-current"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
      ><path
        fill="currentColor"
        d="M504.971 199.362l-22.627-22.627c-9.373-9.373-24.569-9.373-33.941 0l-5.657 5.657L329.608 69.255l5.657-5.657c9.373-9.373 9.373-24.569 0-33.941L312.638 7.029c-9.373-9.373-24.569-9.373-33.941 0L154.246 131.48c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l5.657-5.657 39.598 39.598-81.04 81.04-5.657-5.657c-12.497-12.497-32.758-12.497-45.255 0L9.373 412.118c-12.497 12.497-12.497 32.758 0 45.255l45.255 45.255c12.497 12.497 32.758 12.497 45.255 0l114.745-114.745c12.497-12.497 12.497-32.758 0-45.255l-5.657-5.657 81.04-81.04 39.598 39.598-5.657 5.657c-9.373 9.373-9.373 24.569 0 33.941l22.627 22.627c9.373 9.373 24.569 9.373 33.941 0l124.451-124.451c9.372-9.372 9.372-24.568 0-33.941z"
      /></svg>
      <svg
        v-if="type == 'message'"
        class="w-4 h-4 text-gray-600 fill-current"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
      ><path
        fill="currentColor"
        d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"
      /></svg>
      <svg
        v-if="type == 'notification'"
        class="w-4 h-4 text-gray-600 fill-current"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 448 512"
      ><path d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z" /></svg>
    </div>
    <div
      v-if="counter >= 1"
      class="select-none bg-primary absolute top-0 right-0 w-6 h-6 text-xxs font-bold flex items-center justify-center rounded-full text-white ml-4 -mt-2"
    >
      {{ counter }}
    </div>
  </div>
</template>

<script>
export default {
    // eslint-disable-next-line vue/require-prop-types
    props: ["type", "counter", "last"]
}
</script>
