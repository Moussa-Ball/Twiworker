<template>
  <div class="flex flex-wrap w-full mb-6 shadow-dropdown">
    <div class="flex items-center justify-center cursor-pointer w-1/2 bg-white py-3 text-sm"
         :class="accountType == 'freelancer' ? 'text-white bg-primary' : ''"
         @click="accountType = 'freelancer'">Freelancer</div>
    <div class="flex items-center justify-center cursor-pointer w-1/2 bg-white py-3 text-sm"
         :class="accountType == 'client' ? 'text-white bg-primary' : ''"
         @click="accountType = 'client'">Client</div>
    <input type="radio" class="hidden" name="account_type" value="freelancer" v-model="accountType">
    <input type="radio" class="hidden" name="account_type" value="client" v-model="accountType">
  </div>
</template>

<script>
  export default {
    data () {
      return {
        accountType: 'freelancer'
      }
    }
  }
</script>
