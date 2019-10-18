import barba from 'controllers/barba'

// TODO: barba lifecycle
// import FFPHue from 'controllers/ffp-hue'
import 'controllers/ffp-wall'

import 'views/table'
import defaultTransition from 'views/transitions/default'

barba({
  wrapperId: 'main',
  containerClass: 'barba-container',
  updateOutsideWrapper: ['.menu'],

  linkClicked: () => {
    document.body.classList.add('is-loading')
    document.body.removeAttribute('no-scroll')
  },

  newPageReady: () => {
    // FFPHue.rebuild()
    // lazyloader()
  },

  transitionCompleted: ({ url }) => {
    document.body.classList.remove('is-loading')
  },

  transitionsMap: {
    default: defaultTransition
  }
})
