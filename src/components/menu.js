import 'nodelist-foreach'

const menu = document.querySelector('.menu')
const items = menu.querySelectorAll('.menu__link')
const regionsMenuToggler = document.getElementById('toggleRegionsMenu')

export default {
  setActiveLink: href => {
    href = href.replace(/^\/|\/$/g, '')

    items.forEach(item => {
      if (!item.href) {
        const link = item.querySelector('a')
        item.href = link.getAttribute('href')
      }

      if (item.href === href) item.classList.add('is-active')
      else item.classList.remove('is-active')
    })
  },

  close: () => {
    regionsMenuToggler.checked = false
  }
}
