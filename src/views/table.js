import view from 'abstractions/barba-view'
import sortTable from 'controllers/table-sort'

export default view('table', {
  willMount: refs => {
    refs.sortTable = sortTable()
  }
})
