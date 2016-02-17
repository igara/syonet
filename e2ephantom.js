exports.config = {
  framework: 'mocha',
  mochaOpts: {
    ui: 'bdd',
    reporter: 'dot',
    timeout: 99999999
  },
  suites: {
    full: 'tests/**/*.js'
  },
  capabilities: {
    'browserName': 'phantomjs',
    'phantomjs.binary.path': './node_modules/.bin/phantomjs'
  },
  baseUrl: 'http://127.0.0.1:8000/'
};