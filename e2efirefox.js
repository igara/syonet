exports.config = {
  seleniumAddress: 'http://127.0.0.1:4444/wd/hub',
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
    'browserName': 'firefox'
  },
  baseUrl: 'http://127.0.0.1:8000/'
};