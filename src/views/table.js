import 'nodelist-foreach'
import view from 'abstractions/barba-view'
import sortTable from 'controllers/table-sort'

export default view('table', {
  onEnterCompleted: refs => {
    refs.sortTable = sortTable()

    const form = document.querySelector('form')
    const resetButton = form.querySelector('button[type="reset"]')
    if (!resetButton) return
    resetButton.addEventListener('click', e => {
      e.preventDefault()
      const fields = form.querySelectorAll('input, textarea, select, checkbox, radio')
      fields.forEach(field => { field.value = '' })
      form.submit()
    })
  }
})
