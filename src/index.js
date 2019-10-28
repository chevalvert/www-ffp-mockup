/* global IntersectionObserver */
import 'nodelist-foreach'
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
    FFPLandscape.destroy()
  },

  newPageReady: () => {
    menu()
    lazyload()
    FFPLandscape.build()

    // TODO: module
    // TODO: check for intersection observer
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.target && entry.intersectionRatio > 0) {
          entry.target.classList.add('is-visible')
        }
      })
    }, { rootMargin: '20px 0px 70px 0px' })
    const fadables = document.querySelectorAll('.barba-container > *')
    fadables.forEach(el => {
      el.setAttribute('js-wait-for-intersection', true)
      observer.observe(el)
      el.addEventListener('mouseenter', () => el.classList.add('is-visible'))
    })
  },

  transitionCompleted: () => {
    document.body.classList.remove('is-loading')
  },

  transitionsMap: {
    default: defaultTransition
  }
})
