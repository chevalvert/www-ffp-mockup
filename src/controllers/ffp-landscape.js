import 'nodelist-foreach'
import 'requestidlecallback-polyfill'
import { debounce } from 'tiny-throttle'
import { generate, prng, erode } from 'ffp-generate'
import createCanvas from 'utils/dom-create-canvas'

const HEIGHT = 450

const RENDERING_OPTIONS = Object.freeze({
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

const ERODING_OPTIONS = Object.freeze({
  autoplay: false,
  easing: 0.01,
  noUpdateThreshold: 1,
  columnWidth: RENDERING_OPTIONS[0],
  snapToGrid: RENDERING_OPTIONS[0],
  round: false,
  breaks: 2, // TODO: based on window.innerWidth ?
  scaleFactor: 0.125
})

let containers

function hydrate (container) {
  const canvas = container.landscape
    ? container.landscape.canvas
    : createCanvas(window.innerWidth, HEIGHT, { 'data-no-fade-in': true })

  // NOTE: appending the canvas to its container before rendering to avoid
  // layout shift
  if (!container.landscape) container.appendChild(canvas)
  else canvas.style.width = canvas.width + 'px'

  const backgroundColor = container.style['backgroundColor'] || 'rgb(255, 255, 255)'
  const options = Object.assign({}, RENDERING_OPTIONS, {
    width: window.innerWidth,
    height: canvas.height,
    swatch: window.FFP_SWATCH_SHIFTED.filter(c => c !== backgroundColor),
    backgroundColor,
    canvas
  })

  // NOTE: landscape.generate is quite performance heavy, but cannot (yet) be
  // delegated to a worker: using requestIdleCallback in the meantime, to avoid
  // blocking the main thread
  // TODO: add web worker support to `ffp-generate`
  window.requestIdleCallback(() => {
    container.landscape = generate(options).render()
    canvas.setAttribute('data-rendered', true)

    if (container.eroder) container.eroder.destroy()
    container.eroder = erode(container.landscape, Object.assign({}, ERODING_OPTIONS, {
      amplitude: [
        -(container.landscape.aabb.ymin) / 2,
        container.landscape.aabb.ymax / 4
      ]
    }))
  })

  canvas.addEventListener('click', () => {
    container.eroder.rebuild()
    container.eroder.play()
  })
}

function destroy (container) {
  if (container && container.eroder) container.eroder.destroy()
}

// NOTE: to improve performances, landscapes can be updated only when window
// width changes
let pwidth = window.innerWidth
window.addEventListener('resize', debounce(() => {
  if (window.innerWidth === pwidth) return

  update()
  pwidth = window.innerWidth
}, 100))

function update () {
  prng.reset()
  containers.forEach(hydrate)
}

export default {
  update,

  // TODO: cache containers during barba navigation instead of destroying at each page change
  build: () => {
    prng.seed = window.location.hash.substring(1) || Date.now()
    containers = document.querySelectorAll('.js-landscape')
    update()
  },

  destroy: () => {
    containers.forEach(destroy)
  }
}
