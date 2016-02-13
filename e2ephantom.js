exports.config = {
  framework: 'mocha',
  mochaOpts: {
    ui: 'bdd',
    reporter: 'nyan'
  },
  specs: [
    'tests/**/*.js'
  ],
  capabilities: {
    'browserName': 'phantomjs',
    'phantomjs.binary.path': './node_modules/.bin/phantomjs'
  },
  baseUrl: 'http://localhost:8000/'
};