import 'intersection-observer'
import 'nodelist-foreach'
import lozad from 'lozad'

window.lazyload = function ({ selector = '[data-lazyload]' } = {}) {
  let observer = lozad(selector, {
    rootMargin: '512px 0px',
    threshold: 0.1
  })
  observer.observe()

  return observer
}

export default window.lazyload
