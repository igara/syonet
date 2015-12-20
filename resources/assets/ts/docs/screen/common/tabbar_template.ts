import {Component, View} from 'angular2/core';
import {bootstrap} from 'angular2/bootstrap';
@Component({
    selector: 'tabbar_home',
    directives: [CommonTabbarComponent],
    templateUrl: '../../common/design/design_header.html'
})

class CommonTabbarComponent {
}
bootstrap(CommonTabbarComponent);
