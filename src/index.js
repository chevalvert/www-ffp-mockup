import barba from 'controllers/barba'

// TODO: barba lifecycle
import 'controllers/ffp-hue'
import 'controllers/ffp-wall'

import menu from 'components/menu'

import 'views/table'

barba.init({
  hooks: {
    beforeLeave: () => {},
    afterLeave: () => window.scrollTo(0, 0),
    beforeEnter: () => {
      // TODO: get new menu background-color & color
      menu.close()
    },
    afterEnter: ({ next }) => menu.setActiveLink(next.url.href)
  }
})
