'use strict'
import { Entity } from './Entity.js'

const commentForm = document.forms.comment_form
const commentList = document.querySelector('.comments-list')
const inputs = document.getElementsByTagName('input')
const commentArea = document.querySelector('textarea')
const submitButton = document.querySelector('.comment-submit')

commentArea.pattern = '[А-Яа-яA-Za-z0-9 -]{4,}'
submitButton.addEventListener('click', function (event) {
  console.log(commentArea.validationMessage);
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

Entity.list(
  {},
  (err, response) => {
    if (response && response.success === true) {
      render(response.result)
    } else {
      commentList.innerHTML = ''
    }
  }
)

commentForm.addEventListener('submit', (event) => {
  event.preventDefault()
  const commentFormData = new FormData(commentForm)
  Entity.createcomment(
    commentFormData,
    (err, response) => {
      if (response && response.success === true) {
        Entity.list(
          {},
          (err, response) => {
            if (response && response.success === true) {
              render(response.result)
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
  commentForm.reset()
})

function render (results) {
  commentList.innerHTML = ''
  for (let key in results) {
    commentList.innerHTML += renderItem(results[key]);
  }
}

function renderItem (item) {
  let {
    users_name,
    users_email,
    comment
  } = item
  return `
  <div class="comments-item">
    <div class="comments-item-author d-flex align-items-center justify-content-center">
      ${users_name}
    </div>
    <div class="comments-item-email">
      ${users_email}
    </div>
    <div class="comments-item-text">
      ${comment}
    </div>
  </div>
  `
}
