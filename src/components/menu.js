import Headroom from 'headroom.js'
import isMobile from 'utils/is-mobile'

export default ({
  togglersSelector = '.menu input[type="checkbox"], .menu--mobile input[type="checkbox"]'
} = {}) => {
  // Prevent body from scrolling when menus are opened
  const togglers = document.querySelectorAll(togglersSelector)
  Array.from(togglers).forEach(toggler => {
    toggler.addEventListener('change', () => {
      document.body.setAttribute('no-scroll', toggler.checked)
    })
  })

  // Hide menu--mobile when scrolling
  if (isMobile()) {
    const menuMobile = document.querySelector('.menu--mobile')
    const headroom = new Headroom(menuMobile)
    headroom.init()
  }
}
