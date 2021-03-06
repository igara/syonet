var webpack = require("webpack");
module.exports = {
    plugins: [
        new webpack.optimize.UglifyJsPlugin({
            mangle:false
        })
    ],
    loaders: [
        { test: /\.svg$/, loader: 'url-loader?mimetype=image/svg+xml' },
        { test: /\.jpg$/, loader: "file-loader" },
        { test: /\.png$/, loader: "url-loader?mimetype=image/png" },
        { test: /\.css$/, loader: 'url-loader?mimetype=text/css' }
	]
};

