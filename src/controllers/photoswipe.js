import PhotoSwipe from 'photoswipe'
import PhotoSwipeUIDefault from 'photoswipe/dist/photoswipe-ui-default'

export default ({
  gallerySelector = '.gallery',
  imgSelector = 'img',
  pswpOptions = {
    bgOpacity: 0.95,
    history: false,
    galleryPIDs: false,
    allowPanToNext: false,

    captionEl: false,
    fullscreenEl: false,
    zoomEl: false,
    shareEl: false,
    counterEl: false,

    showHideOpacity: true,
    getThumbBoundsFn: false
  }
} = {}) => {
  const pswpEL = document.querySelector('.pswp')
  if (!pswpEL) return

  let pswp
  Array.from(document.querySelectorAll(gallerySelector)).forEach(container => {
    const items = Array.from(container.querySelectorAll(imgSelector)).map((el, index) => {
      el.classList.add('pswp-open')
      el.addEventListener('click', e => {
        e.preventDefault()
        pswp = new PhotoSwipe(pswpEL, PhotoSwipeUIDefault, items, Object.assign({ index }, pswpOptions))
        pswp.init()
      })

      return {
        title: el.getAttribute('alt'),
        src: el.parentNode.getAttribute('href'),
        w: el.getAttribute('width'),
        h: el.getAttribute('height'),
        pid: el.parentNode.getAttribute('href').split('/').pop()
      }
    })
  })

  return {
    destroy: () => {
      if (!pswp) return
      try {
        pswp.destroy()
      } catch (e) {} finally {
        pswp = undefined
      }
    }
  }
}
