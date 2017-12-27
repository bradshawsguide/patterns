import FontFaceObserver from 'fontfaceobserver';

export default function () {
  const docEl = document.documentElement;

  // Feature detect
  if (!('querySelector' in document) || !('addEventListener' in window) || !docEl.classList) {
    return;
  }

  // Setup
  const storageId = 'fonts-loaded';
  const classLoaded = 'has-fonts';
  const fonts = [
    (new FontFaceObserver('Scotch Text', {
      weight: 'normal',
      style: 'normal'
    })).load(),
    (new FontFaceObserver('Scotch Text', {
      weight: 'normal',
      style: 'italic'
    })).load(),
    (new FontFaceObserver('Trocchi', {
      weight: 'bold',
      style: 'normal'
    })).load(),
    (new FontFaceObserver('League Gothic', {
      weight: 'bold',
      style: 'normal'
    })).load()
  ];

  // Events
  function eventFontsLoaded() {
    docEl.classList.add(classLoaded);
    sessionStorage[storageId] = true;
  }

  // Init
  function init() {
    Promise.all(fonts).then(eventFontsLoaded).catch(err => {
      console.error(err);
    });
  }

  init();
}
