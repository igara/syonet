<li class="list__header">
    @{{$ctrl.getJson['results_start']}}〜@{{$ctrl.getJson['results_returned']}}件 (該当件数：@{{$ctrl.getJson['results_available']}}件)
</li>
<ons-list>
    <div ng-repeat="connpassCasset in $ctrl.getJson['events']" class="center list__item__center list__item--inset__center">
        <ons-row>
            <ons-col>
                <div class="name">
                    <a href="@{{connpassCasset.event_url}}">
                        @{{connpassCasset.title}}
                    </a>
                </div>
                <div class="day">
                     <ul>
                         <li>開始日時：@{{$ctrl.getFormatedData(connpassCasset.started_at)}}</li>
                         <li>終了日時：@{{$ctrl.getFormatedData(connpassCasset.ended_at)}}</li>
                     </ul>
                </div>
                <div class="join">
                     定員：@{{connpassCasset.accepted}}／@{{connpassCasset.limit}}（補欠：@{{connpassCasset.waiting}}）
                </div>
                <div class="location">
                    <i class="fa fa-map-marker"></i> @{{connpassCasset.address}}
                </div>
                <div class="desc">
                    @{{connpassCasset.place}}
                </div>
                <div class="hash">
                    ハッシュタグ：@{{connpassCasset.hash_tag}}
                </div>
            </ons-col>
        </ons-row>
    </div>
</ons-list>