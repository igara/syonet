exports.config = {
  onPrepare: function () {
    browser.ignoreSynchronization = true;
  },
  seleniumAddress: 'http://localhost:4444/wd/hub',
  framework: 'mocha',
  mochaOpts: {
    ui: 'bdd',
    reporter: 'dot',
    slow: 3000,
    enableTimeouts: false
  },
  specs: ['tests/**/*.js'],
  capabilities: {
    'browserName': 'chrome'
  },
  baseUrl: 'http://127.0.0.1:8000/'
};