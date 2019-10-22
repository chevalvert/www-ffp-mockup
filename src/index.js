import { debounce } from 'tiny-throttle'

import barba from 'controllers/barba'
import lazyload from 'controllers/lazyload'

// import FFPHue from 'controllers/ffp-hue'
import FFPLandscape from 'controllers/ffp-landscape'

import 'views/table'
import defaultTransition from 'views/transitions/default'

// ???
// FFPHue.timer.start()
// FFPHue.timer.add(FFPLandscape.update)

window.addEventListener('resize', debounce(FFPLandscape.update, 100))

barba({
  wrapperId: 'main',
  containerClass: 'barba-container',
  updateOutsideWrapper: ['.menu'],

  linkClicked: () => {
    document.body.classList.add('is-loading')
    document.body.removeAttribute('no-scroll')
  },

  newPageReady: () => {
    FFPLandscape.build()
    // FFPHue.rebuild() // ???
    lazyload()
  },

  transitionCompleted: () => {
    document.body.classList.remove('is-loading')
  },

  transitionsMap: {
    default: defaultTransition
  }
})
