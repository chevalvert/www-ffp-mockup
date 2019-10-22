import 'nodelist-foreach'
import { generate, prng } from 'ffp-generate'
import createCanvas from 'utils/dom-create-canvas'

const LANDSCAPE_RENDERING_OPTIONS = Object.freeze({
  units: [8, 16],
  groundsLength: 30,
  percentOfStraightLines: 0.125,
  percentOfGradients: 0.5,
  percentOfSimplexGradients: 0.1,
  symbols: [
    'square',
    'square_offset',
    'vertical_line',
    'vertical_line_offset',
    'horizontal_line',
    'horizontal_line_offset',
    'diagonal',
    'diamond',
    'circle'
  ]
})

function buildLandscape (container) {
  const canvas = container.landscape
    ? container.landscape.canvas
    : createCanvas(window.innerWidth, 450, { 'data-no-fade-in': true })

  // NOTE: appending the canvas to its container before rendering to avoid
  // layout shift
  if (!container.landscape) container.appendChild(canvas)
  else {
    canvas.width = window.innerWidth
    canvas.style.width = canvas.width + 'px'
  }

  const backgroundColor = container.style['backgroundColor'] || 'rgb(255, 255, 255)'
  const options = Object.assign({}, LANDSCAPE_RENDERING_OPTIONS, {
    width: canvas.width,
    height: canvas.height,
    swatch: window.FFP_SWATCH_SHIFTED.filter(c => c !== backgroundColor),
    backgroundColor,
    canvas
  })

  // NOTE: landscape.generate is quite performance heavy, but cannot (yet) be
  // delegated to a worker: using requestIdleCallback in the meantime, to avoid
  // blocking the main thread
  window.requestIdleCallback(() => {
    prng.reset()
    container.landscape = generate(options).render()
    canvas.setAttribute('data-rendered', true)
  })
}

export default {
  build,
  update
}

export function build () {
  prng.seed = Date.now()
  update()
}

export function update () {
  document.querySelectorAll('.js-landscape').forEach(buildLandscape)
}
