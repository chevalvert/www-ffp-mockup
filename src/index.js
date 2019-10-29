import barba from 'controllers/barba'
import lazyload from 'controllers/lazyload'
import fadeOnScroll from 'controllers/fade-on-scroll'
import FFPLandscape from 'controllers/ffp-landscape'
import menu from 'components/menu'

import 'views/article'
import 'views/table'
import 'views/form'

import defaultTransition from 'views/transitions/default'

barba({
  wrapperId: 'main',
  containerClass: 'barba-container',
  updateOutsideWrapper: ['.menu', '.menu--mobile'],

  linkClicked: () => {
    document.body.classList.add('is-loading')
    document.body.removeAttribute('no-scroll')
    FFPLandscape.destroy()
  },

  newPageReady: () => {
    menu()
    lazyload()
    fadeOnScroll()
    FFPLandscape.build()
  },

  transitionCompleted: () => {
    document.body.classList.remove('is-loading')
  },

  transitionsMap: {
    default: defaultTransition
  }
})
