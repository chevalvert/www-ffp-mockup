/* global performance */

const captures = {}

export function capture (name, callback) {
  beginCapture(name)
  const result = callback()
  endCapture(name)
  return result
}

export function beginCapture (name) {
  if (window.env !== 'development') return
  captures[name] = performance.now()
}

export function endCapture (name, ...args) {
  if (!captures[name]) return

  const end = performance.now()
  console.warn(`[${name}] ${(end - captures[name]).toFixed(0)}ms`, ...args)

  delete captures[name]
}
