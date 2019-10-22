import { TaskTimer } from 'tasktimer'
import contrast from 'utils/color-contrast'
import RGB from 'utils/color-hsl-to-rgb'
import HSL from 'utils/color-rgb-to-hsl'
import parseRGBString from 'utils/parse-rgb-string'

const SHIFT_DURATION = 1000
const SHIFT_INCREMENT = 1

const timer = new TaskTimer(SHIFT_DURATION)
let paintedElements = document.querySelectorAll('[data-color]')

timer.add(task => {
  paintedElements.forEach(el => {
    el.rgb = el.rgb || el.getAttribute('data-color').split(',').map(v => +v)

    const { rgbString, contrasted } = computeHueShift(el.rgb)
    el.style['background-color'] = rgbString
    el.style['color'] = contrasted
  })
})

export function computeHueShift (rgb, shiftSteps = timer.tickCount) {
  if (typeof rgb === 'string') rgb = parseRGBString(rgb)

  const hsl = HSL(rgb)
  hsl[0] = (hsl[0] + (SHIFT_INCREMENT * shiftSteps)) % 360

  const drifted = RGB(hsl)
  const contrasted = contrast(drifted)

  return { drifted, contrasted, rgbString: `rgb(${drifted})` }
}

export default {
  get timer () { return timer },
  rebuild: () => {
    paintedElements = document.querySelectorAll('[data-color]')
  }
}
