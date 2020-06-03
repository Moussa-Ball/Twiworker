<template>
  <div v-click-outside="hide" class="dropdown">
    <button @click="open = !open" class="btn">
      <span class="btn-text">English</span>
      <span class="btn-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="13.389" height="7.865" viewBox="0 0 13.389 7.865">
          <g id="back" transform="translate(0 7.865) rotate(-90)">
            <g id="Groupe_23" data-name="Groupe 23" transform="translate(0 0)">
              <path id="Tracé_279" data-name="Tracé 279" d="M104.123,6.7l5.009-5.009a.734.734,0,0,0,0-1.036l-.439-.439a.734.734,0,0,0-1.036,0l-5.964,5.964a.739.739,0,0,0,0,1.039l5.958,5.958a.734.734,0,0,0,1.036,0l.439-.439a.733.733,0,0,0,0-1.036Z" transform="translate(-101.48 0)" fill="#fff"/>
            </g>
          </g>
        </svg>
      </span>
    </button>
    <div class="dropdown-menu" :class="{'show': open}">
      <a href="#" class="dropdown-item">普通话</a>
      <a href="#" class="dropdown-item">English</a>
      <a href="#" class="dropdown-item">Spanish</a>
      <a href="#" class="dropdown-item">French</a>
      <a href="#" class="dropdown-item">German</a>
    </div>
  </div>
</template>

<script>
  export default {
      data () {
      return {
        open: false
      }
    },
    methods: {
      hide () {
        this.open = false
      }
    },
    created() {
      const handleEscape = (e) => {
        if (e.key === 'Esc' || e.key === 'Escape') {
          this.open = false
        }
      }
      document.addEventListener('keydown', handleEscape)
      this.$once('hook:beforeDestroy', () => {
        document.removeEventListener('keydown', handleEscape)
      })
    }
  }
</script>
