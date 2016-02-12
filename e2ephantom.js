exports.config = {
  framework: 'mocha',
  mochaOpts: {
    ui: 'bdd',
    reporter: 'spec'
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