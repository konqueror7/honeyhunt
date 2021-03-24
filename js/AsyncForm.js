import { Entity } from './Entity.js'
import { App } from './App.js'

class AsyncForm {
  constructor (element) {
    if (!element) {
      throw new Error('Элемент отсутствует в структуре DOM')
    }
    this.element = element
    this.registerEvents()
  }

  registerEvents () {
    const inputsAsync = this.element.getElementsByTagName('input')
    const inputs = this.element.getElementsByTagName('input')
    const commentArea = this.element.querySelector('textarea')
    const commentList = document.querySelector('.comments-list')
    commentArea.pattern = '[А-Яа-яA-Za-z0-9 -]{4,}'
    const idElement = this.element.getAttribute('id')
    const submitButton = this.element.querySelector(`button[form="${idElement}"]`)

    submitButton.addEventListener('click', function (event) {
      if (commentArea.value.length < 4) {
        commentArea.setCustomValidity('Введите не менее 4-х символов!')
      } else {
        commentArea.setCustomValidity('')
      }
    })

    for (let input of inputs) {
      if (input.getAttribute('name') === 'name') {
        input.pattern = '[А-Яа-яA-Za-z0-9 -]{4,}'
        submitButton.addEventListener('click', function (event) {
          if (input.validity.patternMismatch) {
            input.setCustomValidity('Введите имя не менее 4-х букв или цифр с пробелом!')
          } else {
            input.setCustomValidity('')
          }
        })
      }

      if (input.getAttribute('name') === 'email') {
        input.pattern = '[a-z0-9._%+\-]+@[a-z0-9\-]{1,}\.[a-z]{2,}$'
        submitButton.addEventListener('click', function (event) {
          if (input.validity.patternMismatch) {
            input.setCustomValidity('Введите адрес вида address@service.ru')
          } else {
            input.setCustomValidity('')
          }
        });
      }
    }

    this.element.addEventListener('submit', (event) => {
      event.preventDefault()
      const commentFormData = new FormData(this.element)
      Entity.createcomment(
        commentFormData,
        (err, response) => {
          if (response && response.success === true) {
            Entity.list(
              {},
              (err, response) => {
                if (response && response.success === true) {
                  App.getWidget('comments').renderComments(response.result)
                } else {
                  commentList.innerHTML = ''
                }
              }
            )
          } else {
            return undefined
          }
        }
      )
      this.element.reset()
    })
  }
}

export { AsyncForm }
