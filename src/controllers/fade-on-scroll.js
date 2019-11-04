import 'intersection-observer'
import 'nodelist-foreach'
import noop from 'utils/noop'

/* global IntersectionObserver */

export default ({
  selector = '.barba-container > *',
  rootMargin = '20px 0px 70px 0px',
  onFade = noop
} = {}) => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) fadeIn(entry.target)
    })
  }, { rootMargin })

  const fadables = document.querySelectorAll(selector)
  fadables.forEach(el => {
    el.setAttribute('js-wait-for-intersection', true)
    observer.observe(el)
    el.addEventListener('mouseenter', () => fadeIn(el))
  })

  function fadeIn (el) {
    if (!el || el.alreadyFadedIn) return

    el.alreadyFadedIn = true
    el.classList.add('is-visible')
    onFade(el)
  }
}
