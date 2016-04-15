/// <reference path="../../../../../typings/main.d.ts" />
/// <reference path="../../../../../node_modules/angular2/typings/browser.d.ts"/>

import {bootstrap}    from 'angular2/platform/browser';
import {Component} from 'angular2/core';

@Component({
  selector: 'suggester',
  providers: [],
  template: `
    <div>
      <h2>Hello {{name}}</h2>

    </div>
  `,
  directives: []
})
export class SuggesterComponent {
    name:string;
    constructor() {
        this.name = "aaa";
    }
}
bootstrap(SuggesterComponent);