// JavaScript implementation of www/plugins/FFPColorHelpers::hslToRgb
export default hsl => {
  let r, g, b

  const c = (1 - Math.abs(2 * hsl[2] - 1)) * hsl[1]
  const x = c * (1 - Math.abs(((hsl[0] / 60) % 2) - 1))
  const m = hsl[2] - (c / 2)
  if (hsl[0] < 60) {
    r = c
    g = x
    b = 0
  } else if (hsl[0] < 120) {
    r = x
    g = c
    b = 0
  } else if (hsl[0] < 180) {
    r = 0
    g = c
    b = x
  } else if (hsl[0] < 240) {
    r = 0
    g = x
    b = c
  } else if (hsl[0] < 300) {
    r = x
    g = 0
    b = c
  } else {
    r = c
    g = 0
    b = x
  }
  r = (r + m) * 255
  g = (g + m) * 255
  b = (b + m) * 255

  return [Math.floor(r), Math.floor(g), Math.floor(b)]
}
