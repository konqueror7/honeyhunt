'use strict'
import { App } from './App.js'
import { Entity } from './Entity.js'
import { AsyncForm } from './AsyncForm.js'

App.init()

// const commentForm = document.forms.comment_form
// const asynchronousForm = new AsyncForm(commentForm)
// const commentList = document.querySelector('.comments-list')

// Entity.list(
//   {},
//   (err, response) => {
//     if (response && response.success === true) {
//       App.render(response.result)
//     } else {
//       commentList.innerHTML = ''
//     }
//   }
// )

// commentForm.addEventListener('submit', (event) => {
//   event.preventDefault()
//   const commentFormData = new FormData(commentForm)
//   Entity.createcomment(
//     commentFormData,
//     (err, response) => {
//       if (response && response.success === true) {
//         Entity.list(
//           {},
//           (err, response) => {
//             if (response && response.success === true) {
//               render(response.result)
//             } else {
//               commentList.innerHTML = ''
//             }
//           }
//         )
//       } else {
//         return undefined
//       }
//     }
//   )
//   commentForm.reset()
// })

// function render (results) {
//   commentList.innerHTML = ''
//   for (let key in results) {
//     commentList.innerHTML += renderItem(results[key]);
//   }
// }
//
// function renderItem (item) {
//   let {
//     users_name,
//     users_email,
//     comment
//   } = item
//   return `
//   <div class="comments-item">
//     <div class="comments-item-author d-flex align-items-center justify-content-center">
//       ${users_name}
//     </div>
//     <div class="comments-item-email">
//       ${users_email}
//     </div>
//     <div class="comments-item-text">
//       ${comment}
//     </div>
//   </div>
//   `
// }
