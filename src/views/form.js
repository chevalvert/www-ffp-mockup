import 'nodelist-foreach'
import view from 'abstractions/barba-view'

export default view('form', {
  onEnterCompleted: refs => {
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
})
