/// <reference path="../../../typings/main.d.ts" />

import * as assert from 'power-assert';

class sample {
    test() {
        describe('Array', function () {
            var ary = [1, 2, 3];
            describe('#indexOf()', function () {
                it('tsで書いた方', function (done) {
                    var expected = 1 + 2 + 3;
                    var max:any = ary.forEach(args => max + args);
                    assert.default(6 === expected);
                    done();
                });
            });
        });
    }
}

var s = new sample();
s.test();