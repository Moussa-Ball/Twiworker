<template>
  <li class="nav-item dropdown" :class="open ? 'show' : ''" @mouseover="open = true" @mouseleave="open = false">
    <a @click.prevent.stop="drop = !drop" class="nav-link dropdown-toggle"  :href="link">{{ name }}</a>
    <div :class="open ? 'block' : 'block sm:hidden'" class="dropdown-over">&nbsp;</div>
    <div class="dropdown-menu" :class="{'show': open, 'show-menu': drop}">
      <slot></slot>
    </div>
  </li>
</template>

<script>
export default {
  // eslint-disable-next-line vue/require-prop-types
  props: ["name", "link"],
  data () {
    return {
      open: false,
      drop: false
    }
  }
}
</script>
