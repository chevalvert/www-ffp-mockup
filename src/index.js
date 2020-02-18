import 'nodelist-foreach'

import fadeOnScroll from 'controllers/fade-on-scroll'
import FFPLandscape from 'controllers/ffp-landscape'
import lazyload from 'controllers/lazyload'
import menu from 'components/menu'
import photoswipe from 'controllers/photoswipe'
import sortTable from 'controllers/table-sort'

// Global templates
menu()
lazyload()
fadeOnScroll()
FFPLandscape.build()

// Article templates
photoswipe({ gallerySelector: '.article__gallery' })

// Form templates
{
  const inputFiles = document.querySelectorAll('.better-input-file')
  inputFiles.forEach(label => {
    const id = label.getAttribute('for')
    const input = document.getElementById(id)
    input.addEventListener('change', e => {
      const filenames = Array.from(input.files).map(f => f.name)
      label.setAttribute('data-files', filenames.join('\r\n'))
    })
  })
}

// Table templates
{
  sortTable()

  const form = document.querySelector('form')
  const resetButton = form && form.querySelector('button[type="reset"]')
  resetButton && resetButton.addEventListener('click', e => {
    e.preventDefault()
    const fields = form.querySelectorAll('input, textarea, select, checkbox, radio')
    fields.forEach(field => { field.value = '' })
    form.submit()
  })
}
