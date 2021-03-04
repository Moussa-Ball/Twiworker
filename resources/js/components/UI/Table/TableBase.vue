<template>
<div class="flex flex-col">
  <div class="-my-2 sm:-mx-6 lg:-mx-8">
    <simplebar :data-simplebar-auto-hide="true">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow-dropdown overflow-hidden border-b border-gray-200">
          <table class="min-w-full divide-y divide-gray-200">
            <slot></slot>
          </table>
        </div>
      </div>
    </simplebar>
  </div>
</div>
</template>

<script>
export default {
    name: 'table-base'
}
</script>
