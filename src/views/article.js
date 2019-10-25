import 'nodelist-foreach'
import view from 'abstractions/barba-view'

import photoswipe from 'controllers/photoswipe'

export default view('article', {
  onEnterCompleted: refs => {
    refs.pswp = photoswipe({
      gallerySelector: '.article__gallery'
    })
  }
})
