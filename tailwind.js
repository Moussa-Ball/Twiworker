module.exports = {
    purge: [],
    theme: {
        fontFamily: {
            'gotham-rounded': ['Gotham Rounded'],
            'gotham-rounded-book': ['Gotham Rounded Book']
        },
        screens: {
          'sm': {'min': '576px', 'max': '575.98px'},
          'sm-min': {'min': '576px'},
          'sm-max': {'max': '575.98px'},
          
          'md': {'min': '768px', 'max': '767.98px'},
          'md-min': {'min': '768px'},
          'md-max': {'max': '767.98px'},
          
          'lg': {'min': '992px', 'max': '991.98px'},
          'lg-min': {'min': '992px'},
          'lg-max': {'max': '991.98px'},
          
          'xl': {'min': '1200px', 'max': '1199.98px'},
          'xl-min': {'min': '1200px'},
          'xl-max': {'max': '1199.98px'},
      },
      extend: {
        spacing: {
            "80": "20rem",
            "108": "27rem",
            "160": "40rem"
        },
        backgroundColor: {
            "primary": "#293fdf",
            "another": "#53D121",
        },
        textColor: {
            "primary": "#293fdf",
            "another": "#53D121",
        },
        inset: {
            "2": "20px",
        },
        fontSize: {
            xxs: "0.68rem",
            link: "13px",
            'footer-link': "15px",
        },
        boxShadow: {
            "dropdown": "0 0 6px rgba(50 ,50 , 50, .25)"
        },
        transitionProperty: {
           'height': 'height'
        }
      }
    },
    variants: {
        textColor: ["responsive", "hover", "focus", "group-hover"],
        backgroundColor: ["responsive", "hover", "focus", "even", "odd"]
    },
    plugins: []
};
