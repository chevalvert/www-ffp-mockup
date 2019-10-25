import { debounce } from 'tiny-throttle'

import barba from 'controllers/barba'
import lazyload from 'controllers/lazyload'

import FFPLandscape from 'controllers/ffp-landscape'

import 'views/article'
import 'views/table'
import 'views/form'

import defaultTransition from 'views/transitions/default'

// TODO: move inside FFPLandscape
let pwidth = window.innerWidth
window.addEventListener('resize', debounce(() => {
  if (window.innerWidth === pwidth) return
  FFPLandscape.update()
  pwidth = window.innerWidth
}, 100))

barba({
  wrapperId: 'main',
  containerClass: 'barba-container',
  updateOutsideWrapper: ['.menu', '.menu--mobile'],

  linkClicked: () => {
    document.body.classList.add('is-loading')
    document.body.removeAttribute('no-scroll')
  },

  newPageReady: () => {
    FFPLandscape.build()
    lazyload()
  },

  transitionCompleted: () => {
    document.body.classList.remove('is-loading')
  },

  transitionsMap: {
    default: defaultTransition
  }
})
