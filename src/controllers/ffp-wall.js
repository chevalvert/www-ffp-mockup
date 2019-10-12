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
