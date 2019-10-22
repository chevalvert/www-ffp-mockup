export default rgbString => /[0-9,\s]+/g.exec(rgbString)[0].split(',').map(v => +v)
