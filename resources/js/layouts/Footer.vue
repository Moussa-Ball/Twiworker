<template>
  <footer class="footer">
    <div class="container">
      <div class="section-logo-and-dropdown-language">
        <div>
          <svg
            class="h-5"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 147.952 22.096"
          >
            <path
              fill="#ffffff"
              transform="translate(-3.078 21.094)"
              d="M5.922,0h0l4.125-16.281H3.078l1.172-4.8H22.906l-1.187,4.8h-6.75L10.906,0ZM22.3-1.625h0A3.978,3.978,0,0,0,25.641,0h1.781V-.016h1.75l.719-3.062A4.06,4.06,0,0,0,33.969,0h3.5V-.016h4.656l3.844-15.875H40.75L38.031-4.375H35.844a.789.789,0,0,1-.672-.312.862.862,0,0,1-.187-.7l2.563-10.5H32.422l-2.562,10.5a4.771,4.771,0,0,0-.141,1.016H27.5a.789.789,0,0,1-.672-.312.944.944,0,0,1-.187-.7l2.563-10.5H24.078l-2.562,10.5A4.344,4.344,0,0,0,22.3-1.625ZM44.141,0h0l3.938-15.969h5.156L49.359,0Zm4.266-17.344h0l.969-3.75h5.141l-.969,3.75Z"
            />
            <path
              fill="#293fdf"
              transform="translate(49.250 21.094)"
              d="M.906-1.625h0A3.978,3.978,0,0,0,4.25,0H6.031V-.016h1.75L8.5-3.078A4.06,4.06,0,0,0,12.578,0h3.5V-.016h4.656l3.844-15.875H19.359L16.641-4.375H14.453a.789.789,0,0,1-.672-.312.862.862,0,0,1-.187-.7l2.563-10.5H11.031L8.469-5.391a4.771,4.771,0,0,0-.141,1.016H6.109a.789.789,0,0,1-.672-.312.944.944,0,0,1-.187-.7l2.563-10.5H2.688L.125-5.391A4.344,4.344,0,0,0,.906-1.625ZM29.719-.078h0a18.239,18.239,0,0,0,2.688.047q5.828-.234,8.344-4.844a9.219,9.219,0,0,0,.563-7.453,5.75,5.75,0,0,0-1.8-2.461,6.568,6.568,0,0,0-3.5-1.133,20.944,20.944,0,0,0-2.8-.031,9.054,9.054,0,0,0-8.187,4.8A9.223,9.223,0,0,0,24.469-3.7a5.419,5.419,0,0,0,1.766,2.422A7.406,7.406,0,0,0,29.719-.078Zm5.406-5.312h0a6.185,6.185,0,0,1-3.812.8q-3.281-.266-2.2-3.812a4.235,4.235,0,0,1,1.547-2.234,6.044,6.044,0,0,1,3.813-.8q1.781.156,2.234,1.094a4.007,4.007,0,0,1-.031,2.719A4.157,4.157,0,0,1,35.125-5.391ZM44.609-11.5h0a5.629,5.629,0,0,1,5-4.391h5.047L53.5-11.359H50.75a1.306,1.306,0,0,0-.859.328,1.583,1.583,0,0,0-.5.828L46.906,0H41.844l2.766-11.5ZM57.891,0h0l1.563-7.187L62.172,0h4.656L63.719-8.094l7-7.844H65.125l-4.75,5.328,2.734-10.484H57.984L52.766,0ZM82.938,0h0l1.094-4.531H75.047q-3.062-.109-2.156-3.687a4.254,4.254,0,0,1,1.516-2.25,4.772,4.772,0,0,1,3.031-1.047h3.234L80.344-10.2H76.859a2.445,2.445,0,0,0-1.953,1.156,3.669,3.669,0,0,0-.648,2.078q.023,1.031.789,1.141h9.281l1.391-5.687h0l.031-.156a3.5,3.5,0,0,0-.367-2.789q-.758-1.242-3.148-1.4H77.063a9.237,9.237,0,0,0-8.156,5.047q-1.859,4.125-.562,7.359A5.358,5.358,0,0,0,70.1-1.078a6.333,6.333,0,0,0,3.43,1.016ZM87.7-11.5h0a5.629,5.629,0,0,1,5-4.391H97.75l-1.156,4.531h-2.75a1.306,1.306,0,0,0-.859.328,1.583,1.583,0,0,0-.5.828L90,0H84.938L87.7-11.5Z"
            />      
          </svg>
        </div>
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
      </div>

      <div class="footer-line"></div>

      <div class="footer-menu">
        <div class="footer-menu-item w-4/8">
          <h4>About</h4>
          <ul class="footer-menu-item-list">
            <li><a href="#">Blog</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Terms of use</a></li>
          </ul>
        </div>

        <div class="footer-menu-item">
          <h4>Resources</h4>
          <ul class="footer-menu-item-list">
            <li><a href="#">Community</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Help & Support</a></li>
          </ul>
        </div>        

        <div class="footer-menu-item">
          <h4>Browser</h4>
          <ul class="footer-menu-item-list">
            <li><a href="#">Top Freelancers</a></li>
            <li><a href="#">Freelancers in UK</a></li>
            <li><a href="#">Freelancers in USA</a></li>
          </ul>
        </div>

        <div class="footer-menu-item">
          <h4>Follow Us</h4>
          <ul class="footer-menu-item-list">
            <li>
              <a href="#" class="flex justify-start items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.036" height="24.017" viewBox="0 0 24.036 24.017">
                  <g id="twitter" transform="translate(0 -0.2)">
                    <g id="Groupe_25" data-name="Groupe 25" transform="translate(0 0.2)">
                      <path id="Tracé_301" data-name="Tracé 301" d="M17.994.2H6.023A6.036,6.036,0,0,0,0,6.223V18.213a6.032,6.032,0,0,0,6.023,6H18.013a6.036,6.036,0,0,0,6.023-6.023V6.223A6.065,6.065,0,0,0,17.994.2Zm-.019,9v.4a8.615,8.615,0,0,1-8.749,8.616,8.775,8.775,0,0,1-4.708-1.353c.248.019.477.038.724.038a6.14,6.14,0,0,0,3.812-1.3,3.071,3.071,0,0,1-2.878-2.1,2.909,2.909,0,0,0,.572.057,2.839,2.839,0,0,0,.82-.114,3.046,3.046,0,0,1-2.421-2.974v-.038a2.948,2.948,0,0,0,1.372.381,2.989,2.989,0,0,1-.953-4.041A8.806,8.806,0,0,0,11.894,9.94a2.806,2.806,0,0,1-.076-.686,3.047,3.047,0,0,1,3.069-3.031,3.124,3.124,0,0,1,2.249.953,5.722,5.722,0,0,0,1.944-.743A3.1,3.1,0,0,1,17.727,8.11,6.09,6.09,0,0,0,19.5,7.634,6.259,6.259,0,0,1,17.975,9.2Z" transform="translate(0 -0.2)" fill="#fff"/>
                    </g>
                  </g>
                </svg>
                <span class="pl-4">Twitter</span>
              </a>
            </li>
            <li>
              <a href="#" class="flex justify-start items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.036" height="24.036" viewBox="0 0 24.036 24.036">
                  <path id="linkedin" d="M20.515,0H3.521A3.525,3.525,0,0,0,0,3.521V20.515a3.525,3.525,0,0,0,3.521,3.521H20.515a3.525,3.525,0,0,0,3.521-3.521V3.521A3.525,3.525,0,0,0,20.515,0ZM8.5,19.06H5.68V9.2H8.5Zm0-11.267H5.68V4.976H8.5ZM18.356,19.06H15.539V13.426a1.408,1.408,0,0,0-2.817,0V19.06H9.906V9.2h2.817v.531A6.106,6.106,0,0,1,14.835,9.2a3.687,3.687,0,0,1,3.521,3.741Zm0,0" fill="#fff"/>
                </svg>
                <span class="pl-4">Linkedin</span>
              </a>
            </li>
            <li>
              <a href="#" class="flex justify-start items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.15" height="24.15" viewBox="0 0 24.15 24.15">
                  <path id="facebook" d="M20.613,0H3.538A3.542,3.542,0,0,0,0,3.538V20.613A3.542,3.542,0,0,0,3.538,24.15H10.66V15.613H7.83V11.368h2.83V8.49a4.25,4.25,0,0,1,4.245-4.245H19.2V8.49H14.905v2.877H19.2l-.708,4.245H14.905V24.15h5.707a3.542,3.542,0,0,0,3.538-3.538V3.538A3.542,3.542,0,0,0,20.613,0Zm0,0" fill="#fff"/>
                </svg>
                <span class="pl-4">Facebook</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="footer-line second"></div>


      <div class="copyright-section">
        <span>© 2020 Twiworker.</span>
      </div>
    </div>
  </footer>
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
