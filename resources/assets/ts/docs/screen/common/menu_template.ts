import {bootstrap, Component} from 'angular2/angular2';
@Component({
    selector: 'common_menu',
    directives: [CommonMenuComponent],
    templateUrl: '../../common/design/design_menu.html'
})
class CommonMenuComponent {
aaa= "ssss";
}
bootstrap(CommonMenuComponent);