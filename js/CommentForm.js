'use strict'
import { Entity } from './Entity.js'

class CommentForm {

  constructor( element ) {
    if (!element) {
      throw new Error('Элемент не существует');
    }
    this.element = element;
    this.registerEvents();
  }

}

export { CommentForm }
