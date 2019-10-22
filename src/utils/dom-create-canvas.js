export default (width, height, attributes = {}) => {
  const canvas = document.createElement('canvas')
  canvas.width = window.innerWidth
  canvas.height = 350
  canvas.style.width = canvas.width + 'px'
  canvas.style.height = canvas.height + 'px'

  Object.entries(attributes).forEach(([attribute, value]) => {
    canvas.setAttribute(attribute, value)
  })

  return canvas
}
