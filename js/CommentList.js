import { Entity } from './Entity.js'

class CommentList {

  constructor (element) {
    if (!element) {
      throw new Error('Элемент отсутствует в структуре DOM')
    }
    this.element = element
    this.renderComments()
  }

  renderComments () {
    Entity.list(
      {},
      (err, response) => {
        if (response && response.success === true) {
          this.render(response.result)
        } else {
          this.element.innerHTML = ''
        }
      }
    )
  }

  render (results) {
    this.element.innerHTML = ''
    for (let key in results) {
      this.element.innerHTML += this.renderItem(results[key]);
    }
  }

  renderItem (item) {
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
}

export { CommentList }
