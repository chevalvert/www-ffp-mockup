import barba from 'controllers/barba'
import lazyload from 'controllers/lazyload'
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
  },

  newPageReady: () => {
    menu()
    lazyload()
    FFPLandscape()
  },

  transitionCompleted: () => {
    document.body.classList.remove('is-loading')
  },

  transitionsMap: {
    default: defaultTransition
  }
})
