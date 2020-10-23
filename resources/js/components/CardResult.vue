<template>
  <div class="flex items-center text-sm text-gray-600 font-gotham-rounded-book font-normal mr-6">
    <strong class="mr-1 font-semibold text-gray-800">{{ number }}</strong>
    <span v-if="number > 1">results found</span>
    <span v-else>result found</span>
  </div>
</template>

<script>
export default {
    props: {
        number: {
            type: Number,
            required: true
        }
    }
}
</script>
