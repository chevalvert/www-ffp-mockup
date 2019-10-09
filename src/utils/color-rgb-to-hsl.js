// JavaScript implementation of www/plugins/FFPColorHelpers::rgbToHsl
export default rgb => {
  rgb = rgb.map(v => v / 255)
  const max = Math.max(...rgb)
  const min = Math.min(...rgb)

  let h, s
  const l = (max + min) / 2
  const d = max - min

  if (d === 0) {
    // Achromatic
    h = s = 0
  } else {
    s = d / (1 - Math.abs(2 * l - 1))
    switch (max) {
      case rgb[0]:
        h = 60 * (((rgb[1] - rgb[2]) / d) % 6)
        if (rgb[2] > rgb[1]) h += 360
        break
      case rgb[1]:
        h = 60 * ((rgb[2] - rgb[0]) / d + 2)
        break
      case rgb[2]:
        h = 60 * ((rgb[0] - rgb[1]) / d + 4)
        break
    }
  }
  return [Math.round(h), Math.round(s * 100) / 100, Math.round(l * 100) / 100]
}
