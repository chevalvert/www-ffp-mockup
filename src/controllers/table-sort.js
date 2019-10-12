import 'nodelist-foreach'
import indexOf from 'utils/dom-index-of'

export default ({
  table = document.querySelector('table'),
  sortableSelector = 'th[data-sortable]',
  containerSelector = 'tbody',
  compareFunction = function (rowA, rowB, direction, colIndex) {
    const a = rowA.children[colIndex].innerHTML
    const b = rowB.children[colIndex].innerHTML
    const sgn = direction === 'ASC' ? 1 : -1
    return a.toUpperCase() < b.toUpperCase() ? -sgn : sgn
  }
} = {}) => {
  if (!table) return

  let sortableCols = table.querySelectorAll(sortableSelector)
  if (sortableCols) sortableCols.forEach(col => col.addEventListener('click', sort))

  return {
    destroy: () => {
      sortableCols.forEach(col => col.removeEventListener('click', sort))
      sortableCols = undefined
    }
  }

  function sort () {
    const direction = flipDirection(this.getAttribute('data-sort'))
    sortableCols.forEach(col => col.removeAttribute('data-sort'))
    this.setAttribute('data-sort', direction)

    const container = table.querySelector(containerSelector)
    if (!container) return

    const colIndex = indexOf(this)
    const sortedRows = Array
      .from(container.children)
      .sort((a, b) => compareFunction(a, b, direction, colIndex))

    container.innerHTML = ''
    sortedRows.forEach(row => container.appendChild(row))
  }

  function flipDirection (dir = 'ASC') {
    return dir === 'ASC' ? 'DESC' : 'ASC'
  }
}
