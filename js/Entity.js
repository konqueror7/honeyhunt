import { createRequest } from './createRequest.js'

class Entity {

  static createcomment (data = {}, callback = f => f) {
    const xhr = createRequest({
      url: '../createcomment.php',
      data: data,
      callback: callback
    })
    return xhr
  }

  static list (data = {}, callback = f => f) {
    const xhr = createRequest({
      url: '../list.php',
      data: data,
      callback: callback
    })
    return xhr
  }

}

export { Entity }
