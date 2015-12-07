import {bootstrap, Component} from 'angular2/angular2';
@Component({
    selector: 'common_footer',
    directives: [CommonFooterComponent],
    templateUrl: '../../common/design/design_footer.html'
})
class CommonFooterComponent {
aaa= "ssss";
}
bootstrap(CommonFooterComponent);