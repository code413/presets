window.app = {
  init () {
    window.Popper = require('popper.js').default
    window.$ = window.jQuery = require('jquery')
    require('bootstrap')
    require('./components/csrf')
  }
}

app.init()

