exports.config = {
  onPrepare: function () {
    browser.ignoreSynchronization = true;
  },
  framework: 'mocha',
  mochaOpts: {
    ui: 'bdd',
    reporter: 'dot',
    slow: 3000,
    enableTimeouts: false
  },
  specs: ['tests/**/*.js'],
  capabilities: {
    'browserName': 'phantomjs',
    'phantomjs.binary.path': 'node_modules/.bin/phantomjs',
    'phantomjs.ghostdriver.cli.args': ['--loglevel=DEBUG']
  },
  baseUrl: 'http://127.0.0.1:8000/'
};