import barba from 'controllers/barba'
import noop from 'utils/noop'

// NOTE: this is an opinionated wrapper around Barba@2 <view> structure.

export default (namespace, {
  willMount = noop,
  didMount = noop,
  willUnmount = noop,
  didUnmount = noop
} = {}) => barba.registerView({
  namespace,

  beforeEnter () {
    this.refs = {}
    willMount(this.refs)
  },

  afterEnter () {
    didMount(this.refs)
  },

  beforeLeave () {
    willUnmount(this.refs)
    Object.values(this.refs).forEach(ref => ref && ref.destroy && ref.destroy())
    this.refs = undefined
  },

  afterLeave () {
    didUnmount()
  }
})
