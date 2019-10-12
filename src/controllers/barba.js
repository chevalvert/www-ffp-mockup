/**
 * This is an opinionated wrapper around Barba@2, mainly dedicated to simplify
 * views handling in different modules. This is basically syntactic sugar around
 * the real Barba@2 API
 */

import barba from '@barba/core'

let initialized
const transitions = []
const views = []

const RESERVED_GLOBAL_HOOKS = ['before', 'after']
const ERR_MESSAGES = {
  'cannot_register_view': 'controllers/barba: @barba/core is already initialized.\nMake sure to register all views before calling controllers/barba.init',
  'cannot_register_transition': 'controllers/barba: @barba/core is already initialized.\nMake sure to register all transitions before calling controllers/barba.init',
  'already_intialized': 'controllers/barba: @barba/core is already initialized.'
}

export default {
  get initialized () { return initialized },

  registerView: view => {
    if (initialized) throw new Error(ERR_MESSAGES['cannot_register_view'])
    views.push(view)
  },

  registerTransition: transition => {
    if (initialized) throw new Error(ERR_MESSAGES['cannot_register_transition'])
    transitions.push(transition)
  },

  init: ({
    hooks = {}
  } = {}) => {
    if (initialized) throw new Error(ERR_MESSAGES['already_intialized'])
    initialized = true

    Object.entries(hooks).forEach(([hook, callback]) => {
      if (RESERVED_GLOBAL_HOOKS.includes(hook)) {
        throw new Error(`controllers/barba: barba.hooks.${hook} is reserved for internal purpose only.`)
      }
      barba.hooks[hook](callback)
    })

    barba.hooks.before(({ current, next }) => {
      document.body.classList.add('is-loading')

      // Force hard-reloading when clicking on a link pointing to the current view
      const currentLocation = current.url.href.replace(/^\/|\/$/g, '')
      const nextLocation = next.url.href.replace(/^\/|\/$/g, '')
      if (currentLocation === nextLocation) {
        window.location.reload()
      }
    })

    barba.hooks.after(() => {
      document.body.classList.remove('is-loading')
    })

    barba.init({
      transitions,
      views,
      logLevel: 'warning',
      schema: {
        prefix: 'data-barba',
        container: 'container',
        namespace: 'view',
        prevent: 'prevent',
        wrapper: 'wrapper'
      }
    })
  }
}
