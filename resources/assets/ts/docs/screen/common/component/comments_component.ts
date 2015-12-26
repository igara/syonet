import {Component, View} from 'angular2/core';
import {bootstrap}    from 'angular2/platform/browser'

@Component({
    selector: 'comments_content',
    template: `../../common/design/navigation/comments.html`
})
export class CommentsComponent {}
bootstrap(CommentsComponent);
