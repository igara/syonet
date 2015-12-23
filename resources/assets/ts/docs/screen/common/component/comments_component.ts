import {Component, View} from 'angular2/core';
import {bootstrap}    from 'angular2/platform/browser'

@Component({
    selector: 'comments_content',
    template: `comments`
})
export class CommentsComponent {}
bootstrap(CommentsComponent);
