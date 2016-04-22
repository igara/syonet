/// <reference path="../../../../../../typings/main.d.ts" />
/// <reference path="../../../../../../typings/syonet/SyonetWork.d.ts" />

// webpackのloaderの機能でtitle.svgを呼び込む

import SuggesterTitleCtrl = require('../controllers/title');

/**
 * sugggester-titleというCustomElement
 */
app.component("sugggesterTitle", {
    template: `
    <style type="text/css">
        #titleSvg {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        #title-S {
            animation-name: title-S-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-S-animetion {
            0% {
                transform: translate(0px, 0px);
            } 
            25% {
                transform: translate(0px, -250px);
            }
            75% {
                transform: translate(0px, 250px);
            }
            100% {
                transform: translate(0px, 0px);
            }
        }

        #title-u {
            animation-name: title-u-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-u-animetion {
            0% {
                transform: translate(0px, 0px);
            } 
            25% {
                transform: translate(-250px, 0px);
            }
            75% {
                transform: translate(250px, 0px);
            }
            100% {
                transform: translate(0px, 0px);
            }
        }

        #title-g1 {
            animation-name: title-g1-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-g1-animetion {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        #title-g2 {
            animation-name: title-g2-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-g2-animetion {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(-360deg);
            }
        }

        #title-e1 {
            animation-name: title-e1-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-e1-animetion {
            0% {
                transform: scale(1, 1);
            }
            50% {
                transform: scale(2, 2);
            }
            100% {
                transform: scale(1, 1);
            }
        }

        #title-s {
            animation-name: title-s-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-s-animetion {
            0% {
                transform: translate(0px, 0px);
            } 
            25% {
                transform: translate(450px, 0px);
            }
            75% {
                transform: translate(-450px, 0px);
            }
            100% {
                transform: translate(0px, 0px);
            }
        }

        #title-t {
            animation-name: title-t-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-t-animetion {
            0% {
                transform: translate(0px, 0px);
            } 
            25% {
                transform: translate(0px, -250px);
            }
            75% {
                transform: translate(0px, 250px);
            }
            100% {
                transform: translate(0px, 0px);
            }
        }

        #title-e2 {
            animation-name: title-e2-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-e2-animetion {
            0% {
                transform: translate(0px, 0px);
            } 
            25% {
                transform: translate(450px, 0px);
            }
            75% {
                transform: translate(-450px, 0px);
            }
            100% {
                transform: translate(0px, 0px);
            }
        }

        #title-r {
            animation-name: title-r-animetion;
            animation-duration: 4s;
            animation-timing-function: ease;
            animation-iteration-count: infinite;
        }

        @keyframes title-r-animetion {
            0% {
                transform: translate(0px, 0px);
            } 
            25% {
                transform: translate(-800px, -250px);
            }
            75% {
                transform: translate(800px, 250px);
            }
            100% {
                transform: translate(0px, 0px);
            }
        }
    </style>
    <div ng-bind-html="$ctrl.titleSvg"></div>
    
    `,
    controller:SuggesterTitleCtrl.SuggesterTitleCtrl
});
