// JavaScript implementation of www/plugins/FFPColorHelpers::computeContrast
export default (rgb, {
  light = 'rgb(255, 255, 255)',
  dark = 'rgb(0, 0, 0)',
  threshold = 127
} = {}) => (Math.round(((parseInt(rgb[0]) * 299) + (parseInt(rgb[1]) * 587) + (parseInt(rgb[2]) * 114)) / 1000) <= threshold)
  ? light
  : dark
