<span ng-repeat="count in $ctrl.connpassService.getCountArray($ctrl.getJson['results_available'])" style="display:inline;">
    <a href="/contents/?contents=connpass&year=@{{$ctrl.connpassApiParams.year}}&month=@{{$ctrl.connpassApiParams.month}}&keyword=@{{$ctrl.connpassApiParams.keyword}}&page=@{{(count + 1) / $ctrl.connpassApiParams.count}}" ng-if="(count + 1) % $ctrl.connpassApiParams.count == 0">@{{(count + 1) / $ctrl.connpassApiParams.count}} </a>
    <a href="/contents/?contents=connpass&year=@{{$ctrl.connpassApiParams.year}}&month=@{{$ctrl.connpassApiParams.month}}&keyword=@{{$ctrl.connpassApiParams.keyword}}&page=@{{$ctrl.Math.ceil($ctrl.getJson['results_available'] / $ctrl.connpassApiParams.count)}}" ng-if="$ctrl.getJson['results_available'] > $ctrl.connpassApiParams.count && count + 1 == $ctrl.getJson['results_available'] && $ctrl.getJson['results_available'] % $ctrl.connpassApiParams.count != 0">@{{$ctrl.Math.ceil($ctrl.getJson['results_available'] / $ctrl.connpassApiParams.count)}}</a>
</span>
<ul class="list">
    <li class="list__header" ng-if="$ctrl.getJson['results_returned']">
        @{{$ctrl.getJson['results_start']}}〜@{{$ctrl.getJson['results_start'] -1 + $ctrl.getJson['results_returned']}}件 (該当件数：@{{$ctrl.getJson['results_available']}}件)
    </li>
    <li class="list__item" ng-repeat="connpassCasset in $ctrl.getJson['events']">
        <div class="list__item__center">
            <ons-row>
                <ons-col>
                    <div class="name">
                        <a href="@{{connpassCasset.event_url}}">
                            @{{connpassCasset.title}}
                        </a>
                    </div>
                    <div class="day">
                        <ul>
                            <li>開始日時：@{{$ctrl.connpassService.getFormatedDate(connpassCasset.started_at)}}</li>
                            <li>終了日時：@{{$ctrl.connpassService.getFormatedDate(connpassCasset.ended_at)}}</li>
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
    </li>
</ul>