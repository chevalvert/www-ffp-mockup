import view from 'abstractions/barba-view'
import sortTable from 'controllers/table-sort'

export default view('table', {
  onEnterCompleted: refs => {
    refs.sortTable = sortTable()
  }
})
