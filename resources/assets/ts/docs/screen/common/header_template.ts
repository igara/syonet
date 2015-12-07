import {bootstrap, Component} from 'angular2/angular2';
@Component({
    selector: 'common_header',
    directives: [CommonHeaderComponent],
    templateUrl: '../../common/design/design_header.html'
})
class CommonHeaderComponent {
}
bootstrap(CommonHeaderComponent);
