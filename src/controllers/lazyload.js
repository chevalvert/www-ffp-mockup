import 'intersection-observer'
import 'nodelist-foreach'
import lozad from 'lozad'

export default ({
  selector = '[data-lazyload]'
} = {}) => {
  let observer = lozad(selector, {
    rootMargin: '512px 0px',
    threshold: 0.1
  })

  observer.observe()
}
