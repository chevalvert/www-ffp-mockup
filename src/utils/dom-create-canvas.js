export default (width, height, attributes = {}) => {
  const canvas = document.createElement('canvas')
  canvas.width = width
  canvas.height = height
  canvas.style.width = width + 'px'
  canvas.style.height = height + 'px'

  Object.entries(attributes).forEach(([attribute, value]) => {
    canvas.setAttribute(attribute, value)
  })

  return canvas
}
