import {Component, View} from 'angular2/core';
import {bootstrap} from 'angular2/bootstrap';

@Component({
    selector: 'common_menu',
    directives: [HomeComponent],
    templateUrl: '../../common/design/navigation/design_menu.html'
})
class HomeComponent {
aaa = "ssss";
}
bootstrap(HomeComponent);