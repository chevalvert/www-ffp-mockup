import 'nodelist-foreach'
import contrast from 'utils/color-contrast'
import RGB from 'utils/color-hsl-to-rgb'
import HSL from 'utils/color-rgb-to-hsl'

// WIP: add a timer based on FFP::paint to update color every minutes without
// using CSS hue-rotate filter
const paintedElements = document.querySelectorAll('[data-color]')
const SHIFT_DURATION = 1000
const SHIFT_INCREMENT = 1
const refreshFactor = 1
window.setInterval(() => {
  window.requestAnimationFrame(() => {
    paintedElements.forEach(el => {
      el.hsl = el.hsl || HSL(el.getAttribute('data-color').split(',').map(v => +v))
      el.hsl[0] = (el.hsl[0] + (SHIFT_INCREMENT * refreshFactor)) % 360

      el.style['background-color'] = `hsl(${el.hsl[0]}, ${el.hsl[1] * 100}%, ${el.hsl[2] * 100}%)`
      el.style['color'] = contrast(RGB(el.hsl))
    })
  })
}, (SHIFT_DURATION * refreshFactor))

// TODO
// import { generate, prng, swatches } from 'ffp-generate/dist/ffp-generate'
// import { capture } from 'utils/dev-performance'

// prng.seed = 3
// const swatch = prng.randomOf(Object.values(swatches))
// const canvas = document.createElement('canvas')

// const options = {
//   units: [4, 8, 16],
//   width: window.innerWidth,
//   height: 300,
//   groundsLength: 10,

//   percentOfStraightLines: 0.125,
//   percentOfGradients: 0.5,
//   percentOfSimplexGradients: 0.1,

//   swatch,
//   backgroundColor: prng.randomOf(swatch),

//   symbols: [
//     // 'debug',
//     // 'empty',
//     'square',
//     'square_offset',
//     'vertical_line',
//     'vertical_line_offset',
//     'horizontal_line',
//     'horizontal_line_offset',
//     'diagonal',
//     'diamond',
//     'circle'
//     // 'ffp'
//   ],
//   canvas
// }

// capture('landscape', () => {
//   const landscape = capture('landscape.generation', () => generate(options))
//   capture('landscape.rendering', landscape.render.bind(landscape))
//   capture('landscape.mounting', () => landscape.mount(document.querySelector('main')))
// })
