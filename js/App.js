import { AsyncForm } from './AsyncForm.js'
import { CommentList } from './CommentList.js'

class App {

  static init() {
    this.element = document.querySelector('main')
    this.initForms()
    this.initWidgets()
  }

  static initForms () {
    this.form = {
      createcomment: new AsyncForm(this.element.querySelector('#add-comment-form'))
    }
  }

  static initWidgets () {
    this.widgets = {
      comments: new CommentList(this.element.querySelector('.comments-list'))
    }
  }

  static getWidget (widgetName) {
    return this.widgets[widgetName]
  }
}

export { App }
