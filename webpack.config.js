var webpack = require("webpack");
module.exports = {
    plugins: [
        new webpack.optimize.UglifyJsPlugin({
            mangle:false
        })
    ],
    loaders: [
        { test: /\.svg$/, loader: 'url-loader?mimetype=image/svg+xml' }
	]
};

